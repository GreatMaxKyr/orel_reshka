<?php
$level = 1;
$totalwin = 0;
echo"
    <!DOCTYPE html>
    <html lang='uk'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <link rel='stylesheet' href='css/style.css'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Орел чи Решка</title>
    </head>
    <body>
        <form action='game.php' method='POST'>       
";
echo "
    <label><input checked name='level' value='easy' type='radio' color: #232323;>easy</label>
";
            if (isset($_POST['totalwin'])){
                $totalwin = $_POST['totalwin'];
            } 
            if (isset($_POST['level'])){
                $level = $_POST['level'];
            } 
echo "         
            <label><input
"; 
if ($totalwin==0){
   echo "disabled";
}
echo "           
            name='level' value='medium' type='radio' color: #232323;>medium</label>
            <label><input
";
if ($totalwin<2){
    echo "disabled";
}
echo"            
                name='level' value='hard' type='radio' color: #232323;>hard</label>
            <label><input name='played' value='0' type='hidden'></label>
            <label><input name='calcul' value='0' type='hidden'></label>
            <label><input value='Підтвердити вибір' type='submit' class='ok'></label>
            <label><input name='totalwin' value='".$totalwin."' type='hidden'></label>
            </form>
    </body>
    </html>
";