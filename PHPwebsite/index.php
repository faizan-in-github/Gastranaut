
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Bacasime+Antique&family=Bebas+Neue&family=Bellefair&family=Bodoni+Moda:opsz@6..96&family=Bungee+Outline&family=Londrina+Outline&family=Nixie+One&family=Playfair+Display&family=Playfair+Display+SC&family=Press+Start+2P&family=Sorts+Mill+Goudy&family=Staatliches&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


  <style>
    .container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px;
      font-family: 'Bebas Neue';

    }

    .logo {
      margin-top: 20px;
    }

    #two {
      height: 100vh;
    }

    .logo h1 {
      display: inline-block;
      font-family: 'Bebas Neue';
      font-weight: bolder;
    }

    .logo img {
      height: 60px;
      width: 60px;
      margin-top: -10px;
      font-family: 'Londrina Outline';
    }

    span {
      font-size: 70px;
      font-weight: bolder;
      font-family: "Londrina Outline";
    }

    .navbar ul {
      list-style: none;
      padding: 0;
      margin-top: 30px;
    }

    .navbar li {
      display: inline;
      margin: 0 10px;
      font-size: 20px;
    }

    .navbar ul li a {
      text-decoration: none;
      color: black;

    }

    .olcolor {
      box-shadow: 0 0 0 2px rgb(5, 5, 5);
      border-radius: 20px;
      padding: 10px;
      transition: 0.2s;
    }

    hr {
      margin-left: 90px;
      margin-right: 90px;
      margin-top: -10px;
    }

    .navele {

      transition: 0.5s;

    }

    .navele:hover {
      color: crimson;
      font-size: 21px;

    }

    #two {
      background-image: url(./Images/Background2.gif);

      background-repeat: no-repeat;
      background-size: cover;
      height: 100vh;
      display: flex;
      justify-self: center;
      align-self: center;
    }

   

    h2 {
      text-align: center;
      color: #333;
    }

    label {
      display: block;
      margin-top: 10px;
      color: #555;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin: 5px 0;
      border: 1px solid #ccc;
      border-radius: 10px;
    }
    .image-collage {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            max-width: 1000px;
            margin: 20px auto;
            padding: 10px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
           
        }

        .image {
            width: 100%;
            height: auto;
            border-radius: 5px;
            transition: transform 0.2s;
        }

        .image:hover {
            transform: scale(1.05);
        }
    input[type="submit"] {
      width: 100%;
      background-color:crimson;
      color: #fff;
      border: none;
      padding: 10px;
      margin-top: 10px;
      border-radius: 10px;
      /* Increased border radius */
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #0056b3;
    }
    label{
      color: #000;
    }

    .olcolor:hover {
      background-color: crimson;
      border-radius: 20px;
      padding: 12px;

    }

    #two {
      background-image: url(./Images/Background2.gif);
      background-repeat: no-repeat;
      background-size: cover;
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      /* Vertically center the content */
      align-items: center;
      /* Horizontally center the content */
    }

    .center-container {
      background-color: rgba(255, 255, 255, 0.2);
      /* Add a semi-transparent white background */
      padding: 20px;
      color: #000;
      border-radius: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: center;
      /* Center text within the container */
      max-width: 400px;
      /* Limit the width of the container */
      margin-top: -80px;
    }

    .site-footer {
      background-color: #26272b;
      padding: 45px 20px 20px;
      /* Added left and right margin */
      font-size: 15px;
      line-height: 24px;
      color: #737373;
    }

    .site-footer hr {
      border-top-color: #bbb;
      opacity: 0.5
    }

    .site-footer hr.small {
      margin: 20px 0
    }

    .site-footer h6 {
      color: #fff;
      font-size: 16px;
      text-transform: uppercase;
      margin-top: 5px;
      letter-spacing: 2px
    }

    .site-footer a {
      color: #737373;
    }

    .site-footer a:hover {
      color: #3366cc;
      text-decoration: none;
    }

    .footer-links {
      padding-left: 0;
      list-style: none
    }

    .footer-links li {
      display: block
    }

    .footer-links a {
      color: #737373
    }

    .footer-links a:active,
    .footer-links a:focus,
    .footer-links a:hover {
      color: #3366cc;
      text-decoration: none;
    }

    .footer-links.inline li {
      display: inline-block
    }

    .site-footer .social-icons {
      text-align: right
    }

    .site-footer .social-icons a {
      width: 40px;
      height: 40px;
      line-height: 40px;
      margin-left: 6px;
      margin-right: 0;
      border-radius: 100%;
      background-color: #33353d
    }

    .copyright-text {
      margin: 0
    }

    @media (max-width:991px) {
      .site-footer [class^=col-] {
        margin-bottom: 30px
      }
    }

    @media (max-width:767px) {
      .site-footer {
        padding-bottom: 0
      }

      .site-footer .copyright-text,
      .site-footer .social-icons {
        text-align: center
      }
    }

    .social-icons {
      padding-left: 0;
      margin-bottom: 0;
      list-style: none
    }

    .social-icons li {
      display: inline-block;
      margin-bottom: 4px
    }

    .social-icons li.title {
      margin-right: 15px;
      text-transform: uppercase;
      color: #96a2b2;
      font-weight: 700;
      font-size: 13px
    }
    

    .social-icons a {
      background-color: #eceeef;
      color: #818a91;
      font-size: 16px;
      display: inline-block;
      line-height: 44px;
      width: 44px;
      height: 44px;
      text-align: center;
      margin-right: 8px;
      border-radius: 100%;
      -webkit-transition: all .2s linear;
      -o-transition: all .2s linear;
      transition: all .2s linear
    }

    .social-icons a:active,
    .social-icons a:focus,
    .social-icons a:hover {
      color: #fff;
      background-color: #29aafe
    }

    .social-icons.size-sm a {
      line-height: 34px;
      height: 34px;
      width: 34px;
      font-size: 14px
    }
    cbe{
      color: crimson;
    }

    .social-icons a.facebook:hover {
      background-color: #3b5998
    }

    .social-icons a.twitter:hover {
      background-color: #00aced
    }

    .social-icons a.linkedin:hover {
      background-color: #007bb6
    }

    .social-icons a.dribbble:hover {
      background-color: #ea4c89
    }

    @media (max-width:767px) {
      .social-icons li.title {
        display: block;
        margin-right: 0;
        font-weight: 600
      }
    }

    @media (max-width: 768px) {
      .container {
        flex-direction: column;
        text-align: center;
      }


      .navbar li {
        display: inline;
        margin: 0 10px;
        font-size: 15px;
      }

      #Images {
        margin-left: 40px;
        /* Reset margin for smaller screens */
        margin-top: 10px;

        /* Add margin for smaller screens */
      }
    }

    /* Media query for screens with a minimum width of 1200px */
  </style>
