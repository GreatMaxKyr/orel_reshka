<?php
var_dump($_POST);
echo"
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
";
$totalwin = $_POST['totalwin'];
$played = $_POST['played'];
$calcul = $_POST['calcul'];
$level=$_POST['level'];
if(isset($_POST['olresh'])){
    $played += 1;
    $perekudca = rand(0,1);
    $olresh=$_POST['olresh'];
    $mycoin;
    $coin = rand(0,1);
    if($olresh==0){
    $mycoin='Орел';
    }else{
        $mycoin='Решка';
    }
    $lose="<p>Ви обрали ".$mycoin." але на жаль Ви не вгадали</p><h1>Ви програли</h1>";
    $win="<p>Ви обрали ".$mycoin." і випало теж ".$mycoin."</p><h1>Ви виграли</h1>";
    switch($level){
        case'easy':
            if($coin == $olresh){
                echo $win;
                $calcul += 1;
            }else{
                if($perekudca == $olresh){
                    echo $win;
                    echo "З другого разу";
                    $calcul += 1;
                }else{
                    echo $lose;
                }
            }
        break;
        case 'medium':
            if($coin == $olresh){
                echo $win;
                $calcul += 1;
            }else{
                echo $lose;
            }
        break;
        case 'hard':
            if($coin == $olresh){
                if($perekudca == $olresh){
                    echo $win;
                    $calcul += 1;
                }else{
                    echo $lose;
                    echo "З другого разу";
                }
            }else{
                echo $lose;
            }
        break;
    }   
}else {
    echo "Let the battle begin";

}
if($played==10){
    echo "<form action='result.php' method='POST'>";
}else{
    echo "<form action='game.php' method='POST'>";
}
echo "
            <label><input name='olresh' value='0' type='hidden'></label>       
            <label><input name='played' value='".$played."' type='hidden'></label>
            <label><input name='level' value='".$level."' type='hidden'></label>
            <label><input name='calcul' value='".$calcul."' type='hidden'></label>
            <label><input name='totalwin' value='".$totalwin."' type='hidden'></label>
            <label><input class='ormax' value='' type='submit' color: #232323;></label>
        </form>
";
if($played==10){
    echo "<form action='result.php' method='POST'>";
}else{
    echo "<form action='game.php' method='POST'>";
}
echo "
            <label><input name='olresh' value='1' type='hidden'></label>
            <label><input name='played' value='".$played."' type='hidden'></label>
            <label><input name='level' value='".$level."' type='hidden'></label>
            <label><input name='calcul' value='".$calcul."' type='hidden'></label>
            <label><input name='totalwin' value='".$totalwin."' type='hidden'></label>
            <label><input class='reden' value='' type='submit' color: #232323;></label>
        </form>
";
echo "
    </body>
    </html>
";