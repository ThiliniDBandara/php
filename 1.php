<html>
<head>
<title>php</title>
</head>
<body>

<?php
$num=98.78;
$var=76;
$str="hello world";
echo"$num";
echo"<br/>";
echo"$var";
echo"<br/>";
echo"$str";
echo"<br/>";
?>

<?php
$first="Good morning!";
$second="Have a nice day!";
$third=$second;

echo"$third";
echo"<br/>";
$third .=$first;
echo "$third";
echo"<br/>";
echo strtoupper($third);
echo"<br/>";
echo strtolower($third);
echo"<br/>";
echo ucwords($third);
?>

<?php
$msg="Have a nice day!";
echo"<br/>";
echo $msg;
echo"<br/>";
echo strlen($msg);
echo"<br/>";
echo str_replace("nice","great",$msg);
echo"<br/>";
echo str_repeat($msg,4);
echo"<br/>";
echo substr($msg,5,16);
?>

<?php
$msg="Have a nice day!";
echo"<br/>";
echo $msg;
echo"<br/>";
echo strstr($msg,"day");
echo"<br/>";
echo strpos($msg,"ce");
echo"<br/>";
echo strchr($msg,"d");
?>

<?php
$n1=25;
$n2=5;
echo"<br/>";
echo $n1+$n2;
echo"<br/>";//addition

echo $n1-$n2;
echo"<br/>";//subtraction

echo $n1*$n2;
echo"<br/>";//multipication

echo $n1/$n2;
echo"<br/>";//divition

echo $n1++;
echo"<br/>";//post-increment

echo --$n1;
echo"<br/>";//pre-decrement

?>

<?php
echo"<br/>";
echo "absolute number: " .abs(-670);
echo"<br/>";
echo "power result:" .pow(2,10);
echo"<br/>";
echo "random number:" .rand();
echo"<br/>";
echo "random number within range:" .rand(25,35);
echo"<br/>";
echo "remainder:" .fmod(36,4);
echo"<br/>";
echo "square root:" .sqrt(225);
echo"<br/>";

?>
</body>
</html>