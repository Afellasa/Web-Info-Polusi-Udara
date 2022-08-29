
<html>
	<head>
		<script src="../assets/js/plugins/jquery-latest.js"></script> 
		<script>
		var refreshId = setInterval(function()
		{
			 $('#responsecontainer').load('tables.php');
		}, 0);
		</script>
	</head>
	<body>					
		<div id="responsecontainer">
		</div>		
	</body>
</html>