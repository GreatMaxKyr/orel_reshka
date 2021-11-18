<?php
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
    $mycoin='Максим';
    }else{
        $mycoin='Денис';
    }
    $lose="<div class='text'>
            <p>Ви обрали ".$mycoin." але на жаль Ви не вгадали</p>
            <h1 class='maintext l weigh'>Ви програли,</h1>
            <p class='maintext l'>але в вас ще є шанс</p>
        </div>";
    $win="<div class='text'>
            <p>Ви обрали ".$mycoin." і випав теж ".$mycoin."</p>
            <h1 class='maintext weigh'>Ви виграли,</h1>
            <p class='maintext'>так тримати</p>
        </div>";
    switch($level){
        case'easy':
            if($coin == $olresh){
                echo $win;
                $calcul += 1;
                echo "<p>&nbsp;</p>";
            }else{
                if($perekudca == $olresh){
                    echo $win;
                    echo "<div class='text'><p>З другого разу</p></div>";
                    $calcul += 1;
                }else{
                    echo $lose;
                    echo "<p>&nbsp;</p>";
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
                    echo "<p>&nbsp;</p>";
                }else{
                    echo $lose;
                    echo "<div class='text'><p>З другого разу</p></div>";
                }
            }else{
                echo $lose;
                echo "<p>&nbsp;</p>";
            }
        break;
    }   
};
echo "
    <div class='coinform'>
";
if($played==10){
    echo "<form class='maxform' action='result.php' method='POST'>";
}else{
    echo "<form class='maxform' action='game.php' method='POST'>";
}
echo "
            <label><input name='olresh' value='0' type='hidden'></label>       
            <label><input name='played' value='".$played."' type='hidden'></label>
            <label><input name='level' value='".$level."' type='hidden'></label>
            <label><input name='calcul' value='".$calcul."' type='hidden'></label>
            <label><input name='totalwin' value='".$totalwin."' type='hidden'></label>
            <label class='coins'><input class='ormax' value='' type='submit' color: #232323;></label>
        </form>
";
if($played==10){
    echo "<form class='denform' action='result.php' method='POST'>";
}else{
    echo "<form class='denform' action='game.php' method='POST'>";
}
echo "
            <label><input name='olresh' value='1' type='hidden'></label>
            <label><input name='played' value='".$played."' type='hidden'></label>
            <label><input name='level' value='".$level."' type='hidden'></label>
            <label><input name='calcul' value='".$calcul."' type='hidden'></label>
            <label><input name='totalwin' value='".$totalwin."' type='hidden'></label>
            <label class='coins'><input class='reden' value='' type='submit' color: #232323;></label>
        </form>
";
echo "</div>";
echo "
    </body>
    </html>
";