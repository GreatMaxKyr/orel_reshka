<?php 
$totalwin = $_POST['totalwin'];
$calcul = $_POST['calcul'];
$level=$_POST['level'];
if(5<=$calcul){
    echo "
    <!DOCTYPE html>
    <html lang='uk'>
    <head>
        <meta charset='UTF-8'>
        <link rel='stylesheet' href='css/style.css'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Орел чи Решка</title>
    </head>
    <body>
        <div style='text-align: center;'>
            <h1 style='margim-bottom: 0; font-family: sans-serif; color: green'>You win congratulations</h1>
            <img style='' width='600' alt='win' src='img/trophy.png'>
        </div>"
    ;
    if(($totalwin==0 && $level=="easy") || ($totalwin==1 && $level=="medium")){
        $totalwin+=1;
    }
}else{
    echo "
        <div style='text-align: center;'>
        <img width='900' alt='lose' src='img/lose.png'>
        </div>
    ";
}
echo " <h1 style='margim-bottom: 0; font-family: sans-serif;'>Ви грали на рівні складності ".$level."</h1>";
echo "
        <form action='index.php' method='POST'>
            <label><input name='totalwin' value='".$totalwin."' type='hidden'></label>
            <label><input type='submit' value='Почати спочатку' color: #233323;></label>
        </form>
    </body>
";