<?php
class PropiedadController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
	    $properties = Propiedad::all();	 
		return Response::json($properties->toArray(), 200);			
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	/*public function getSearch($stateid = 0, $term)
	{
	    $properties = Propiedad::search($stateid, $term);	 
	    $array = (array)$properties;
		return Response::json($array, 200);			
	}*/	


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return false;
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		return false;
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int     $id
	 * @param  string  $destacadas
	 * @return Response
	 */
	public function show($id, $destacadas = null)
	{
	    $state = Propiedad::where('id', $id)
	            ->take(1)
	            ->get();
	 
	    return Response::json($state->toArray(), 200);	
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return false;
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return false;
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

	public function getSearch($page, $type, $operation, $state, $city = null, $colony = null)
	{
        $stateid  = Sepomex::getStateBySlug($state)->state_id;
        $cityid   = ($city   == null) ? 0 : Sepomex::getCityBySlug($city)->city_id;
        $colonyid = ($colony == null) ? 0 : Sepomex::getColonyBySlug($colony)->id;        

		$properties = Propiedad::results($page, $type, $operation, $stateid, $cityid, $colonyid, true); //here comes the sun
 		return Response::json($properties, 200);	 
	}
}
