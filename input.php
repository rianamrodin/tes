<!DOCTYPE html>
<html>
<head>
<title>Try jQuery Online</title>
<script type="text/javascript" src="jquery-3.5.1.min.js">
	

</script>
<style>
.selected { 
    color:red; 
}
.highlight { 
    background:yellow; 
}
</style>
</head>
<body>
	<a>Bayar : </a><input id="bayar" type="text" onkeyup="byr()"><br />
	
	<a>Diskon</a><input id="diskon" type="text" onkeyup="dsk()"><br />

	<?php
		$master = 10000;
	?>

	<script>	
			var max = <?= $master ?>;

	function byr() {
		var x = document.getElementById("bayar").value;
		var y = document.getElementById("diskon").value;


		if (x === 'undefined') {
			x = 0;
		} else if(y === 'undefined'){
			y = 0;
		}
		if((x+y) >= max){
	  			limit = max - y;
	  			if(parseInt(document.getElementById("bayar").value)>limit){document.getElementById("bayar").value=limit;}
		
		}			
	}

	function dsk() {
		var x = document.getElementById("bayar").value;
		var y = document.getElementById("diskon").value;
		
		if (x === 'undefined') {
			x = 0;
		} else if(y === 'undefined'){
			y = 0;
		}

		if((x+y) >= max){
	  			limit = max - x;
	  			if(parseInt(document.getElementById("diskon").value)>limit){document.getElementById("diskon").value=limit;}
		}	
	}

			
</script>
</body>
</html>