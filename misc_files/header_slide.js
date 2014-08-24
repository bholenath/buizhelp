// JavaScript Document

	var v=new Array('<iframe src="http://www.flipkart.com/affiliate/displayWidget?affrid=WRID-138448567760490371" align="middle"
	style="padding:1.5% 4.95%; display:block;"></iframe>',
	'<iframe src="http://www.flipkart.com/affiliate/displayWidget?affrid=WRID-138448562142467831" align="middle"
	style="padding:1.5% 4.95%; display:block;"></iframe>',
	'<iframe src="http://www.flipkart.com/affiliate/displayWidget?affrid=WRID-138448642896685708" align="middle"
	style="padding:1.5% 4.95%; display:block;"></iframe>',
	'<iframe src="http://www.flipkart.com/affiliate/displayWidget?affrid=WRID-138448558088348585" align="middle"
	style="padding:1.5% 4.95%; display:block;"></iframe>',
	'<iframe src="http://www.flipkart.com/affiliate/displayWidget?affrid=WRID-138731178120383223" align="middle"
	style="padding:1.5% 4.95%; display:block;"></iframe>',
	'<iframe src="http://www.flipkart.com/affiliate/displayWidget?affrid=WRID-138731185699081506" align="middle"
	style="padding:1.5% 4.95%; display:block;"></iframe>');
	
	var i=0;
			
	var change = setInterval(function(){ if(i<=v.length-1) { $('#slider1').innerHTML = ""+v[i]+"".fadeIn("slow"); i++; } 
	else i=0; } , 15000 );