<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>toets</title>
</head>
<header><h1 style="background-color:red; text-align:center">Toets pagina</h1></header>
<body style="background-color:blue;">
<?php
if(isset($_post["naam"])){
    if(empty($_post["naamm"])){
        echo"Naam is niet ingevild";
    }
    else{
        echo $naam;
    }
}
?>
<form action="" method="post">
    <div style="margin-left:300px; margin-top:100px;"><input type="text" name="naam" value="ali"></div>
    <br>
    <div style="margin-left:400px"><input type="submit" name="submit"></div> 
    <br><br>
    <div style="margin-left:400px;">
        <input type="radio" name="color" value="lightblue" onclick="color1Function()">Light-blue
        <input type="radio" name="color"  value="lightpink" onclick="color2Function()">Light-pink
        <input type="radio" name="color" value="lightgreen" onclick="color3Function()">Light-green
        <input type="radio" name="color" value="lightgray" onclick="color4Function()">Light-gray
        <script src="script.js"></script>
</div>
</form>
<script src="script.js"></script>
</body>
</html>