<script>


var xml = new XMLHttpRequest();

xml.open("GET", "food.xml", true);
xml.send();


xml.onreadystatechange = function(){
    if(xml.readyState == 4 && xml.status == 200){
        var xmldata = this.responseXML;

        var items = xmldata.getElementsByTagName('item');

        console.log(items);

        var data = "";

        for (var i=0; i < items.length; i++)
            data += "<tr><td>"
                + items[i].getElementsByTagName('name')[0].childNodes[0].nodeValue
                + "</td></tr>";

        }

        document.getElementById('show').innerHTML = data;
}


</script>


<table id="show">
</table>