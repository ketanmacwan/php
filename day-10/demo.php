<?php

echo "A. Excercise 1:<br>";
$myfile = fopen("form.txt","r");
echo fread($myfile,filesize("form.txt"));
fclose($myfile);

echo "<br><br>B. Excercise 2:<br>";
$myfile2 = fopen("form.txt","r");
echo fgets($myfile2);
fclose($myfile2);

echo "<br><br>C. Excercise 3:<br>";
$myfile3 = fopen("form.txt","r");
while(!feof($myfile3)){
    echo fgets($myfile3)."<br>";
}
fclose($myfile3);

?>