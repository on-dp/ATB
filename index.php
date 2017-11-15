
<?php
if(isset($_COOKIE['m1'])){$_COOKIE['m1']=1;
}
if($_COOKIE['m1']==1){$GLOBALS['mob']=1;}
 
$link = mysqli_connect('localhost', 'root', '', 'RO');
    if (!$link){
    echo mysqli_connect_errno();
    echo "<br>";
    echo mysqli_connect_error();    }


$mob = "SELECT mob FROM triger  WHERE id='1'";           
$resultmob = mysqli_query($link, $mob);                     
$rowmob = mysqli_fetch_array($resultmob, MYSQLI_ASSOC);     


if(isset($_COOKIE['m2'])){$_COOKIE['m2']=1;}


if (isset($_COOKIE['m1'])){     
        echo 'кука есть m1' ."-".$_COOKIE['m1']."-".$GLOBALS['mob'];} else { 
       "куки нет";}
if (isset($_COOKIE['m2'])){     
        echo 'кука есть m2' . $_COOKIE['m2'] ;} else { 
       "куки нет";}
if (isset($_COOKIE['m3'])){     
        echo 'кука есть m3' ;} else { 
       "куки нет";}
if (isset($_COOKIE['m4'])){     
        echo 'кука есть m4' ;} else { 
       "куки нет";}
if (isset($_COOKIE['m5'])){     
        echo 'кука есть m5' ;} else { 
       "куки нет";}
if (isset($_COOKIE['m6'])){     
        echo 'кука есть m6' ;} else { 
       "куки нет";}
if (isset($_COOKIE['m7'])){     
        echo 'кука есть m7' ;} else { 
       "куки нет";}
if (isset($_COOKIE['m8'])){     
        echo 'кука есть m8' ;} else { 
       "куки нет";}
if (isset($_COOKIE['m9'])){     
        echo 'кука есть m9' ;} else { 
       "куки нет";}






 ?>
<!DOCTYPE html>


    <head>
        <meta charset="utf-8">
                <title>RO Develop</title>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>

        
        <div class="main">
<?php 
if($_COOKIE['m1']==1){ ?>
            <div class="map11"><a href='/ATB/PHP/map/map1.php'></a>
 <a href="PHP/battle/battle1.php"><img class="mob_img" src="IMG/mobs/poring.gif"></a>
 <a href="PHP/battle/battle2.php"><img class="mob_img" src="IMG/mobs/drops.gif"></a>
 <a href="PHP/battle/battle3.php"><img class="mob_img" src="IMG/mobs/poporing.gif"></a>
 <a href="PHP/battle/battle4.php"><img class="mob_img" src="IMG/mobs/marin.gif"></a>
</div>    

<?php } else { ?> 
<div class="map1"><a href='/ATB/PHP/map/map1.php'>MAP1</a></div>
<?php } 
 
 
if($_COOKIE['m2']==1){ ?>
<div class="map22"><a href='/ATB/PHP/map/map2.php'>MAP2</a></div>    
<?php } else { ?> 
<div class="map2"><a href='/ATB/PHP/map/map2.php'>MAP2</a></div>
<?php } ?>            
            
            


           
            <div class="map2"><a href='/ATB/PHP/map/map2.php'>MAP2</a></div>
            <div class="map3"><a href='/ATB/PHP/map/map3.php'>MAP3</a></div>
            <div class="map4"><a href='/ATB/PHP/map/map4.php'>MAP4</a></div>
            <div class="map5"><a href='/ATB/PHP/map/map5.php'>MAP5</a></div>
            <div class="map6"><a href='/ATB/PHP/map/map6.php'>MAP6</a></div>
            <div class="map7"><a href='/ATB/PHP/map/map7.php'>MAP7</a></div>
            <div class="map8"><a href='/ATB/PHP/map/map8.php'>MAP8</a></div>
            <div class="map9"><a href='/ATB/PHP/map/map9.php'>MAP9</a></div>  
        </div>
		  


    </body>

