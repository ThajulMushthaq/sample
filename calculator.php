<?php
$a=5;
$b=10;
echo "<h2> CALCULATOR </h2>";
echo "First number is $a<br>";
echo "Second number is $b<br><br>";
echo"<strong><u>Addition </u></strong><br>";
$sum=$a+$b;
echo "$a + $b = $sum <br><br>";
echo "<strong><u>Substraction</u></strong><br>";
$sub=$a-$b;
echo "$a - $b = $sub <br><br>";
echo "<b><u>Multiplication</u></b><br>";
$mul=$a*$b;
echo "$a x $b = $mul<br><br>";
echo "<b><u>Division</u></b><br>";
$div=$a/$b;
echo "$a / $b = $div <br><br>";
echo "<b>Square of $a </b><br>";
$asqr=$a*$a;
echo "$a<sup>2</sup> = $asqr <br>";
echo "<b>Square of $b </b><br>";
$bsqr=$b*$b;
echo "$b<sup>2</sup> = $bsqr <br><br>";
echo "<b><u>Prime or Not</u></b><br>";
for($i=1;$i<=$a;$i++){
    if(($a%$i)==0){
        print "$a is prime<br>";
    }
    else{
        echo "$a is not prime<br>";
    }

}

?>