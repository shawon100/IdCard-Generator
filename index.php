<!DOCTYPE html>
<html>
<head>
	<title>IdCard Generator</title>
	<meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/bootstrap.min.js"></script>

    <style>
    	
    	<style>
    .ruet
    {
        background-color:#008040;
        border-bottom: 6px solid #004f27;
        height:50px;
        width:100px;
        color:#ffffff;
        font-weight: bold;
        font-size:18px;      
        text-align:center;
        border-radius:5px;
        padding:10px 20px 10px 20px;


}
.ruet:hover
{
   
   background-color: #008040;
   border-bottom-width: 4px; 
   
  
}

a:link
{
  color:#ffffff;
  text-decoration:none;
  
} 

.ruet:active
{
    border-bottom-width:1px;
    background-color: #00a653;


} 

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgb(40,40,40);
    box-shadow: 5px 5px 5px grey;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 18px;
    color: white;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover, .offcanvas a:focus{
    color: white;
    background-color: #3F51B5;  
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 20px;
    font-size: 30px;
    margin-left: 50px;
}



.nav
{
   border-radius: 0px;
   background-color: #3F51B5;
   border:none;
}

  .foot
  {
          background-color: rgb(40,40,40);
          padding: 20px;
          color: white;
          text-align: center;
          clear: left;
          max-width: 100%;
          margin-top:500px;
          


          
  }

  .bh
  {
      font-size:30px;
      cursor:pointer;
      color: white; 
      margin-left: 20px;
      padding:5px;

  }
  .ch
  {
     font-size: 25px; 
     margin-left:15px;
  }
  .bh:hover
  {
      background-color: black;
  }

  @media only screen and (max-width:400px)
  {
    .ch
    {
       font-size:20px;
       margin-left:2px;
    }
  }



    </style>
</head>
<body>
 
       <header>
         <nav class="navbar navbar-inverse nav">
              <div class="container-fluid">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>

                  <span class="bh" onclick="openNav()">&#9776;</span>
                  <span class="ch"><a style="color: white;" href="index.html">ID Card Generator</a></span>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                  <ul class="nav navbar-nav">
                    <!--<li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Page 1</a></li>
                    <li><a href="#">Page 2</a></li>
                    <li><a href="#">Page 3</a></li>-->
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                    <!--<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>-->
                  </ul>
                </div>
              </div>
        </nav> 
           



            <div id="mySidenav" class="sidenav">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <a href="https://shawon100.github.io/Button-Generator/index.html" target="_blank">Button Generator</a>
              <a href="#">MenuBar</a>
              <a href="#">Table</a>
            </div>

            


           
            <script>
            function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
            }
            </script>

            <div class="container">
                <!--<div id="branding">
                    <h1><span class="highlight">RUET WEB</span> Generator</h1>
                </div>
                <nav>
                    <ul>
                        <li class="current"><a href="new1.html">Button Generator</a></li>
                        <li><a href="about.html">CSS Generator</a></li>
                        <li><a href="services.html">Date Generator</a></li>
                        <li><a href="generator.html">Form Generator</a></li>
                    </ul>
                </nav>-->
            </div>
        </header>
    

  
  
    <section id="main" style="margin-top:100px;">

     <div class="container">
       

       <div class="row">
         <div class="col-sm-6">
             
         <div class="form-group">  
         <label for="bn"></label>   
        <form action="view.php" method="POST" enctype="multipart/form-data">

               
       <div class="form-group">
      <label for="bn">Your Bangla Name</label>
			<input type="text" class="form-control" name="fname" placeholder="Your Bangla Name" required>
			</div><br>
			<div class="form-group">
            <label for="en">Your English Name</label>
			<input type="text" class="form-control" name="ename" placeholder="Your English Name" required>
			</div><br>
			<div class="form-group">
            <label for="">Your Father's Name (Bangla)</label>
			<input type="text" class="form-control" name="faname" placeholder="Your Father's Name (Bangla)" required>
			</div><br>
			<div class="form-group">
            <label for="">Your Mother's Name (Bangla)</label>
			<input type="text" class="form-control" name="mname" placeholder="Your Mother's Name (Bangla)" required>
			</div><br>
			<div class="form-group">
            <label for="">Your Date Of Birth(English)</label>
			<input type="date" class="form-control" name="dname" placeholder="Your Date Of Birth (English)" required>
			</div><br>
			<div class="form-group">
            <label for="">Your ID Number (English)</label>
			<input type="text"  class="form-control" name="nid" placeholder="Your ID Number (English)" required>
			</div><br><br>
			<div class="form-group">
            <label for="">Your Signature (English)</label>
			<input type="text" class="form-control" name="si" placeholder="Your Signature (English) " required>
			</div><br><br>
			<div class="form-group">
      <label for="">Upload Your Picture</label>
			<b></b> <input type="file" name="file" required>
			</div><br>
			<input type="submit" class="btn btn-success" name="" value="Submit">
			</form>
      </div>

           
           </div>
           </div>
           </div>
       </section>

  
       <footer class="foot">
            <center><p>Copyright &copy;2017<br>Developed By <a href="http://fb.com/ashadullah.shawon">Ashadullah Shawon</a></p></center>
        </footer>


</body>
</html>
