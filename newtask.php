<?php include 'view/header.php'; ?>

<?php 
  $owner_id = $_GET['ownerid'];
  $fname = $_GET['fname'];
  $lname = $_GET['lname'];
  require('pdoConnect.php');
  $sql = 'select * from my_tasks where ownerid = "'.$owner_id.'"';
  $results = runQuery($sql);
?>



<html>
<head>
  <style>
    input[type=checkbox]:checked + label.strikethrough{
    text-decoration: line-through;
    }
    .todolist{
        background-color:#FFF;
        padding:20px 20px 10px 20px;
        margin-top:30px;
    }
    .todolist h1{
        margin:0;
        padding-bottom:20px;
        text-align:center;
    }
    .form-control{
        border-radius:0;
    }
    li.ui-state-default{
        background:#fff;
        border:none;
        border-bottom:1px solid #ddd;
    }

    li.ui-state-default:last-child{
        border-bottom:none;
    }

    .todo-footer{
        background-color:#F4FCE8;
        margin:0 -20px -10px -20px;
        padding: 10px 20px;
    }
    #done-items li{
        padding:10px 0;
        border-bottom:1px solid #ddd;
        text-decoration:line-through;
    }
    #done-items li:last-child{
        border-bottom:none;
    }
    #checkAll{
        margin-top:10px;
    }
  </style>
</head>
<body>

  <!-- Container (About Section) -->
  <div id="about" class="container-fluid">
    <div class="row">
      <div class="col-sm-8">
        <!-- <h1 style="color:black"> -->
            <?php echo "<h1 style='color:black'>Welcome, ".$fname." ".$lname."</h1>";?> !
        <!-- </h1> -->
      </div>
    </div>
  </div>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

<div class="container">
    <div class="row">
      <div class="col-md-12">
        <h4>My Tasks</h4>
          <div class="table-responsive">
            <table id="mytable" class="table table-bordred table-striped" style="color:black;">
                <thead>
                  <!-- <th style="width:5%"><input type="checkbox" id="checkall" /></th> -->
                  <th style="width:65%">Task</th>
                  <th style="width:10%">Due Date</th>
                  <th style="width:10%">Edit</th>
                  <th style="width:10%">Delete</th>
                  <th style="width:10%">Status</th>
                </thead>
                <tabel>
                   <?php foreach($results as $res):?>
                    <tr>                    
                      <?php $item_status = $res['isdone'];
                        if ($item_status == 0){
                      ?>
                        <td> <?php echo $res['task']?></td>
                        <td> <?php echo $res['duedate']?></td>
                        <form action = 'index.php' method = 'post' >
                          <td><input type="hidden" class="btn btn-danger" name = 'action' value="edit"/></td>
                          <td><input type="hidden" class="btn btn-danger" name = 'item_id' value=<?php echo $res['taskid']?>/></td>
                          <td><input type="submit" class="btn btn-danger" value="edit"/></td>
                        </form>
                        <form action = 'index.php' method = 'post' >
                          <td><input type="hidden" class="btn btn-danger" name = 'action' value="delete"/></td>
                          <td><input type="hidden" class="btn btn-danger" name = 'item_id' value=<?php echo $res['taskid']?>/></td>
                          <td><input type="submit" class="btn btn-danger" value="delete"/></td>
                        </form>
                        <form action = 'index.php' method = 'post' >
                          <td><input type="hidden" class="btn btn-danger" name = 'action' value="complete"/></td>
                          <td><input type="hidden" class="btn btn-danger" name = 'item_id' value=<?php echo $res['taskid']?>/></td>
                          <td><input type="submit" class="btn btn-danger" value="Complete"/></td>
                        </form>
                      <?php } ?>
                    </tr>
                  <?php endforeach;?>
                </tabel>
            </table>
            <form action="addtask.php">
              <input type="submit" value="Add New Task" class="btn btn-default" />
            </form>
          </div>
      </div>
    </div>
  </div>
</div>


<br><hr><br>

<div class="container">
    <div class="row">
      <div class="col-md-12">
        <h4>Completed Tasks</h4>
          <div class="table-responsive">
            <table id="mytable" class="table table-bordred table-striped" style="color:black;">
                <thead>
                  <!-- <th style="width:5%"><input type="checkbox" id="checkall" /></th> -->
                  <th style="width:65%">Task</th>
                  <th style="width:20%">Due Date</th>
                  <th style="width:10%">Delete</th>
                  <th style="width:10%">Status</th>
                </thead>
                <tabel>
                   <?php foreach($results as $res):?>
                    <tr>                    
                      <?php $item_status = $res['isdone'];
                        if ($item_status == 1){
                      ?>
                        <td> <span style='text-decoration:line-through; font-style: italic; color: #c1c1c1'><?php echo $res['task']?></td>
                        <td> <span style='text-decoration:line-through; font-style: italic; color: #c1c1c1'><?php echo $res['duedate']?></td>
                        <form action = 'index.php' method = 'post' >
                          <td><input type="hidden" class="btn btn-danger" name = 'action' value="edit"/></td>
                          <td><input type="hidden" class="btn btn-danger" name = 'item_id' value=<?php echo $res['task']?>/></td>
                          <td><input type="submit" class="btn btn-danger" value="edit"/></td>
                        </form>
                        <form action = 'index.php' method = 'post' >
                          <td><input type="hidden" class="btn btn-danger" name = 'action' value="delete"/></td>
                          <td><input type="hidden" class="btn btn-danger" name = 'item_id' value=<?php echo $res['taskid']?>/></td>
                          <td><input type="submit" class="btn btn-danger" value="delete"/></td>
                        </form>
                        <form action = 'index.php' method = 'post' >
                          <td><input type="hidden" class="btn btn-danger" name = 'action' value="incomplete"/></td>
                          <td><input type="hidden" class="btn btn-danger" name = 'item_id' value=<?php echo $res['taskid']?>/></td>
                          <td><input type="submit" class="btn btn-danger" value="Incomplete"/></td>
                        </form>
                      <?php } ?>
                    </tr>
                  <?php endforeach;?>
                </tabel>

            </table>
          </div>
      </div>
    </div>
  </div>
</div>




<?php include 'view/footer.php'; ?>



