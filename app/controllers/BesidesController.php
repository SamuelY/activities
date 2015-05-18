<?php

class BesidesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('beside.index');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$beside = new Beside;
        $beside->event_name = Input::get('event_name');
		$beside->event_introduce = Input::get('event_introduce');
		$beside->organization = Input::get('organization');  
		$fileExtension = Input::file('uploadfile')->guessExtension();
		$fileName = Input::file('uploadfile')->getFileName();
		$beside->image_path = '/upload/'.$fileName.'.'.$fileExtension;  
		Input::file('uploadfile')->move(public_path().'/upload/',$beside->image_path);
		$beside->save();
		return View::make('beside.message',  ['message'=>'建立活動成功']);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function upload()
	{
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $beside = Beside::find($id);
		$beside->browse = $beside->browse + 1;
		$beside->save();
//		$besides = Beside::all();
        $data = compact('beside');
        
		return View::make('detail.index',  $data);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
