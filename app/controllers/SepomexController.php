<?php

class SepomexController extends BaseController 
{
	public function getSearch($stateslug = '', $term)
	{
	    $properties = Sepomex::search($stateslug, $term);	 
	    $array = (array)$properties;
		return Response::json($array, 200);			
	}		  
}
