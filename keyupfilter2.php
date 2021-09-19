<?php 



	
	if ($_POST['filterz'] == "first_name") {
	$echo = "<script>
$(document).ready(function(){
	load_data(); 
	function load_data(query)
	{
		
		$.ajax({
			//url:'fetch.php',
			//url:'fetch-class.php',
			url:'fetch-class2.php',
			method:'post',
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	$('#search_textz').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search); 		
		}
		else
		{
			load_data(); 			
		}
	});
	
});


</script>";
	}
	else if ($_POST['filter'] == "last_name") {
	$echo = "<script>
$(document).ready(function(){
	load_data(); 
	function load_data(query)
	{
		
		$.ajax({
			//url:'fetch.php',
			//url:'fetch-class.php',
			url:'fetch-class3.php',
			method:'post',
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search); 		
		}
		else
		{
			load_data(); 			
		}
	});
	
});


</script>";
	}

else if ($_POST['filter'] == "student_no") {
	$echo = "<script>
$(document).ready(function(){
	load_data(); 
	function load_data(query)
	{
		
		$.ajax({
			//url:'fetch.php',
			//url:'fetch-class.php',
			url:'fetch-class4.php',
			method:'post',
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search); 		
		}
		else
		{
			load_data(); 			
		}
	});
	
});


</script>";

	}

	else {
	$echo = "<script>
$(document).ready(function(){
	load_data(); 
	function load_data(query)
	{
		
		$.ajax({
			//url:'fetch.php',
			//url:'fetch-classz.php',
			url:'fetch-class.php',
			method:'post',
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	
});


</script>";
	}

echo $echo;
?>
