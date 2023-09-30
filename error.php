<?php


$js = "<script>window.location.href = 'https://alif.tj'</script>";

echo htmlentities($js);

exit;

// 9. ОБРАБОТКА ОШИБОК И ИСКЛЮЧЕНИЯ
// 9.1. Конструкция try catch finally
// 9.2. Генерация исключений


// ini_set('error_reporting', E_ALL);
// if (!ini_get('display_errors')) {
//     ini_set('display_errors', '1');
// }
// ini_set('display_errors', '1');


function chopi_musbat($n)
{
    if ($n >= 0)
        echo "Адади додашуда $n мусбӣ аст<br>";
    else
        throw new Exception("Error: Адади додшуда $n манфӣ аст,
                                бояд мусбӣ бошад", 10);
}

try {
    chopi_musbat(156);
    chopi_musbat(2);
    chopi_musbat(-10);
} catch (Exception $a) {
    echo $a->getMessage();
    echo '<br>';
    echo $a->getCode();
    echo '<br>';
    echo $a->getFile();
    echo '<br>';
    echo $a->getLine();
    echo '<br>';
    echo '<pre>';
    print_r($a->getTrace());
    echo '</pre>';
    echo '<br>';
    echo $a->getTraceAsString();
}

exit;

// phpinfo();

// $a =  $_GET['myvar'];

// try {
// 	$a =  $_GET['myvar'];

// 	echo $a;

// }  catch(Exception $e) {
// 	print_r($e);
// }

// exit;
try
{
    // код, который может вызвать исключение
    $a = 5;
    $b = 0;
    $result = $a / $b;
    echo $result;
}
catch(DivisionByZeroError $ex)
{
    // обработка исключения
    echo "Произошло исключение:<br>";
    echo $ex . "<br>";
}
// finally
// {
//     echo "Блок finally<br>";
// }
// echo "Конец работы программы";

exit;
