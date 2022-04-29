<?php include 'header.php';?>

<?php
$add=$date='';
$adderr=$dateerr='';

if(isset($_POST['submit'])){
 //validate task
  if(empty($_POST['add'])){
    $adderr ="task is required";
  }else{
    $add = filter_input(INPUT_POST,'add',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  }

  //validate date
  if(empty($_POST['date'])){
    $dateerr ="task is required";
  }else{
    $date = filter_input(INPUT_POST,'date',FILTER_SANITIZE_SPECIAL_CHARS);
  }

  if(empty($adderr) && empty( $dateerr)){

//     $sq ="INSERT INTO task_shedule('add') VALUES ('$add')";
//     if(mysqli_query($con,$sq)){
// echo "success";

//     }else{
//       echo "wrong" . mysqli_error($con);
//     }
  $sql = "INSERT INTO task_shedule (add)
VALUES ('$add')";

if ($con->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
}


}
$sql = 'SELECT * FROM task_shedule';
$resut = mysqli_query($con,$sql);
$tasks = mysqli_fetch_all($resut,MYSQLI_ASSOC);
?>
  
  <div class="container">
   <div id="main" class="card card-body">
    <h2 class="title">Add Tasks</h2>
    <form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" id="addForm" class="form-inline mb-3">
      <input type="text" class="form-control mr-2 <?php echo !$adderr ? :'invalid';?>" id="item" name="add" placeholder="add task"><br>
      <input type="datetime" class="form-control mr-2 <?php echo !$dateerr ? :'invalid';?>" id="item2" name="date">

      <input type="submit" class="bb" value="submit" name="submit">
    </form>
    <h2 class="title">Items</h2>
    <?php if(empty($tasks)):?>
      <p>no task found</p>
      <?php endif; ?>

      <?php foreach($tasks as $task):?>
    <ul id="items" class="list-group">
      <li class="list-group-item"><?php echo $task['add'];?><button class="btn btn-danger btn-sm float-right delete">X</button></li>
    </ul>
        <?php endforeach;?>
   </div>
  </div>

  <!--<script src="m.js"></script>-->
</body>
</html>