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
        <meta name='viewport' content='width=device-width, user-scalable=yes , initial-scale=1.0 , minimum-scalable=1.0 , maximum-scale=2.0'>
        <title>Орел чи Решка</title>
    </head>
    <body>
        <form class='levelcheck' action='game.php' method='POST'>
        <p>       
";
echo "
            <input class='cool-radio' id='easy' checked name='level' value='easy' type='radio'>
            <label for='easy' class='emh'>easy</label>
";
            if (isset($_POST['totalwin'])){
                $totalwin = $_POST['totalwin'];
            } 
            if (isset($_POST['level'])){
                $level = $_POST['level'];
            } 
echo "         
            <input
"; 
if ($totalwin==0){
   echo "disabled";
}
echo "           
            name='level' value='medium' id='medium' type='radio' class='cool-radio'>
            <label for='medium' class='emh'>medium</label>
            <input
";
if ($totalwin<2){
    echo "disabled";
}
echo"            
                name='level' value='hard' id='hard' type='radio' class='cool-radio'>
                <label for='hard' class='emh'>hard</label>
            </p>
            <label><input name='played' value='0' type='hidden'></label>
            <label><input name='calcul' value='0' type='hidden'></label>
            <label><input value='Підтвердити вибір' type='submit' class='ok'></label>
            <label><input name='totalwin' value='".$totalwin."' type='hidden'></label>
            </form>
    </body>
    </html>
";