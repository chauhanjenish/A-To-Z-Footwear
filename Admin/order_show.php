<?php 
session_start(); 
if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
    include "../Admin/AdminHeader.php";
    include "../db_conn.php";
    $qry = "SELECT * FROM check_out"; 
    $result = mysqli_query($con, $qry);
    if (isset($_POST['done'])) {

        $qry1 = mysqli_query($con, "UPDATE check_out SET status='done'");

        if ($qry1) {
            echo "<script>alert('Status updated');</script>";
        } else {
            echo "<script>alert('Update failed');</script>";
        }
    }

    ?>
    <center>
        <h2 style="margin-bottom: 50px;">Order Details</h2>
        <table cellpadding="10" cellspacing="10">
            <tr>
                <th>Image</th>
                <th>Product Name</th>
                <th>Size</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Address</th>
                <th>Total</th>
                <th>Payment Method</th>
                <th>Status</th>
            </tr>

            <?php
            if (mysqli_num_rows($result) > 0) {
                // Fetch rows if results exist
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><img src="../uploads/<?php echo $row['images']; ?>" width="100px"></td>
                        <td><?php echo $row['p_name']; ?></td>
                        <td><?php echo $row['size']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                        <td><?php echo $row['qty']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['total']; ?></td>
                        <td><?php echo $row['payment_method']; ?></td>
                        <td>
                            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                <input type="hidden" name="order_id" value="<?php echo $row['p_id']; ?>">
                                <button style="background-color: blue; color:white; padding: 5px 10px;" value="done" name="done" id="done">DONE</button>
                            </form>
                        </td>
                    </tr>  
                <?php 
                }
            } 
            else 
            {
                echo "<tr><td colspan='9'>No orders found</td></tr>";
            }
            ?>
        </table>
    </center>
<?php
} 
else
{
    include 'login.php';
}
?>
