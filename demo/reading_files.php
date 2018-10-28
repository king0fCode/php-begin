<?php
$file = "example.txt";

if($handle = fopen($file, 'r')){

//  echo  $content = fread($handle, 10); // each bite equal a character
echo  $content = fread($handle, filesize($file)); // php build in function file size
fclose($handle);

} else {
   echo "The files could not be written";
}


?>