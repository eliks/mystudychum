<?php 

class ForumController extends BaseController {
	//public $restful = true;
	
	public function getIndex()
    {
        // get all categories
        $categories = Category::all();

        //load the view and pass the categories
        return View::make('Forum.index')->with('categories', $categories);
    }

    public function getCreate()
    {
        return View::make('Forum.create');
    }

    public function getDiscussions($id){
        return View::make('Forum.discussions');
    }

    public function postDiscussions(){

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
	    		$category->name = $category_name;
	    		$category->save();

	    		$category_id = $category->id;
    		}

    		$topic = new Topic;
    		$topic->subject = Input::get('topic');
    		$topic->category_id = $category_id;
    		$topic->user_id = 1;
    		$topic->save();

    		$discussion = array(
    			'category' => $category_name, 
    			'subject' => $topic->subject,
    			'user' => User::find($topic->user_id)->first_name,
    			'time' => $topic->created_at,
    			'topic_id' => $topic->id,
    			'posts'=> Post::find($topic->id));

				return View::make('Forum.discussions', $discussion);
    	} else {
    		//validation has failed, display error message
    		return Redirect::to('forum/create')->with('message', 'The following error occured')->withErrors($validator)->withInput();
    	}
    }

    

    public function postContribute(){

		$rules = array('contribution' => 'required');

		$validator = Validator::make(Input::all(), $rules);
		if ($validator->passes()) {
			// put stuff in database
			$post = new Post;
			$post->topic_id = Input::get('topic_id');
			$post->user_id = 1;
			$post->content = Input::get('contribution');
			$post->save();

            //return $post;
			return Redirect::to('forum/discussions');
		} else {
			// display error message
			return Redirect::to('forum/discussions')->with('message', 'The following error occured')->withErrors($validator)->withInput();
		}
	}

}
