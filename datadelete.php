<?php
include('11database.php');
$id=$_REQUEST['sid'];
$qry="DELETE FROM `studentinformation` WHERE `id`='$id' ";
$run=mysqli_query($conn,$qry);
   if($run==true)
{
?>
    <script>
        alert('data deleted successfully');
        window.open('infosys.php');
    </script>
    <?php
}
?>