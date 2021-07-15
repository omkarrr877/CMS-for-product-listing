<?php   

$json_string = 'json/my.json';
$jsondata = file_get_contents($json_string);
$arr = json_decode($jsondata, true);

// echo "<pre>";
// print_r($arr);
// echo "</pre>";
echo '<table id="load-table" border="1" cellpadding="10px" width="100%">';
foreach ($arr as list("id"=>$id,"productname"=>$productname, "category"=>$category,"subcategory"=>$subcategory,"qty"=>$qty,"description"=>$description,"image"=>$image)){
    echo "<tr><td>{$id}</td><td>{$productname}</td><td>{$category}</td><td>{$subcategory}</td><td>{$qty}</td><td>{$description}</td><td>{$image}</td><tr>";
}
echo '</table>';
?>