@extends('master')
	@section('content')

		<ul class="breadcrumbs">
		  <li><a href="#">Home</a></li>
		  <li><a href="#">Distrito Federal</a></li>
		  <li class="unavailable"><a href="#">Cuauhtémoc</a></li>
		  <li class="current"><a href="#">Condesa</a></li>
		</ul>

		<div class="row">
			<div class="columns large-12 finder-results">
				<div class="row fix-up">
					<div class="columns large-12">&nbsp;</div>
				</div>
				<div class="row">
					<div class="columns large-3">
	                     <select 
	                        name       = "stateid" 
	                        id         = "stateid" 
	                        data-bind  = "
	                            options:          states,
	                            optionsCaption:  'Seleccione...',
	                            optionsText:     'nombre',
	                            optionsValue:    'slug' ">
	                    </select>
					</div>
					<div class="columns large-9">
						<input type="hidden" name="statename" id="statename">
						<input type="hidden" name="municipaltyname" id="municipaltyname">
						<input type="hidden" name="colonyname" id="colonyname">
						<input type="search" name="term" id="term" placeholder="Busque por colonia, municipio...">
					</div>
				</div>
				<div class="row filters">
					<div class="columns large-3"> &nbsp;				
					</div>
					<div class="columns large-9">
					 <!-- filters -->
						<ul class="pagination left filter-selector">
						  <li class="current"><a href="">Departamentos</a></li>						  
						  <li><a href="">Casas</a></li>	
						  <li><a href="">Depas y Casas</a></li>							  
						</ul>						 	
					 <!-- end filters -->			
					 <!-- filters -->
						<ul class="pagination right filter-selector-operation">
						  <li class="current"><a href="">En Renta y Venta</a></li>						  
						  <li><a href="">En Venta</a></li>	
						  <li><a href="">En Renta</a></li>							  
						</ul>						 	
					 <!-- end filters -->		 
					</div>					
				</div>
			</div>
		</div>

		<div class="row results-filters">
			<div class="columns  large-3">
		      <label>Precio Mínimo
		        <select>
		        	<option>$1,000</option>
		        	<option>$1,000</option>
		        	<option>$1,000</option>
		        	<option>$1,000</option>
		        	<option>$1,000</option>
		        </select>
		      </label>				
			</div>
			<div class="columns large-3">
		      <label>Precio Máximo
		        <select>
		        	<option>$1,000</option>
		        	<option>$1,000</option>
		        	<option>$1,000</option>
		        	<option>$1,000</option>
		        	<option>$1,000</option>
		        </select>
		      </label>				
			</div>
			<div class="columns large-3">
				<label>Mínimo de M<sup>2</sup>	
				<div class="range-slider" data-slider>
				  <span class="range-slider-handle"></span>
				  <span class="range-slider-active-segment"></span>
				  <input type="hidden">
				</div>
			    </label>
			</div>
			<div class="columns large-3 fix-paddingup1em">
				<a href="#" class="button expand tiny round right">Filtrar Resultados</a>
			</div>
		</div>

		<div class="row">
			<div class="columns large-6">
				<ul class="pagination order-top left">
				  <li class="current"><a href="">Ordernar por precio</a></li>
				  <li><a href="">Ordenar por fecha</a></li>
				</ul>	
			</div>
			<div class="columns large-6">			
				<ul class="pagination pagination-top right">
				  <li class="arrow unavailable"><a href="">&laquo;</a></li>
				  <li class="current"><a href="">1</a></li>
				  <li><a href="">2</a></li>
				  <li><a href="">3</a></li>
				  <li><a href="">4</a></li>
				  <li class="unavailable"><a href="">&hellip;</a></li>
				  <li><a href="">12</a></li>
				  <li><a href="">13</a></li>
				  <li class="arrow"><a href="">&raquo;</a></li>
				</ul>				
			</div>
		</div>

		<div class="row">
			<div class="columns large-12">
				<ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-4">
				  <li class="results-item">
				  	 <div class="row">
				  	 	<div class="columns large-12"><img src="img/pics/zona.centro.jpg"></a></div>				  	 	
				  	 </div>
				  	 <div class="row">
				  	 	<div class="columns large-12">
				  	 		<div class="row">
				  	 			<div class="columns large-8 text-left"><h5>DF - Iztapalapa - asdfasdf </h5></div>
				  	 			<div class="columns large-4 text-right"><h6>$1,000,000</h6></div>
				  	 		</div>
				  	 		<div class="row">
				  	 			<div class="columns large-8 details">
				  	 				Casa en Venta, 80m<sup>2</sup>, 2 Recamaras...
				  	 			</div>
				  	 			<div class="columns large-4 details text-right">
				  	 				<a href="javascript:;">[Ver Detalles]</a>
				  	 			</div>				  	 			
				  	 		</div>				  	 		
				  	    </div>
				  	 </div>				     
				  </li>
				  <li class="results-item over">
				  	 <div class="row">
				  	 	<div class="columns large-12"><img src="img/pics/zona.centro.jpg"></a></div>				  	 	
				  	 </div>
				  	 <div class="row">
				  	 	<div class="columns large-12">
				  	 		<div class="row">
				  	 			<div class="columns large-8 text-left"><h5>DF - Iztapalapa - asdfasdf </h5></div>
				  	 			<div class="columns large-4 text-right"><h6>$1,000,000</h6></div>
				  	 		</div>
				  	 		<div class="row">
				  	 			<div class="columns large-8 details">
				  	 				Casa en Venta, 80m<sup>2</sup>, 2 Recamaras...
				  	 			</div>
				  	 			<div class="columns large-4 details text-right">
				  	 				<a href="javascript:;">[Ver Detalles]</a>
				  	 			</div>				  	 			
				  	 		</div>				  	 		
				  	    </div>
				  	 </div>				     
				  </li>
				  <li class="results-item">
				  	 <div class="row">
				  	 	<div class="columns large-12"><img src="img/pics/zona.centro.jpg"></a></div>				  	 	
				  	 </div>
				  	 <div class="row">
				  	 	<div class="columns large-12">
				  	 		<div class="row">
				  	 			<div class="columns large-8 text-left"><h5>DF - Iztapalapa - asdfasdf </h5></div>
				  	 			<div class="columns large-4 text-right"><h6>$1,000,000</h6></div>
				  	 		</div>
				  	 		<div class="row">
				  	 			<div class="columns large-8 details">
				  	 				Casa en Venta, 80m<sup>2</sup>, 2 Recamaras...
				  	 			</div>
				  	 			<div class="columns large-4 details text-right">
				  	 				<a href="javascript:;">[Ver Detalles]</a>
				  	 			</div>				  	 			
				  	 		</div>				  	 		
				  	    </div>
				  	 </div>				     
				  </li>
				  <li class="results-item">
				  	 <div class="row">
				  	 	<div class="columns large-12"><img src="img/pics/zona.centro.jpg"></a></div>				  	 	
				  	 </div>
				  	 <div class="row">
				  	 	<div class="columns large-12">
				  	 		<div class="row">
				  	 			<div class="columns large-8 text-left"><h5>DF - Iztapalapa - asdfasdf </h5></div>
				  	 			<div class="columns large-4 text-right"><h6>$1,000,000</h6></div>
				  	 		</div>
				  	 		<div class="row">
				  	 			<div class="columns large-8 details">
				  	 				Casa en Venta, 80m<sup>2</sup>, 2 Recamaras...
				  	 			</div>
				  	 			<div class="columns large-4 details text-right">
				  	 				<a href="javascript:;">[Ver Detalles]</a>
				  	 			</div>				  	 			
				  	 		</div>				  	 		
				  	    </div>
				  	 </div>				     
				  </li>

				  <li class="results-item">
				  	 <div class="row">
				  	 	<div class="columns large-12"><img src="img/pics/zona.centro.jpg"></a></div>				  	 	
				  	 </div>
				  	 <div class="row">
				  	 	<div class="columns large-12">
				  	 		<div class="row">
				  	 			<div class="columns large-8 text-left"><h5>DF - Iztapalapa - asdfasdf </h5></div>
				  	 			<div class="columns large-4 text-right"><h6>$1,000,000</h6></div>
				  	 		</div>
				  	 		<div class="row">
				  	 			<div class="columns large-8 details">
				  	 				Casa en Venta, 80m<sup>2</sup>, 2 Recamaras...
				  	 			</div>
				  	 			<div class="columns large-4 details text-right">
				  	 				<a href="javascript:;">[Ver Detalles]</a>
				  	 			</div>				  	 			
				  	 		</div>				  	 		
				  	    </div>
				  	 </div>				     
				  </li>
				  <li class="results-item">
				  	 <div class="row">
				  	 	<div class="columns large-12"><img src="img/pics/zona.centro.jpg"></a></div>				  	 	
				  	 </div>
				  	 <div class="row">
				  	 	<div class="columns large-12">
				  	 		<div class="row">
				  	 			<div class="columns large-8 text-left"><h5>DF - Iztapalapa - asdfasdf </h5></div>
				  	 			<div class="columns large-4 text-right"><h6>$1,000,000</h6></div>
				  	 		</div>
				  	 		<div class="row">
				  	 			<div class="columns large-8 details">
				  	 				Casa en Venta, 80m<sup>2</sup>, 2 Recamaras...
				  	 			</div>
				  	 			<div class="columns large-4 details text-right">
				  	 				<a href="javascript:;">[Ver Detalles]</a>
				  	 			</div>				  	 			
				  	 		</div>				  	 		
				  	    </div>
				  	 </div>				     
				  </li>

				  <li class="results-item">
				  	 <div class="row">
				  	 	<div class="columns large-12"><img src="img/pics/zona.centro.jpg"></a></div>				  	 	
				  	 </div>
				  	 <div class="row">
				  	 	<div class="columns large-12">
				  	 		<div class="row">
				  	 			<div class="columns large-8 text-left"><h5>DF - Iztapalapa - asdfasdf </h5></div>
				  	 			<div class="columns large-4 text-right"><h6>$1,000,000</h6></div>
				  	 		</div>
				  	 		<div class="row">
				  	 			<div class="columns large-8 details">
				  	 				Casa en Venta, 80m<sup>2</sup>, 2 Recamaras...
				  	 			</div>
				  	 			<div class="columns large-4 details text-right">
				  	 				<a href="javascript:;">[Ver Detalles]</a>
				  	 			</div>				  	 			
				  	 		</div>				  	 		
				  	    </div>
				  	 </div>				     
				  </li>

				  <li class="results-item">
				  	 <div class="row">
				  	 	<div class="columns large-12"><img src="img/pics/zona.centro.jpg"></a></div>				  	 	
				  	 </div>
				  	 <div class="row">
				  	 	<div class="columns large-12">
				  	 		<div class="row">
				  	 			<div class="columns large-8 text-left"><h5>DF - Iztapalapa - asdfasdf </h5></div>
				  	 			<div class="columns large-4 text-right"><h6>$1,000,000</h6></div>
				  	 		</div>
				  	 		<div class="row">
				  	 			<div class="columns large-8 details">
				  	 				Casa en Venta, 80m<sup>2</sup>, 2 Recamaras...
				  	 			</div>
				  	 			<div class="columns large-4 details text-right">
				  	 				<a href="javascript:;">[Ver Detalles]</a>
				  	 			</div>				  	 			
				  	 		</div>				  	 		
				  	    </div>
				  	 </div>				     
				  </li>

				  <li class="results-item">
				  	 <div class="row">
				  	 	<div class="columns large-12"><img src="img/pics/zona.centro.jpg"></a></div>				  	 	
				  	 </div>
				  	 <div class="row">
				  	 	<div class="columns large-12">
				  	 		<div class="row">
				  	 			<div class="columns large-8 text-left"><h5>DF - Iztapalapa - asdfasdf </h5></div>
				  	 			<div class="columns large-4 text-right"><h6>$1,000,000</h6></div>
				  	 		</div>
				  	 		<div class="row">
				  	 			<div class="columns large-8 details">
				  	 				Casa en Venta, 80m<sup>2</sup>, 2 Recamaras...
				  	 			</div>
				  	 			<div class="columns large-4 details text-right">
				  	 				<a href="javascript:;">[Ver Detalles]</a>
				  	 			</div>				  	 			
				  	 		</div>				  	 		
				  	    </div>
				  	 </div>				     
				  </li>
				  <li class="results-item">
				  	 <div class="row">
				  	 	<div class="columns large-12"><img src="img/pics/zona.centro.jpg"></a></div>				  	 	
				  	 </div>
				  	 <div class="row">
				  	 	<div class="columns large-12">
				  	 		<div class="row">
				  	 			<div class="columns large-8 text-left"><h5>DF - Iztapalapa - asdfasdf </h5></div>
				  	 			<div class="columns large-4 text-right"><h6>$1,000,000</h6></div>
				  	 		</div>
				  	 		<div class="row">
				  	 			<div class="columns large-8 details">
				  	 				Casa en Venta, 80m<sup>2</sup>, 2 Recamaras...
				  	 			</div>
				  	 			<div class="columns large-4 details text-right">
				  	 				<a href="javascript:;">[Ver Detalles]</a>
				  	 			</div>				  	 			
				  	 		</div>				  	 		
				  	    </div>
				  	 </div>				     
				  </li>
				  <li class="results-item">
				  	 <div class="row">
				  	 	<div class="columns large-12"><img src="img/pics/zona.centro.jpg"></a></div>				  	 	
				  	 </div>
				  	 <div class="row">
				  	 	<div class="columns large-12">
				  	 		<div class="row">
				  	 			<div class="columns large-8 text-left"><h5>DF - Iztapalapa - asdfasdf </h5></div>
				  	 			<div class="columns large-4 text-right"><h6>$1,000,000</h6></div>
				  	 		</div>
				  	 		<div class="row">
				  	 			<div class="columns large-8 details">
				  	 				Casa en Venta, 80m<sup>2</sup>, 2 Recamaras...
				  	 			</div>
				  	 			<div class="columns large-4 details text-right">
				  	 				<a href="javascript:;">[Ver Detalles]</a>
				  	 			</div>				  	 			
				  	 		</div>				  	 		
				  	    </div>
				  	 </div>				     
				  </li>
				  <li class="results-item">
				  	 <div class="row">
				  	 	<div class="columns large-12"><img src="img/pics/zona.centro.jpg"></a></div>				  	 	
				  	 </div>
				  	 <div class="row">
				  	 	<div class="columns large-12">
				  	 		<div class="row">
				  	 			<div class="columns large-8 text-left"><h5>DF - Iztapalapa - asdfasdf </h5></div>
				  	 			<div class="columns large-4 text-right"><h6>$1,000,000</h6></div>
				  	 		</div>
				  	 		<div class="row">
				  	 			<div class="columns large-8 details">
				  	 				Casa en Venta, 80m<sup>2</sup>, 2 Recamaras...
				  	 			</div>
				  	 			<div class="columns large-4 details text-right">
				  	 				<a href="javascript:;">[Ver Detalles]</a>
				  	 			</div>				  	 			
				  	 		</div>				  	 		
				  	    </div>
				  	 </div>				     
				  </li>

				  <li class="results-item">
				  	 <div class="row">
				  	 	<div class="columns large-12"><img src="img/pics/zona.centro.jpg"></a></div>				  	 	
				  	 </div>
				  	 <div class="row">
				  	 	<div class="columns large-12">
				  	 		<div class="row">
				  	 			<div class="columns large-8 text-left"><h5>DF - Iztapalapa - asdfasdf </h5></div>
				  	 			<div class="columns large-4 text-right"><h6>$1,000,000</h6></div>
				  	 		</div>
				  	 		<div class="row">
				  	 			<div class="columns large-8 details">
				  	 				Casa en Venta, 80m<sup>2</sup>, 2 Recamaras...
				  	 			</div>
				  	 			<div class="columns large-4 details text-right">
				  	 				<a href="javascript:;">[Ver Detalles]</a>
				  	 			</div>				  	 			
				  	 		</div>				  	 		
				  	    </div>
				  	 </div>				     
				  </li>
				  <li class="results-item">
				  	 <div class="row">
				  	 	<div class="columns large-12"><img src="img/pics/zona.centro.jpg"></a></div>				  	 	
				  	 </div>
				  	 <div class="row">
				  	 	<div class="columns large-12">
				  	 		<div class="row">
				  	 			<div class="columns large-8 text-left"><h5>DF - Iztapalapa - asdfasdf </h5></div>
				  	 			<div class="columns large-4 text-right"><h6>$1,000,000</h6></div>
				  	 		</div>
				  	 		<div class="row">
				  	 			<div class="columns large-8 details">
				  	 				Casa en Venta, 80m<sup>2</sup>, 2 Recamaras...
				  	 			</div>
				  	 			<div class="columns large-4 details text-right">
				  	 				<a href="javascript:;">[Ver Detalles]</a>
				  	 			</div>				  	 			
				  	 		</div>				  	 		
				  	    </div>
				  	 </div>				     
				  </li>

				  <li class="results-item">
				  	 <div class="row">
				  	 	<div class="columns large-12"><img src="img/pics/zona.centro.jpg"></a></div>				  	 	
				  	 </div>
				  	 <div class="row">
				  	 	<div class="columns large-12">
				  	 		<div class="row">
				  	 			<div class="columns large-8 text-left"><h5>DF - Iztapalapa - asdfasdf </h5></div>
				  	 			<div class="columns large-4 text-right"><h6>$1,000,000</h6></div>
				  	 		</div>
				  	 		<div class="row">
				  	 			<div class="columns large-8 details">
				  	 				Casa en Venta, 80m<sup>2</sup>, 2 Recamaras...
				  	 			</div>
				  	 			<div class="columns large-4 details text-right">
				  	 				<a href="javascript:;">[Ver Detalles]</a>
				  	 			</div>				  	 			
				  	 		</div>				  	 		
				  	    </div>
				  	 </div>				     
				  </li>
				  <li class="results-item">
				  	 <div class="row">
				  	 	<div class="columns large-12"><img src="img/pics/zona.centro.jpg"></a></div>				  	 	
				  	 </div>
				  	 <div class="row">
				  	 	<div class="columns large-12">
				  	 		<div class="row">
				  	 			<div class="columns large-8 text-left"><h5>DF - Iztapalapa - asdfasdf </h5></div>
				  	 			<div class="columns large-4 text-right"><h6>$1,000,000</h6></div>
				  	 		</div>
				  	 		<div class="row">
				  	 			<div class="columns large-8 details">
				  	 				Casa en Venta, 80m<sup>2</sup>, 2 Recamaras...
				  	 			</div>
				  	 			<div class="columns large-4 details text-right">
				  	 				<a href="javascript:;">[Ver Detalles]</a>
				  	 			</div>				  	 			
				  	 		</div>				  	 		
				  	    </div>
				  	 </div>				     
				  </li>				  				  				  				  				  				  				  				  				  				  				  				  				  				  				  


				</ul>				
			</div>

		<div class="row">
			<div class="columns large-12">
				<ul class="pagination right">
				  <li class="arrow unavailable"><a href="">&laquo;</a></li>
				  <li class="current"><a href="">1</a></li>
				  <li><a href="">2</a></li>
				  <li><a href="">3</a></li>
				  <li><a href="">4</a></li>
				  <li class="unavailable"><a href="">&hellip;</a></li>
				  <li><a href="">12</a></li>
				  <li><a href="">13</a></li>
				  <li class="arrow"><a href="">&raquo;</a></li>
				</ul>				
			</div>
		</div>

		</div>

		<script src="js/app.results.js"></script>
	@stop