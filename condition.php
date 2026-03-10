<?php 
$b=7;
if($b<0)
   echo"the number is negative";
elseif($b>0)
    echo"the number is positive <br>";
else
    echo"the number is 0";
$age=12;
if($age>18)
    echo"you are eligable to vote";
elseif($age<18)
    echo"you are not eligable to vote";
$day=1;
switch($day){
    case "1":
        echo"Monday";
        break;
        case "2":
        echo"Tuesday";
        break;
        case "3":
        echo"Wednesday";
        break;
        case "4":
        echo"Thursday";
        break;
        case "5":
        echo"Friday";
        break;
}
?>
