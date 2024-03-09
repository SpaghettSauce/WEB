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
echo "целое число $number \n";

$floatNumber = 5.3;
echo "число float $floatNumber \n";

echo "12:". $number +11 . "\n";

$last_month = 1187.23;
$this_month = 1089.98;
echo "Потратил на $last_month - $this_month больше \n\n";

//11

$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo "Мэг потратила $days_per_language дней на изучения языка \n\n";

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
echo "125 после действий: $answer \n\n" ;


//14

$a = 10;
$b = 3;
echo "а на б делится с остатком: $a % $b \n";
if ($a % $b == 0) echo "Делится $a / $b  \n";
else echo "Делится с остатком  $a % $b. \n";

$st = pow(2,10);
echo "2 в 10 степени:  $st \n";
$sqr = sqrt(245);
echo "корень из 245:  $sqr \n";
$arr = [4,2,5,19,13,0,10];
$sumArr = 0;
foreach ($arr as $value)
{
    $sumArr += $value**2;
}
echo "корень из суммы квадрат элементов массива: ". sqrt($sumArr) ."\n";

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
echo "делители  $del \n";
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
        echo "нужно сложить первые  $count \n";
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
echo  "$my_num  вывод 1 функции \n\n";

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

//17

$newNarray = [];
for ($i = 1; $i <= 3; $i++)
{
    $NewNarray[] = str_repeat('x', $i);
}
foreach ($NewNarray as $value)
{
    echo "\n  $value ";
}

function arrayFill($string, $number)
{
    $arr = [];
    for ($i = 1; $i <= $number; $i++)
    {
        $arr[$i] = str_repeat($string, $i);
    }
    return $arr;
}
echo "\n\n";
foreach (arrayFill("x", 10) as $value)
{
    echo "$value \n";
}

$complexArr =  [[1, 2, 3], [4, 5], [6]];
function sumOfArr($complex)
{
    $sum = 0;
    foreach ($complex as $simple) 
    {
        foreach ($simple as $value) 
        {
            $sum += $value;
        }
    }
    return $sum;
}


echo "сумма двумерного массива: ". sumOfArr($complexArr). "\n";

function complexArrCreate($number)
{
    $count = 1;
    for ($i = 0; $count < $number; $i++) 
    {
        echo "[";
        for ($j = 0; $j < 3; $j++)
        {
            $simple[$j] = $count;
            $count += 1;
            echo $simple[$j], " ";
        }
        $complex[$i] = $simple;
        echo "] ";
    }

    return $complex;
}
complexArrCreate(10);
echo "\n";


$array = [2, 5, 3, 9];
$result = $array[0] * $array[1] + $array[2] * $array[3];
echo "сумма произведения 1 и 2, 3 и 4 элементов  $result \n";

$user = ["name" => "Даня", "surname" => "Ходосевич", "patronymic" => "Андреевич"];
echo  $user["name"], " ", $user["surname"], " ", $user["patronymic"] . "\n";

$date = ["year" => "2024", "month" => "03", "day" => "09"];
echo $date["year"], " ", $date["month"], " ", $date["day"] . "\n";

$array = ['a', 'b', 'c', 'd', 'e'];
echo "количество символов в массиве ". count($array). "\n";
echo end($array). "\n";
echo $array[count($array)-2]. "\n";

//18

function compareToTen($num1, $num2) 
{
    return ($num1 + $num2) > 10;
}
print_r(compareToTen(24, 12)). "\n";
print_r(compareToTen(3, 2)). "\n";

function equals($num1, $num2) 
{
    return $num1 == $num2;
}
print_r(equals(5, 5)). "\n";
print_r(equals(1, 11)). "\n"; 

$test = 0; 
echo $test == 0 ? ' верно' : '';
echo "\n";


$age = 25; 
if ($age < 10 || $age > 99) 
{
    echo 'Число меньше 10 или больше 99';
} 
else 
{
    $sum = array_sum(str_split((string)$age));
    echo $sum < 10 ? 'Сумма цифр однозначна' : 'Сумма цифр двузначна';
}
echo "\n";


$arr = [2, 4, 7]; 
if (count($arr) == 3) 
{
    echo "сумма элементов массива: ". array_sum($arr). "\n";
}
echo "\n\n";

//19

for ($i = 1; $i <= 20; $i++) {
    echo str_repeat('x', $i) . "\n";
}

//20

$numbers = [1, 2, 3, 4, 5];
$average = array_sum($numbers) / count($numbers);
echo "Среднее арифметическое элементов массива : $average \n";

$sum = array_sum(range(1, 100));
echo "Сумма чисел от 1 до 100:  $sum \n" ;


$numbers = [4, 7, 124, 41, 5];
$square = array_map('sqrt', $numbers);
echo "Массив квадратных корней: ";
print_r($square);
echo "\n";

$alphabet = range('a', 'z');
$numbers = range(1, 26);
$combine = array_combine($alphabet, $numbers);
echo "Массив с ключами алфавита: ";
print_r($combine);
echo "\n";

$str = '1234567890';
$sumPairs = (int)($str[0].$str[1]) + (int)($str[2].$str[3]) + (int)($str[4].$str[5]) + (int)($str[6].$str[7]) + (int)($str[8].$str[9]);
echo "Сумма пар чисел: $sumPairs \n";