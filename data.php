<?php require 'config.php'; ?>
<!doctype html>
<html lang="en">

<head>
  <title>View</title>
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
    <div class="container mt-5">
        <h1>View</h1>
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $i = 1;
                        $rows = mysqli_query($db, "SELECT * FROM php_upload ORDER BY up_id DESC");
                        foreach($rows as $row) :  
                    ?>
                    <tr class="">
                        <td scope="row"><?php echo $i++; ?></td>
                        <td><?php echo $row['up_name']; ?></td>
                        <td><img src="img/<?php echo $row['up_image']; ?>" width="100" alt="<?php echo $row['up_image']; ?>" title="<?php echo $row['up_image']; ?>" ></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a class="btn btn-primary" href="../upload_php/" >Upload</a>
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