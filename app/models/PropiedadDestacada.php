<?php

class PropiedadDestacada extends Eloquent 
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'propiedades_destacadas';
	protected $with = array('Propiedad');

    public function propiedad()
    {
        return $this->belongsTo('Propiedad');
    }	

	//http://stackoverflow.com/questions/79960/how-to-truncate-a-string-in-php-to-the-word-closest-to-a-certain-number-of-chara
	static private function tokenTruncate($string, $your_desired_width) 
	{
	  $parts = preg_split('/([\s\n\r]+)/', $string, null, PREG_SPLIT_DELIM_CAPTURE);
	  $parts_count = count($parts);

	  $length = 0;
	  $last_part = 0;
	  for (; $last_part < $parts_count; ++$last_part) {
	    $length += strlen($parts[$last_part]);
	    if ($length > $your_desired_width) { break; }
	  }

	  return implode(array_slice($parts, 0, $last_part));
	}     

    static private function PropertyToArray($properties)
    {
    	$obj = array();
    	foreach($properties as $property)
    	{
			$prop = new stdClass();

			$prop->id 			= $property->propiedad->id;
			$prop->title 		= $property->propiedad->title;
			$prop->price 		= '$'.number_format($property->propiedad->price);
			$prop->m2 			= $property->propiedad->m2;
			$prop->m2cons 		= $property->propiedad->m2cons;
			$prop->techdetails 	= $property->propiedad->techdetails;
			$prop->description 	= self::tokenTruncate(strip_tags($property->propiedad->description), 300);
			$prop->typeproperty = $property->propiedad->typeproperty;
			$prop->operation 	= $property->propiedad->operation;
			$prop->colony 		= $property->propiedad->colony;
			$prop->municipalty 	= $property->propiedad->municipalty;
			$prop->state 		= $property->propiedad->state;
			$prop->link 		= $property->propiedad->link;
			$prop->lat 			= $property->propiedad->lat;
			$prop->lon 			= $property->propiedad->lon;
			$prop->foto 		= $property->propiedad->foto[0]["url"];

			array_push($obj, $prop);
    	}
    	
    	return $obj;    	
    }   

    static public function big()
    {
    	$properties = self::where('inhome', '=', '1')->get();
    	return self::PropertyToArray($properties);
    }

    static public function all($columns = array('*'))
    {
    	$properties = self::where('inhome', '=', '0')->get();
    	return self::PropertyToArray($properties);
    }
}
