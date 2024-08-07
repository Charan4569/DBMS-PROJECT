<?php include("connection.php"); ?>

<!DOCTYPE html>
<html>
      <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width,initial-scale=1">
         <title>IIIT BH</title>
           <link rel="stylesheet" type="text/css" href="style.css">
           
           <style type="text/css">
            body{
                background-image: url("inst.jpg");
                background-size: cover;
                
               
           </style>
            
        </head>

   <body> 
        <div class="container">
            <form action="#" method="POST">
        	<div class="title">
                 Student Registration Form
        	</div>
        	<div class="Form">
                <div class="input_field">
                	<label>Student Name</label>
                    <input type="text" class="input" name="stdname" required>
                 

                </div>
                <div class="input_field">
                	<label>Adm No</label>
                    <input type="text" class="input" name="admno" required>
                 

                </div>
                <div class="input_field">
                	<label>Password</label>
                    <input type="Password" class="input" name="password" required>
                 

                </div>
                <div class="input_field">
                	<label>Confirm Password</label>
                    <input type="Password" class="input" name="conpassword" required>
                 

                </div>
                <div class="input_field">
                	<label>Gender</label>
                    <div class="custom_select">
                     <select name="gender">
                     <option value="Not Selected">Select</option>
                     <option value="male">Male</option>
                     <option value="female">Female</option>   
                	
                        
                    </select>
                    
                </div>
                  
                </div>
                <div class="input_field">
                	<label>Email Address</label>
                    <input type="text" class="input" name="email" required>
                 

                </div>
                <div class="input_field">
                	<label>Phone Number</label>
                    <input type="text" class="input" name="phone" required>
                 

                </div>
                <div class="input_field">
                	<label>Address</label>
                     <textarea  class="textarea" name="address" required></textarea>
                 
                </div>
                     <div class="input_field terms">
                	<label class="check">
                		<input type="checkbox" required>
                		<span class="checkmark"></span>
                	</label>
                	<p>Agree to terms and conditions</p>
                </div>

                <div class="input_field">
                <input type="submit" value="Register" class="btn" name="register"></div>

                 <div class="input_field">
            <button class="btn" onclick="window.location.href='display.php'">View Registered Students</button>
        </div>

        	</div>
          </form>
        </div>

   </body>

</html>


<?php
    if($_POST['register'])

    {
        $stdname = $_POST['stdname'];
        $admno = $_POST['admno'];
        $pwd = $_POST['password'];
        $cpwd = $_POST['conpassword'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address= $_POST['address'];

        
       $query = "INSERT INTO FORM  VALUES( '$stdname','$admno','$pwd', '$cpwd', '$gender', '$email','$phone','$address')";
       $data = mysqli_query($conn,$query);

       if($data)
       {
        echo "Data Inserted into Database";
           
       }

       else
       {
         echo "failed";
       }

      
     
    }  
?>