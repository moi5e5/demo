<?php

class Estado extends Eloquent 
{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'estados';
	public    $timestamps = false;

    public function municipios()
    {
        return $this->hasMany('Municipio');
    } 

    static public function slugToId($slug)
    {
    	$id = 0;
    	switch ($slug) {
    		case 'aguascalientes':
    			$id = 1;
    			break;
    		case 'baja-california':
    			$id = 2;
    			break;
    		case 'baja-california-sur':
    			$id = 3;
    			break;
    		case 'campeche':
    			$id = 4;
    			break;
    		case 'coahuila-de-zaragoza':
    			$id = 5;
    			break;
    		case 'colima':
    			$id = 6;
    			break;
    		case 'chiapas':
    			$id = 7;
    			break;
    		case 'chihuahua':
    			$id = 8;
    			break;
    		case 'distrito-federal':
    			$id = 9;
    			break;
    		case 'durango':
    			$id = 10;
    			break;
    		case 'guanajuato':
    			$id = 11;
    			break;
    		case 'guerrero':
    			$id = 12;
    			break;
    		case 'hidalgo':
    			$id = 13;
    			break;
    		case 'jalisco':
    			$id = 14;
    			break;
    		case 'michoacan-de-ocampo':
    			$id = 15;
    			break;
    		case 'morelos':
    			$id = 16;
    			break;
    		case 'nayarit':
    			$id = 17;
    			break;
    		case 'nuevo-leon':
    			$id = 18;
    			break;
    		case 'oaxaca':
    			$id = 19;
    			break;
    		case 'aguascalientes':
    			$id = 20;
    			break;
    		case 'puebla':
    			$id = 21;
    			break;
    		case 'queretaro':
    			$id = 22;
    			break;
    		case 'quintana-roo':
    			$id = 23;
    			break;
    		case 'san-luis-potosi':
    			$id = 24;
    			break;
    		case 'sinaloa':
    			$id = 25;
    			break;
    		case 'sonora':
    			$id = 26;
    			break;
    		case 'tabasco':
    			$id = 27;
    			break;
    		case 'tamaulipas':
    			$id = 28;
    			break;
    		case 'tlaxcala':
    			$id = 29;
    			break;
    		case 'veracruz-de-ignacio-de-la-llave':
    			$id = 30;
    			break;
    		case 'yucatan':
    			$id = 31;
    			break;
    		case 'zacatecas':
    			$id = 32;
    			break;
    	}

    	return $id;
    }
}
