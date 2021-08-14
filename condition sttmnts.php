<?php
// $a=malayalam;
echo strlen("malayalam");echo("<br>");
$a=5;
$b=0;
if($a>$b){
    print "true";
}
else{
    print "false";
}
while($b<=500){
    echo "the number is $b";
    $b+=10;
}
echo "<br>";
$arr=array("9","8","7","6","5","4","3","2","1");
foreach ($arr as $value){
    echo $value."<br>";
}

?>