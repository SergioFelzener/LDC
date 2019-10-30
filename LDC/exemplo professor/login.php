<style>
    .erro {
        color: red;
    }
</style>
<?php
    $deuMerda = false;
    
    if (isset($_GET['username'])) {
        $username = $_GET['username'];    
        if ($username == "fabio")
            $deuMerda = true;
        if ($username == "sergio")
            $deuMerda = true;
        if ($username == "didi")
            $deuMerda = true;
        
        if ($deuMerda == true) {

        } else {
            header("location:home.php");        
        }
    }

?>

<form action="login.php">
    <?php if ($deuMerda == true) 
            echo "<span class='erro'>DEU MERDA ANIMAL</span>";
    ?>
    <span>username:</span><input type="text" name="username">
    <input type="submit"/>
</form>