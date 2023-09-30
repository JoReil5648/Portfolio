<?php



function chopi_musbat($n)
{
    if ($n >= 0)
        echo "Адади додашуда $n мусбӣ аст<br>";
    else
        throw new Exception("Адади додшуда $n манфӣ аст,
                                бояд мусбӣ бошад", 10);
}

try {
    chopi_musbat(156);
    chopi_musbat(-10);
    chopi_musbat(2);
} catch (Exception $a) {
    echo $a->getMessage();
}


// Начало контролируемого блока try
try {
    throw new Exception('Произошла исключительная ситуация', 9);
} catch (Exception $e) {
    echo "Исключение " . $e->getCode() .
        ": " . $e->getMessage() . "<br>";
    echo "в файле " . $e->getFile() . "<br>";
    echo "строка " . $e->getLine() . "<br>";
}
