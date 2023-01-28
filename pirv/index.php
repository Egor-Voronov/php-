<?php
    require "header.php";
    echo "тело документа";

    echo"<h1><b>первый урок</b></h1>";
    $x = 19;
    echo "мой возраст - $x <br>";

    function test ()
    {
        $x = 0;
        echo "test = $x<br>";

        global $x;
        $x + 10;
        echo "переменная x = $x<br>";
    };

    test();

    function test2 ()
    {
        static $id;
        $id++;
        echo $id."<br>";
    };

    for ($i = 0; $i < 10; $i++) {
        test2();
    };

    echo "переменная x = $x<br>";

    echo"<h1><b>второй урок</b></h1>";

    require "footer.php";
?>