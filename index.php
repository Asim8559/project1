
<!DOCTYPE html>
<html>
    <head>
        <title>Homepage</title>
        <style>
         *{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
         }   

  .banner{
    width: 100%;
    height: 100vh;
    background-image: url(99.jpg);
    /*background-image: linear-gradient(rgba(0,0,0,0,75),rgba(0,0,0,75));*/
    background-size: cover;
    background-position: center;
    
    
  }
  
  
  
  .a{
    width: 85%;
    margin: auto;
    padding: 35px 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
    
    
  }
  .logo{
    width: 120px;
    cursor: pointer;
    border-radius: 90px;
    

  }
  .a nav{
    list-style: none;
    display: inline-block;
    margin: 0 20px;
    position: relative;
  }
 .a nav a{
    text-decoration: none;
    color: black;
    
    margin: 0 20px;

    text-transform: uppercase;
  }
  .a nav ::after{
    content: '';
    height: 3px;
    width: 0;
    background: palevioletred;
    position: absolute;
    left: 0;
    bottom: -10px;
    transition: 0.9s;
  }
  .a nav :hover::after{

    width: 100%;
    

  }
  .content{
    width: 100%;
   position: absolute;
    top: 50%;
    transform: translateY(-50%);
    text-align: center;
    color: black;

  }
  .content h1{
    font-size: 50px;
    font-weight: bolder;
  }
  .content p{
    font-weight: bolder;
    line-height: 25px;
  }
  button{
    width: 200px;
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
  #clock { 

font-size: 20px;

direction: ltr;

width: 150px; 

margin: 2px; 

text-align: right; 

 

border-radius: 2px; 
}
.popup{
    width:400px;
    background-color:rgb(255, 255, 255);
    border-radius:6px;
    position:absolute;
    top:20%;
    left:50%;
    transform:translate(-50%,-50%);
    text-align:center;
    padding:0 30px 30px;
    color:#333;
    box-shadow:10px 10px 10px 10px grey;
  }
  .popup img{
    width:100px;
    margin-top:20px;
    border-radius:50%;
    box-shadow:0 2px 5px rgba(0,0,0,0.2);
  }
  .pop h1{
    font-size:38px;
    font-weight:400;
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
  }*/
        </style>
    </head>
<body>
  <div>
    <div class="popup">
      <img src="tick.png">
      <h2>You are logged in successfully</h2>
      <button type="button" class="button" id="close"><span></span> Ok</button>

    </div>
    <script>
      document.querySelector("#close").addEventListener("click",function(){
        document.querySelector(".popup").style.display="none";
      });

    </script>
  
  
     <div class="banner">
        <div class="a"> 
            <img src="logoo.png" class="logo" >
            <div id="clock">8:10:45</div>

            

            <script>
              setInterval(showTime, 1000); 
     
     function showTime() { 
     
         let time = new Date(); 
     
         let hour = time.getHours(); 
     
         let min = time.getMinutes(); 
     
         let sec = time.getSeconds(); 
     
         am_pm = "AM"; 
     
       
     
         if (hour > 12) { 
     
             hour -= 12; 
     
             am_pm = "PM"; 
     
         } 
     
         if (hour == 0) { 
     
             hr = 12; 
     
             am_pm = "AM"; 
     
         } 
     
       
     
         hour = hour < 10 ? "0" + hour : hour; 
     
         min = min < 10 ? "0" + min : min; 
     
         sec = sec < 10 ? "0" + sec : sec; 
     
       
     
         let currentTime = hour + ":" 
     
                 + min + ":" + sec + am_pm; 
     
       
     
         document.getElementById("clock") 
     
                 .innerHTML = currentTime; 
     } 
     showTime();
     
     
     
     
             </script>

            
            
                

          
        </div>
                
     
                
     
        
        <div class="content">
            <h1>DESIGN YOUR HOUSE</h1>
            <P >Perfect From Beginning to End</P>
            <div class="button">
                <button type="button" onclick = "window.location.href='interior.php';" ><span></span>INTERIOR</button>
                <button type="button" onclick = "window.location.href='exterior.php';"><span></span> EXTERIOR</button>

              
                       
                </div>
        
            </div>
        </div>
       
  </div>
            </div>
           
        
</body>
</html>