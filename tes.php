<<<<<<< HEAD
baris satu ini
=======
<!DOCTYPE html>
<html>
<head>
	<title>tes</title>
</head>
<body>
	<p>tes</p>
<input type="text" id="ss" onkeyup="tes()">
<script type="text/javascript">
		function tes(){
			var x = document.getElementById("ss").value;
			console.log(x);
			if(parseInt(x)>5400){ x =5400; }
			x.addEventListener("keyup", function(e) {
			  x.value = formatRupiah(this.value, "Rp. ");
			});
		}


	function formatRupiah(angka, prefix) {
  		var number_string = angka.replace(/[^,\d]/g, "").toString(),
    	split = number_string.split(","),
    	sisa = split[0].length % 3,
    	rupiah = split[0].substr(0, sisa),
    	ribuan = split[0].substr(sisa).match(/\d{3}/gi);

  // tambahkan titik jika yang di input sudah menjadi angka ribuan
  if (ribuan) {
    separator = sisa ? "." : "";
    rupiah += separator + ribuan.join(".");
  }

  rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
  return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
}
	// );
</script>
</body>
</html>
>>>>>>> parent of cf41760... hapus tes
