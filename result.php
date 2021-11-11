<?php 
$totalwin = $_POST['totalwin'];
$calcul = $_POST['calcul'];
$level=$_POST['level'];
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
    <body class='resultbody'>
            ";
if(5<=$calcul){
    echo "
        <h1 class='final_win'>You win, congratulations!</h1>
        <div class='win'></div>
        ";
    if(($totalwin==0 && $level=="easy") || ($totalwin==1 && $level=="medium")){
        $totalwin+=1;
    }
}else{
    echo "
        <h1 class='final_lose'>You lose</h1>
        <div class='lose'></div>
    ";
}
echo " <h1 style='margim-bottom: 0; font-family: sans-serif;'>Ви грали на рівні складності ".$level."</h1>";
echo "
        <form action='index.php' method='POST'>
            <label><input name='totalwin' value='".$totalwin."' type='hidden'></label>
            <label><input  class='ok' type='submit' value='Почати спочатку'></label>
        </form>
    </body>
";