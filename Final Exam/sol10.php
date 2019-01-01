<input type="button" value="submit" onclick="submit()">
<img src="apple.jpg" alt="image" style="width: 150px; height:100px;">
<img src="apple2.jpg" alt="image" style="width: 100px;">
<div id="show" style="width:100%;width:100%;"></div>
<script>
var i = 0;
function submit(){

    // var i =0;
    var show = document.getElementById('show');
    var xml= new XMLHttpRequest();
    xml.onreadystatechange= function(){
        if(xml.readyState==4 && xml.status ==200){
            show.innerHTML= this.responseText;
        }
        
    }
    xml.open("POST","image.php",true);
    xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xml.send("count="+i);
    ++i;
}

</script>
