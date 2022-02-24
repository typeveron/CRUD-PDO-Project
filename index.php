<?php session_start(); 
include('db.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>PHP PDO CRUD</title>
  </head>
  <body>
<div class='container'>
    <div class="row">
        <div class="col-md-12 mt-4">
            <?php if(isset($_SESSION['message'])) : ?>
                <h5 class="alert alert-success"><?= $_SESSION['message']; ?></h5>
            <?php 
             unset($_SESSION['message']);
             endif; ?>
            <div class="card">
                <div class="card-header">
                    <h3>CRUD WITH PDO
                    <a href="student-add.php" class="btn btn-primary float-end">Add Student</a>
            </h3>
                </div>
                <div class="card-body"></div>
                <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>FullName</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Course</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM students";
                    $statement = $conn->prepare($query);
                    $statement->execute();
                     
                    $statement->setFetchMode(PDO::FETCH_OBJ); //Fetch ASSOC different
                    $result = $statement->fetchAll();
                    if($result) {
                        foreach($result as $row) {
                            ?>
                           <tr>
                           <td><?= $row->id; ?></td>
                           <td><?= $row->fullname; ?></td>
                           <td><?= $row->email; ?></td>
                           <td><?= $row->phone; ?></td>
                           <td><?= $row->course; ?></td>
                           <td>
                               <a href="student-edit.php?id=<?= $row->id; ?>" class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                               <form action="code.php" method="POST">
                                   <button type="submit" name="delete_student" value="<?=$row->id;?>" class="btn btn-danger">Delete</button>
                               </form>
                            </td>
                            </tr>
                            <?php
                        }

                    } else {
                        ?>
                        <tr>
                            <td colspan="5">No record found</td>
                        </tr>
                        <?php
                    }
                    ?>
                
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php require('footer.php') ?>