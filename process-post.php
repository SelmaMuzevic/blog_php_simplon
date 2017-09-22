<?php

// on recupere les variables title et content
$title = htmlspecialchars($_POST['title']);
$content = htmlspecialchars($_POST['content']);

if (!is_dir('post')) {
    mkdir('post');
}

// 'post/my first blog.txt'
$file = fopen('post/' . $title . '.txt', 'w');
fwrite($file, $content);
fclose($file);
echo '<p>Well done! You have created a new post!</p>';
header('location: index.php');
?>