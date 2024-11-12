<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="PHP_Datei.php">
        <input type="text" name="input_name" id="name">

        <button type="submit">Submit</button>
    </form>

    <?php
    
        $name = $_REQUEST['input_name'];
    
    ?>


</body>
</html>