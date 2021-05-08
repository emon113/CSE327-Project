<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
    .update {
        width: 800px;
        background-color: rgb(0, 0, 0, 6);
        margin: auto;
        color: #ffffff;
        padding: 10px 0px 10px 0px;
        text-align: center;
        border-radius: 15px 15px 0px 0px;
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

    .main {
        width: 800px;
        margin: auto;
    }

    form {
        padding: 10px;

    }


    .phone {
        position: relative;
        left: 200px;
        top: -37px;
        line-height: 30px;
        border-radius: 6px;
        padding: -15px 22px;
        font-size: 18px;
        width: 200px;

    }


    .name {
        margin-left: 25px;
        margin-top: 0px;
        width: 125px;
        font-size: 18px;
        padding-top: 10px;

    }

    button {
        background-color: #3BAF9F;
        display: block;
        margin: 0px 0px 0px 50px;
        text-align: center;
        font-size: 20px;
        border-radius: 12px;
        border: 2 px solid #366473;
        padding: 14px 80px;
        outline: none;
        color: white;
        cursor: pointer;
        transition: 0.25px;
    }
</style>

<body>


    <div class="navbar">
        <a href="home"><i class="fa fa-fw fa-home"></i>Home</a>
        <a href="medicines"><i class="fa fa-medkit"></i> Medicines </a>
        <a href="sales"><i class="fa fa-money"></i> Sales</a>
        <a href="shortage"><i class="fa fa-warning"></i> Shortage</a>
        <a href="update"><i class="fa fa-gear"></i> Update</a>
        <a href="employees"><i class="fa fa-users" aria-hidden="true"></i> Employees</a>
        <a href="company"><i class="fa fa-building" aria-hidden="true"></i> Companies</a>
        <a href="representatives"><i class="fa fa-users" aria-hidden="true"></i> Representatives</a>
    </div>

    <div class="update">
        <h1>Update Representatives Information</h1>
    </div>
    <div class="main">

        <?php $repID = $_GET['mid']; ?>


        <form action="updateComplete?mid=<?php echo $repID ?>" method="POST">

            <h2 class="name">New Phone Number</h2>
            <input type="text" class="phone" name="phone" value="" required>
            <br>
            <button type="submit">Update</button>
        </form>


    </div>
    <div id="MyClockDisplay" class="datetime" onload="showTime()"></div>
    <script>
        function showTime() {
            var date = new Date();
            var h = date.getHours(); // 0 - 23
            var m = date.getMinutes(); // 0 - 59
            var s = date.getSeconds(); // 0 - 59
            var session = "AM";

            if (h == 0) {
                h = 12;
            }

            if (h > 12) {
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
            document.getElementById("MyClockDisplay").textContent = today + ' ' + time;


            setTimeout(showTime, 1000);

        }

        showTime();
    </script>
</body>

</html>