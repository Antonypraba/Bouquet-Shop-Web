
<?php
    include "dbcon.php"; ?>


<html>
<head>
  <title>Display</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
  .container {
    width: 2000px;
    padding: 0 20px;
    /* padding-right: 100%;
    padding-left: 100%; */
   margin-right: auto;
    margin-left: auto;
}
  </style>
</head>
<body>
 <div class="container">
   <button class="btn btn-primary my-5"><a href="http://localhost/wildlife/registration_form-master/registration-form.php" class="text-light"> ADD VOLUNTEER</a></button>
   <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Phone Number</th>
      <th scope="col">E-mail</th>
      <th scope="col">Age</th>
      <th scope="col">Skill Set1</th>
        <th scope="col">Skill Set2</th>
          <th scope="col">Skill Set3</th>
      <th scope="col">Time</th>
        <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

    <?php

$sql="SELECT * FROM `regform`";
$result = mysqli_query($osconn, $sql);
if($result)
{

  while($row=mysqli_fetch_assoc($result)){

    	$First_Name = $row['First_Name'];
      $Last_Name= $row["Last_Name"];
    	$Email = $row["Email"];
    	$Phone = $row["Phone"];
    	$contact = $row["age"];
    	$volunteer = $row["volunteer"];
    	$volunteer1 = $row["volunteer1"];
    	$volunteer2 = $row["volunteer2"];
    	$time = $row["time"];
      echo'<tr>
        <td>'.$First_Name.' </td>
        <td>'.$Last_Name.'</td>
        <td>'.$Email.'</td>
        <td>'.$Phone.'</td>
        <td>'.$contact.'</td>
        <td>'.$volunteer.'</td>
        <td>'.$volunteer1.'</td>
        <td>'.$volunteer2.'</td>
        <td>'.$time.'</td>
        <td>
        <button class="btn btn-primary "><a href="update.php? updateid='.$Email.'" class="text-light"</a>Update</button>
        <button class="btn btn-danger"><a href="delete.php? deleteid='.$Email.'" class="text-light"</a>Delete</button>
        </td>
      </tr>';
  } }  ?>
<!-- <td>
<button><a href=""</a>Update</button>
<button><a href=""</a>Delete</button>
</td> -->
  </tbody>
</table>

 </div>
</body>
</html>
