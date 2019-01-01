<input type="text" id="search" onkeyup="submit()">
<!-- <input type="button" value="button"  > -->


<p id="fr"></p>
<script>

function submit(){
    var search_data = document.getElementById('search').value; //ab

    var fr = document.getElementById('fr');
    var result = "";

    var xhml = new XMLHttpRequest();
    xhml.onreadystatechange = function(){
        if(xhml.readyState == 4 && xhml.status == 200){
            var data = this.responseText;

            var arrdata = data.split(',');

            for(var i = 0 ; i<arrdata.length;i++)
            {
                var substr = arrdata[i].substr(0,search_data.length);
                if(search_data == substr)
                {
                    result +=  " "+arrdata[i];
                }
            }

            // arrdata.forEach(v => {
            //     var substr = v.substr(0, search_data.length);
            //     console.log("searchdata : "+ search_data +" substr : "+substr);
            //     if (search_data == substr)
            //         result += " " + v; 
            
            //     });
                console.log("result : "+result);
                fr.innerHTML = result;
        }
    }

    xhml.open("GET","abc.txt")
    xhml.send();

    
}
</script>