<!DOCTYPE html>
<html>
    <head>
        <title>home decor</title>
        <style>
             CSS Reset */
*{
    margin: 0;
    padding: 0;
}

html{
    scroll-behavior: smooth;
}

/* CSS Variables */
:root{
    --navbar-height: 59px;
}

/* Navigation Bar */
#navbar{
    display: flex;
    align-items: center;
    position: sticky;
    top: 0px;
}

#navbar::before{
    content: "";
    background-color: black;
    position: absolute;
    top:0px;
    left:0px;
    height: 100%;
    width:100%;
    z-index: -1;
    opacity: 0.7;
}

/* Navigation Bar: Logo and Image */
#logo{
    margin: 10px 34px;
}

#logo img{
    height: 59px;
    margin: 3px 6px;
    border-radius: 90px;
}


/* Navigation Bar: List Styling */

#navbar ul{
    display: flex;
    font-family: 'Baloo Bhai', cursive;
}

#navbar ul li{ 
    list-style: none;
    font-size: 1.3rem;
}

#navbar ul li a{
    color: white;
    display: block;
    padding: 3px 22px;
    border-radius: 20px;
    text-decoration: none;
}

#navbar ul li a:hover{
    color: black;
    background-color: white;
}


* Home Section */
#home{
    display: flex;
    flex-direction: column;
    padding:3px 200px;
    height: 550px;
    justify-content: center;
    align-items: center;
}

#home::before{ 
    content: "";
    position: absolute;
    background: url('22.jpg') no-repeat center center/cover;
    height: 642px;
    top:0px;
    left:0px;
    width: 100%;
    z-index: -1;
    opacity:0.89;
}
#home h1{
    color:white;
    text-align: center;
    font-family: 'Bree Serif', serif;
}

#home p{
    color:white;
    text-align: center;
    font-size: 1.5rem;
    font-family: 'Bree Serif', serif;
}
/* Services Section */
#services{
    margin: 34px;
    display: flex;
}
#services .box{ 
    border: 2px solid brown;
    padding: 34px;
    margin: 2px 55px;
    border-radius: 28px;
    background: #f2f2f2;
    margin-bottom: 20px;
}

#services .box img{ 
   height: 160px;
   margin: auto;
   display: block;
}

#services .box p{
    font-family: 'Bree Serif', serif;

} 

/* Clients Section */
#client-section{ 
    position: relative;
}

#client-section::before{
 content: "";
 position: absolute;
 background: url('22.jpg');
 width: 100%;
 height: 100%;
 z-index: -1;
 opacity: 0.3;
}

#clients{
    display: flex;
    justify-content: center;
    align-items: center;
}

.client-item{
    padding: 34px;
}

#clients img{
    height: 124px;
}


/* Contact Section */
#contact{
    position: relative;
}
#contact::before{
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    z-index: -1;
    opacity: 0.7;
    background: url('6.png') no-repeat center center/cover;

}
#contact-box{
    display: flex;
    justify-content: center;
    align-items: center;
    padding-bottom: 34px;
}
#contact-box input, 
#contact-box textarea{
    width: 100%;
    padding: 0.5rem;
    border-radius: 9px;
    font-size: 1.1rem;
} 

#contact-box form{
    width: 40%;
}

#contact-box label{
   font-size: 1.3rem;
   font-family: 'Bree Serif', serif;
}
footer{
    background: black;
    color: white;
    padding: 9px 20px;
}

/* Utility Classes */
.h-primary{
    font-family: 'Bree Serif', serif;
    font-size: 3px;
    padding: 12px;
    text-align: center;
}

.h-secondary{
    font-family: 'Bree Serif', serif;
    font-size: 2.3rem;
    padding: 12px;
}
.btn{
    padding: 6px 20px;
    border: 2px solid white;
    background-color: brown;
    color: white;
    margin: 17px;
    font-size: 1.5rem;
    border-radius: 10px;
    cursor:pointer;
}

.center{
    text-align: center;
}
/* Navigation */
#navbar {
    flex-direction: column;
}

