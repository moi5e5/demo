$(document).ready(function()
{
	interval     	= setInterval(rollimage, 60000);
	current_image 	= 0;
	images          = ["/depasycasas/img/home2.jpg", "/depasycasas/img/menu.photo.png"]

    function rollimage()
    {
      var container = $('#menu-background');
      container.animate(
      {
            opacity: 0
        }, 'fast', function () 
        {
            $(this).css(
            {
                'background-image': 'url('+ images[current_image] +')'

            }).animate(
            {
                opacity: 1
            }, function()
            {
            	current_image ++;
            	if(current_image > (images.length - 1))
            	{
            		current_image = 0;
            	}
            });
        });            
    }
        
});