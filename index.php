<?php 
require 'config.php';
if(isset($_POST['submit'])){
    $u_name = $_POST['up_name'];
    if($_FILES["up_image"]["error"] == 4){
        echo "<script> alert('Image Does Not Exist'); </script>";
    }else{
        $fileName = $_FILES["up_image"]["name"];
        $fileSize = $_FILES["up_image"]["size"];
        $tmpName = $_FILES["up_image"]["tmp_name"];

        $validImageExtension = ['jpg', 'jpeg', 'png'];
        $imageExtension = explode('.', $fileName);
        $imageExtension = strtolower(end($imageExtension));
        if(!in_array($imageExtension, $validImageExtension)){
            echo "<script> alert('Invalid Image Extension); </script>";
        }else if($fileSize > 1000000){
            echo "<script> alert('Image Size Is Too Large'); </script>";
        }else{
            $newImageName = uniqid();
            $newImageName .= '.' . $imageExtension;

            move_uploaded_file($tmpName, 'img/'. $newImageName);
            $qry = "INSERT INTO php_upload VALUES('', '$u_name', '$newImageName')";
            mysqli_query($db,$qry);
            echo 
            "<script> 
            alert('Successfully add');
            
            </script>"
            ;
        }
    }
}

?>
<!doctype html>
<html lang="en">

<head>
  <title>Upload</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <div class="container w-25 mt-5">
    <h2>Upload</h2>
    <div class="mb-3">

        <form class="" action="" method="post" autocomplete="off" enctype="multipart/form-data">

        <label for="up_name" class="form-label">Name</label>
        <input type="text" class="form-control" name="up_name" id="up_name" required value="">
       
        <label for="up_image" class="form-label">Choose file</label>
        <input type="file" name="up_image" id="up_image" accept=".jpg, .jpeg, .png" value="" class="form-control" >
        
        <button type="submit" name="submit" class="btn btn-primary mt-3">Submit</button>
        
        <a class="btn btn-primary mt-3" href="data.php">View</a>

        </form>
       
    </div>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>