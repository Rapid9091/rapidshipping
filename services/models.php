<?php
include_once "../init.php";

$make= $_GET['make_id'];


$models_query = "SELECT model FROM models where make_id = '$make'";
$result = mysqli_query($con, $models_query) or die("models query failed");
if(mysqli_num_rows($result) > 0){
    foreach($result as $row){ ;?>
        <div class="models_options" data-value="<?php echo $row['model']?>"><?php echo $row['model'] ;?></div>
   <?php }
 }
 else{
   echo '<div class="models_options" data-value="">Data Not found</div>';
 }


?>