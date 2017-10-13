// JavaScript Document

 
jQuery(document).ready(function() {
	
	jQuery('.postBounceInLeft').addClass("hidden-animated").viewportChecker({
	    classToAdd: 'visible-animated animated bounceInLeft', // Class to add to the elements when they are visible
	    offset: 100    
	   }); 

	jQuery('.postBounceInRight').addClass("hidden-animated").viewportChecker({
	    classToAdd: 'visible-animated animated bounceInRight', // Class to add to the elements when they are visible
	    offset: 100    
	   });
	   
	jQuery('.postBounceInUp').addClass("hidden-animated").viewportChecker({
	    classToAdd: 'visible-animated animated bounceInUp', // Class to add to the elements when they are visible
	    offset: 100    
	   }); 

	jQuery('.postZoomInDown').addClass("hidden-animated").viewportChecker({
	    classToAdd: 'visible-animated animated zoomInDown', // Class to add to the elements when they are visible
	    offset: 100    
	   });   
 

	   	     
});            