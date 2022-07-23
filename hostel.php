<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel</title>
</head>
<body>
    <h1><b> Our Hostel</b></h1>
    
   <div id="box">
      <img src="host2.jpg" alt="This is an image"width="100%"height="900px";> 
      
       <div class="bottom-left"><ul>
            <li>Fully Furnished</li>
            <li>AC & Non-Ac rooms available</li>
            <li>Attach bathroom</li>
            <li>Hygienic Rooms</li>
            <li>Healthy food</li>
            <li>Security and Safety</li>
            <li>Attach balcony</li>
        </ul>
        </div>
   </div>
   <section class="activities-container">
    <h1 class="h-primary center">Hostel Rooms</h1>
    <div id="Hostel">
       <div class="box">
        <img src="hostel.jpg" alt="" class="src" >   
        <h2 class="h-secondary center"></h2>
        <p class="text center"> </p>
       </div>
       <div class="box">
        <img src="host3.jpg" alt="" class="src">   
        <h2 class="h-secondary center"></h2>
        <p class="text center"></p>
       </div>
       <div class="box">
        <img src="host4.jpg" alt="" class="src">   
        <h2 class="h-secondary center"></h2>
        <p class="text center"></p>
       </div>
    </div>
</section>
     
    
    <!-- <ul>
        <li>Fully Furnished</li>
        <li>AC & Non-Ac rooms available</li>
        <li>Attach bathroom</li>
        <li>Hygienic Rooms</li>
        <li>Healthy food</li>
        <li>Security and Safety</li>
        <li>Attach balcony</li>
    </ul> -->

</body>
</html>
<style>
   

     h1{
        margin-left: 650px;
        font-size: 60px;
        margin-top: 5px;
        margin-bottom: 5px;
    }
    ul,li{
         font-size: 50px;
         margin-left: 300px;
         color: aliceblue;
       
       
    } 
     .container {
        position: relative;
        text-align: center;
    }
    .bottom-left {
        position:absolute;
        bottom:40px;
        left:-600px;
        font-size: 20px;
        margin-left: 20px;
    
    } 
    #Hostel{
        margin: 34px;
        display: flex;
    }
    #Hostel .box{
        border: 2px solid rgb(15, 15, 15);
        width: 350px;
        padding: 20px;
        /* margin: 2px 6px; */
        margin-left: 35px;
        margin-right: 38px;

        margin-bottom: 20px;
        border-radius: 28px;
        background:rgb(148, 175, 148);

    }
    #Hostel .box img{
        height: 250px;
        margin: 0px;
        display: block;
        width: 350px;
        margin-top: 20px;
        border: 2px solid black;
        border-radius: 10px;

    }
</style>