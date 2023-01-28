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

    //четверты урок

    echo"<h1><b>четвертый урок</b></h1>";

    if (isset ($x)) {
        echo 'переменная существует';
    } else {
        echo 'переменной не существует';
    };

    unset($x);

    if (isset ($x)) {
        echo 'переменная существует <br>';
    } else {
        echo 'переменной не существует <br>';
    };

    $x = '15';
    $null;

    echo 'is numeric - '.is_numeric($x)."<br>";
    echo 'is integer - '.is_integer($x)."<br>";
    echo 'is double - '.is_double($x)."<br>";
    echo 'is string - '.is_string($x)."<br>";
    echo 'type - '.gettype($x)."<br>";
    echo 'type - '.gettype($null)."<br>";
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

