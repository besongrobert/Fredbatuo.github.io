<!DOCTYPE html>
<html lang="en">
<head>
   <title>My Web Page</title>
 <script>
  function handleClick() {
   alert("Button clicked!");
  }
  
  function handleKeyPress(event) {
   if (event.keyCode == 13) {
    alert("Enter key pressed!");
   }
  }
  
  function handleMouseMove(event) {
   var x = event.clientX;
   var y = event.clientY;
   console.log("Mouse moved to: (" + x + ", " + y + ")");
  }
 </script>
</head>
<body>
 <button onclick="handleClick()">Click me!</button>

 
 <input type="text" onkeypress="handleKeyPress(event)">
 <button>send</button>
 
 <div onmousemove="handleMouseMove(event)">Move your mouse over me!</div>
</body>
</html>
 <title>My Web Page</title>
 <script>
  function openPopup() {
   // Get the popup element
   var popup = document.getElementById("myPopup");
   
   // Show the popup
   popup.style.display = "block";
  }
  
  function closePopup() {
   // Get the popup element
   var popup = document.getElementById("myPopup");
   
   // Hide the popup
   popup.style.display = "none";
  }
 </script>
 <style>
  /* Style for the popup */
  .popup {
   display: none;
   position: fixed;
   top: 0;
   left: 0;
   width: 100%;
   height: 100%;
   background-color: rgba(0,0,0,0.5);
   z-index: 9999;
  }
  
  .popup-content {
   position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%);
   padding: 20px;
   background-color: #fff;
   border-radius: 5px;
   box-shadow: 0px 0px 10px rgba(0,0,0,0.5);
  }
  
  .popup-close {
   position: absolute;
   top: 10px;
   right: 10px;
   cursor: pointer;
  }
 </style>
</head>
<body>
 <button onclick="openPopup()">Open Popup</button>
 
 <div id="myPopup" class="popup">
  <div class="popup-content">
   <h2>Popup Title</h2>
   <p>Popup content goes here...</p>
   <span class="popup-close" onclick="closePopup()">X</span>
  </div>
 </div>
</body>
</html>
</head>

<body>
<header>
  <h1>WELCOME TO MY RESTAURANT!!!</h1><br><br>
  <nav>
    <ul>
      <img src="food9.jpeg">
      <img src="food5.jpeg">
      <img src="food39.jpg">
      <img src="food34.jpg">
    
      <li><a href="Restau.html">Home!</a></li>
      <li><a href="drinks.html">Jus!</a></li>
      <li><a href="wine.html">wine!</a></li>
      <li><a href="bars.html">wine  bars!</a></li>
            <li><a href="Register.html">Contact!</a></li>
            <li><a href="About us.html">Aboutus!</a></li>
    </ul>      
  </nav><h1>ROBERT'S Elegant Restaurant!!!</h1><br><br>

<p></p><br>
</header>
  <section id="Home">
    <h2 style="color: red;  font-size: 45px;">ROBERT'S Elegant Restaurant!!!</h2><br>
   <title>My Restaurant</title>
  </head>
  <body>
    <h1></h1>
    <center>
     <h2 style="color: red;  font-size: 45px;">please select your items here!!!</h2><br>
    <label for="burger-qty">Burger:</label>
    <input type="number" id="burger-qty">
    <br><br>
    <label for="fries-qty">Fries:</label>
    <input type="number" id="fries-qty">
    <br><br>
    <label for="salad-qty">Salad:</label>
    <input type="number" id="salad-qty">
    <br><br>
    <label for="drink-qty">Drink:</label>
    <input type="number" id="drink-qty">
    <br><br>
     <label for="jus-qty">Drink:</label>
    <input type="number" id="drink-qty">
    <br><br>
    
    <h1>Total cost: <span id="total-cost">$0.00</span></h1>
</center>
    <script src="Restau.js"></script>

  </body>
</html>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  
  <link rel="stylesheet" href="Restau.css">
  <title>CSS Background Image</title>
  <style type="text/css">
    
    body{
      background-image: url(food46.jpg);
      background-size:cover;
      background-position:center;
    }
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <h1 style="background-color: yellow;">Elegan Restaurant</h1>
  <marquee><h1>WILL BE WAITING FOR YOU PLEASE BUSINESS IS UP<h1></marquee>
  <center>
  <video width="200" height="200"src="chop8.mp4" type="video/mp4" controls></video>
  <video width="200" height="200"src="chop1.mp4" type="video/mp4" controls></video>
  <video width="200" height="200"src="chop2.mp4" type="video/mp4" controls></video>
  <video width="200" height="200"src="chop3.mp4" type="video/mp4" controls></video>
  <video width="200" height="200"src="chop4.mp4" type="video/mp4" controls></video>
  <video width="200" height="200"src="chop5.mp4" type="video/mp4" controls></video>
  <video width="200" height="200"src="chop6.mp4" type="video/mp4" controls></video>
  <audio controls autoplay>
        <source src="fredo.mp3" type="audio/mp3">
        </audio>
        <audio controls autoplay>
        <source src="video2.mp3" type="audio/mp3">
        </audio>
        <audio controls autoplay>
        <source src="video2.mp3" type="audio/mp3">
        </audio>
        <audio controls autoplay>
        <source src="video2.mp3" type="audio/mp3">
        </audio>
  </center>
