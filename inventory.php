<h1>Inventory Form</h1>
<?php include 'includes/nav.inc.php'; ?>

<div class="container">


  <form action="/includes/inv.inc.php" method="post" style="padding-top: 50px;">

    <div class="form-group w-50 p-3" style="background-color: #eee; padding-top: 20px; padding-bottom: 40px;" >
      <label>Date:</label>
      <input type="date" class="form-control" name="distribution_date">

  <div class="form-group w-50 p-3"style="background-color: #eee;">
    <label>Serial Number:</label>
    <input type="text" name="serial_number">
  </div>

  <div class="form-group w-50 p-3"style="background-color: #eee;">
    <label>Asset Tag:</label>
    <input type="text" name="asset_tag">
  </div>
<label>Device Brand</label>
  <div class="form-group w-25 p-3"style="background-color: #eee;">
    <select name="chromebookbrand">
    <option value="ACER">ACER</option>
  </select>
  </div>
<label>Device Status</label>
  <div class="form-group w-25 p-3"style="background-color: #eee;">
    <select name="chromebookstatus">
    <option value="Available">Available</option>
  </select>
  </div>

<div class="submitbuttons" style="padding-top: 30px;">
  <button type="submit" class="btn btn-primary">Submit</button>
  <button type="reset" class="btn btn-primary value=Reset">Reset</button>
</div>

</form>

<form class="" action="includes/updateinv.php" method="post">
  <div class="submitbuttons" style="padding-top: 30px;">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>

</div>

</div>


<div class="container" style="padding-bottom: 100px;">

<?php

echo "<h1>Inventory Records</h1>";

$con=mysqli_connect("localhost","admin","cmsnyc123","cms");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM `inventory`");

echo "<table border='1'>
<tr>
<th>Serial Number</th>
<th>Asset Tag</th>
<th>Device Brand</th>
<th>Device Status</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['serial_number'] . "</td>";
echo "<td>" . $row['asset_tag'] . "</td>";
echo "<td>" . $row['chromebook_brand'] . "</td>";
echo "<td>" . $row['status'] . "</td>";

echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>

</div>

<script src="/node_modules/jquery/dist/jquery.js" charset="utf-8"></script>
<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
<script src="/node_modules/bootstrap/dist/js/bootstrap.min.js" charset="utf-8"></script>
<script src="/node_modules/popper.js/dist/popper.js" charset="utf-8"></script>
