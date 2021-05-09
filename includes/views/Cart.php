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