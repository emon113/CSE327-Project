<!DOCTYPE html>
<html>
   <head>
   <link rel="stylesheet" type="text/css" href="./static/css/update.css">
   <style>
    
* {
font-family: Arial;
margin: 0px;
padding: 0px;
}

.datetime {
position: fixed;
bottom: 0;
right: 0;
background-color: #0D1B2A;
padding: 10px;
border: 2px solid #0D1B2A;
border-radius: 10px;
margin: 5px;
color: white;
font-size: 17px;
}

.cart {
position: fixed;
top: 0;
right: 0;
background-color: #0D1B2A;
padding: 15px;
border: 2px solid #0D1B2A;
border-radius: 10px;
margin: 5px;
color: white;
font-size: 20px;
}

.navbar {
height: 100%;
width: 300px;
position: fixed;
z-index: 1;
top: 0;
left: 0;
display: flex;
flex-direction: column;
background-color: #0D1B2A;
overflow-y: auto;
}


.navbar a {
text-decoration: none;
font-size: 25px;
color: white;
padding: 10px;
margin-top: 60px;
margin-left: 20px;
margin-bottom: 0px;
}

.navbar p {
font-size: 25px;
color: white;
margin-bottom: 0px;
padding: 10px;
margin-top: 30px;
margin-left: 20px;
margin-bottom: 0px;
}

.navbar a:hover {
color: #778DA9;
}

.element1 {
margin-top: 30px;
}

.topbar {
margin-top: 25px;
margin-left: 315px;
display: flex;
flex-direction: row;
align-items: center;
align-content: center;
justify-content: center;
}

.searchbar {
padding: 5px;
font-size: 17px;
margin-right: 30px;
}

.searchby {
padding: 5px;
font-size: 17px;
margin-right: 30px;
}

.go {
background-color: #0D1B2A;
padding: 5px;
font-size: 17px;
background-color: #0D1B2A;
border: 2px solid #0D1B2A;
border-radius: 10px;
color: white;
}
.sortby {
top: 0;
right: 0;
margin-top: 20px;
margin-left: 83%;
}

table {
margin-top: 10px;
margin-left: 350px;
color: #0D1B2A;
width: 70%;
text-align: center;
}

td {
border: 1px solid #ddd;
padding: 5px;
}


/*tr:nth-child(even){background-color: #f2f2f2;}*/

tr:hover {
background-color: #778DA9;
}

th {
border: 1px solid #ddd;
padding-top: 10px;
padding-bottom: 10px;
background-color: #0D1B2A;
color: white;
}
table button {
background-color: #fff;
border: none;
padding: 2px;
}
.quantity{
padding: 1px;
margin: 0;
}

   </style>
   </head>
   <body>
      <?php
      $eid =$_GET['eid'];
      ?>
      <<div class="topbar">
         <form action="updateM.html?eid=<?= $eid; ?>" method="POST">
            <input class="searchbar" type="text" placeholder="Search.." name="query">
         <select class="searchby" name="searchby">
            <option value="1" name="Medicine">Medicine</option>
            <option value="2" name="Generic">Generic</option>
         </select>
            <input type="submit" class="go" value="Search" />
         </form>
      </div>

      <div class="topbar">
         <form action="addMedicinesM.html?eid=<?= $eid; ?>" method="POST">
            <input type="submit" class="go" value="Add Medicines" />
         </form>
      </div>
      <div class="navbar">
         <a href="homeM.html?eid=<?= $eid; ?>"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
         <a href="medicinesM.html?eid=<?= $eid; ?>"><i class="fa fa-medkit" aria-hidden="true"></i> Medicines</a>
         <a href="sale?eid=<?= $eid; ?>"><i class="fa fa-money" aria-hidden="true"></i> Sales</a>
         <a href="shortageM.html?eid=<?= $eid; ?>"><i class="fa fa-archive" aria-hidden="true"></i> Shortage</a>
         <a href="update?eid=<?= $eid; ?>"><i class="fa fa-pencil" aria-hidden="true"></i> Update</a>
         <a href="employees?eid=<?= $eid; ?>"><i class="fa fa-pencil" aria-hidden="true"></i> Employees</a>
         <a href="companyM.html?eid=<?= $eid; ?>"><i class="fa fa-building" aria-hidden="true"></i> Companies</a>
         <a href="representativesM.html?eid=<?= $eid; ?>"><i class="fa fa-users" aria-hidden="true"></i> Representatives</a>
         <a href="login"><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</a>
      </div>
      <table>
         <tr>
            <th>Medicine</th>
            <th>Generic</th>
            <th>Price</th>
            <th>Stock</th>
            <th>company</th>
            <th>Update</th>
            <th>Delete</th>
         </tr>
         
      <div id="MyClockDisplay" class="datetime" onload="showTime()"></div>
      <script>
        function showTime(){
          var date = new Date();
          var h = date.getHours(); // 0 - 23
          var m = date.getMinutes(); // 0 - 59
          var s = date.getSeconds(); // 0 - 59
          var session = "AM";
          
          if(h == 0){
              h = 12;
          }
          
          if(h > 12){
              h = h - 12;
              session = "PM";
          }
          
          h = (h < 10) ? "0" + h : h;
          m = (m < 10) ? "0" + m : m;
          s = (s < 10) ? "0" + s : s;
          var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();

        today = mm + '/' + dd + '/' + yyyy;
         
          
          var time = h + ":" + m + ":" + s + " " + session;
          document.getElementById("MyClockDisplay").innerText = today + time;
          document.getElementById("MyClockDisplay").textContent = today +  ' '  + time;

          
          setTimeout(showTime, 1000);
          
      }
      
      showTime();
      </script>
   </body>
</html>