<script>
	var xhttp = new XMLHttpRequest();

	var h1 = document.getElementById('h1');

	function submitData(e) {
		e.preventDefault();
		
		xhttp.onreadystatechange = function () {
			if (this.readyState == 4 && this.status == 200) {
				h1.innerHTML = this.responseText;
			}
		};

		xhttp.open("POST", "db.php", true);
		// xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		xhttp.send();

		return false;
	}


	xhttp.onreadystatechange = function () {
		if (this.readyState == 4 && this.status == 200)
			getData(this);
	};
	xhttp.open('GET', 'data.xml');
	xhttp.send();

	//funciton for getting data from xml page
	function getData(xml) {
		var xmlDoc = xml.responseXML;
		var table = "<tr><th>Firstname</th><th>lastname</th></tr>";

		var x = xmlDoc.getElementsByTagName('student');

		for (var i=0; i<x.length; i++) {
			table += "<tr><td>" +
				x[i].getElementsByTagName("firstname")[0].childNodes[0].nodeValue +
				"</td></tr>";
		}

		document.getElementById("table").innerHTML = table;
	}

</script>

<table id="table"></table>

<h1 id="h1"></h1>

<form action="" method="POST" onsubmit="return submitData(event)">
	<input type="text" name="fname" id="fname">
	<input type="submit" name="submit">
</form>
test.php
Displaying test.php.