<?php include 'header.php';?>
  
  <div class="container">
   <div id="main" class="card card-body">
    <h2 class="title">Add Tasks</h2>
    <form id="addForm" class="form-inline mb-3">
      <input type="text" class="form-control mr-2" id="item">
      <input type="submit" class="bb" value="Submit">
    </form>
    <h2 class="title">Items</h2>
    <ul id="items" class="list-group">
      <li class="list-group-item">Task 1 <button class="btn btn-danger btn-sm float-right delete">X</button></li>
      <li class="list-group-item">Task 2 <button class="btn btn-danger btn-sm float-right delete">X</button></li>
      <li class="list-group-item">Task 3 <button class="btn btn-danger btn-sm float-right delete">X</button></li>
      <li class="list-group-item">Task 4 <button class="btn btn-danger btn-sm float-right delete">X</button></li>
    </ul>
   </div>
  </div>

  <script src="m.js"></script>
</body>
</html>