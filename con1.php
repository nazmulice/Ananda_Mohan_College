<!DOCTYPE HTML>  
<html>
<head>
<title>Ananda Mohan College</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="home.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <style>
  .error {color: #FF0000;
  }
 .con{
  text-align: center;
  padding: 10px;
  margin-bottom: 10px;
 }

 .con h1{
  color: blue;
}

.flex-container2 {
  display: flex;
  align-items: stretch;
  background-color: #0D2235;
}

.flex-container2 > div {
  color: white;
  margin: 26px;
  padding: 20px
  text-align: center;
  height: 180px;
  font-size: 18px;
}

.flex-container2 ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

.flex-container2 img {
    margin-left: 50px;
    height: ;
    width: ;
}

#more {
  display: none;
}



footer{
   
  background-color: #0B1D2D;
  padding: 15px;
  width: 100%;
  float: left;


}
footer p{
  color: white;
  font-size: 17px;
  margin-top: 5px;
  margin-bottom: 2px;
}

footer .social-icons img{
  width: 38px;
  transition: 0.5s;
}
footer .social-icons a:hover img{
  transform: translateY(-13px);
}

.flex-container3 {
  display: flex;
  align-items: stretch;
  background-color: #0B1D2D;
}

.flex-container3 > div {
  color: white;
  margin: 10px;
  padding: 10px
  text-align: center;
  height: 40px;
  font-size: 18px;
}

.amader-form{
  width: 1100px;
  margin: 10px;
  padding: 10px;
  border-radius: 5px;
  border:1px solid blue;
  margin-left: 220px;
}

.amader-form input{
  display: block;
  width: 92%;
  font-size: 18px;
  padding: 4px;
  border:1px solid gray;
  background: transparent;
  color:blue;
  border-radius: 5px;
}

.amader-form textarea{
  width: 1030px;
  height: 120px;
}

.amader-form input[type=submit]{
  width: 150px;
  padding: 10px;
  margin-top: 10px;
  cursor: pointer;
  background-color:#2196F3;
}
  </style>

</head>
<body>  
   <div class>
      <img src="capture.png" alt="Mountains" height="105px" width="100%">
    </div>
    
    <div class="nav">
    <ul>
      <li><a href="home.html">Home</a> </li>

      <li><a href="#">About</a>
        <ul>
        <li><a href="Overview.html">Overview</a></li>
        <li><a href="about.html">History</a></li>
        </ul>
      </li>

        <li><a href="#">Administration</a> 
          <ul>
        <li><a href="po.html">Principle Office</a> </li>
        
        <li><a href="teacher.html">Teacher Council</a> </li>
        <li><a href="Office.html">Office Staff</a> </li>
          </ul>
        </li>

        <li><a href="#">Faculty</a>
          <ul>
        <li><a href="science.html">Science</a> </li>
        <li><a href="art.html">Art</a> </li>
        <li><a href="business.html">Business Studiest</a> </li>
        <li><a href="other.html">Other</a></li>
          </ul>
        </li>

        <li><a href="#">Admission</a>
          <ul>
        <li><a href="hsc.html">HSC</a> </li>
        <li><a href="hon.html">Honors</a> </li>
        <li><a href="msc.html">MSC</a> </li>
          </ul>
        </li>

        <li><a href="#">Facilities</a>
          <ul>
        <li><a href="hostal.html">Hostal</a> </li>
        <li><a href="health.html">Health Care</a> </li>
        <li><a href="cultural.html">Cultural Council</a></li>
        <li><a href="#">Transport</a></li>
          </ul>
        </li>

        

        <li><a href="notice.html">Notice</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="con1.php">Contact</a></li>
        <li><a href="log1.html">Sign In</a></li>
        
      </ul>
    </div>

  <marquee ><b>Last date of Admit card Download 13/12/19**2015-2016 Hon's 4th Year Central Model Test will be start from 02/11/2019**Class off for admission test</b></marquee><br>
  <div class="con">
    <h1>Ananda Mohan College,Mymensingh</h1>
    <p>College Road,Sadar,Mymensingh-2200.</p>
    <p>Email:anandamohan1908@gmail.com</p>
    <p>Email:anandamohan1908@yahoo.com</p>
    <p>Web:<a href="http://anandamohangovtcollege.edu.bd/">www.anandamohangovtcollege.edu.bd/</a></p>
  </div>


<?php

$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h1 style="text-align: center; color: purple;">Contact With Us:</h1>

<div class="amader-form">
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Subject: <input type="text" name="website" value="<?php echo $website;?>">
  
  <br>
  
  
  <h2>Message :</h2><textarea name="comment" placeholder="Description"><?php echo $comment;?>
      </textarea>
 
  <br>
  <input type="submit" name="submit" value="Submit">  
</form>

</div>

<?php
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

<!----footer---->
<div class="flex-container2">

  <div style="flex-grow: 3">
    <ul style="text-align: center; border-right:2px solid red">
      <li>Teachers</li>
      <li>Students</li>
      <li>Office Staff</li>
      <li>Admission</li>
      <li>Alumni</li>
      <li>Teachers Council</li>
    </ul>
  </div>
  <div style="flex-grow: 2">
       <img src="logo.jfif" height="130px" width="130px">
  </div>

  <div style="flex-grow: 3">
    <ul style="text-align: center; border-right:2px solid red; border-left:2px solid red">
      <li>Central Library</li>
      <li>Hostel</li>
      <li>Health Care</li>
      <li>Admission</li>
      <li>Auditorium</li>
      <li>Transport Facilities</li>
    </ul>
  </div>

  

  <div style="flex-grow: 3 ">
      <img src="amc.png" height="130px" width="160px">
  </div>

</div>
 <!------Footer------>
<footer>
<div class="flex-container3">

  <div style="flex-grow: 8">
    <p style="margin-left: 25px;">Copyright &copy; 2020 Ananda Mohan College | All Rights Reserved.</p>
    <p style="margin-left: 25px;">Design and developed By Nazmul</p>

    
  </div>

  <div style="flex-grow: 4">
   
   <div class="social-icons">
  <p style="color: skyblue; margin-left: 22px; font-size: 25px;margin-right: 10px; float: left;">Find Us</p>
          <a href="https://www.facebook.com/"><img src="fb.png"></a>
          <a href="https://www.instagram.com/"><img src="instagram.png"></a>
          
          <a href="https://twitter.com/"><img src="twitter.png"></a>
          <a href="https://web.whatsapp.com/"><img src="whatsapp.png"></a>
  
        </div>
  </div>

</div>
</footer>



</body>
</html>