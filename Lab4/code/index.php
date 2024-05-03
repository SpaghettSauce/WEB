<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Доска объявлений</title>
</head>
<body>
<h2>Добавить объявление</h2>
<form action="task3sv.php" method="post">
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br>
    <label for="category">Категория:</label><br>
    <select id="category" name="category" required>
        <option value="Car">Car</option>
        <option value="Chewing gum">Chewing gum</option>
        <option value="Drip">Drip</option>
    </select><br>
    <label for="title">Заголовок объявления:</label><br>
    <input type="text" id="title" name="title" required><br>
    <label for="content">Текст объявления:</label><br>
    <textarea id="content" name="adText" required></textarea><br>
    <button type="submit" name="submit">Добавить</button>
</form>


<h2>Объявления</h2>
</body>
</html>

<?php
$categoriesDir = 'Categories'; 

echo '<table border="1">';
echo '<tr><th>Email</th><th>Категория</th><th>Заголовок</th><th>Текст объявления</th></tr>';


foreach (new DirectoryIterator($categoriesDir) as $category) {
    if ($category->isDot() || !$category->isDir()) continue; 
    $categoryName = $category->getFilename(); 
    foreach (new DirectoryIterator($category->getPathname()) as $file) {
        if ($file->isDot() || $file->isDir()) continue; 

        $filePath = $file->getPathname();
        $adContent = file_get_contents($filePath);
        $adContentArray = explode("\n", $adContent);
        list($email) = $adContentArray;
        if($adContentArray[2]){
            list($adText) = explode("<b \>", $adContentArray[2]);
            $email = str_replace("Email: ", "", $email); 
            $title = $file->getBasename('.txt'); 
        }

        echo "<tr><td>$email</td><td>$categoryName</td><td>$title</td><td>$adText</td></tr>";
    }
}

echo '</table>';
?>