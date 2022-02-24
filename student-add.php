<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Insert data into database using PHP PDO</title>
  </head>
  <body>
<div class='container'>
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    <h3>Insert data into database using PHP PDO</h3>
                    <a href="index.php" class="btn btn-danger">Back</a>
                </div>
                <div class="card-body">
                   <form action="code.php" method="POST">
                       <div class="mb-3">
                           <label>Full Name</label>
                           <input type="text" name="fullname" class="form-control">
                       </div>
                       <div class="mb-3">
                           <label>Email</label>
                           <input type="text" name="email" class="form-control">
                       </div>
                       <div class="mb-3">
                           <label>Phone</label>
                           <input type="text" name="phone" class="form-control">
                       </div>
                       <div class="mb-3">
                           <label>Course</label>
                           <input type="text" name="course" class="form-control">
                       </div>
                       <div class="mb-3">
                           <button type="submit" name="save_student_btn" class="btn btn-primary">Save Student</button>
                       </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require 'footer.php' ?>