<?php

class PostController extends BaseController {

	/**
	 * Send back all comments as JSON
	 *
	 * @return Response
	 */
	public function index()
	{
		// $post_odd= Post::whereRaw('id % 2 = 0')->get()->toArray();
		// $post_even= Post::whereRaw('id % 2 = 1')->get()->toArray();

		// return Response::json(array('postOdd'=>$post_odd,'postEven'=>$post_even));

		$posts = Post::orderBy('id', 'DESC')->get();
		// // // print_r($posts); exit;
		return Response::json($posts);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$role_id = Auth::user()->role_id;
        $user_id = Auth::user()->id;

		Post::create(array(
			'title' => 'Test Title',
			'content' => Input::get('content'),
			'user_id' => $user_id
		));

		return Response::json(array('success' => true));
	}

	/**
	 * Store a newly updated resource in storage.
	 *
	 * @return Response
	 */
	public function update($id)
	{

		return Response::json(array('success' => true));
	}

	/**
	 * Return the specified resource using JSON
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return Response::json(Post::find($id));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Post::destroy($id);

		return Response::json(array('success' => true));
	}

}