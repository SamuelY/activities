<?php

class CommentsController extends \BaseController {
/*
    public function __construct()
    {
        $this->beforeFilter('csrf', ['on' => 'post']);
    }
*/
	/**
	 * Store a newly created resource in storage.
	 * POST /comments
	 *
	 * @return Response
	 */
	public function store()
	{
        $inputs = Input::all();
        
        $validation = Validator::make($inputs, Comment::$rules);
        
        if ($validation->fails())
        {
            return Redirect::route('beside.show', $inputs['beside_id'])->withErrors($validation)->withInput();
        }
        
        Comment::create($inputs);

		return Redirect::route('beside.show', $inputs['beside_id'])->with('message', '回覆文章成功');
	}

}