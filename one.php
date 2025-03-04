<?php
$a=10;
$b=20;
echo "first num".$a."second num".$b."add".$a+$b;
echo "<br>";

echo $a;

$b=10.2;
echo "<br>";
var_dump($b);
echo "<br><br>";


$item=["car","bus",13,"cycle"];
var_dump($item);


$c="welcome";
$d="ram's house";
echo "<br><br>";
echo $c ." " ."to" ." " .$d;
echo "<br>";


echo strlen("prince");
$s="e";
echo "<br>";
echo strpos("prince",$s);
echo "<br>";
echo strrev("prince");
echo "<br>";

$x=10;
if($x<=10)
{
echo "good";
}
else
{
echo "rishi" ;
}
echo "<br>";


for($i=0;$i<10;$i++)
{
echo $i;
echo "<br>";
}


$i=0;
while($i<=10)
{
$i++;
echo $i;
echo "<br>";
}


$i=0;
do
{
$i++;
echo $i;
echo "<br>";
}while($i<=5);


$item=["car",", ","bike"];
foreach($item as $x)
echo $x;

?>