//autocomplete
$(document).ready(function()
{
    var findermessage     = $("#message");
    var term              = $('#searchbox');
    var state             = $('#stateid');
    var localityid        = $('#locality_id');    
    var slug_municipalty  = $('#slug_municipalty');
    var slug_colony       = $('#slug_colony');    

    var finderloader  = (window.mode == "large") ? $('#finder-loader') : $('#finder-loader-small');

    var selected = function(event, ui)
    {
      localityid.val(ui.item.id);
      slug_municipalty.val(ui.item.m_slug);
      slug_colony.val(ui.item.c_slug);
      findermessage.html("");
      hideloader();
    }

    var getUrl = function()
    {
      var url     = "/depasycasas/api/v1/search/";
      var stateid = state.val();
      return url + stateid +'/' + term.val();
    }

    var resetterm = function()
    {    
      term.val('');
      localityid.val('');
    }

    state.change(function(e) { resetterm(); } );

    var showloader = function()
    {
        var stateid = state.val();        
        if(stateid == "") 
        {
          findermessage.html("Selecciona un estado para facilitar tu búsqueda.");                                
          return; 
        }
              
      //$('#finder-image').fadeOut('fast', function(){ finderloader.fadeIn('fast') });
    }

    var hideloader = function()
    {
      finderloader.fadeOut('fast', function(){ $('#finder-image').fadeIn('fast') }); 
    }    

    hideloader();

    var toresults = function()
    {
      var buttons = $('.finder-button');
      buttons.click(function(e)
      {
         //build url
         var controller       = "depasycasas/resultados";
         var operation_slug   = $('#slug_operation').val();
         var type_slug        = $('#slug_type').val();
         var s_slug           = $('#stateid').val();
         var m_slug           = $('#slug_municipalty').val();
         var c_slug           = $('#slug_colony').val();        
        
         var url = '/' + controller + '/' + type_slug + '/' + operation_slug + '/' + s_slug + '/' + m_slug ;
         var url = (c_slug != '') ? url + '/' + c_slug : url;

        if(m_slug == "") 
        {
          findermessage.html("Proporcione un municipio o colonia.");                                
          return; 
        }


        window.location = url;

      });
    }

    toresults();

    $( "#searchbox" ).autocomplete(
    {
      select: selected,
      search: showloader,
      source:  function(request, response) 
      {

        var stateid = state.val();        
        if(stateid == "") 
        {         
          return; 
        }        

		   $.ajax({
		          url: getUrl(),
		          dataType: "json",              
		          success: function( data ) 
		          {
                if(data.length > 0)
                {
                  findermessage.html("Se encontraron " + data.length + " localidades, seleccione una.");

                  response( $.map( data, function( item ) {
                    return {
                      label: item.city + ', ' + item.colony,
                      value: item.city + ', ' + item.colony,
                      id: item.id,
                      c_slug: item.slugcolony,
                      m_slug: item.slugcity
                    }
                  }));                                  
                  return;
                }

                findermessage.html("No hubo resultados para: " + $('#searchbox').val());

                hideloader();

		          },
              progress: function(e)
              {
                if(e.lengthComputable) 
                {
                  var pct = (e.loaded / e.total) * 100;
                } else 
                {
                   //console.warn('Content Length not reported!');
                }                
              }
              
		        });
      }
    });    	
});