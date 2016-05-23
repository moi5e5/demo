<?php

class Propiedad extends Eloquent 
{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'propiedades';
	protected $with = array('Foto');	

    const OPERATION_RENTA           = "RENTA";
    const OPERATION_VENTA           = "VENTA";
    const TYPES_DEPARTAMENTO        = "DEPARTAMENTO";
    const TYPES_CASA                = "CASA";

    public function foto()
    {
        return $this->hasMany('Foto');
    }	

    static public function collectionToArray($objects)
    {
        $list = array();
        foreach ($objects as $obj)
        {
            array_push($list, $obj);
        }
        return $objects;
    }

    static private function addType($properties, $type)
    {
        $propertyType = "";        
        if($type == "departamentos-casas"){ return $properties; }

        switch ($type) 
        {
            case 'casas':
                $propertyType = "CASA";
                break;

            case 'departamentos':
                $propertyType = "DEPARTAMENTO";
                break;  

            default:
                App::abort(404);
        }

        $properties->where('typeproperty', '=', $propertyType);
        return $properties;
    }

    static private function addOperation($properties, $operation)
    {
        $operationType = "";
        if($operation == "renta-venta"){ return $properties; }
        
        switch ($operation)
        {
            case 'renta':
                $operationType = "RENTA";
                break;

            case 'venta':
                $operationType = "RENTA";
                break;

            default:
                App::abort(404);
        }        

        $properties->where('operation', '=', $operationType);
        return $properties;
    }

    static public function results($page, $type, $operation, $stateid, $cityid, $colonyid, $inarray = false)
    {
        $properties = Propiedad::where('sid', '=', $stateid);

        if($cityid > 0)
        {
            $properties->where('mid', '=', $cityid);
        }

        if($cityid > 0)
        {
            $properties->where('cid', '=', $colonyid);
        }        

        $properties = self::addType($properties, $type);
        $properties = self::addOperation($properties, $operation);

        $pageitems = Config::get('app.Results_Page_Items');
        $skip      = ($page > 1) ? $pageitems * $page : 0;
        $results   = $properties->take($pageitems)->skip($skip)->get();
        $total     = $properties->count();

        return ($inarray) ? self::collectionToArray($results) : $results;
    }
}
