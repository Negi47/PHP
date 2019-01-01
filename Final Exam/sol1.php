
<input type="button" value="button" onclick="submit()" >
<p id="fr"></p>
<script>

function submit(){
    var dis = document.getElementById('fr');
    var xhml = new XMLHttpRequest();
    xhml.onreadystatechange = function(){
        if(xhml.readyState == 4 && xhml.status == 200){
            dis.innerHTML =this.responseText;
            dis.style.color = "red";
        }
    }
    xhml.open("GET","abc.txt",'true')
    xhml.send();
}
</script>