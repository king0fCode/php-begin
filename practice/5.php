<?php include "functions.php";?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>


		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">


	<?php

/*  Step1: Use a pre-built math function here and echo it

Step 2:  Use a pre-built string function here and echo it

Step 3:  Use a pre-built Array function here and echo it

 */

echo pow(4, 4);
echo "<br>";
echo strlen("Hello world");
echo "<br>";
$arr = [44, 43, 2, 23, 23, 23234, 345, 42];

$arrPosition = in_array(44, $arr); //find position of the value in array

sort($arr);
echo "<br>";

print_r($arr);
echo "<br>";

echo $find;
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php";?>