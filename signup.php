<?php 
if (isset($_POST['submit'])) { 
    $firstName = $_POST ['name'];

 
    $email = $_POST ['email'];
    $pssword = $_POST ['password'];
    $psswordConfirm = $_POST ['confirmpassword'];
    
    
    echo "$firstName .$email .$pssword .$psswordConfirm "; 
} 
?> 



<!doctype html>
<html>
	<head>
	<title>Registration</title>
	<link rel="stylesheet" href="css/styles.css"/>
        


	</head>
	
	
	<body> 
        
            <h1>Cattle Monitor</h1>
            
            <div id="wrapper">
          
                
            <div id="formDiv">
                
                
            <form method="get" action="signup.php" enctype="multipart/form-data">
                
            <label>Name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="name"/>
               <br/><br/>
            <label>Email</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="email"/>
               <br/><br/>
                
            <label>Password</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="password" name="password"/>
               <br/><br/>
                
            
                
            <label>Confirm Password</label>&nbsp;
            <input type="password" name="confirmpassword"/>
               <br/><br/>
                
            <label>Phone number</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="phonenumber"/>
               <br/><br/>
                
              <label>Farm name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="farmname"/>
               <br/><br/>
                
                <button  class="button"  name="submit">Create Account</button>
                
               </div>
                

            
            
                
            </form>
        
        </div>

	</body>
    
</html>


