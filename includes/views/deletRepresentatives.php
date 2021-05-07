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
.no{

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
            <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone Number</th>
            <th>Company Name</th>
            </tr>
  <?php
 
  $rid = $_GET['id'];
$eid =$_GET['eid'];
  $sql = "select * from representatives where rep_id=".$rid.";";

  $get_data = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($get_data)>0)
         {
            while($row = mysqli_fetch_assoc($get_data))
            {
               echo '<tr>
                  <td>'.$row['rep_id'].'</td>
                  <td>'.$row['first_name'].'</td>
                  <td>'.$row['last_name'].'</td>
                  <td>'.$row['phone_number'].'</td>  
                  <td>'.$row['company_name'].'</td>
                  <td><a href="warningR.php?id='.$row['rep_id'].'& eid='.$eid.'"><button class="Add">Confirm</button></a></td>

               </tr>';
            }
         }

         echo "</table>";
                    

    ?>    
            
         <form action="representativesM.html?eid=<?= $eid; ?>" method="POST">
          
            <input type="submit" class="go" value="Go Back" />
         </form>
</body>
</html>