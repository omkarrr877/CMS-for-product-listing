<?php
include('include/connection.php');
include('include/function.php');
include('include/top.php'); 

if(isset($_GET['del'])){
    $productid = $_GET['del'];
    $delete = " DELETE FROM `products` WHERE `products`.`id` = $productid ";
    $run_query = mysqli_query($con, $delete);
}
?>
<div class="table-responsive">
<table class=" table-bordered" style="justify-content:ceter;">
  <thead>
    <tr>
      <th scope="col">Product Id</th>
      <th scope="col">Product Name</th>
      <th scope="col">Category</th>
      <th scope="col">Sub Category</th>
      <th scope="col">Quantity</th>
      <th scope="col">Description</th>
      <th scope="col">Images</th>
      <th scope="col">Delete</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
      <?php 
      $select = "SELECT * FROM `products`";
      $run = mysqli_query($con, $select);
      while($run_select=mysqli_fetch_array($run)){

          $productid= $run_select['id'];
          $productname= $run_select['productname'];
          $category= $run_select['category'];
          $subcategory= $run_select['subcategory'];
          $quantity= $run_select['qty'];
          $description= $run_select['description'];
          $image= $run_select['image'];
     ?>
    <tr>
      <th scope="row"><?php echo $productid; ?></th>
      <td><?php echo $productname; ?></td>
      <td><?php echo $category; ?></td>
      <td><?php echo $subcategory; ?></td>
      <td><?php echo $quantity; ?></td>
      <td><?php echo $description; ?></td>
      <td><img src="upload/<?php echo $image; ?>" alt="user_image" height="70px"></td>
      <td><a href="viewproduct.php?del=<?php echo $productid; ?>" class="btn btn-danger">Delete</a></td>
      <td><a href="editproduct.php?edit=<?php echo $productid; ?>" class="btn btn-primary">Edit</a></td>
    </tr>  
  </tbody><?php } ?>
</table>

</div>
<?php include('include/footer.php'); ?>