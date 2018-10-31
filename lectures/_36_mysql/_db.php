<?php
error_reporting(0);
const DB_HOST = 'localhost', DB_USER = 'root', DB_PASSWORD = '',DB_NAME = 'cms';

$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
?>
<div class="form-control">

<pre>
<?php echo ($con ? "we are connected" : "db connection error"); ?>
</pre>
</div>