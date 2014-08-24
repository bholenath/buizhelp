

		$(function(){
			$('#slider').cycle({
				fx: 'scrollLeft', 
                speed: 'slow',
				timeout:5000,
				pause:true
		
		});
		});
		
		$(function(){
			$('#slider1').cycle({
				fx: 'scrollLeft', 
                speed: 'slow',
				timeout:5000,
				pause:true
		
		});
		});
		
		$(function(){
			$('#slider1').slidesjs({
				width: 100%,
				height: 100%,
				navigation: 
				{
      			active: true,
				effect: "slide"
				}
				play: 
				{
      			active: true,
        		effect: "slide",
             	interval: 5000,
       		    auto: false,
             	swap: true,
              	pauseOnHover: true
           		}
		});
		});