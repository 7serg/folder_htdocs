<?php 

$conn = mysqli_connect('localhost', 'root', '', 'serg_a');

$model = [];

require MODEL_DIR . 'blog.php';


unset($conn);


 ?>