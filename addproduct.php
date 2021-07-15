<?php
include('include/connection.php');
include('include/function.php');
include('include/top.php'); 

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
    }else {
        echo "Failed Try Again";
    }    
}


?>
 <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-title">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Registration">Add New Product</button>
                    </div>
                    <div class="card-body">
                        <p id="delete-message" class="text-dark"></p>
                        <div id="table"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration Modal -->
    <div class="modal" id="Registration">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="text-dark">Add New Product</h3>
                </div>
                <div class="modal-body">
                    <p id="message" class="text-dark"></p>
                    <form action="" method="POST" enctype="multipart/form-data">    
                        <input type="text" class="form-control mt-4" placeholder="Product Name" name="ProductName" required/>
                        <input type="text" class="form-control mt-4" placeholder="Category Name" name="Category" required/>
                        <input type="text" class="form-control mt-4" placeholder="Sub Category Name" name="SubCategory" required/>
                        <input type="number" class="form-control mt-4" placeholder="Quantity" name="Qty" required/>
                        <input type="text" class="form-control mt-4" placeholder="Description" name="Description" required/>
                        <input type="file" class="form-control mt-4" name="image" required/>
                   
                </div>
                <div class="modal-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" id="btn_close">Close</button>
                </div> 
            </form>
            </div>
        </div>
    </div>


<?php include('include/footer.php'); ?>