</head>
<body>
 
  <nav>
    <img style=" width: 175px; margin-left: 100px;"src="food9.jpeg">
    <img style=" width: 175px; margin-left: 100px;"src="food1.jpeg">
    <img style=" width: 175px; margin-left: 100px;"src="food3.jpeg">
    <img style=" width: 175px; margin-left: 100px;"src="food2.jpeg">
    

   
      <ul>
        <li><a href=".html"></a></li>
        <li><a href="Restausingup.html">CONTACT</a></li>
        <li><a href="Reservation.html">RESERVATION PATH</a></li>
        <li><a href="lover.html"></a></li><br><br><br>
        
        
      </ul>
    </nav>
    <div class="box">
     
      <i class="fa fa-search"></i>
      <input type=" text"placeholder="Search for a drink,jus,food,wine!!">
    </div>   
  <section class="items">
    <div class="item">
      <h1>fried rice</h1>
      <img src="food1.jpeg">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
       <div class="item">
      <h1>fried rice</h1>
      <img src="food5.jpeg">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
       <div class="item">
      <h1>fried rice</h1>
      <img src="food10.png">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
       <div class="item">
      <h1>fried rice</h1>
      <img src="food6.jpeg">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
       <div class="item">
      <h1>fried rice</h1>
      <img src="food8.jpeg">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
       <div class="item">
      <h1>fried rice</h1>
      <img src="food1.jpeg">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
       <div class="item">
      <h1>fried rice</h1>
      <img src="food1.jpeg">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
       <div class="item">
      <h1>fried rice</h1>
      <img src="food1.jpeg">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
       <div class="item">
      <h1>fried rice</h1>
      <img src="food30.jpg">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
       <div class="item">
      <h1>fried rice</h1>
      <img src="food30.jpg">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
       <div class="item">
      <h1>fried rice</h1>
      <img src="food12.jpg">
      <h4>Harm<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
       <div class="item">
      <h1>fried rice</h1>
      <img src="food13.png">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
       <div class="item">
      <h1>fried rice</h1>
      <img src="food14.png">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
       <div class="item">
      <h1>fried rice</h1>
      <img src="food15.png">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
       <div class="item">
      <h1>fried rice</h1>
      <img src="food16.png">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
       <div class="item">
      <h1>fried rice</h1>
      <img src="food17.png">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
       <div class="item">
      <h1>fried rice</h1>
      <img src="food18.jpg">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
       <div class="item">
      <h1>fried rice</h1>
      <img src="food19.jpg">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
       <div class="item">
      <h1>fried rice</h1>
      <img src="food20.jpg">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
       <div class="item">
      <h1>fried rice</h1>
      <img src="food21.jpg">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
       <div class="item">
      <h1>fried rice</h1>
      <img src="food22.jpg">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
       <div class="item">
      <h1>fried rice</h1>
      <img src="food23.jpg">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
       <div class="item">
      <h1>fried rice</h1>
      <img src="food23.jpg">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
       <div class="item">
      <h1>fried rice</h1>
      <img src="food24.jpg">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
       <div class="item">
      <h1>fried rice</h1>
      <img src="food25.jpg">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
       <div class="item">
      <h1>fried rice</h1>
      <img src="food26.jpg">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
       <div class="item">
      <h1>fried rice</h1>
      <img src="food27.jpg">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
      <div class="item">
      <h1>fried rice</h1>
      <img src="food28.jpg">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
      <div class="item">
      <h1>fried rice</h1>
      <img src="food29.jpg">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
      <div class="item">
      <h1>fried rice</h1>
      <img src="food30.jpg">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
      <div class="item">
      <h1>fried rice</h1>
      <img src="food31.jpg">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
      <div class="item">
      <h1>fried rice</h1>
      <img src="food32.jpg">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
      <div class="item">
      <h1>fried rice</h1>
      <img src="food33.jpg">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
      <div class="item">
      <h1>fried rice</h1>
      <img src="food34.jpg">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
      <div class="item">
      <h1>fried rice</h1>
      <img src="food35.jpg">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
      <div class="item">
      <h1>fried rice</h1>
      <img src="food36.jpg">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
      <div class="item">
      <h1>fried rice</h1>
      <img src="food37.jpg">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
      <div class="item">
      <h1>fried rice</h1>
      <img src="food38.jpg">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
      <div class="item">
      <h1>fried rice</h1>
      <img src="food39.jpg">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
      <div class="item">
      <h1>fried rice</h1>
      <img src="food40.jpg">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
      <div class="item">
      <h1>fried rice</h1>
      <img src="food41.jpg">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
      <div class="item">
      <h1>fried rice</h1>
      <img src="food42.jpg">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
      <div class="item">
      <h1>fried rice</h1>
      <img src="food43.jpg">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
      <div class="item">
      <h1>fried rice</h1>
      <img src="food44.jpg">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
      <div class="item">
      <h1>fried rice</h1>
      <img src="food45.jpg">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
      <div class="item">
      <h1>fried rice</h1>
      <img src="food46.jpg">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
      <div class="item">
      <h1>fried rice</h1>
      <img src="food47.jpg">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
      <div class="item">
      <h1>fried rice</h1>
      <img src="food48.jpg">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
      <div class="item">
      <h1>fried rice</h1>
      <img src="food49.jpeg">
      <h4>H<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
      <div class="item">
      <h1>fried rice</h1>
      <img src="food50.jpg">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
      <div class="item">
      <h1>fried rice</h1>
      <img src="food51.jpg">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
      <div class="item">
      <h1>fried rice</h1>
      <img src="food52.jpg">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
      <div class="item">
      <h1>fried rice</h1>
      <img src="food53.jpg">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
      <div class="item">
      <h1>fried rice</h1>
      <img src="food54.jpg">
      <h4>Harmburger<br>1000.00FCFA</h4>
      <button>at your price</button>
    </div>
      <section id="Home">
    <h2 style="color: darkcyan;  font-size: 80px;">Welcome to Elegan Restaurant</h2><br>
    <h4 style="font-size: 30px;">As an AI language model, I do not have access to your personal information or history. Therefore, I cannot provide you with a clear project 1 and project 2 on how you started your restaurant. However, here are some general ideas for restaurant projects:</h4>
    <a href ="#Projects"><strong>View my work</strong></a>
  </section>
  <section id="Projects" >
    <h2 style="color: darkcyan; font-size: 45px;">My Projects</h2>
    <ul>
      <li>
      <img width="350px",height="400px" src="food46.jpg" alt="Project 1">
      <h3  style="color: green; font-size: 38px;">Project 1</h3>
      <p style="font-size: 100px;">
      <h1> Business Plan</h1>
