<?php
    session_start();
?>
<html>
<head>
  <title>CERV</title>
  <link href="background2.png" rel="icon" type="image/png">
  <link href="pop.css" rel="stylesheet" type="text/css">
  <style>
.text-box{
width:98%;
color:black;
position:absolute;
top:30%;
left:50%;
transform:translate(-50%,-50%);
text-align:center;
padding-bottom: 20px;
margin-top: 240px;
}
.text-box p{
margin:10px 0 40px 50px;
font-size:50px;
color: black;
font-weight: 900;
}
.hero-btn{
display: inline-block; text-decoration: none;
color: black;
border: 5px solid #3BA16C; 
padding: 12px 22px;
font-size: 25px;
background: black; 
position: relative;
cursor: pointer;
color: red;
font-weight: 900;
margin-left: 50px;
}
.hero-btn:hover{
border:1px solid #37BD88;
background:#37BD88;
transition:0.7s;
}

div{
    font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell,
     'Open Sans', 'Helvetica Neue', sans-serif;
}
/* unvisited link */
.a:link {
    color: blue;
}

/* visited link */
.a:visited {
     color: red ;
}

/* mouse over link */
.a:hover {
    color: hotpink;
}

/* selected link */
.a:active {
    color: blue;
}

body{
    background-size: 100% auto;
    background-repeat: no-repeat;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  background-color: rgb(183,234,247);
  margin-top:-50.40%;
  position: absolute;
  width: 100%;
}

.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 25px;
  font-weight:900;
  margin-top:25px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;opacity: 75%;}

/* Slideshow container */
.slideshow-container {
  position: relative;
  margin: auto;
  height:100%;
  width:100%;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 3s;
}

@keyframes fade {
  from {opacity: .5} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}


#bg{
    float: left;
    width: 50%;
    margin-top: 80px;
}

#text{
    width: 50%;
    margin-top: 70px;
    font-size: 185%;
}

#logintext{
    position: absolute;
    margin-top: -35%;
    margin-left: 50px;
    color:black;
}

#iframe{
    position: absolute;
    margin-top: 130%;
    width: 100%;
    height: 47.5%;
    overflow: hidden;
    border: none;
    left: 0;
    display: flex;
    flex: 1;
  }

  #home{
    margin-top:-3%;
  }

  </style>
