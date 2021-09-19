<?php 



	
	if ($_POST['filter'] == "first_name") {
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
				$('.result').html(data);
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
	
	$('#search_textz').keyup(function(){
		var searchz = $(this).val();
		if(searchz != '')
		{
			load_data(searchz); 		
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
				$('.result').html(data);
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
				$('.result').html(data);
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

else if ($_POST['filter'] == "gender") {
	$echo = "<script>
	$(document).ready(function(){
	load_data(); 
	function load_data(query)
	{
		
		$.ajax({
			//url:'fetch.php',
			//url:'fetch-class.php',
			url:'fetch-class5.php',
			method:'post',
			data:{query:query},
			success:function(data)
			{
				$('.result').html(data);
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


else if ($_POST['filter'] == "dob") {
	$echo = "<script>
	$(document).ready(function(){
	load_data(); 
	function load_data(query)
	{
		
		$.ajax({
			//url:'fetch.php',
			//url:'fetch-class.php',
			url:'fetch-class6.php',
			method:'post',
			data:{query:query},
			success:function(data)
			{
				$('.result').html(data);
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
	
else if ($_POST['filter'] == "province") {
	$echo = "<script>
	$(document).ready(function(){
	load_data(); 
	function load_data(query)
	{
		
		$.ajax({
			//url:'fetch.php',
			//url:'fetch-class.php',
			url:'fetch-class7.php',
			method:'post',
			data:{query:query},
			success:function(data)
			{
				$('.result').html(data);
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
				$('.result').html(data);
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

echo $echo;
?>
