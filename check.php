<?php
    if(isset($_POST["confirm"])){
        if($_POST["pass"] == "")
            echo "Ievadiet paroli"
        else
            header("Location:index.php")
    }
    print_r ($_POST);
?>