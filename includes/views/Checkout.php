<!DOCTYPE html>
<html>

<head>
    <title>Checkout</title>
    <style>
        * {
            font-family: Arial;
            margin: 0px;
            padding: 0px;
        }

        body {
            overflow-y: auto;
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

        .element1 {
            margin-top: 30px;
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
        
        .form {
            margin-top: 25px;
            margin-left: 350px;
            color: #0D1B2A;
            width: 70%;
            text-align: center;
        }

        input[type=text],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #0D1B2A;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
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

    <div class="form">
        <form action="checkout" method="post">
            <label for="customerName">Customer Name</label>
            <input type="text" name="customerName">
            <label for="customerPhone">Customer Phone</label>
            <input type="text" name="customerPhone">
            <label for="paymentMethod">Payment Method</label>
            <select name="paymentMethod">
                <option value="cash">Cash</option>
                <option value="card">Card</option>
            </select>
            <input type="submit" value="Confirm">
        </form>
    </div>
    
    <table>
        <tr>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Subtotal</th>
        </tr>
</body>

</html>