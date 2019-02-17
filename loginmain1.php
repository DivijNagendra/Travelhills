<!DOCTYPE html>

<?php
//error_reporting(0);
//login part

$host="localhost";
$user="root";
$password="";
$db="travelhills";


$con=mysqli_connect($host,$user,$password,$db);


if(isset($_POST['username'])){
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from login where email='".$uname."'AND pass='".$password."' limit 1";
    
    $result=mysqli_query($con,$sql);
    
    if(mysqli_num_rows($result)==1)
    {
        echo "<script> window.location.assign('main.html'); </script>";
        exit();
        
    }
    
    else
    {
         echo "<script> window.location.assign('errorlogin.php'); </script>";
        exit();
        
    }
    
}






//registration part



if($con)
{
    echo"connected";
}

 if(isset($_GET['submit']))
{   
    $fname=$_GET['fname'];
    $lname=$_GET['lname'];
    $mobile=$_GET['mobile'];
     $dob=$_GET['dob'];
    $email=$_GET['email'];
    $pass=$_GET['pass'];
  // checking preexisting user
     $userquery=("INSERT INTO login(fname,lname,mobile,dob,email,pass) VALUES('$fname','$lname','$mobile', '$dob', '$email','$pass');");
     $check=mysqli_query($con,$userquery);
  if($mysqli_affected_rows == 0) {
  // Your chosen method of alerting the user goes here
       echo "<script>
alert('user exists');

</script>";
    }
     
    else{ 
     $query1="INSERT INTO login(lname,mobile,dob,email,pass) VALUES('$lname','$mobile', '$dob', '$email','$pass');";
    
    $data=mysqli_query($con,$query1);
     
    if($data)
    {
     echo "<script> window.location.assign('loginmain.php'); </script>"; 
        exit();
    }
    
    
   else
    {
     echo "Registration Failed";
       exit();
    }
  }
 }
 
  
?>




<html>
<head>
    <title>login travelhills</title>
    <link rel="stylesheet" href="loginmain.css">
</head>
    
    <script>
     function checkpassword()    
        {
           var p=f.pass.value;
           var cp=f.cpass.value;
        
              if(p==cp)
                  alert("Password matched")
              else
                 alert("Password mismatch!!")
        
              msg=(p==cp)?"matched":"mismatch";
              alert(msg)
        }
        
    
    
    </script>    
    
    
    <body>
        <div class="navbar-fixed">
    
          <a href="#" class="navbar-brand" ><img src="img/logod.png" style="max-width:2333px "></a></div>
    <div class="login-page">
        <div class="form">
        <img src="img/icored2.png" class="avatar">
        
    <!-- REGISTERFORM -->        
            
        <form class="register-form" name="regform" action="#" method="GET">
        <h3>REGISTER-FORM</h3>
        <input type="text" placeholder="First name" name="fname" required/>   
        <input type="text" placeholder="Last name" name="lname" required/>
          <select id="ph">
                <option>+91</option>
                <option>+64</option>
                <option>+98</option>
                <option>+90</option>
                <option>+80</option>
                <option>+97</option>
                <option>+72</option>
                <option>+40</option>
                <option>+65</option>
                <option>+87</option>
                <option>+85</option>
            
          </select>
        <input type="number" name="mobile" placeholder="Enter Mob no" maxlength="10" required/>
        <label for="start">DATE OF BIRTH</label>
        <input type="date" value="DD/MM/YYYY" name="dob" />
        <input type="text" placeholder="email id" name="email" required/>
        <input type="password" placeholder="Password" name="pass" maxlength="13" required/>
        <input type="password" placeholder="Re-enter Password" name="cpass" required/>
        <input type="button" name="btn" value="Check password match" onclick="checkpassword()"/>
        <div id="genderContainer" name="genderContainer" class="genderlist">
        <div id="gender" class="gender">
        <label for="male"> <input id="male" name="type" type="radio" value="male" />  MALE  </label>
        </div>
         <div id="gender" class="gender">
         <label for="female"> <input id="female" name="type" type="radio" value="INVOICE" /> FEMALE </label>
         </div>
         <div id="gender" class="gender">
         <label for="others"> <input id="others" name="type" type="radio" value="others"/> OTHERS </label>
         </div>
         </div>
              <input type="submit" value="SUBMIT" name="submit" />
        <p class="message">Already Registered?<a href="#" >Login</a></p><br><br>
        <p class="message">Skip Login??<a href="main11.html" >Click here</a></p>
        </form>
        
            <!-- LOGIN FORM -->
        <form class="login-form" method="POST" action="#">
            <h3>LOGIN</h3>
            <input type="text" placeholder="username" name="username" required/>
            <input type="password" placeholder="password" name="password" required/>
            <button>login</button>
            <p class="message">Not Registered?<a href="#"> Register</a></p><br><br>
            <p class="message">Skip Login??<a href="main11.html" >Click here</a></p>
            </form>
        </div>
        </div>
        <script src='https://code.jquery.com/jquery-3.3.1.min.js'> </script>
        
        <script>
        
        $('.message a').click(function(){
         $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
        });                             
                              
                              
        </script>
      
      
        </body>
</html>