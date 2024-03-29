<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link rel="stylesheet" href="signin.css">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <scrip src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
  <link rel="stylesheet" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    body{
        margin: 0;
        padding: 0;
        font-family: 'Poppins';
    }

</style>


<body">

<section class="w-full h-[100vh] bg-gray-200 flex ">
   <div class="w-[50%] h-[100vh] flex justify-center items-center ">
       <div class="h-[95vh] w-[85%] bg-white border-2 shadow-md rounded-xl px-5 flex flex-col items-start justify-between pb-2">
          <img src="../Assets/docs.png" class="w-[250px] h-[100px]">
          <h1 class="font-bold text-2xl">Register Here...!</h1> 
          <p class="text-gray-400 ">Get your stats in seconds. Already have an account? <span><a class="text-orange-600 underline" href="login.php">Login</a></span></p>
          <form action="register.php" method="POST" class="w-full m-0 flex flex-col gap-2" >
          
            <div class="flex  flex-wrap gap-5">

              <div>
                    <label for="">Name</label><br>
                    <input type="text" name="name" placeholder="Enter Your Name"  required class="border-[1px] bg-gray-100 rounded-md py-2 px-1 shadow-sm outline-none hover:border-gray-500">
              </div> 

              <div>
                <label for="">Roll No</label><br>
                <input type="text" name="rno" placeholder="Enter Your Roll No"  required class="border-[1px] bg-gray-100 rounded-md py-2 px-1 shadow-sm outline-none hover:border-gray-500">
              </div>

              <div>
                <label for="">Email</label><br>
                <input type="email" name="email" placeholder="Enter Your Roll No"  required class="border-[1px] bg-gray-100 rounded-md py-2 px-1 shadow-sm outline-none hover:border-gray-500">
              </div>
         
               <div>
                 <label for="">Set Password</label><br>
                 <input type="password" name="password" placeholder="********"  required class="border-[1px] bg-gray-100 rounded-md py-2 px-1 shadow-sm outline-none hover:border-gray-500">
               </div>
            </div> 

            <h1 class="text-red-600"><?php
                   session_start();
                   if(empty($_SESSION)){
                     echo ' ';
                    }
                    else{
                      if($_SESSION['id']==1){
                      echo 'Roll No Already Exists Go To Login';
                      }
                      session_destroy();
                    }    
                    ?> 
            </h1>
            <div class="g-recaptcha w-full " data-sitekey="6LeNe1kpAAAAAKiIFzBLHZEeLoD3KqnNcdr_qDrE"></div>  
            <input type="submit" name="btn" class="cpt w-full bg-orange-500 hover:bg-orange-600 cursor-pointer  p-1 rounded-lg text-white " value="Signup To Your Account">

          </form>
           
          <div class=" w-full flex h-0 items-center justify-between">
            <h1 class=" w-[45%] border-[1px]"></h1>
            <h1 class='text-gray-400'>OR</h1>
            <h1 class=" w-[45%] border-[1px]"></h1>
          </div>

          <div class="w-full border-[1px] flex justify-center items-center rounded-xl py-2 gap-3 cursor-pointer hover:bg-gray-100" onClick="msg()">
              <img src="../Assets/google.png" class="w-[25px] ">
              <h3>Sign in with Google</h3>
          </div>

          <div class="w-full border-[1px]  flex justify-center items-center rounded-xl py-1 gap-2 cursor-pointer hover:bg-gray-100" onClick='msg()'>
              <img src="../Assets/github.png" class="w-[35px]  ">
              <h3>Sign in with Github</h3>
          </div>
          
        
      
        </div>


   </div>


   <div class="w-[50%] h-[100vh] flex justify-center items-center">
     <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/authentication/illustration.svg" >
   </div>
</section>


   
</body>

<script >
    $(document).on('click', '.cpt', function(){
      var response = grecaptcha.getResponse();
      if(response.length==0){
        alert("Please Verify you are not a bot");
        return false;
      }
    })

   function msg(){
    sweetAlert("Oops...", "Something went wrong!", "error");
   }
</script>

</html>


<!-- 
<form action="register.php" action method="POST">
      <div class="image">
        <img src="../Assets/slcslogo.png" alt="">
      </div>

      <div class="info">
        <div class="info1">
          <img src="../Assets/name.png" alt=""><input type="text" name="name" placeholder="Enter Your Name" required><br>
          <img src="../Assets/tag.png" alt=""><input type="text" name="rno" placeholder="Enter Your Roll No" required><br>
          <img src="../Assets/mail.png" alt=""><input type="email" name="email" placeholder="Enter Your Email"
            required><br>
          <img src="../Assets/vpn_key.png" alt=""><input type="password" name="password" placeholder="Enter Your Password"
            required><br>

            <div class="g-recaptcha" data-sitekey="6LeNe1kpAAAAAKiIFzBLHZEeLoD3KqnNcdr_qDrE"></div>
        </div>
      </div>


      <input type="submit" name="btn" class="btn" value="SIGN IN"> -->
