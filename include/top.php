<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <?php include('include/links.php'); ?>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">LAKSN</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="addproduct.php">Add product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="viewproduct.php">View product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="editproduct.php">Edit product</a>
      </li>
    </ul>

    <div class="logout ml-3">
    <a href="logout.php" class="btn btn-danger">Log out</a>
</div>
  </div>
</nav>