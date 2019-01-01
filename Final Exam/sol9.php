<input type="text" name="a" placeholder="value 1" id="a">
<input type="text" name="b" placeholder="value 2" id="b">
<input type="button" value="sub" onclick="submit()">
<p id="show">value is: </p>
<script>
function submit(){

    var show = document.getElementById('show');
    var a= document.getElementById('a').value;
    var b= document.getElementById('b').value;
    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function() {
        if(xml.readyState == 4 && xml.status == 200){
            show.innerHTML= this.responseText;
        }
    }
    xml.open("POST","cal.php",true)
    xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xml.send("value1= "+a+"&value2="+b);
}

</script>
