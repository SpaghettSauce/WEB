<?php
//header('Content-type: text/plain');

//1.1

$str = 'ahb acb aeb aeeb adcb axeb';
echo("$str <br />");
echo preg_replace('#a.b#','',$str);
echo ("  <--строки начинающиеся на а и заканчивающиеся на b с двумя символами между ними <br />");

//1.2

$string = 'a1b2c3';
$result = preg_replace_callback('/\d+/', function($matches) {
    return pow($matches[0], 3);
}, $string);

echo $result; 

//2.1

?>


<!DOCTYPE html>
<head>
    <title>Task 2.1</title>
</head>
<body>
    <form method = 'Post'>
        <br>
        <textarea name='inputText' rows='7' cols='70'></textarea>
        <br><br>
        <button type='submit' name='submit'>Посчитть</button>
    </form>
</body>

<?php
    if ('POST' === $_SERVER['REQUEST_METHOD']) {
        if(isset($_POST['submit'])){
            $text = $_POST['inputText'];
            $wordCount = str_word_count($text);
            $charCount = strlen($text);

            echo "Кол-во слов =  $wordCount  <br />";
            echo "Кол-во символов =  $charCount  <br />";
        }
    }
    echo '<br />';
?>

<html lang="en">
<body>
    <form method='post'>
        
    <a href="Task2b.php">Task 2.</a>
    </form>
</body>