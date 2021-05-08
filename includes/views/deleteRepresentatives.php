<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    .alert {
      padding: 20px;
      background-color: #f44336;
      color: white;
      text-align: center;
      font-size: 30px;
    }

    .closebtn {
      margin-left: 15px;
      color: white;
      font-weight: bold;
      float: right;
      font-size: 22px;
      line-height: 20px;
      cursor: pointer;
      transition: 0.3s;
    }

    .no {

      font-size: 20px;
    }

    table {
      margin-top: 100px;
      margin-left: 350px;
      color: #0D1B2A;
      width: 70%;
      text-align: center;
    }

    td {
      border: 1px solid #ddd;
      padding: 5px;
    }


    th {
      border: 1px solid #ddd;
      padding-top: 10px;
      padding-bottom: 10px;
      background-color: #0D1B2A;
      color: white;
    }
  </style>
</head>

<body>


  <div class="alert">
    <strong>Warning!</strong> Are you sure you want to Delete
    <table>

      <?php
      $mid = $_GET['mid'];


      ?>

      <td><a href="deleteComplete?mid=<?php echo $mid ?> "><button class="Add">Confirm</button></a></td>


      <form action="representatives">

        <input type="submit" class="go" value="Go Back" />
      </form>


</body>

</html>