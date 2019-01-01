<html>
<head>
<script type="text/javascript">
function changepic()
{
	var a =Math.random(10*10)
	console.log(a);
 document.getElementById("demp").style.top= a;  
}
</script>
</head>
<body>

<h1>My First Web Page</h1>

<img id="demp" src="b-bishop.png"  style="position:absolute; left: 400; top: 50; width: 50;      height: 50;"/>

<button type="button" onclick="changepic()">change pic</button>
</body>
</html>