#navbar ul li a{
    font-size: 1rem;
    padding: 0px 7px;
    padding-bottom: 8px;
}
/* Home section */
#home{
    height: 370px; 
    padding: 3px 28px;
}

#home::before{
    height: 480px; 
}

#home p{
    font-size: 13px;
}

/* Services section  */
#services{
    flex-direction: column;
}

#services .box { 
    padding: 14px;
    margin: 2px 0px; 
    margin-bottom: 20px;
}

/* Clients section */
#clients{
    flex-wrap: wrap;
}

#clients img{
    width: 66px;
    padding: 6px;
    height: auto;
}

/* Contact us section */
#contact-box form{
    width:80%;
    /*background-image: ;*/
}
/* Footer */

/* Utility classes */
.h-primary{
    font-size:26px;
}
.btn{
    font-size: 13px;
    padding: 4px 8px;
}
.popup{
    width:400px;
    background-color:white;
    border-radius:6px;
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    text-align:center;
    padding:0 30px 30px;
    color:#333;
    box-shadow:10px 10px 5px;
  }
  .popup img{
    width:100px;
    margin-top:20px;
    
  }
  .pop h1{
    font-size:38px;
    font-weight:500;
    margin:30px 0 10px;
    
  }
  button{
    width: 100px;
    padding: 15px 0;
    text-align: center;
    margin: 20px 20px;
    border-radius: 30px;
    font-weight: bold;
    border: 3px solid purple;
    background: transparent;
    cursor: pointer;
    position: relative;
    overflow: hidden;

    

  }
  span{
    background:gray;
    height: 100%;
    width: 0;
    border-radius: 25px;
    position: absolute;
    left: 0;
    bottom: 0;
    z-index: -1;
    transition: 0.9s;
  }
  button:hover span{
    width: 100%;
  }

        </style>
        <div class="popup">
            <img src="offer.png">
            <h1>Hurry Up!</h1>
            <p>15% discount available for limited time</p>
            <p>Book now?</p>
            <button type="button" class="button" float="left" onclick="window.location.href='#contact';"><span></span> Ok</button>
            <button type="button" class="button" id="close" float="right"><span></span> Cancel</button>
      
          </div>
          <script>
            document.querySelector("#close").addEventListener("click",function(){
              document.querySelector(".popup").style.display="none";
            },2000);
      
          </script>

    </head>

    <body>
        <nav id="navbar">
            <div id="logo">
                <img src="logo.jpg" alt="">
            </div>
            <ul>
                <li class="item"><a href="index.php">Home</a></li>
                <li class="item"><a href="#services-container">Services</a></li>
                <li class="item"><a href="#client-section">Follow US</a></li>
                <li class="item"><a href="#contact">Contact Us</a></li>
                <li class="item"><a href="exterior.php">Exterior</a></li>
                <li class="item"><a href="logout.php">Logout</a></li>
                
            </ul>
        </nav>
        <section id="home">
            <h3 class="h-primary">Welcome to INTERIORdesigns</h3>
            <p><marquee> Find Home interior design at HOMEDECOR. Find Home interior design. Web Search Info. Online Searches. Smart Search. Browse It Here. All Your Questions. Results Now. Find The Info You Need. You 
                Ask We Answer. Millions Search Results. Find It Here.
                Interior design is the art and science of enhancing the 
                interior of a building to achieve a healthier and more aesthetically pleasing environment for the people using the space. An interior designer is someone who plans, researches, coordinates, and manages such enhancement projects.</marquee>.</p>
            <br>
            <br>
            <br>
            
        </section>



        <section id="services-container">
            <h1 class="h-primary center">Our Services</h1>
            <div id="services">
                <div class="box">
                    <img src="service.svg" alt="">
                    <h2 class="h-secondary center">Furniture layout and space planing</h2>
                    <p class="center">All you need to do is focusing on few things , say colour palette , furniture , rugs , curtains , use of wood . In planning your furniture layout, start near the center of the room then move outwards. 
                        Focusing on the interior's main function will ensure there 
                        is little to no room for unnecessary elements.
                        All you need to do is focusing on few things , say colour palette ,
                         furniture , rugs , curtains , use of wood . 
                         In planning your furniture layout, start near the center of the 
                         
                         room then move outwards. Focusing on the interior's main function will ensure there is little 
                         to no room for unnecessary elements</p>
                </div>
                <div class="box">
                    <img src="8.jpg" alt="">
                    <h2 class="h-secondary center">Fabric and Accessories </h2>
                    <p class="center">
                        Image result for about fabrication work
                        What are fabrication techniques? Fabrication
                         techniques are the processes that are used to shape, cut or mould materials into items. Common fabrication techniques include cutting, forming, punching, stamping, shearing and welding
                        Image result for about fabrication work
                        What are fabrication techniques? Fabrication 
                        techniques are the processes that are used to shape, 
                        cut or mould materials into items. Common fabrication techniques include cutting, forming, punching, stamping, shearing and welding</p>
                </div>
                <div class="box">
                    <img src="99.jpg" alt="">
                    <h2 class="h-secondary center">Interior Detailing</h2>
                    <p class="center">Interior Design Improves Your Space

                        On the most basic level, a good interior design improves a space by making 
                        it better suited to its purpose. For example, if you're designing a bedroom you will 
                        make decisions that lead to it being more relaxing. 
                        For an office, good design will make it more focused and efficient..</p>
                </div>


                <div class="box">
                    <img src="o.png" alt="">
                    <h2 class="h-secondary center">Hardware ,plumbing and specification</h2>
                    <p class="center"> Plumbing is a termused to describe the technology and connections between systems in a cloud computing model. It includes the systems, storage, network and 
                        the interconnection components that form the cloud environment. The term is an analogy to the plumbing of water systems.</p>
                </div>


            </div>
        </section>


        <section id="client-section">
            <h1 class="h-primary center">Follow Us</h1>
            <div id="clients">
                <div class="client-item">
                 <a href="https://www.youtube.com">  <img src="1.png" alt="Our Client"></a>
                </div>
                <div class="client-item">
                    <a href="https://www.whatsapp.com">  <img src="2.png" alt="Our Client"></a>
                </div>
              
                <div class="client-item">
                    <a href="https://www.instagram.com">   <img src="3.png" alt="Our Client"></a>
                </div>
               <div class="client-item">
               <a href="help.html">  <img src="4.jpg" alt="Our Client"></a>
                </div>
            </div>
    
        </section>





        <section id="contact">
            <h1 class="h-primary center">Contact Us</h1>
            <div id="contact-box">
                <form action="#contact" method="POST">
                    <div class="form-group">
                        <label for="name">Name: </label>
                        <input type="text" name="uname" id="name" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email: </label>
                        <input type="email" name="uemail" id="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number: </label>
                        <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
                    </div>
                    <div class="form-group">
                        <label for="message">Services: </label>
                        <textarea name="message" id="message" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-btn">
                       <input type="submit" class="btn" value="Book" name="submit">
                     </div>
                </form>
            </div>
        </section>
        <div>
        <?php
             if(isset($_POST['submit'])){
                $uname=$_POST['uname'];
                $uemail=$_POST['uemail'];
                $phone=$_POST['phone'];
                $message=$_POST['message'];
                if (empty($uname) OR empty($uemail) OR empty($phone) OR empty($message)) {
                    echo"All fields are required";
                   }
                   echo "<br>";
                if (!preg_match('/[a-zA-Z]/', $uname)) {
                   echo"Invalid name";
                   }
                   echo "<br>";
                if (!preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/', $uemail)) {
                    echo "Invalid email";
                }
                echo "<br>";
                if (!preg_match('/^[0-9]{10}$/', $phone)) {
                    echo"Invalid phone number";
                }
                echo "<br>";

                require_once "database2.php";

                $sql ="INSERT INTO booking VALUES('$uname', '$uemail', '$phone', '$message')";
                mysqli_query($conn,$sql);
                }
                
                ?>
        </div>
        <footer>
            <div class="center">
                Copyright &copy; www.sishamashimdesign.com. All rights reserved!
            </div>
        </footer>
    </body>

</html>