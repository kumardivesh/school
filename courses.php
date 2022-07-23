<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>best school in india | Myschool.com</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet"media="screen and (max-width:1170px" href="css/phone.css">
    
</head>
<body>
    <nav id="navbar">
    <div id="logo">
        <img src="img/img7.jpeg" alt="myschool.com">
    </div>
        <ul>
        <li class="item"><a href="index.php">Home</a></li>
        <!-- <li class="item"><a href="registration.html">Register</a></li> -->
        <!-- <li class="item"><a href="#">About Us</a></li> -->
        <li class="item"><a href="contact.php">Contact Us</a></li>
        
    </ul>
</nav>
<section id="home">
    <h1 class="h-primary">Academics</h1>
    <p>Our School focuses on providing best knowledge to the students with the help of our Experienced Faculty. </p>
    </section>
    <section class="activities-container">
        <h1 class="h-primary center">Offered Courses</h1>
        <div id="Courses">
           <div class="box">
            <img src="math.jpg" alt="" class="src" >   
            <h2 class="h-secondary center">Mathematics</h2>
            <p class="text center">Mrs. Riya Sharma </p>
           </div>
           <div class="box">
            <img src="eng.jpg" alt="" class="src">   
            <h2 class="h-secondary center">English</h2>
            <p class="text center">Mrs. Siya Gupta</p>
           </div>
           <div class="box">
            <img src="science.jpg" alt="" class="src">   
            <h2 class="h-secondary center">Science</h2>
            <p class="text center">Mrs Diya Goyal </p>
           </div>
        </div>
    </section>
   <section id="Faculty">
    <section class="activities-container">
       <h1 class="h-primary center">Our Faculty</h1><br>
    
       <div id="Faculty">
        
           <div class="box">
            <img src="profile.jpg" alt="" class="src">   
            <h3 class="h-secondary center">Ms. Srishti Gupta</h3>
            <p class="text center">Chair Woman</p>
           </div>
           <div class="box">
            <img src="profile.jpg" alt="" class="src">   
            <h3 class="h-secondary center">Mr. Mukesh Swami</h3>
            <p class="text center">Principal </p>
           </div>
           <div class="box">
            <img src="profile.jpg" alt="" class="src">   
            <h3 class="h-secondary center">Mrs. Riya Sharma</h3>
           </div>
           <div class="box">
            <img src="profile.jpg" alt="" class="src">   
            <h3 class="h-secondary center">Mrs. Siya Gupta</h3>
           </div>
           <div class="box">
            <img src="profile.jpg" alt="" class="src">   
            <h3 class="h-secondary center">Mrs Diya Goyal</h3>
           </div>
           
       </div>
   </section>
</section>

    <section class="activities-container">
        <h1 class="h-primary center">Classrooms</h1>
        <div id="Classroom">
           <div class="box">
            <img src="cls1.jpg" alt="" class="src" >   
            <h2 class="h-secondary center"></h2>
            <p class="text center"></p>
           </div>
           <div class="box">
            <img src="cls2.jpg" alt="" class="src">   
            <h2 class="h-secondary center"></h2>
            <p class="text center"></p>
           </div>
           <div class="box">
            <img src="css\img2.jpeg" alt="" class="src">   
            <h2 class="h-secondary center"></h2>
            <p class="text center"> </p>
           </div>
        </div>
    </section>

</body>
</html>
<style>
    #navbar ul li a{
        color: rgb(9, 8, 8);
      display: block;
      padding: 3px 22px;
      border-radius: 20px;
      text-decoration: none;
    }
    #navbar ul li a:hover{
       color: rgb(244, 238, 238);
       background-color: rgb(8, 8, 8);
      }
    #home::before{
        content: "";
        position: absolute;
        background: url('academics.jpg')no-repeat center center/cover;
        top: 0px;
        left: 0px;
        height: 50%;
        width: 100%;
        z-index: -1;
        opacity: 0.89;
      
       
    }
    #home h1{
        color: black;
        text-align: center;
        padding-bottom: 100px;
    }
    #home p{
        color: green;
        text-align: center;
        font-size: 1.5rem;
        font-family: "baloo bhai";
        padding-bottom: 100px;
    }
    #Courses{
        margin: 34px;
        display: flex;
    }
    #Courses .box{
        border: 2px solid brown;
        width: 200%;
        padding: 34px;
        margin: 2px 6px;

        margin-bottom: 20px;
        border-radius: 28px;
        background:rgb(238, 231, 231);

    }
    #aCourses .box img{
        height: 156px;
        margin: auto;
        display: block;
        width: 0px;
        

    }
    #Classroom{
        margin: 34px;
        display: flex;
    }
    #Classroom .box{
        border: 2px solid rgb(22, 21, 21);
        width: 150%;
        padding: 25px;
        margin: 2px 6px;

        margin-bottom: 20px;
        border-radius: 5px;
        background:rgb(244, 248, 232);

    }
    #aClassroom .box img{
        height: 100px;
        margin: auto;
        display: block;
        width: 15px;
        

    }
    #activities{

    }
    /* client section */
    }
   
    #Faculty{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    #Facultyt-item{
        padding: 42px;
    }
    #Faculty img{
       height: 100px;
       margin: auto;
       padding-left: 700px;
    }
    .h-primary{
        font-family: cursive;
        font-size: 3.8rem;
        padding: 12px;
    }
    .h-secondary{
        font-family: cursive;
        font-size: 2.3rem;
        padding: 12px;
    }
    

    </style>