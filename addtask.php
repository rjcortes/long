<?php include 'view/header.php'; ?>

<html>
<body>

<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h1 style="color:black">Add Product</h1>
    </div>
  </div>
</div>

<div class="container" style="color:black"> 
  <form method="post" action="newtask.php" id="add_product_form">
    <div class="form-group">
      <label>Task:</label>
      <input type="text" name="task" class="form-control" id="task" placeholder="Enter Task">
    </div>
    <div class="form-group">
      <label>Due Date:</label>
      <input type="text" name="duedate" class="form-control" id="duedate" placeholder="Enter Due Date">
    </div>
    <!-- <form action="newtask.php"> -->
    <div class="form-group">
      <input type="submit" value="Add New Task" class="btn btn-default" />
    </div>
    <!-- </form> -->
  </form>
</div>

<!--
        <input type="hidden" name="action" value="add_product">

        <label>Category:</label>
        <select name="category_id">
        <?php //foreach ( $categories as $category ) : ?>
            <option value="<?php//echo $category['categoryID']; ?>">
                <?php //echo $category['categoryName']; ?>
            </option>
        <?php //endforeach; ?>
        </select>
        <br>
-->

<?php include 'view/footer.php'; ?>