<h2>Create a comprehensive business<br> plan for your restaurant, <br>including market research,<br> financial projections,<br> menu development, staffing needs,<br> marketing strategies, <br>and operational procedures.<br> This plan will serve as a roadmap for<br> your restaurant's <br>success and help you se<br>cure funding from<br> investors or lenders.</h2>
    </li>
    <li>
      <img width="350px",height="400px" src="food50.jpg" alt="Project2">
      <h3 style="color: green; font-size: 38px;">Project 2</h3>
      <p style="font-size: 100px;">
        <h1>Requirements</h1>
<h2>Research and fulfill all legal<br> requirements to start a restaurant.<br> This includes obtaining<br> necessary licenses and permits,<br> registering your business,<br> and complying with health and<br> safety regulations.<br> Develop policies and procedures for<br> staff training, food handling,<br> and sanitation to ensure<br> compliance with local laws</h2>
    </li></ul></section>
    <section id="About">
      <h2 style="color: darkcyan;  font-size: 45px;">About Me<br>Some possible words to describe a restaurant</h2>
      <p style="font-size: 30px;">
- Delicious: implies that the food is tasty and enjoyable.
- Fresh: suggests that the ingredients used are high-quality and recently prepared.
- Authentic: indicates that the restaurant offers a genuine and traditional cuisine.
- Cozy: describes a warm and welcoming atmosphere, often with comfortable seating and lighting.
- Stylish: suggests that the restaurant has a modern and fashionable design.
- Friendly: implies that the staff is approachable and helpful, creating a pleasant dining experience.
- Affordable: indicates that the prices are reasonable and accessible to a wide range of customers.
- Unique: describes a restaurant that offers something different or special, setting it apart from others.
- Sustainable: suggests that the restaurant is committed to using eco-friendly practices and ingredients.
- Memorable: implies that the dining experience is unforgettable, leaving a lasting impression on customers.</p>
      <p style="font-size: 30px;"> A young tech guru, has a perfect mastery of more than 5 prominent programming languages. Passionate, committed and gaining the game. </p>
    </section>
    <section id="Contact">
      <h2 style="color: darkcyan;  font-size: 45px;">Contact Me</h2>
      <form>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for ="message">Message:</label>
  
    <textarea id="message" name="message"required></textarea>
    <button type="submit">Send Message</button>
  </form> 
<p>You can also reach me at besongrobertbatuo86.com or on social media @</p>
<ul>
<li><a href="https://www.facebook.com">Facebook</a></li>
<li><a href="https://www.linkedin.com/in/besongrobert/">Linkedin</a></li>
<li><a href="https://www.github.com/besongrobert/">Github</a></li>
</ul>

            
  </section>
  <script>
    function myFunction{
      alert('Order added Sucessfully');
    }
  </script>
</body>
</html>