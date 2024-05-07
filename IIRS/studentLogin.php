
<!DOCTYPE html> 
<html> 
  
<head> 
    <title>Registration Form</title> 
    <link rel="stylesheet" 
          href="style.css"> 
          <style>
            body {
  background-image: url('https://e0.pxfuel.com/wallpapers/551/236/desktop-wallpaper-isro-logo.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}




.wrap {
  display: flex;
  justify-content: space-between; 
}


.wrap button {
  margin-right: 10px;
}





</style>
</head> 
  
<body> 
    <div class="main"> 
        <h1>IIRS</h1> 
        <h3>Student Login</h3> 
        <form action="student_image.php" method="post"> 
            <label for="first">Full Name:</label> 
            <input type="text" id="first" 
                   name="name" 
                   placeholder="Enter your Full name" required> 
  
           
  
                  
                   <label for="password">Password:</label> 
            <input type="password" id="password" 
                   name="pass"
                   placeholder="Enter your password"
                   pattern= 
                   "^(?=.*\d)(?=.*[a-zA-Z])(?=.*[^a-zA-Z0-9])\S{8,}$" required                    
                   title="Password must contain at least one number,  
                       one alphabet, one symbol, and be at  
                       least 8 characters long"> 





                  
            </select> 
            <div class="wrap">
  <button type="submit" onclick="solve()">submit</button><br>
  <button type="reset" onclick="solve()">reset</button>
</div>
          
        
        </form> 
        <p>Not registered?  
              <a href="register.php" 
               style="text-decoration: none;"> 
                Create an account 
            </a> 
        </p> 
    </div>
    




  
</body> 
  
</html>
