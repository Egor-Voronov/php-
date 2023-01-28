<?php
    // второй урок
    $title = 'уроки php пирвп';
    require "header.php";
    echo "тело документа <br>";
    include_once "page.php";

    //первый урок
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

    // второй урок
    require "footer.php";
?>

<h1><b>третий урок</b></h1>
<form action="check.php" name='test' method='post'><br>
    <label>имя</label><br>
    <input type="text" name='name' placeholder="имя"><br>
    <label>email</label><br>
    <input type="text" name='email' placeholder="email"><br>
    <label>сообщение</label><br>
    <textarea name='email' cols='35' rows='15' placeholder="email"></textarea><br>
    <input type="submit" name='done' value='готово'>
</form>
