<?php 



function dii_all_students() {
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>All Students</h2>
       
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Address</th>
        <th>Batch</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>

      <tr>
        <td>John</td>
        <td>012453698</td>
        <td>Eemail@gmail.com</td>
        <td>address</td>
        <td>batch</td>
        <td><a class="btn btn-primary" href="">Edit</a></td>
        <td><a class="btn btn-danger" href="">Delete</a></td>
      </tr>

      <tr>
        <td>John</td>
        <td>012453698</td>
        <td>Eemail@gmail.com</td>
        <td>address</td>
        <td>batch</td>
        <td><a class="btn btn-primary" href="">Edit</a></td>
        <td><a class="btn btn-danger" href="">Delete</a></td>
      </tr>

      <tr>
        <td>John</td>
        <td>012453698</td>
        <td>Eemail@gmail.com</td>
        <td>address</td>
        <td>batch</td>
        <td><a class="btn btn-primary" href="">Edit</a></td>
        <td><a class="btn btn-danger" href="">Delete</a></td>
      </tr>
      
    </tbody>
  </table>
</div>

</body>
</html>

    <?php
}