</head>

<body>
  <section id="one">
    <div class="container">
      <div class="logo">
        <img src="./Images/randomlogo.png">
        <h1>GASTRANAUT</h1>
      </div>

      <div class="navbar">
        <nav>
          <ul>
            <li><a href="Aboutus.php" class="navele">About-Us/Contact-us</a></li>
           
            <li><a href="login.php" class="olcolor">Login/Sign-up</a></li>
          </ul>
        </nav>
      </div>
    </div>
    <hr>
    <div class="container col-xxl-8 px-4 py-5">
      <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div id="text" class="col-lg-6" style="text-align: center; margin-top: -50px;">
          <h1>Embark on a <br><span>Culinary Adventure in <cbe>Coimbatore</cbe></span></h1>
          <p>Discover hidden foodie gems, savor mouthwatering dishes, and create unforgettable memories in Coimbatore with us.</p>
          <a href="login.php" class="olcolor" style="text-decoration: none; color: black;">Login/Sign-up</a>
        </div>
        <div class="col-10 col-sm-8 col-lg-6">
          <img src="./Images/Background.gif" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700"
            height="500" loading="lazy" id="Images" style="height:450px; width:450px;">
        </div>
      </div>
    </div>

   <section>
    <div class="image-collage">
      <img class="image" src="./Images/image1.jpg" alt="Image 1">
      <img class="image" src="./Images/image2.jpg" alt="Image 2">
      <img class="image" src="./Images/image3.png" alt="Image 3">
      <img class="image" src="./Images/image4.jpg" alt="Image 4">
      <img class="image" src="./Images/image5.jpg" alt="Image 5">
      <img class="image" src="./Images/image6.jpg" alt="Image 5">
      
  </div>
   </section>

  </section>
  <section id="three" style="">
    <div class="px-4 pt-5 my-5 text-center border-bottom">
      <h1 class="display-4 fw-bold text-body-emphasis" style="font-family: 'Bebas Neue'; font-weight: bolder;">Share
        Your Food Adventures</h1>
      <div class="col-lg-6 mx-auto">
        <p class="lead mb-4" style="font-family: 'Bebas Neue'; ">We're on a quest to discover the best food places in
          town! Do you know a hidden gem, a local favorite, or a must-visit food spot? Share your culinary adventures
          with us and help fellow food enthusiasts find their next delicious meal.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
          <a href="login.php" type="button" style="font-family: 'Bebas Neue'; " class="btn  btn-lg px-4 me-sm-3 olcolor"
            fdprocessedid="e5qa6">Login/Sign-up</a>
        </div>
      </div>
    </div>
  </section>
  <section id="4">
    <div class="container col-xxl-8 px-4 py-5">
      <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
          <img src="./Images/Waffles.gif" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
        </div>
        
        <div class="col-lg-6" style=" font-family:'Playfair Display'";>
          <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Welcome to Gastranaut - Your Culinary Journey Awaits</h1>
          <p class="lead">Gastranaut is a vibrant community of food lovers, explorers, and connoisseurs who share a common passion for discovering exceptional dining experiences. Our mission is to guide you on a gastronomic journey like no other, helping you find the best places to eat and savor mouthwatering dishes.</p>
          <p class="lead">At Gastranaut, we believe that food is more than just sustenance; it's an adventure, a cultural exploration, and a source of joy. Whether you're a local foodie or a traveler seeking culinary delights, our platform connects you with hidden gems, local favorites, and must-visit food spots.</p>
          <p class="lead">Join us in exploring the diverse world of cuisine, from street food stalls to Michelin-starred restaurants. Let Gastranaut be your trusted companion in your quest for memorable dining experiences. Share your food discoveries, connect with fellow food enthusiasts, and embark on a flavorful journey with us.</p>
        </div>
        
      </div>
    </div>
  </section>
  <hr>
  <section id="4">
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-12 col-lg-6">
                <img src="./Images/Cbe.jpg" class="d-block float-start img-fluid" alt="Coimbatore" width="700" height="500" loading="lazy" style="padding:10px;">
                <img src="./Images/fooddosa.jpg" class="d-block float-start img-fluid" alt="Coimbatore" width="700" height="500" loading="lazy" style="padding:10px;">
                <img src="./Images/hotel.png" class="d-block float-start img-fluid" alt="Coimbatore" width="700" height="500" loading="lazy" style="padding:10px;">
            </div>

            <div class="col-12 col-lg-6" style="font-family: 'Playfair Display';">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Coimbatore, often referred to as the "Manchester of South India"</h1>
                <p id="foodlife"> due to its thriving textile industry, is a city that boasts a vibrant and diverse food culture. The city's food scene is a delightful fusion of traditional South Indian flavors, alongside an array of international cuisines, making it a gastronomic haven for food enthusiasts. From bustling street food stalls to fine dining restaurants, Coimbatore offers a plethora of culinary experiences that cater to all tastes and budgets.

                One cannot talk about Coimbatore's food life without mentioning the iconic South Indian dishes that have a special place in every local's heart. The city's dosas, idlis, and vadas are legendary, and places like Annapoorna, Sree Annapoorna, and Shree Sweets serve these classics with an authentic touch. For those who crave spicy and flavorful Chettinad cuisine, Junior Kuppanna is a must-visit, renowned for its delectable biryanis and fiery curries.

                Coimbatore is also known for its variety of street food. Sukkubhai Biryani, a local legend, is famous for its delicious biryani, and the nearby Gandhipuram area is a street food paradise with stalls offering everything from chaats to pav bhaji. Meanwhile, Geetha Café and Hari Bhavan are the go-to spots for mouthwatering filter coffee and crispy medu vadas.

                If you're in the mood for international cuisine, Coimbatore does not disappoint. Restaurants like On The Go, offering a mix of Asian and European dishes, and Black Forest, renowned for its continental cuisine, provide an alternative palate. To indulge in a lavish dining experience, places like Le Meridien's Favola and The Residency offer exquisite multi-course meals with a touch of sophistication.

                The culinary landscape of Coimbatore continues to unfold with hidden gems and culinary adventures waiting to be explored. For seafood enthusiasts, the city offers delightful options like Sri Vinayaka Mess, where you can relish fresh and flavorful seafood preparations that will transport your taste buds to the coastal regions of South India.

                Coimbatore's dessert scene is equally enchanting. Shree Krishna Sweets, known for its mouthwatering Mysore pak and delectable sweets, is a must-visit for those with a sweet tooth. Moreover, Adyar Ananda Bhavan (A2B) serves an array of sweets and savories that showcase the rich tradition of South Indian sweets.

            </p>
            </div>
        </div>
    </div>
