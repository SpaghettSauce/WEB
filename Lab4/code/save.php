<?php

if ('POST' === $_SERVER['REQUEST_METHOD']) {

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $category = htmlspecialchars(trim($_POST['category']));
    $title = htmlspecialchars(trim($_POST['title']));
    $adText = filter_input(INPUT_POST, 'adText', FILTER_SANITIZE_SPECIAL_CHARS);

    if (!empty($email) && !empty($category) && !empty($title) && !empty($adText)) {
        $filePath = __DIR__ . "/categories/{$category}/" . str_replace(' ', '_', $title) . ".txt";

        if (file_put_contents($filePath, "Email: {$email}\n\n{$adText}")) {
            header('Location: index.php?success=1');
            exit;
        } else {
            header('Location: index.php?error=1');
            exit;
        }
    } else {

        header('Location: index.php?error=1');
        exit;
    }
} 

?>