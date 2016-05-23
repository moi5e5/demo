<?php

class EstadoController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//return 'Hello, API';
	    $states = Estado::all();	 
		return Response::json($states->toArray(), 200);	
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
	    $state = Estado::where('id', $id)
	            ->take(1)
	            ->get();
	 
	    return Response::json($state->toArray(), 200);	
	}
	
}