</section>
<hr>


<section id="6">
  <footer class="site-footer">
    <div class="container1">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h6>About</h6>
          <p class="text-justify"> Gastranaut, your go-to source for all things delicious! Our mission is to share
            mouthwatering recipes, culinary adventures, and foodie experiences with you. Join us in exploring the world
            of gastronomy and savoring the finest flavors from around the globe.</p>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Categories</h6>
          <ul class="footer-links">
            <li><a href="#">Recipes</a></li>
            <li><a href="#">Restaurant Reviews</a></li>
            <li><a href="#">Cooking Tips</a></li>
            <li><a href="#">Foodie Travel</a></li>
          </ul>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Quick Links</h6>
          <ul class="footer-links">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms of Service</a></li>
          </ul>
        </div>
      </div>
      <hr>
    </div>
    <div class="container1">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text">Copyright &copy; 2023 All Rights Reserved by <a href="#">Foodie Delights</a>.</p>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <ul class="social-icons">
            <li><a class="facebook" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                  <path
                    d="M10.86 0H5.14a5.14 5.14 0 0 0-5.14 5.14v5.72a5.14 5.14 0 0 0 5.14 5.14h2.91V9.74h-2.01V7.24h2.01V5.49c0-2.17 1.33-3.35 3.26-3.35.92 0 1.71.07 1.94.1v2.25h-1.33c-1.04 0-1.24.49-1.24 1.22v1.6h2.47l-.32 2.5h-2.15V16h4.22a5.14 5.14 0 0 0 5.14-5.14V5.14A5.14 5.14 0 0 0 10.86 0z" />
                </svg></a></li>
            <li><a class="twitter" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                  <path
                    d="M16 2.83a6.27 6.27 0 0 1-1.83.5A3.17 3.17 0 0 0 15.66 .53a6.26 6.26 0 0 1-1.98.76 3.13 3.13 0 0 0-5.33 2.86 8.91 8.91 0 0 1-6.47-3.27 3.13 3.13 0 0 0 .97 4.17 3.09 3.09 0 0 1-1.42-.39v.04a3.12 3.12 0 0 0 2.51 3.05 3.17 3.17 0 0 1-1.42.05 3.12 3.12 0 0 0 2.91 2.17 6.25 6.25 0 0 1-3.87 1.33 6.29 6.29 0 0 1-.74-.04 8.84 8.84 0 0 0 4.8 1.41 8.94 8.94 0 0 0 9-9c0-.14 0-.28 0-.41a6.4 6.4 0 0 0 1.58-1.63z" />
                </svg></a></li>


          </ul>
        </div>
      </div>
    </div>
  </footer>

  </section>


</body>

</html>