<!-- PHP Visitor Counter
Author: Leon(Y.B Liang)
bingsnote.info -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
    footer{
        width: 100%;
        margin:50em; auto;
    }
    </style>
    <title>Web Traffic Counter</title>
</head>
<body>
<footer><?php

echo "You are the  "; 
require("count.php"); 
echo "  visitors"; 
?></footer>

</body>
</html>


