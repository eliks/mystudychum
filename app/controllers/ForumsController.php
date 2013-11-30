<?php
	class ForumsController extends BaseController{

		// show all categories
		public function getIndex(){
			// get all categories
	        $categories = Category::all();

	        // trying to get the number of topics associated with a category
	        $array = array();
	        foreach ($categories as $key => $value) {
	        	$topics = Topic::where('category_id', $value->id)->get();
	        	$array[] = array('name' => $value->name, 'id' => $value->id, 'topics' => count($topics));
	        }

	        //load the view and pass the categories
	        return View::make('Forum.index')->with('categories', $array);

		}

		// display form for creatng a topic
		public function getCreate(){
			return View::make('Forum.create');
		}

		// save a topic and it's category
		public function postTopicsave(){
			$validator = Validator::make(Input::all(), Category::$rules);

	    	if($validator->passes()){
	    		// save in database
	    		$category_name = Input::get('name');

	    		$category_exists = Category::where('name', $category_name)->get()->first();
	    		$category_id;


	    		if (count($category_exists)>0) {
	    			$category_id = $category_exists->id;
	    		} else {
	    			$category = new Category;
		    		$category->name = ucfirst($category_name);
		    		$category->save();

		    		$category_id = $category->id;
	    		}	

	    		$user = Auth::user();

	    		$topic = new Topic;
	    		$topic->subject = Input::get('topic');
	    		$topic->category_id = $category_id;
	    		$topic->user_id = $user->id;
	    		$topic->save();

    			Session::flash('message', 'Successfully created category!');
    			return Redirect::to('forums/topic/'.$topic->id);

    			//return Redirect::action('ForumsController@getTopic', array('id' => $topic->id));
	    	} else {
	    		//validation has failed, db2_field_display_size(stmt, column)y error message
	    		return Redirect::to('forums/create')->with('message', 'The following error occured')->withErrors($validator)->withInput();
	    	}
		}

		// save a comment
		public function postComment(){
			$rules = array('contribution' => 'required');

			$topic_id = Input::get('topic_id');

			$validator = Validator::make(Input::all(), $rules);

			$user = Auth::user();

			if ($validator->passes()) {
				$post = new Post;
				$post->content = Input::get('contribution');
				$post->topic_id = $topic_id;
				$post->user_id = $user->id;
				$post->save();

				// sending a mail to auther of topic when a contribution is given
				$topic = Topic::find($topic_id);
				$author_id = $topic->user_id;
				$author = User::find($author_id);

				$contributor = User::find($post->user_id);

				$user = array(
					'email' => $author->email, 
					'name' => $author->first_name . " " . $author->last_name,
					'contributor' => $contributor->first_name . " " . $contributor->last_name
					);

				$data = array('detail' => 'The link will come here.', 
					'name' => $user['name']);

				Mail::send('emails.welcome', $data, function($message) use ($user)
				{	
				    $message->to($user['email'], $user['name'])->subject($user['contributor'].' has added a comment to your discussion.');
				});
				
				return Redirect::to('forums/topic/'.$topic_id);
			} else {
				return Redirect::to('forums/topic/'.$topic_id)->with('message', 'The following error occured')->withErrors($validator)->withInput();
			}

		}

		// show a particular category
		public function getCategory($id){
			$category = Category::find($id);

			$topics = Topic::where('category_id', $id)->get();
			$array = array();
			foreach ($topics as $key => $value) {
				$posts = Post::where('topic_id', $value->id)->get();
				$user = User::find($value->user_id);
	        	$array[] = array(
	        		'category' => $category->name, 
	        		'subject' => $value->subject, 
	        		'id' => $value->id, 
	        		'date' => $value->created_at, 
	        		'posts' => count($posts), 
	        		'user' => $user->first_name . " " . $user->last_name);
			}

			return View::make('Forum.category')->with('topics', $array);
		}

		// show a particular topic with it's comments
		public function getTopic($id){
			$topic = Topic::find($id);
			$category_name = Category::find($topic->category_id)->name;
			$user = User::find($topic->user_id);

			$discussion = array(
	    			'category' => $category_name, 
	    			'subject' => $topic->subject,
	    			'user' => $user->first_name . " " . $user->last_name,
	    			'time' => $topic->created_at,
	    			'topic_id' => $topic->id,
	    			'posts'=> Post::where('topic_id', $id)->get());

			return View::make('Forum.discussions', $discussion);
		}
	}
?>