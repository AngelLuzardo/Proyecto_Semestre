<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo constant("URL");?>public/css/normalize.css">
    <link rel="stylesheet" href="<?php echo constant("URL");?>public/css/default.css">
</head>
<body>
    <?php require "views/header.php"?>
    <h1><?php echo $this->mensaje; ?></h1>
    <?php require "views/footer.php"?>

    <?php include_once "libs/scriptsJS.php"?>
    
</body>

</html>