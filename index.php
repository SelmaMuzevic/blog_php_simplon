<?php
$array = scandir('post');

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Awsome Blog</title>
</head>
<body>
    <h1>Amazing Blog !</h1>
    <nav><a href="create.html">New Post</a></nav>
         <p>Hello, i am a developpeuse web !</p>
    
    <pre><?php var_dump($array); ?></pre>
    <?php foreach($array as $file) { ?>
    <article>
        <h2><?php echo $file; ?><h2>
            <p></p>
     </article>
     <?php } ?>
    </body>
</html>