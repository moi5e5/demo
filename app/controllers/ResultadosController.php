<?php

class ResultadosController extends BaseController 
{
    public function getByState()
    {
        //return View::make('results');
        return "ops";
    }   

    public function getByMunicipalty()
    {
        //return View::make('results');
        return "ops";
    }   

    public function getResults($type, $operation, $state, $city, $colony)
    {   
        return View::make('results');
    }   

    public function getProperties($state, $city, $colony, $page = 1)
    {
        $properties = Propiedad::results($state, $city, $colony, true);
        return Response::json($properties, 200);
    }    
}
