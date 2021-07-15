<?php
include('include/connection.php');
include('include/function.php');
include('include/top.php'); 

if(($_GET['edit']==true)){
if(isset($_GET['edit'])){
    $getedit = $_GET['edit'];
    
    $select = "SELECT * FROM `products` WHERE id = $getedit";
    $run_select = mysqli_query($con,$select);
    $rowus = mysqli_fetch_array($run_select); 
    $productname= $rowus['productname'];
    $category= $rowus['category'];
    $subcategory= $rowus['subcategory'];
    $quantity= $rowus['qty'];
    $description= $rowus['description'];
    $image= $rowus['image'];
}
}else{
    header("Location:viewproduct.php");
}
?>

<div class="container">
<div class="main p-5">
<form action="" method="post" enctype="multipart/form-data">
<input type="text" class="form-control mt-4" value="<?php echo $productname?>" name="ProductName" required/>
                        <input type="text" class="form-control mt-4" value="<?php echo $category?>" name="Category" required/>
                        <input type="text" class="form-control mt-4" value="<?php echo $subcategory?>" name="SubCategory" required/>
                        <input type="number" class="form-control mt-4" value="<?php echo $quantity?>" name="Qty" required/>
                        <input type="text" class="form-control mt-4" value="<?php echo $description?>" name="Description" required/>
                        <input type="file" name="image" value="upload/<?php echo $image?>"class="form-control mt-4"required/>
   <button type="submit" name="submit" class="btn btn-primary mt-4">Submit</button>
</form>
        <?php
                if(isset($_POST['submit'])){
                  $Product_Name = $_POST['ProductName'];
                  $Category = $_POST['Category'];
                  $Sub_Category = $_POST['SubCategory'];
                  $Quantity = $_POST['Qty'];
                  $Description = $_POST['Description'];
                    $image = $_FILES['image']['name'];
                    $tmp_name = $_FILES['image']['tmp_name'];
                    $insert = " INSERT INTO `products` ( `productname`, `category`, `subcategory`, `qty`, `description`, `image`) values('$Product_Name','$Category','$Sub_Category','$Quantity','$Description','$image')";
                    $run_insert = mysqli_query($con,$insert);
                    if($run_insert===true){
                        move_uploaded_file($tmp_name, "upload/$image");
                        echo "Inserted Successfully";
                    }else{
                        echo "Failed Try Again";
                    }    
                }?>
</div>
</div>
<?php include('include/footer.php') ?>