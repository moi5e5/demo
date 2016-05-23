<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class slugCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'command:slug';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Generate a URL Friendly name of locations';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		$table = $this->argument('table');
		if($table == "estados")
		{
			$this->slugStates();
		}

		if($table == "municipios")
		{
			$this->slugMunicipalties();
		}

		if($table == "localidades")
		{
			$this->slugLocalities();
		}		

		if($table == "sepomex")
		{
			$this->slugSepomex();
		}						
	}

	private function slugStates()
	{
		$states = Estado::all();
		foreach($states as $state)
		{
			$slug = Str::slug($state->nombre);
			$this->info('generando '. $slug);
			$state->slug = $slug;
			$state->save();
		}		
	}

	private function slugMunicipalties()
	{
		$municipalties = Municipio::all();
		foreach($municipalties as $municipalty)
		{
			$slug = Str::slug($municipalty->nombre);
			$this->info('generando '. $slug);
			$municipalty->slug = $slug;
			$municipalty->save();
		}		
	}	

	private function slugLocalities()
	{
		$bucles = 30;
		$jump = 10000;
		for($i = 0; $i <= $bucles; $i++)
		{
			$localities = Localidad::take($jump)->skip($i*$jump)->get();
			foreach($localities as $locality)
			{
				$slug = Str::slug($locality->nombre);
				$this->info('generando '. $slug);
				$locality->slug = $slug;
				$locality->save();
			}		

		}
	}	

	private function slugSepomex()
	{
		$bucles = 30;
		$jump = 10000;
		for($i = 0; $i <= $bucles; $i++)
		{
			$localities = Sepomex::take($jump)->skip($i*$jump)->get();
			foreach($localities as $locality)
			{
				
				$slugcolony = Str::slug($locality->colony);
				$slugcity   = Str::slug($locality->city);
				$slugstate  = Str::slug($locality->state);

				$this->info(sprintf('Generando localidad /%s/%s/%s', $slugcolony, $slugcity, $slugstate));
				$locality->slugcolony = $slugcolony;
				$locality->slugcity   = $slugcity;
				$locality->slugstate  = $slugstate;
				$locality->save();
			}		
		}
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array(
			array('table', InputArgument::REQUIRED, 'Tabla para slugifar'),
		);

		//return array();
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return array(
			array('example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null),
		);
	}

}
