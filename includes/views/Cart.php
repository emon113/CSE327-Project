<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    padding-top: 20px;
}

.dashboard a {
    text-decoration: none;
	font-size: 25px;
	color: white;
	padding: 10px;
	margin-top: 60px;
	margin-left: 20px;
	margin-bottom: 0px;
    font-family: arial;
    display: block;
    
}
.dashboard a:hover {
    color:#778DA9;
}
.dashboard i{
    padding-right: 10px;
}
.main-page {
    margin-left: 300px;
    padding: 0x 20px;
}
.cart{
    margin-left: 350px;
}
.cart-table{
    display: table;
    border-collapse: collapse;
    width: 80%;
    color: #140f0f;
    font-size: 1.5em;
    min-width: 400px;
    text-align: left;
    border-radius: 5px 5px 0 0;
    overflow: hidden;
    font-family: arial;
    margin-left: 150px;
    
}
.cart-table td, .cart-table th{
    padding: 12px;
}
.cart-table thead tr{
    background-color: #0D1B2A;
    color: #ffffff;
    font-weight: bold;
}
.cart-table tr a {
    text-decoration: none;
    font-size: 0.5em;
    color: red;
}
td:last-child, td:nth-child(4){
    text-align: right;
}
th:last-child, th:nth-child(4){
    text-align: right;
}
tr:nth-last-child(2)
{
    border-top: 3px solid black;
}


.button {
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
  }
  
  .button1 {background-color: #4CAF50;} 
  .button2 {background-color: #008CBA;}
    </style>
</head>
<body>
    <?php
    $eid =$_GET['eid'];
    ?>
    <div class="topnav">
      
        <p style="font-size: 30px;">Cart</p>
    </div>
    <div class= 'dashboard'>
        
        <a href="homeM.html?eid=<?= $eid; ?>"><i class="fa fa-home" aria-hidden="true"></i><span>Home</span></a>
        <a href="medicines?eid=<?= $eid; ?>"><i class="fa fa-medkit" aria-hidden="true"></i>Medicines</a>
        <a href="sale?eid=<?= $eid; ?>"><i class="fa fa-money" aria-hidden="true"></i> Sales</a>
        <a href="shortageM.html?eid=<?= $eid; ?>"><i class="fa fa-archive" aria-hidden="true"></i><span>Shortage</span></a> 
        <a href="update?eid=<?= $eid; ?>"><i class="fa fa-wrench" aria-hidden="true"></i><span>Update</span></a>
        <a href="employees?eid=<?= $eid; ?>"><i class="fa fa-pencil" aria-hidden="true"></i> Employees</a>
        <a href="companyM.html?eid=<?= $eid; ?>"><i class="fa fa-building" aria-hidden="true"></i> Companies</a>
        <a href="representativesM.html?eid=<?= $eid; ?>"><i class="fa fa-users" aria-hidden="true"></i> Representatives</a>
        <a href="login"><i class="fa fa-arrow-left" aria-hidden="true"></i><span>Log Out</span></a>
		 <a href="cart?eid=<?= $eid; ?>"><i class="fa fa-sign-out" aria-hidden="true"></i>Cart</a>
             
    </div>
    
    <?php 
    function clear()
    {
        require 'connection.php';
        echo 'hello';
        header(' Location: Login.html');
    }
    ?>
    <div class="container">
    
    <div class="cart">
        <table class="cart-table">
       
            <thead>
                <th>Product Name</th>
                <th>Remove</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Subtotal</th>
       
            </thead>
            <tbody>

            
             
    </div>
    </div>
</body>
</html>