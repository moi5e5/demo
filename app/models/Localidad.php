<?php

class Localidad extends Eloquent 
{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'localidades';
	protected $with = array('Municipio');
	public    $timestamps = false;

    public function municipio()
    {
        return $this->belongsTo('Municipio');
    }		
}
