<!DOCTYPE html>
<html>
<head>
	    <style>
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
h1{padding-left: 50%}

body{
    background-color: #ffff;
    font-family:Arial; 
    }

.info {
display: grid ;
grid-template-columns: 30% 30% 30%;
grid-row-gap: 10px;
grid-gap: 2em;
grid-column-gap: 10px;
padding: 10px;
padding-left: 300px;
padding-top: 200px;

}

.info > div{
  background:#6C8EAD;
  border: 1px solid rgba(0, 0, 0, 0.8);
  padding: 20px;
  font-size: 27px;
  text-align: center;
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

.Page{
  position: fixed;
  left:300px;
  top: 10px;
  background-color: #0D1B2A;
  padding: 20px;
  border: 5px solid #0D1B2A;
  border-radius: 20px;
  margin: 10px;
  color: white;
  font-size: 25px;
}
        
        </Style>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

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

   
       <h1> XYZ Pharmacy </h1>

       <div class="info">
          
        <div>
         <h3>Total Sales</h3>
            
        </div>

        <div>
            <h3>Number of Companies</h3>
           
        </div>

     <div>
       <h3>Number of Expired Medicines</h3>
           
     </div>
 
 

 

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
      
    

</body>
</html>

