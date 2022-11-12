
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>


    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="header">

<div id="menu-btn" class="fas fa-bars"></div>

<script src="script.js"></script>

<a href="home" class="logo">Portfolio</a>

<nav class="navbar">
    <a href="#home" class="active">Home</a>
    <a href="#about">About</a>
    <a href="#services">Services</a>
    <a href="#portfolio">Portfolio</a>
    <a href="#contact">Contact</a>
</nav>

<div>
<a href="#" class="fab fa-facebook-f"></a>
<a href="#" class="fab fa-twitter"></a>
<a href="#" class="fab fa-instagram"></a>
<a href="#" class="fab fa-linkedin"></a>
<a href="#" class="fab fa-github"></a>
</div>

</header>

<section class="home" id="home">


<div class="image">
    <img src="images/54.jpg" alt="">
</div>

<div class="content">
    <h3>Hi, I am Dren Tahiri</h3>
    <span>Web Developer</span>
    <p>Hello I am Dren Tahiri I am a Web Developer. The programming languages I know are: HTML, CSS, JavaScript, Bootstrap, GIT, lately foucsed on : React Js, Wordpress </p>
    <a href="#about" class="btn">About me</a>
</div>

</section>

<section class="about" id="about">

<h1 class="heading"> <span>biography</span> </h1>

<div class="biography">
<p>I am Dren Tahiri, I was born in July 4th 2001, in Gjilan. I finished primary school at Thimi Mitko primary school in Gjilan. I finished high school at Mehmet Isai Technical High School in Gjilan. Right now I am studying at UBT College, majoring in Computer Science and Engineering in the third year. </p>


<div class="bio">
    <h3> <span>name :</span> DREN TAHIRI</h3>
    <h3> <span>email :</span>drentahiri91@gmail.com</h3>
    <h3> <span>address :</span>Rruga Vellezerit Maliqi 299,Gjilan Kosovo</h3>
    <h3> <span>phone :</span>+38345370494</h3>
    <h3> <span>age :</span>21 years old</h3>
    <h3> <span>experience :</span>1+ year of experience</h3>
</div>

<a href="images/CV.pdf"
 class="btn">Download CV</a>
</div>

<div class="heading"> <span>skills</span>

<div class="progress">
    <div class="bar"> <span>HTML</span> <span>90%</span></div>
    <div class="bar"> <span>CSS</span> <span>90%</span></div>
    <div class="bar"> <span>PHP</span> <span>40%</span></div>
    <div class="bar"> <span>ReactJs</span> <span>50%</span></div>
    <div class="bar"> <span>JavaScript</span> <span>40%</span></div>
</div>
</div>

<div class="edu-exp">

<h1 class="heading" data-aos="fade-up"> <span> experience</span> </h1>

<div class="row">

   <div class="box-container">

     
   

      <div class="box" data-aos="fade-right">
         <span>( 1+ Years Experience )</span>          
         <h3>HTML</h3>
      </div>

      <div class="box" data-aos="fade-right">
         <span>( 1+ Years Experience  )</span>
         <h3>CSS</h3>
      </div>

      <div class="box" data-aos="fade-right">
         <span>( 6 Months Experience  )</span>
         <h3>PHP</h3>
      </div>

   </div>

   <div class="box-container">

       <div class="box" data-aos="fade-left">
            <span>( 3 Months Experience )</span>
            <h3>React JS</h3>
      </div>
     
      <div class="box" data-aos="fade-left">
         <span>( 1 Year Experience )</span>
         <h3>JavaScript</h3>
      </div>

      <div class="box" data-aos="fade-left">
         <span>( 6+ Months Experience )</span>
         <h3>Wordpress</h3>
      </div>
     

   </div>

</div>

</div>

</section>

<section class="services" id="services">

<h1 class="heading"> <span>Services</span></h1>

<div class="box-container">

<div class="box">
     <i class="fas fa-code"></i>
     <h3>Web Development</h3>
</div>

<div class="box">
<i class="fas fa-code"></i>
     <h3>IT Support</h3>
</div>
</div>


</section>


<section class="portfolio" id="portfolio">

<h1 class="heading"><span>Portfolio</span></h1>

<div class="box-container">

</div>

<div class="box">
    <img src="images/45.png" alt="">
</div>

</section>

<section class="contact" id="contact">

<h1 class="heading"> <span>Contact me</span></h1>

<form action="" method="post">

<div class="flex">
   <input type="text" name="name" placeholder="Enter your name" class="box" required>
   <input type="email" name="email" placeholder="Enter your email" class="box" required>
</div>
<input type="number" min="0" name="number" placeholder="Enter your number" class="box" required>
<textarea name="message" class="box" required placeholder="Enter your message" cols="30" rows="10"></textarea>
<input type="submit" value="Send message" name="send" class="btn">
</form>

<div class="box-container">

<div class="box">
   <i class="fas fa-phone"></i>
   <h3>phone</h3>
   <p>+383-45-370-494</p>
</div>

<div class="box">
   <i class="fas fa-envelope"></i>
   <h3>email</h3>
   <p>drentahiri91@gmail.com</p>
</div>

<div class="box">
   <i class="fas fa-map-marker-alt"></i>
   <h3>address</h3>
   <p>Kosovo,Gjilan, 60000, Vellezerit Maliqi 299</p>
</div>

</div>

</section>

<div class="credit">  <?php echo date('Y');?> by <span>DREN TAHIRI</span></div>

<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND message ='$msg'") or die('query failed');

   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }
   else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email,number, message) VALUES ('$name', '$email','number', '$msg') ") or die('query failed');
      $message[] = 'message sent successfully!';
    }
}
?>
<?php
if(isset($$message)){
   foreach($$message as $$message){
      echo '
      <div class="message">
      <span>'.$message.'</span>
      <i class="fas fa-times" onclick"this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

</body>
</html>