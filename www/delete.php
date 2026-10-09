<?php
include "db_conn.php";
$id = $_GET['id'];
$sql = "DELETE FROM `crud_681310310` WHERE id=$id";
$result = mysqli_query($conn, $sql);
if($result){
    header("Location: index.php?msg=Record Delete Successfully");
}
else {
    echo"Failed: ".mysqli_error($conn);
}
?>