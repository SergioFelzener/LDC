<style>
    .erro {
        color: red;
    }

    .status {
        width: 32px;
        height: 32px;
    }
</style>



    <span id="erro" class="erro"></span>
    <span>username:</span><input type="text" id="username" name="username"><span class="retorno"></span>
    

<script>
    document.getElementById ("username").onkeyup = function () {
        
        var ajax = new XMLHttpRequest ();
        var usuario = document.getElementById ("username").value;
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4 && ajax.status == 200) {
                if (ajax.responseText=="S") 
                    document.querySelector (".retorno").innerHTML = "<img class='status' src='deumerda.png'/>"
                else 
                    document.querySelector (".retorno").innerHTML = "<img class='status' src='acertomiseravi.jpg'/>"
            }
        }
        ajax.open ("GET","verificaUsuario.php?username="+usuario)
        ajax.send ();

    }
</script>