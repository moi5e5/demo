$(document).ready(function()
{

    window.mode = "large";

    Array.prototype.remove = function(value) 
    {
        var idx = this.indexOf(value);
        if(idx != 1)
        {
            return this.splice(idx, 1);
        }

        return false;
    }

    function Estado(data) 
    {
        this.id      = data.id;
        this.nombre  = data.nombre;
        this.slug    = data.slug;
    }

    function Propiedad(data)
    {
        this.id             = data.id;
        this.title          = data.title;
        this.price          = data.price;
        this.m2             = data.m2;
        this.m2cons         = data.m2cons;
        this.techdetails    = data.techdetails;
        this.description    = data.description;
        this.operation      = data.operation;
        this.colony         = data.colony;
        this.municipalty    = data.municipalty;
        this.state          = data.state;
        this.link           = data.link;
        this.lat            = data.lat;
        this.lon            = data.lon;
        this.foto           = data.foto;
        this.typeproperty   = data.typeproperty;
    } 

    function ResultsViewModel()
    {
        var self       = this;
        self.states    = ko.observableArray([]);    	
        self.results   = ko.observableArray([]);  

        self.app_type      =  '';
        self.app_operation =  '';
        self.app_state     =  '';
        self.app_city      =  '';
        self.app_colony    =  '';

        self.init = function()
        {
            $.getJSON("/depasycasas/index.php/api/v1/estado", function(data) 
            {
                var mappedStates = $.map(data, function(state) { return new Estado(state) });
                self.states(mappedStates);
            });

            //hash explode
            var path     = window.location.pathname;
            var sections = path.split('/');

            sections.remove('resultados');
            sections.remove('');            
            sections.remove('depasycasas');

            self.app_type      =  sections[0];           
            self.app_operation =  sections[1];
            self.app_state     =  sections[2];          
            self.app_city      =  sections[3];           
            self.app_colony    =  sections[4];    

            $.getJSON("http://192.168.1.65/depasycasas/api/v1/propiedades/search/1/" + self.app_type + "/" + self.app_operation + "/" + self.app_state + "/", function(data) 
            {
                var mappedStates = $.map(data, function(state) { return new Estado(state) });
                self.states(mappedStates);
            });            
        }; 

        self.addCSS = function()
        {
            var width  = $(window).width(); 
            var append = "";

            if(width <= 568)
            {
                append      = ".mobile";
                window.mode = "mobile"
            }

            var cssLink = $("<link rel='stylesheet' type='text/css' href='css/app" + append + ".css'>");
            $("head").append(cssLink);             
        } 

        self.filterselectorsop = function()
        {
            var options = $('UL.filter-selector-operation li a');
            options.click(function(e)
            {
                e.preventDefault();
                var option    = $(e.target);
                var parent    = option.parent();
                var brothers  = parent.parent().children();
                var slug_op   = $('#slug_operation');

                brothers.removeClass('current')
                parent.addClass('current');

                switch(option.html())
                {                    
                    case 'En Renta y Venta':
                        slug_op.val('renta-venta');
                        break;                    
                    case 'En Venta':
                        slug_op.val('venta');
                        break;                    
                    case 'En Renta':
                        slug_op.val('renta');
                        break;
                    default:
                        slug_op.val('renta-venta');
                        break;
                }                                
            }); 
        }

        self.filterselectors = function()
        {
            var options = $('UL.filter-selector li a');
            options.click(function(e)
            {
                e.preventDefault();

                var option    = $(e.target);                
                var parent    = option.parent();
                var brothers  = parent.parent().children();
                var slug_type = $('#slug_type');
                
                brothers.removeClass('current');
                parent.addClass('current');                
                switch(option.html())
                {                    
                    case 'Depas y Casas':
                        slug_type.val('departamentos-casas');
                        break;                    
                    case 'Departamentos':
                        slug_type.val('departamentos');
                        break;                    
                    case 'Casas':
                        slug_type.val('casas');
                        break;
                    default:
                        slug_type.val('departamentos-casas');
                        break;
                }

            }); 
        }                             

        self.addCSS();
        self.filterselectors();
        self.filterselectorsop();
        self.init();               
    } 

    ko.applyBindings(new ResultsViewModel());    	
});