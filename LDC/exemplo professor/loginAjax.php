<style>
    .erro {
        color: red;
    }
</style>



    <span id="erro" class="erro"></span>
    <span>username:</span><input type="text" id="username" name="username">
    <input id="checar" type="button" value="checar se ja existe o goiabinha" />

<script>
    document.getElementById ("checar").onclick = function () {
        
        var ajax = new XMLHttpRequest ();
        var usuario = document.getElementById ("username").value;
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4 && ajax.status == 200) {
                if (ajax.responseText=="S") 
                    alert ("usuario já existente");
                else 
                    alert ("pode usar esse nome de usuario");
            }
        }
        ajax.open ("GET","verificaUsuario.php?username="+usuario)
        ajax.send ();

    }
</script>