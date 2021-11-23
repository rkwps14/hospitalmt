<?php
include('include/config.php');

    if(!empty($_POST["specilizationid"])) 
    {
     $sql="select doctorName,id from doctors where specilization= '".$_POST['specilizationid']."' ";

     $stmt = $conn->prepare($sql);
     $stmt->execute();

     ?>

     <option selected="selected">Select Doctor </option>
        <?php
         while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
        ?>
      <option value="<?php echo $row['id']; ?>"><?php echo $row['doctorName']; ?></option>
      <?php
    }
}


    if(!empty($_POST["doctor"])) 
    {

     $sql="select docFees from doctors where id= '".$_POST['doctor']."' ";
     $stmt = $conn->prepare($sql);
     $stmt->execute();

     while($row=$stmt->fetch(PDO::FETCH_ASSOC))
     	{?>
     <option value="<?php echo $row['docFees']; ?>"><?php echo $row['docFees']; ?></option>
      <?php
    }
}

?>

