<?php 
session_start();
if(isset($_SESSION['username']))
{
include '../db_conn.php';

$ida = $_REQUEST['id'];

$qry = mysqli_query($con, "DELETE FROM contact WHERE id = '$ida'");

if($qry) {
    echo "<script>
        alert('Record deleted successfully.');
        window.location.href='contact.php';
    </script>";
} else {
    echo "<script>
        alert('Record was not deleted.');
        window.location.href='contact.php';
    </script>";
}
}
else
{
    header("Location:./login.php");
}
?>
