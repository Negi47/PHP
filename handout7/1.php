<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Page Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
</head>
<body>
	<form action="" method="post">
	<input type="text" name="user" id="usr">
	<input type="text" name="pass" id="pswd">
	<input type="button" value="submit" onclick="loadDoc();">
	<div id="demo">

	</div>	
	</form>
</body>
</html>
<script>
	function loadDoc() {
		var ab = document.getElementById("usr").value;
		console.log(ab);
  	var xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "2.php?fname="+ab, true);
  xhttp.send();
}
</script>
