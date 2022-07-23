<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <style>
        *{
    padding: 0px ;
    margin: 0px;
    font-family:sans-serif ;
}

body{
    background-image: url(image5.jpg);
    background-size: cover;
    text-align: center;
    background-image: url(https://wallpaperaccess.com/full/3124537.jpg);
   
   
}

.contact-form{
    margin-top: 100px;
    color:  #1989b5;
    text-transform: uppercase;
    transition: all 4s ease-in-out;
   
    margin-right: 1000px;
    margin-left: 200px;
    
}
.contact-us{
    
    margin-right: 1000px;
    margin-left: 200px;
    
}


.contact-form h1{
    font-size: 32px;
}


form{
    margin-top: 50px;
    transition: all 4s ease-in-out ;
}

.form-control{
    width: 400px;
    background: transparent;
    border: none;
    outline: none;
    border-bottom: 1px solid gray;
    color: #fff;
    font-size: 18px;
    margin-bottom: 18px;
}


input{
    height: 45px;
}

form .submit{
    background: #1989b5;
    border: transparent;
    color: #fff;
    font-size: 20px;
    font-weight: bold;
    letter-spacing: 2px;
    height: 50px;
    margin-top: 20px;
}

form .submit:hover{
    background: #3dade6;
    cursor: pointer;
}


    </style>
</head>
<body>
    <div class="contact-form">
        <h1>CONTACT US</h1>
    </div>
    <div class="contact-us">
       <form action="data.php" method="post">
           <input type="text" name="name"   class="form-control" placeholder="Enter Name"> <br>
           <input type="email" name="email"  class="form-control" placeholder="Enter Email"> <br>
           <input type="text" name="mobile"  class="form-control" placeholder="Enter Mobile Number"> <br>
           <textarea name="message" id="message" cols="57" rows="10">Type your text </textarea> <br>
           <input type="submit" class="form-control submit" value="submit" >
       </form>
    </div>
</body>

</html>



