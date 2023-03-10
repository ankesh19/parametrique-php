<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Parametrique &#8211; Contact Us</title>
  <link rel="icon" type="image/x-icon" href="assets/media/icon/favicon.ico">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="assets/css/header.css">
  <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
  <link rel="stylesheet" type="text/css" href="assets/css/contact-us.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <!-- library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>
<?php include('layout/header.php'); ?>

<!--contact-us main start-->
<div class="main-container">

    <!-- banner start-->
    <div class="banner-container">
        <div class="banner-image">
            <img src="assets/media/image/contact-us/contact-us-banner.jpg" alt="banner">
        </div>
        <div class="banner-text">
           <h1>CONTACT US</h1> 
        </div>        
    </div> 
    <!--banner close--> 

    <!--content start-->
    <div class="content-container"> 
        <div class="content">
            <div class="box-group">
                <div class="box">
                    <div class="image">
                        <img src="assets/media/image/contact-us/location.png" alt="image">
                    </div> 
                    <h1>OFFICE ADDRESS</h1> 
                    <p>ATS Tower, 2nd Floor,Plot-16,
                        Sector-135 Noida, UP-201301.
                    </p>  
                </div>
                <div class="box">
                    <div class="image">
                        <img src="assets/media/image/contact-us/customer_support.png" alt="image">
                    </div> 
                    <h1>Contact Us</h1> 
                    <p>+91-9899552200</p>  
                </div>
                <div class="box">
                    <div class="image">
                        <img src="assets/media/image/contact-us/gmail.png" alt="image">
                    </div> 
                    <h1>Send Us E-mail</h1> 
                    <p>helpdesk@parametrique.com</p>  
                </div>
            </div>    
        </div>
        <!--content1 close-->

        <div class="content" id="form"> 
            <div class="form-container">
                <form  action="#" method="post" onsubmit="return false;">
                    <div>
                       <p>Your Name:</p>
                       <input type="text" name="name" required>
                    </div>  
                    <div>
                        <p>Email:</p>
                        <input type="email" name="email" required>
                     </div>  
                     <div>
                        <p>Subject:</p>
                        <input type="text" name="subject" required>
                     </div> 
                     <div>
                        <p>Your Message:</p>
                        <textarea name="message" rows="10" required></textarea>
                     </div>  
                     <div>
                        <input type="submit" value="Send">
                     </div> 
                </form>    
            </div>    
        </div> 
        <!--content2 close-->

        <div class="content"> 
            <div class="google-map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14025.330936834589!2d77.3999999!3d28.4996353!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb22aef7c819ffdd1!2sParametrique+Electronic+Solutions+Pvt.+Ltd.!5e0!3m2!1sen!2sin!4v1535356376425"></iframe>
            </div>    
        </div>    
        <!--content3 close--> 

    </div>   
    <!--content close-->  
</div>    
<!--contact-us main close-->
<?php include('layout/footer.php'); ?>

<script type="text/javascript" src="assets/js/main.js"></script> 
</body>
</html>