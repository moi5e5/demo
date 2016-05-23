<?php

class Municipio extends Eloquent 
{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'municipios';    
	protected $with = array('Estado');
    public    $timestamps = false;

    public function localidad()
    {
        return $this->hasMany('Localidad');
    }                    

    public function estado()
    {
        return $this->belongsTo('Estado');
    }
}
