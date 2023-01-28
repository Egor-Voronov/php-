<?php
    if($_POST['name'] == '')
        echo "введите имя. <a href='/'>исправить</a>";
    else
        header("Location:index.php");
?>