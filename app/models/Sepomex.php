<?php
class Sepomex extends Eloquent 
{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'sepomex';
	public    $timestamps = false;

    static public function search($stateslug, $term)
    {
    	$localities = self::where('slugstate', '=', $stateslug)
                          ->where('colony', 'LIKE', $term.'%')
    	                  ->orWhere('city', 'LIKE', $term.'%')
    					  ->take(10)->get();

    	$obj = array();
    	foreach ($localities as $local)
    	{
    		array_push($obj, $local);
    	}
    	return $obj;
    }

    static public function getStateBySlug($slug)
    {

        return self::where('slugstate', '=', $slug)->firstOrFail();
    }

    static public function getCityBySlug($slug)
    {
        return self::where('slugcity', '=', $slug)->firstOrFail();   
    }    

    static public function getColonyBySlug($slug)
    {
        return self::where('slugcolony', '=', $slug)->firstOrFail();        
    }    
}
