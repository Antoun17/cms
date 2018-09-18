<?php include 'includes/nav.inc.php'; ?>
<script src="/node_modules/jquery/dist/jquery.js" charset="utf-8"></script>
<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
<script src="/node_modules/bootstrap/dist/js/bootstrap.min.js" charset="utf-8"></script>
<script src="/node_modules/popper.js/dist/popper.js" charset="utf-8"></script>

<h1>Distribution Form</h1>

<div class="container">


  <form action="/includes/dist.inc.php" method="post" style="padding-top: 50px;">

    <div class="form-group w-50 p-3" style="background-color: #eee; padding-top: 20px; padding-bottom: 40px;" >
      <label>Date:</label>
      <input type="date" class="form-control" name="distribution_date">

  <div class="form-group w-50 p-3"style="background-color: #eee;">
    <label>Student Name:</label>
    <input type="text" name="student_name">
  </div>

  <div class="form-group w-50 p-3"style="background-color: #eee;">
    <label>OSIS Number:</label>
    <input type="text" name="student_osis">
  </div>

  <div class="form-group w-50 p-3"style="background-color: #eee;">
    <label>Student Email:</label>
    <input type="text" name="student_email">
  </div>

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
    <option value="Rented">RENTED</option>
  </select>
  </div>

<div class="submitbuttons" style="padding-top: 30px;">
  <button type="submit" class="btn btn-primary">Submit</button>
  <button type="reset" class="btn btn-primary value=Reset">Reset</button>
</div>

</form>

</div>

</div>


<div class="container" style="padding-bottom: 100px;">

<?php

echo "<h1>Distribution Records</h1>";

$con=mysqli_connect("localhost","admin","cmsnyc123","cms");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM `distribution`");

echo "<table border='1'>
<tr>
<th>Date</th>
<th>Student Name</th>
<th>OSIS Number</th>
<th>Student Email</th>
<th>Serial Number</th>
<th>Asset Tag</th>
<th>Device Brand</th>
<th>Device Status</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['distribution_date'] . "</td>";
echo "<td>" . $row['student_name'] . "</td>";
echo "<td>" . $row['student_osis'] . "</td>";
echo "<td>" . $row['student_email'] . "</td>";
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
