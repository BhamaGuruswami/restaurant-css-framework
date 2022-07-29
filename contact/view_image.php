<?php
require_once "confi_image.php";
$sql="SELECT image FROM images ORDER BY id DESC"; 
$result = $db->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view image</title>
</head>
<body>
    <div class ="container">
        <h1>image from database</h1>

        <div class="gallery">
        <?php if($result->num_rows > 0){ ?> 
            <div class ="img-box">
            <?php while($row = $result->fetch_assoc()){ ?> 
                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> 
                <?php } ?> 
        </div>
        <?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } ?>
</div>
<a href= "backoffice.php">upload image</a>
</div>
 
</body>
</html>


