
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        *{
    font-family: arial;
}
.topnav {
    overflow: hidden;
    text-align:center;
    margin-top: 0px;
  }
.topnav p {
    color: #750b49;
    font-size: 50px;
}
.dashboard{
    height: 100%;
    width: 300px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #0D1B2A;
    overflow-x: hidden;
    padding-top: 10px;
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
  .employee{
	margin-top: 50px;
	margin-left: 450px;
	margin-bottom: 20px;
	color:#0D1B2A;
	font-size: large;

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
         margin-left: 20px;
         height: 10vh;
         width: 100%;
         margin-top: 20px;
         display: block;
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
.main-page {
    margin-left: 300px;
    padding: 0x 20px;
}

table {
	margin-top: 0px;
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


.consent-table th, .consent-table td {
    padding: 12px;
}
.consent-table tbody tr{
    border-bottom:  1px solid #dddddd;
}

.consent-table tbody tr:last-of-type {
    border-bottom: 20 px solid #009879;
}

.sort{
    text-align: right;
    margin-right: 100px;
    font-size: 30px;
}
.select{
    height: 30px;
    width: 120px;
    font-size: 20px;
}


.wrapper{
    display: grid;
    grid-template-columns: 100%;
    grid-row-gap:1em;
}
.wrapper > div{
    background-color: #fff;
    padding: 0em;
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
    margin-right: 20px;
    margin-left: 20px;
  }
.sortby {
	top: 0;
	right: 0;
	margin-top: 20px;
	margin-left: 83%;
}
    </style>
</head>
<body>
    <?php
    $eid =$_GET['eid'];
    
    ?>
    <div class="topnav">
        
        <p style="font-size: 30px;"> <b>            Sales Report</b></p>
    </div>
    <div class="topbar">
        <form action="salesM.html?eid=<?= $eid; ?>" method="POST">
           <input class="searchbar" type="text" placeholder="Search.." name="query">
        <select class="searchby" name="searchby">
           <option value="1" name="Medicine">Order ID</option>
           <option value="2" name="Generic">Sold By</option>
        </select>
           <input type="submit" class="go" value="Search" />
        </form>
        <form action="orderListM.html?eid=<?= $eid; ?>" method="POST">
            <input type="submit" class="go" value="Order List"/>
         </form>
     </div>
     </div>

     <div class="navbar">
        <a href="home?eid=<?= $eid; ?>"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
        <a href="medicines?eid=<?= $eid; ?>"><i class="fa fa-medkit" aria-hidden="true"></i> Medicines</a>
        <a href="sale?eid=<?= $eid; ?>"><i class="fa fa-money" aria-hidden="true"></i> Sales</a>
        <a href="shortage?eid=<?= $eid; ?>"><i class="fa fa-archive" aria-hidden="true"></i> Shortage</a>
        <a href="update?eid=<?= $eid; ?>"><i class="fa fa-pencil" aria-hidden="true"></i> Update</a>
        <a href="employees?eid=<?= $eid; ?>"><i class="fa fa-users" aria-hidden="true"></i> Employees</a>
        <a href="companies?eid=<?= $eid; ?>"><i class="fa fa-building" aria-hidden="true"></i> Companies</a>
        <a href="representatives?eid=<?= $eid; ?>"><i class="fa fa-users" aria-hidden="true"></i> Representatives</a>
        <a href="Index.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</a>
    </div>
 
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

    
        <div class="table">
        <table class="consent-table"> 

	       
            <thead>
                <th>Order ID</th>
                <th>Medicine</th>
                <th>
                   Company Name
                </th>
                <th>
                    Generic Name
                </th>
                <th>
                    Quantity
                </th>
                <th>
                    Subtotal
                </th>
                <th>
                    Sold by
                </th>
            </thead>
           


    
    </div>
</body>
</html>

