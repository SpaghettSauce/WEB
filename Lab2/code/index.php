<?php
header('Content-type: text/plain');//из-за того что код в браузере html, "\n" воспринимается как пустое место, поэтому использую такой work around
//1
/* Imagine a lot of code here*/

$very_bad_unclear_name = "15 chicken wings";


//Write your code here:

$order = &$very_bad_unclear_name;
$order .= ' and a large Dobriy cola';


//Dont change the line below

echo "\nYour order is:$very_bad_unclear_name.";

//2
echo "\n\n";
$number = 1;
echo "целое число ".$number. "\n";

$floatNumber = 5.3;
echo "число float ".$floatNumber."\n";

echo "12: ".$number +11 . "\n";

$last_month = 1187.23;
$this_month = 1089.98;
echo "Потратил на ".$last_month - $this_month. " больше \n\n";

//11

$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo "Мэг потратила ". $days_per_language . "дней на изучения языка \n\n";

//12

echo "8 в квадрате: ". 8 ** 2 ."\n\n";

//13

$my_num = 125;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo "125 после действий: ". $answer ."\n\n" ;


//14

$a = 10;
$b = 3;
echo "а на б делится с остатком: ". $a % $b. "\n";
if ($a % $b == 0) echo "Делится". $a / $b. "\n";
else echo "Делится с остатком ". $a % $b. "\n";

$st = pow(2,10);
echo "2 в 10 степени: ". $st. "\n";
$sqr = sqrt(245);
echo "корень из 245: ". $sqr ."\n";
$arr = [4,2,5,19,13,0,10];
$sumArr = 0;
foreach ($arr as $value)
{
    $sumArr += $value**2;
}
echo "корень из суммы квадрат элементов массива: ". sqrt($sumArr). "\n";

$sqr1 = sqrt(379);
echo "округляем до целых ". round($sqr1,0). "\n";
echo "округляем до десятых ". round($sqr1,1). "\n";
echo "округляем до сотых ". round($sqr1,2). "\n";

$sqr2 = sqrt(587);
$arrSqrt = [
    'floor' => floor($sqr2),
    'ceil' => ceil($sqr2)    
];
print_r($arrSqrt). "\n";

$newVar = [4,-2,5,19,-130,0,10];
echo "минимальное число массива: ". min($newVar)." максимальное число массива: ". max($newVar). "\n";

echo "рандомное число от 1 до 100 :".rand(1,100) . "\n";
echo "массив заполненный рандомными числами: ";
$anotherArr =[];
for($i = 0; $i < 10; $i++)
{
    array_push($anotherArr, rand(1, 100));
}
print_r($anotherArr) . "\n";

$a = rand(1,100);
$b = rand(1,100);
echo abs($a - $b) . "\n";
$moreArr = [1,2,-1,-2,3,-3];
foreach ($moreArr as $value)
{
    $arrPos[] = abs($value);
}
echo "массив на позитиве: ";
print_r($arrPos). "\n";

$del = rand(1,100);
$arrDel =[];
for ($i =1; $i <=$del; $i++)
{
    if ($del % $i == 0)
    {
        array_push($arrDel, $i);
    }
}
echo "делители " . $del . "\n";
print_r($arrDel). "\n";

$arrSum = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sumNum = 0;
$count = 0;
foreach ($arrSum as $value)
{
    $count +=1;
    $sumNum += $value;
    if ($sumNum > 10)
    {
        echo "нужно сложить первые  ". $count. "\n";
        break;
    }
}

//15

function printStringReturnNumber()
{
    echo "poggers ". " ";
    return 12345;
}
$my_num = printStringReturnNumber();
echo  $my_num ."  вывод 1 функции ". "\n\n";

//16

function increaseEnthusiasm($strin)
{
    echo $strin . "!" ;
}
$inputString = "Salt";
echo "  вывод 2 функции ". increaseEnthusiasm($inputString) . "\n";

function repeatThreeTimes($string)
{
    echo $string . " " . $string . " " . $string;
}
echo "  вывод 3 функции ". repeatThreeTimes($inputString). "\n";
echo  "  вывод 2 и 3 функции ".increaseEnthusiasm(repeatThreeTimes($inputString)) . "\n";

function cut($anthrStr, $howMany)
{
    return substr($anthrStr, 0, $howMany);
}
echo "сокращённая строка: " . cut ($inputString, 10) . "\n";

function Recurs($arr, $i = 3)
{
    if($i < count($arr))
    {
        echo "$arr[$i] ";
        Recurs($arr, $i + 1);
    } 
}
$arr = [65,4124,64,11,99,532,8];
echo "последние элементы массива через рекурсию : ";
Recurs($arr). "\n";

function sumDig($num)
{
    $sum = 0;
    while($num > 0)
    {
        $sum += $num % 10;
        $num  = floor($num / 10);
    }
    if ($sum > 9)
    {
        return sumDig($sum);
    }
    else 
    {
        return $sum;
    }
}

echo "\n"."сумма цифр через функцию: ". sumDig(75754836) . "\n";
echo "сумма цифр через функцию: ". sumDig(134) . "\n";


