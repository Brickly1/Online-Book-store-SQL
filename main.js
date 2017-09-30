$(window).load(function() {
    $('#slider').nivoSlider({
        effect:'random',
        slices:15,
        boxCols:8,
        boxRows:8,
        animSpeed:500,
        pauseTime:4000,
        directionNav:false,
        directionNavHide:false,
        controlNav:false,
        captionOpacity:1
    });
});

	function cart_update(task,pid,click_id) //change product list ajax
	{
		var dataString = 'pid='+ pid + '&task=' + task;
	
		$.ajax({
		type: "POST",
		async:false,
		url: "ajax_cart.php",
		data: dataString,
		success: function(html) { $('#cart_total').html(html); }
	   });
	   
	   document.getElementById(click_id).innerHTML = 'Added!';
	   return false;
	}
	
	function cart_update_checkout(task,pid,click_id) //change product list ajax
	{
		var dataString = 'pid='+ pid + '&task=' + task;
	
		$.ajax({
		type: "POST",
		async:false,
		url: "ajax_cart.php",
		data: dataString,
		success: function(html) { $('#cart_total').html(html); }
	   });
	   
	   //document.getElementById(click_id).innerHTML = 'Added!';

	}
	
	