
<?php
echo "<h1>My 1st PHP program</h1>";
function add(){
    static $s=0;
    echo "$s<br>";
    $s++;
}
add();
add();
$a=5;
$b=15;
function demo(){
    $txt = "PHP";
    $color="red";
    echo "<br>I love $txt!<br>";
    // echo in diff types
    print "hello world<br>";
    echo "my car is $color and blue<br>";
    $x=5*5;
    echo $x."<br>";
    global $a,$b;
    print $a + $b;

}
demo();
//array
$arr=array("car","bike","bus");
var_dump($arr);
echo "<br>";
print_r ($arr);
echo "<br>";
//str functions
echo strlen("abcdefghijklmnopqrstuvwxyz");echo "<br>";
print str_word_count("i'm thajul mushthaq");echo "<br>";
echo strrev("sana");echo "<br>";
echo strpos("hello world","world");echo "<br>";
echo str_replace("world","tj","hello world, how old are you world");echo "<br>";
echo str_repeat("wow",13);echo "<br>";



?>
