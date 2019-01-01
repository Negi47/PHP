
<input type="text" name="user" id="user">

<input type="button" value="submit" onclick="submit()">

<p id="show"></p>
<script>
function submit(){
    console.log("came inside fuction");

    var ds = document.getElementById('user').value;
    var show = document.getElementById('show');
    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function()
    {
        console.log('working');
        if(xml.readyState == 4 && xml.status == 200  ){
            show.innerHTML =  this.responseText;
        }
    
    }

    xml.open("POST","server.php",true);
    xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xml.send("user="+ds);
    return false;
}


</script>