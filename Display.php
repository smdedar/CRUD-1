<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">

    <title>Update Data</title>
</head>

<body>
    <div class="container">
        <div class="col-lg-12">
            <h1 class="text-warning text-center bg-dark">Display Table Data</h1>

            <table class="table table-striped table-hover">
                 <tr class="bg-dark text-white text-center">
                    <th>ID</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>

              
                <?php
                include_once'Connect.php';
                $query=("SELECT * FROM test1");
                $result= mysqli_query($connect,$query);
                while($row=mysqli_fetch_array($result)){
                ?>
                    <tr class="text-center">
                    <td> <?php echo $row['id']; ?></td>
                    <td> <?php echo $row['username']; ?></td>
                    <td> <?php echo $row['password']; ?></td>
                    <td> <button  class="btn-danger btn" ><a href="Delete.php?id=<?php echo $row['id'];?>" class="text-white"> Delete </a> </button></td>
                    <td><button class="btn-success btn"><a href="Update.php?id=<?php echo $row['id'];?>" class="text-white">Update</a> </button> </td>
                    </tr>

                <?php
    
                }
                
                ?>

            </table>

        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>