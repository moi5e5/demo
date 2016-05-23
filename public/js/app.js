$(document).ready(function()
{   
    //model
    window.mode = "large";

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

    function RealStateViewModel() 
    { 
        var self       = this;
        self.states    = ko.observableArray([]);
        self.portraits = ko.observableArray([]);
        self.bigs      = ko.observableArray([]);

        self.init = function()
        {
            $.getJSON("/depasycasas/index.php/api/v1/estado", function(data) 
            {
                var mappedStates = $.map(data, function(state) { return new Estado(state) });
                self.states(mappedStates);
            });
        };

        self.portrait = function()
        {
            $.getJSON("/depasycasas/index.php/api/v1/propiedaddestacada", function(data) 
            {
                var mappedPortraits = $.map(data, function(property) { return new Propiedad(property) });
                self.portraits(mappedPortraits);
            });
        };    

        self.big = function()
        {
            $.getJSON("/depasycasas/index.php/api/v1/big", function(data) 
            {
                var mappedBigs = $.map(data, function(big) { return new Propiedad(big) });
                self.bigs(mappedBigs);
            });
        };        

        self.overs = function(e)
        {
            var img = $(e.target);
            img.fadeTo('fast', 0.5);
        }

        self.outs = function(e)
        {
            var img = $(e.target);
            img.fadeTo('fast', 1);
        }        

        self.interactions = function()
        {
            var zonasimg = $('.zonas img');        
            zonasimg.mouseover(self.overs);
            zonasimg.mouseout(self.outs);
        }

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


        self.addCSS();
        self.interactions();                  
        self.filterselectors();                          
        self.filterselectorsop();                          
        self.init();        
        self.portrait();        
        self.big(); 
    }

    ko.applyBindings(new RealStateViewModel()); 

});