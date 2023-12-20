<?php
session_start();
error_reporting(0);
include('php/connect.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<style media="screen">
body{
  background-color:#EBEDEF;
}

.btn btn-danger{
  background-color: red;
}
  .tab{
    height: 100%;
    padding:5px;
    margin-left: 50px;
    margin-right: 50px;
    margin-top: 50px;
    border-radius: 20px;
    background-color: #fff;
      /* box-shadow: 12px 12px 22px #566573; */
  }
  h1{
  text-align: center;
    padding: 10px;
    font-size: 30px;
    margin-bottom: 10px;
  }
  th,td{
    font-size: 15px;
  }
</style>
  </head>
  <body>
<?php include "headerdk.php"; ?>

  <div class="tab">
    <div class="h11">
      <h1>User Login and Logout time</h1>
        <table class="table table-striped">
        <thead>
          <tr class="table-info">
            <th scope="col">SessionID</th>
            <th scope="col">Name</th>
            <th scope="col">Login date</th>
            <th scope="col">Login time</th>
            <th scope="col">Logout date</th>
            <th scope="col">Logout time</th>

          </tr>
          </div>
        </thead>
        <tbody>
          <?php

      $sql="SELECT * FROM `sessiontracking`";
      $result = mysqli_query($con, $sql);
      if($result)
      {

        while($row=mysqli_fetch_assoc($result)){
          $id = $row['sessionID'];
            $uname = $row['uname'];
            $login_date= $row["login_date"];
            $login_time = $row["login_time"];
            $logout_date = $row["logout_date"];
            $logout_time = $row["logout_time"];

            echo'<tr>
            <td>'.$id.' </td>
              <td>'.$uname.' </td>
              <td>'.$login_date.'</td>
              <td>'.$login_time.'</td>
              <td>'.$logout_date.'</td>
              <td>'.$logout_time.'</td>


            </tr>';
        } }  ?>

        </tbody>
      </table>
</div>

</div>

<!--
<div class="tab">
  <div class="h11">
    <h1>Cookies</h1>
      <table class="table table-striped">
      <thead>
        <tr class="table-dark">
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
          <th scope="col">Delete</th>
        </tr>
        </div>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td><button type="button" class="btn">Delete</button></td>
        </tr>

      </tbody> -->
    </table>



    </body>
</html>
