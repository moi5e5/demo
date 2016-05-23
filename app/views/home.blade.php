@extends('master')
	@section('content')

  <!-- finder hiddens -->
    <input type="hidden" name="slug_type" id="slug_type" value="departamentos-casas" >
    <input type="hidden" name="slug_operation" id="slug_operation" value="renta-venta" >
    <input type="hidden" name="slug_municipalty" id="slug_municipalty" value="" >
    <input type="hidden" name="slug_colony" id="slug_colony" value="" >    
  <!-- end finder hiddens -->

    <div class="row fullWidth">
      <div id="menu-background" class="columns large-12 menu-background">
        
        <div class="row">
          <div class="columns large-1 small-1">&nbsp;</div>
          <div class="columns large-10 small-10">
            <!-- finder -->
              <div class="row up-finder"> <div class="columns large-12"></div> </div>
              <div class="row show-for-small">
                <div class="columns small-1">&nbsp;</div>
                <div class="columns small-12 text-center">
                    <img src="img/menu.logo.png">
                </div>
                <div class="columns small-1">&nbsp;</div>
              </div>
              <div class="row">                
                <div class="columns large-12 small-12 finder">
                      <div class="row">
                       <div class="columns large-4 up">
                          <div class="row">
                            <div class="columns small-1 show-for-small">&nbsp;</div>
                            <div class="columns small-10 show-for-small">
                                <img src="img/menu.logo.png" class="show-for-large">
                            </div>                            
                          </div>                          
                        </div> 
                       <div class="columns large-8 up">
                          <div id="message"></div>
                        </div> 
                      </div>
                      <div class="row"> 
                        <div class="columns large-2"> 
                            <img src="img/menu.logo.png" class="show-for-large">
                        </div> 

                        <div class="columns large-2 fix-up"> 
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

                        <div class="columns large-7 fix-up"> 
                          <input type="search" id="searchbox" name="searchbox" placeholder="Busque por colonia, municipio, descripción...">
                          <input type="hidden" id="locality_id" name="locality_id" >
                        </div>
                        <div class="columns large-1 fix-up text-center"> 
                            <img id="finder-loader" src="img/ajax-loader-2.gif" style="display:none;margin-top:15px;">
                            <i id="finder-image" class="fa fa-search fa-3x show-for-large finder-button" style="color: white;"></i>
                            <img id="finder-loader-small" src="img/ajax-loader-small.gif" style="display:none;margin-top:5px;">
                            <a href="#" class="button [small radius round] show-for-small finder-button">Buscar</a>                            
                        </div>                        
                      </div>

                      <div class="row filters">
                        <div class="columns large-4 show-for-large"> &nbsp;        
                        </div>
                        <div class="columns large-7 small-12">
                         <!-- filters -->
                          <ul class="pagination left filter-selector">
                            <li class="current"><a href="">Depas y Casas</a></li>             
                            <li><a href="">Departamentos</a></li> 
                            <li><a href="">Casas</a></li>               
                          </ul>             
                         <!-- end filters -->     
                         <!-- filters -->
                          <ul class="pagination right-custom filter-selector-operation">
                            <li class="current"><a href="">En Renta y Venta</a></li>              
                            <li><a href="">En Venta</a></li>  
                            <li><a href="">En Renta</a></li>                
                          </ul>             
                         <!-- end filters -->    
                        </div> 
                        <div class="columns large-1"> &nbsp;        
                        </div>                                 
                      </div>

                      </div>

                      <div class="row"> <div class="columns large-12"> &nbsp; </div> 
                    

                </div>
              </div>
            <!-- end finder -->
          </div>
          <div class="columns large-1 small-1">&nbsp;</div>
        </div>
      </div>
    </div>

    <!-- second -->
    <div class="row second">
      <div class="columns large-4">
        <h2>Propiedades Destacadas</h2>
      </div>
      <div class="columns large-8 pleca">
        <img src="img/second.pleca.png">
      </div>
    </div>

    <div class="row destacado">
      <div class="columns large-6" data-bind="foreach: bigs, visible: bigs().length > 0">

        <div class="row">
          <div class="columns large-12 imagen-destacada">
            <!-- image -->
            <img data-bind="attr:{src: foto}" >
          </div>
        </div>
        <div class="row fix-up15">
          <div class="columns large-9">
            <h4 data-bind="text: title"></h4>
                <span class="price-propertype-big" data-bind="text: typeproperty"></span>
                <span class="price-operation-big">&nbsp;EN&nbsp;</span>
                <span class="price-operation-big" data-bind="text: operation"></span>    <br><br>      
          </div>
          <div class="columns large-3 price" data-bind="text: price"></div>
        </div>
        <div class="row">
          <div class="columns large-12 brief" data-bind="html: description">
          </div>
        </div>
        <div class="row">
          <div class="columns large-9 brief2">&nbsp;<!--M2: 2222, Cuartos: 3--></div>
          <div class="columns large-3">
            <a class="show-for-large" href="javascript:;"><img alt="Ver Detalles" src="img/button.detalles.png"></a>
            <a href="#" class="show-for-small button [secondary spotlight radius round]">Ver Detalles</a>
          </div>
        </div>

      </div>
      <div class="columns large-6"  data-bind="foreach: portraits, visible: portraits().length > 0">

        <!-- nivel2 -->
        <div class="row nivel2">
          <div class="columns large-1">
            &nbsp;
          </div>
          <div class="columns large-4 imagen-destacado">
            <!--image-->
            <img data-bind="attr:{src: foto}" >
          </div>
          <div class="columns large-7">
            <div class="row">
              <div class="columns large-7">
                <h5 data-bind="text: title"></h5>
                <span class="price-second" data-bind="text: price"></span>
                <span class="price-propertype" data-bind="text: typeproperty"></span>
                <span class="price-operation">&nbsp;EN&nbsp;</span>
                <span class="price-operation" data-bind="text: operation"></span>
              </div>
              <div class="columns large-5">
               <a class="show-for-large" href="javascript:;"><img alt="Ver Detalles" src="img/button.detalles.png"></a>               
              </div>              
            </div>
            <div class="row">
              <div class="columns large-12 brief-second" data-bind="html: description">              
              </div>
            </div> 
            <div class="row show-for-small">
              <div class="columns small-12">
                <a href="#" class="show-for-small button [secondary radius round]">Ver Detalles</a>
              </div>
            </div>  
          </div>          
        </div>
        <!-- nivel2 -->      

      </div>

    </div>
    <!-- end second -->

    <div class="row second">
      <div class="columns large-4">
        <h2>Servicios Personalizados</h2>
      </div>
      <div class="columns large-8 pleca">
        <img src="img/second.pleca.png">
      </div>
    </div>

    <div class="row fix-up">
      <div class="columns large-12">&nbsp;</div>
    </div>

    <div class="row">

      <!-- venta rápida -->
      <div class="columns large-4 servicio" data-equalizer>
        <div class="row">
          <div class="columns large-6">
            <img src="img/venta.imagen.png" class="show-for-large">
          </div>
          <div class="columns large-6">
            <div class="row">
              <div class="columns large-12">
                <h3>Venta Rápida</h3>
              </div>
              <div class="columns large-12 brief-servicio">
                <strong>¿Le urge vender su propiedad?</strong> Nosotros le garantizamos la venta en máximo 60 días. <br><br><a href="javascript:;">[Conozca más]</a>
              </div>              
            </div>
          </div>          
        </div>
      </div>
      <!-- end venta rápida -->
      
      <!-- asesoría -->
      <div class="columns large-4 servicio" data-equalizer>
        <div class="row">
          <div class="columns large-6">
            <img src="img/asesoria.imagen.png" class="show-for-large">
          </div>
          <div class="columns large-6">
            <div class="row">
              <div class="columns large-12">
                <h3>Asesoría</h3>
              </div>
              <div class="columns large-12 brief-servicio" data-equalizer>
                <strong>No se arriesgue a fraudes o malos arreglos</strong>, nosotros le asesoramos legalmente para la compra y venta de bienes inmuebles. <br><br><a href="javascript:;">[Conozca más]</a>
              </div>              
            </div>
          </div>          
        </div>    
      </div>
      <!-- end asesoría -->

      <!-- crédito -->
      <div class="columns large-4 servicio">
        <div class="row">
          <div class="columns large-6">
            <img src="img/credito.imagen.png" class="show-for-large">
          </div>
          <div class="columns large-6">
            <div class="row">
              <div class="columns large-12">
                <h3>Crédito</h3>
              </div>
              <div class="columns large-12 brief-servicio">
                <strong>Contamos con los mejores asesores</strong> en crédito hipotecario, hay uno a su medida. <br><br><a href="javascript:;">[Pregunte a nuestros asesores]</a>
              </div>              
            </div>
          </div>          
        </div>    
      </div>
      <!-- end crédito -->
    </div>


    <div class="row second">
      <div class="columns large-4">
        <h2 class="show-for-large">Propiedades Zona Metropolitana</h2>
        <h2 class="show-for-small">Zona Metropolitana</h2>
      </div>
      <div class="columns large-8 pleca">
        <img src="img/second.pleca.png">
      </div>
    </div>

    <div class="row fix-up">
      <div class="columns large-12">&nbsp;</div>
    </div>

    <div class="row">
      <div class="columns large-12">
        <ul class="large-block-grid-4 zonas">
          <li><a href="javascript:;"><h5>Zona Centro D.F</h5><img src="img/pics/zona.centro.jpg"></a></li>
          <li><a href="javascript:;"><h5>Zona Polanco D.F</h5><img src="img/pics/zona.polanco.jpg"></a></li>          
          <li><a href="javascript:;"><h5>Zona Condesa D.F</h5><img src="img/pics/zona.condesa.jpg"></a></li>          
          <li><a href="javascript:;"><h5>Zona Coyoacán D.F</h5><img src="img/pics/zona.coyoacan.jpg"></a></li>          
        </ul>
      </div>
    </div>    
    
    <div class="row second">
      <div class="columns large-4">
        <h2>Propiedades por Estado </h2>
      </div>
      <div class="columns large-8 pleca">
        <img src="img/second.pleca.png">
      </div>
    </div>

    <div class="row fix-up">
      <div class="columns large-12">&nbsp;</div>
    </div>    

    <div class="row">
      <div class="columns large-5 advice">
        <h4>En Venta</h4>
        <ul data-bind="foreach: states, visible: states().length > 0">
          <li><span class="show-for-large inline">Venta de casas y departamentos en </span><a href="javascript:;" data-bind="text: nombre, attr:{alt: 'Venta de Casas y Departamentos en ' + nombre } "></a></li>
        </ul>        
      </div>
      <div class="columns large-1"></div>
      <div class="columns large-6 advice">
        <h4>En Renta</h4>
        <ul data-bind="foreach: states, visible: states().length > 0">
          <li><span class="show-for-large inline">Renta de casas y departamentos en </span><a href="javascript:;" data-bind="text: nombre, attr:{alt: 'Renta de Casas y Departamentos en ' + nombre } "></a></li>
        </ul>                
      </div>
    </div>

    <script src="js/app.js"></script>
    <script src="js/finder.js"></script>
    <script src="js/rollimage.js"></script>
    
    @stop