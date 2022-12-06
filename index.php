
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SimpleWork</title>
    <link rel="stylesheet" href="index.css">
    <style>
body{
    scroll-behavior: smooth;    
}


#myBtn {
    display: none; /* Hidden by default */
    position: fixed; /* Fixed/sticky position */
    bottom: 20px; /* Place the button at the bottom of the page */
    right: 30px; /* Place the button 30px from the right */
    z-index: 99; /* Make sure it does not overlap */
    border: none; /* Remove borders */
    outline: none; /* Remove outline */
    background-color: gray; /* Set a background color */
    color: white; /* Text color */
    cursor: pointer; /* Add a mouse pointer on hover */
    padding: 15px; /* Some padding */
    border-radius: 10px; /* Rounded corners */
    font-size: 18px; /* Increase font size */
  }
  #myBtn img{
    width: 30px;
    height: 30px;
  }
  #myBtn:hover {
    background-color: orange; /* Add a red background on hover */
  }


#servises p{
    background-color: transparent;
    color: #f3fbff;
    font-weight: bold;
}



    </style>
</head>
<body>
   <!-- <div class="nav"> -->
    
        <!-- <label for="">SimpleWork</label> -->
        <p class="logo">SimpleWork</p>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#servises">Servises</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact us</a></li>
            <!-- <li>Contact us</li> -->
            <li><a href="signupa.php">Account</a></li>
        </ul>

    <div class="home_div" id="home">
        
            <img src="images/user-interface.gif" alt="" srcset="">
        
        <div class="homepage_text">
            <p style="background-color:transparent;">
                SimpleWork <br><br>
                welcome to the SimpleWork website's company<br> 
                Here we offer 3 most desirable services:<br>
                Web development,Graphic design and Tax declaration<br>
                Inventore non eius neque totam blanditiis natus itaque<br> 
                quae iure ratione aliquam dolore, eveniet doloremque.
        </p>
        </div>
    </div>
    <div id="servises">
        <!-- <p id="servss"></p> -->
        <p style="color:gray;">Explore our services</p>
        <a href="#" onmouseover="func()">
            <img src="images/taxes.png" alt="" srcset="">
        </a>
        <a href="#">
            <img src="images/graphic.png" alt="" srcset="">
        </a>
        <a href="#">
            <img src="images/design.png" alt="" srcset="">
        </a>
    </div>
    <div class="home_about" id="about">
        <img src="images/design.png" alt="" srcset="" style="height: 70%;margin-top:10%;">
    
        <div class="homepage_text">
        <p style="
                color: gray;
                font-size: 30px;
                font-family: system-ui;
                margin-left: 10%;
                margin-top: -9%;
            ">About SimpleWork</p>
            <p style="
                color: gray;
                font-size: 25px;
                font-family: tahoma;
                margin-top: 5%;
            ">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Quam, earum. Saepe nostrum alias molestias provident. <br>
            Inventore non eius neque totam blanditiis natus itaque<br> quae iure ratione aliquam dolore, eveniet doloremque.</p>
        </div>
    
    </div>
    <div class="home_div" id="contact" style="background-image:url('images/x.png');background-size:100%;background-repeat: no-repeat;">
       <div>
        <p>Contact us</p>
            <form action="insertmessage.php" method="post">
                <input name="name" type="text" placeholder="Name">
                <input name="email" type="email" placeholder="Email">
                <textarea name="message" id="" cols="30" rows="10" placeholder="Type your message"></textarea>
                <input type="submit" value="Send" style="background-color:gray;">
            </form>
       </div>
   </div>
   <footer>
    <div>
        <p>FAQ</p>

    </div>
    <div>
        <p>Quick Links</p>
        <a href="#servises">Services</a>
        <a href="#about">About us</a>

    </div>
    <div>
        <p>Address</p>
        <p>Kigali-Rwanda</p>
        <p>UR-CST</p>
        <p>Computer Science</p>
    </div>
    <div>
        <p>Contacts</p>
        <p>Tel: +250 780 314 784</p>
        <p>Email: simplework@gmail.com</p>
    </div>

   </footer>

   <button onclick="topFunction()" id="myBtn" title="Go to top"><img src="images/home.png" alt="" srcset=""></button>

<script src="main.js"></script>

<!-- SCROLL BUTTON  -->
<script> //scroll button
      // Get the button:
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
//   document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
</script>
<script>
    function func(){
        document.getElementById("servss").innerHTML="hello";
        // alert("hi")
    }
</script>
</body>
</html>