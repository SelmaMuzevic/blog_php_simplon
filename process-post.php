<?php

// On recupere les informations du formulaire
$title = $_POST['title'];
$content = $_POST['content'];

echo '<p>title : ' .$title. '</p>';
echo '<p>content : ' .$content. '</p>';

if(!is_dir('post')){
    mkdir('post');
}


// on ouvre le fichier
$file = fopen('post/' .$title . '.txt', 'w');
fwrite($file, $content);
fclose($file);
echo 'Whell done ! You have created new post !';
?>