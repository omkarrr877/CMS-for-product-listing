<?php include('include/top.php');
include('include/connection.php');
if(['ADMIN_LOGIN']===false){
    $_SESSION['ADMIN_LOGIN']='yes';
    $_SESSION['ADMIN_USERNAME']=$email;
    header('Location:login.php');
}
?>
<div id="load-data">
    <table id="load-table" border="1" cellpadding="10px" width="100%">
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Sub Category</th>
                    <th>Quantity</th>
                    <th>Description</th>
                    <th>Image</th>
                </tr>
    </table>
</div>
<script>
    $.ajax({
        url: "fetch-json.php",
        type: "POST",
        data: { id : 4},
        dataType: "JSON",
        success : function(data){
           $.each(data,function(key,value){
            $("#load-table").append("<tr><td>" + value.id + "</td><td> " + value.productname + " </td><td>" + value.category + " </td><td>" + value.subcategory + " </td><td>" + value.qty + " </td><td>" + value.description + "</td><td> " + value.image + " </td></tr> ")
           })
        }
    });
</script>
<?php include('include/footer.php');?>