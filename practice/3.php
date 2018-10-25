<?php include "functions.php";?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>

	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP

Step 2: Make a forloop  that displays 10 numbers

Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

$num = 10;
if ($num < 8) {
    echo "if condition met";
} else if ($num > 15) {
    echo "else if Condition met";
} else {
    echo " I Love PHP";
}

for ($count = 1; $count <= 10; $count++) {
    echo "<br/>" . $count;

}

$val = 515;

switch ($val) {
    case 50:
        # code...
        echo "<br>this is case number 1";

        break;
    case 55:
        # code...
        echo "<br>this is case number 2";
        break;
    case 60:
        # code...
        echo "<br>this is case number 3";
        break;
    case 65:
        # code...
        echo "<br>this is case number 4";
        break;
    case 70:
        # code...
        echo "<br>this is case number 5";
        break;
    default:
        # code...
        echo "<br>This is default condition of switch";
        break;
}

?>






</article><!--MAIN CONTENT-->

<?php include "includes/footer.php";?>