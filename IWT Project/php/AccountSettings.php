<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Account | Stellar Homes</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles/header.css">
  <link rel="stylesheet" href="styles/footer.css">
  <link rel="stylesheet" type="text/css" href="styles/style.css">
  <link rel="stylesheet" type="text/css" href="styles/style1.css">
</head>

<body>

    <header class="header">
        <input type="checkbox" name="" id="chk1">

        <div><img src="images/StellarH_Logo_New.jpg" alt="Logo" class="logo"></div>

        <ul class="test">
          <li><a href="Homepage.html">Home</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="ListingPageSample.html">Apartments</a></li>
          <li><a href="About.html">About Us</a></li>
          <li><a href="Contact.html">Contact Us</a></li>
          <li><a href="AccountSettings.html">Account</a></li>
        </ul>

        <div class="search-box">
          <form action="">
              <input type="text" name="search" id ="srch" placeholder="Search Apartments...">
              <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div>
    </header>

<div class="banner" style="height: 60vh;">
  <div class="container1" style="height: 60vh; margin-bottom: 51px;">

    <div class="seller-box">
      <h2>User</h2><br><br>
        <ul>
            <li><a href="./php/login.php">Log in / Register</a></li>
            <li><a href="./php/AccountView.php">Account Settings</a></li>
            <li><a href="./php/AccountEdit.php">Personal Information</a></li>
            <li><a href="#">Upgrade Your Plan</a></li>
            <li><a href="#">Payment Settings</a></li>
        </ul>
    </div>
    <div class="my-container">
        <div class="my-profile-icon">
          <i class="fas fa-user-circle"></i>    </div>
        <div class="my-content">
          <h1>Account Settings</h1><br>
          <p>Here you can modify your account settings</p>
            <div class="my-buttons">
            <a href="UserAccountEdit.html"><button class="my-edit-button" >Edit</button></a>
            <a href="AccountView.php"><button class="my-edit-button" >View</button></a>
                <button class="my-delete-button">Delete</button>
            </div>
        </div>
    </div>
</div>  

    <footer class="footer" position: fixed;>       
        <div class="inner-footer">
            <div class="footer-container">
                <div class="email">
                    <input type="email" placeholder="Enter Your Email">
                   
                    <button type="submit">Subscribe</button>
                </div>
            </div>
            <div class="social-links">
                
                <ul>
                    <li class="social-items"><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                    <li class="social-items"><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                    <li class="social-items"><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    <li class="social-items"><a href="#"><i class="fa-brands fa-pinterest"></i></a></li>
                    <li class="social-items"><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                </ul>
            </div><br>

            <div class="quick-links">
                <ul>
                    <li class="quick-items"><a href="#">FAQs</a></li>
                    <li class="quick-items"><a href="Contact.html">Contact Us</a></li>
                    <li class="quick-items"><a href="#">Terms and conditions</a></li>
                    <li class="quick-items"><a href="#">Privacy and cookies policy</a></li>
                </ul>
            </div>
            <p class="footerBottom">&copy2023 Stellar Homes LLC, All Rights Reserved</p>
        </div>
    </footer>

</body>
</html>