</head>
    <body>

    <div id="footer">
      <iframe id="iframe" src="footer.html"></iframe>
    </div>


        <?php
        if (isset($_SESSION["useruid"])) {
            echo '  


            <div class="slideshow-container">

            <div class="mySlides fade">
            <img src="villa1.png" style="width:100%;" height="100%">
            </div>

            <div class="mySlides fade">
            <img src="villa2.png" style="width:100%;" height="100%">
            </div>

            <div class="mySlides fade">
            <img src="apart1.jpg" style="width:100%;" height="100%">
            </div>

            <div class="mySlides fade">
            <img src="apart2.jpg" style="width:100%;" height="100%">
            </div>

            <div class="mySlides fade">
            <img src="apart3.jpg" style="width:100%;" height="100%">
            </div>

            <div class="mySlides fade">
            <img src="apart4.jpg" style="width:100%;" height="100%">
            </div>

            <div class="mySlides fade">
            <img src="apart5.jpg" style="width:100%;" height="100%">
            </div>

            </div>

            <div class="topnav">
            <table align="center" style="float:left;margin-left:230px;margin-right:235px;">
            <tr>
                <th>
                    <h1 style="font-weight:900;">CERV REAL ESTATE</h1>
                </th>
                <th>
                    <img style="border-radius: 40px;" src="background2.png" width="100px" height="95px">
                </th>
            </tr>
            </table>

            <a href="FAQ.html" class="a" target="_blank">FAQ</a>
            <a href="privacypolicy.html" target="_blank" class="a">Privacy Policy</a>
            <a href="#divOne" class="a">Contact</a> 
            <a href="logout.inc.php" class="a">Logout</a>
            </div>
                ';
            echo '

                    
                   <div id="logintext">
                   <h2 style="font-size: 50px;font-weight: 900;">Hello ' .$_SESSION['useruid']. '.</h2>
                   <span style="font-size:35px;font-weight:700;">What would you like to do?</span>
                   <br><br>
                   <a href="renthouses1.html" class="hero-btn">Rent</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <a href="buyhouses1.html" class="hero-btn">Buy</a>
                   </div>


                   <div id="home">
                   <div id="text" style="float:right;font-family: serif;">
                   <h1><u>About Us</u></h1><br>
                   Cerv Real Estate is a progressive real estate company focused on the future. We specialize in sustainable, low-carbon, low-energy lifestyles. From finding 
                   the perfect property for you to managing it for you, we take care of everything so you can live a comfortable and sustainable life. Whether you&#39;re looking
                   for a new city to live in or an eco-friendly home to invest in, Cerv Real Estate has the perfect property for you!
                   </div>
           
                   <div id="bg" style="margin-top:7%;">
                       <img src="hand.png" height="60%" width="95%">
                   </div>
               </div>
       
               
               <hr color="gold" style="margin-top:40%;height:2.5%;">
               <div style="margin-top:-1%;">
               <div id="text" style="float:right;font-family: serif;">
               <h1><u>Our Mission</u></h1><br>
               Cerv Real Estate is a progressive real estate company focused on the future. We specialize in sustainable, low-carbon, low-energy lifestyles. From finding 
               the perfect property for you to managing it for you, we take care of everything so you can live a comfortable and sustainable life. Whether you&#39;re looking
               for a new city to live in or an eco-friendly home to invest in, Cerv Real Estate has the perfect property for you!
               </div>
               <div id="bg" style="float:left;">
                   <img src="mission.png" height="63%" width="95%">
               </div>
               </div>
                    
                    <!--POPUP-->
      
                    <div class="overlay" id="divOne">
                        <div class="wrapper">
                            <h2>Please Fill up the Form</h2>
                            <a href="#" class="close" id="close">&times;</a>
                            <div class="content">
                                <div class="container">
                                    <form id="form" action="#divTwo">
                                        <label>First Name</label>
                                        <input type="text" placeholder="Your First Name" required class="name">
                                        <label>Last Name</label>
                                        <input type="text" placeholder="Your Last Name" required>
                                        <label>Email</label>
                                        <input type="email" placeholder="Your Email" required>
                                        <label>Query</label>
                                        <textarea placeholder="Your Query Here" required></textarea>
                                        <input type="submit" id="submit" value="submit">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            
            
                    <div class="overlay" id="divTwo">
                        <div class="wrapper"><h2 id="para">Thank you! Your query will be answered as soon as possible</h2>
                            <a href="#"><button>Return</button></a>
                        </div>';
          }
          else {
              echo '
                    
              <div class="slideshow-container">

              <div class="mySlides fade">
              <img src="villa1.png" style="width:100%;" height="100%">
              </div>
  
              <div class="mySlides fade">
              <img src="villa2.png" style="width:100%;" height="100%">
              </div>
  
              <div class="mySlides fade">
              <img src="apart1.jpg" style="width:100%;" height="100%">
              </div>
  
              <div class="mySlides fade">
              <img src="apart2.jpg" style="width:100%;" height="100%">
              </div>
  
              <div class="mySlides fade">
              <img src="apart3.jpg" style="width:100%;" height="100%">
              </div>
  
              <div class="mySlides fade">
              <img src="apart4.jpg" style="width:100%;" height="100%">
              </div>
  
              <div class="mySlides fade">
              <img src="apart5.jpg" style="width:100%;" height="100%">
              </div>
  
              </div>
            
              <div class="topnav">
              <table align="center" style="float:left;margin-left:200px;margin-right:160px;">
              <tr>
                  <th>
                      <h1 style="font-weight:900;">CERV REAL ESTATE</h1>
                  </th>
                  <th>
                      <img style="border-radius: 40px;" src="background2.png" width="100px" height="95px">
                  </th>
              </tr>
          </table>
  
              <a href="FAQ.html" class="a">FAQ</a>
              <a href="privacypolicy.html" target="_blank" class="a">Privacy Policy</a>
              <a href="#divOne" class="a">Contact</a> 
              <a href="sign.php" class="a">Sign Up</a>
              <a href="log.php" class="a">Login</a>
              </div>
        <div class="text-box">
        <p>Home is where memories are made and traditions are created</p>
        </div>

        <div id="home">
            <div id="text" style="float:right;font-family: serif;">
            <h1><u>About Us</u></h1><br>
            Cerv Real Estate is a progressive real estate company focused on the future. We specialize in sustainable, low-carbon, low-energy lifestyles. From finding 
            the perfect property for you to managing it for you, we take care of everything so you can live a comfortable and sustainable life. Whether you&#39;re looking
            for a new city to live in or an eco-friendly home to invest in, Cerv Real Estate has the perfect property for you!
            </div>
    
            <div id="bg" style="margin-top:7%;">
                <img src="hand.png" height="60%" width="95%">
            </div>
        </div>

        
        <hr color="gold" style="margin-top:40%;height:2.5%;">
        <div style="margin-top:-1%;">
        <div id="text" style="float:right;font-family: serif;">
        <h1><u>Our Mission</u></h1><br>
        Cerv Real Estate is a progressive real estate company focused on the future. We specialize in sustainable, low-carbon, low-energy lifestyles. From finding 
        the perfect property for you to managing it for you, we take care of everything so you can live a comfortable and sustainable life. Whether you&#39;re looking
        for a new city to live in or an eco-friendly home to invest in, Cerv Real Estate has the perfect property for you!
        </div>
        <div id="bg" style="float:left;">
            <img src="mission.png" height="63%" width="95%">
        </div>
        </div>


                <!--POPUP-->
      
              <div class="overlay" id="divOne">
                  <div class="wrapper">
                      <h2>Please Fill up the Form</h2>
                      <a href="#" class="close" id="close">&times;</a>
                      <div class="content">
                          <div class="container">
                              <form id="form" action="#divTwo">
                                  <label>First Name</label>
                                  <input type="text" placeholder="Your First Name" required class="name">
                                  <label>Last Name</label>
                                  <input type="text" placeholder="Your Last Name" required>
                                  <label>Email</label>
                                  <input type="email" placeholder="Your Email" required>
                                  <label>Query</label>
                                  <textarea placeholder="Your Query Here" required></textarea>
                                  <input type="submit" id="submit" value="submit">
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
      
      
              <div class="overlay" id="divTwo">
                  <div class="wrapper"><h2 id="para">Thank you! Your query will be answered as soon as possible</h2>
                      <a href="#"><button>Return</button></a>
                  </div>
                  
                  <div id="aboutcontainer" style="margin-top:5000px;">
                  <div id="picture">
                      <img src="hand.png">
                  </div>
                  <div id="text">
                  </div>
              </div>
                 ';
          }
        ?>


        <script> 

        //AUTO BACKGROUND SLIDE SHOW       
        let slideIndex = 0;
          showSlides();

          function showSlides(){
            let slides = document.getElementsByClassName('mySlides');
            let i;
            for (i = 0; i < slides.length; i++){
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 3000);
          }


        //COOKIEPOPUP
        window.onload = setTimeout(cookiealert, 3000);

        function cookiealert(){
            alert('**(PLEASE NOTE THAT THIS WEBSITE WAS MADE BY STUDENTS FOR PROJECT PURPOSES AND NOT FOR COMMERCIAL OR BUSINESS USAGE.)**');
        }


        </script>
        
    </body>
    </html>