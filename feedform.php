
<style>
  body{
    display:inline-block;
  }
  
form{
    display: block;
    
    z-index: -1;
    color: #c3d5fc;
font-family: 'Cormorant';
font-style: normal;
font-weight: 500;
font-size: 24px;
line-height: 50px;
text-align: center;
}
/* styles.css */
.container {
  display: flex;
  
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.login-form {
  background-color:  #a6a6ec;
  padding: 20px;
  border: 2px solid #a6a6ec;
  margin-top:-200px;
  margin-left: 60px;
  border-radius: 5px;
  width: 250px;
  height: 38%;
  color: #393174;
  text-align: center;
}

.signup-form {
  background-color:  #a6a6ec;
  padding: 20px;
  border: 2px solid #a6a6ec;
  margin-top:-200px;
  margin-left: 40px;
  border-radius: 5px;
  width: 250px;
  height: 50%;
  color: #393174;
  text-align: center;
}



input, button {
  display: block;
  margin-top: 30px;
  margin-bottom: 10px;
  width: 100%;
  padding: 10px;
}

button {
  background-color: #070766;
  color:#c3d5fc;
  border: none;
  cursor: pointer;
}

#button1:hover {
  background-color: #5e6bb1;
}

#button1 {
  margin-top:-260px;
  margin-bottom:20px;
  background-color: #070766;
  color:#c3d5fc;
  border: none;
  cursor: pointer;
  margin-left:40px;
  
}
#button2{
  margin-top:-200px;
  margin-bottom:30px;
  background-color: #070766;
  color:#c3d5fc;
  border: none;
  cursor: pointer;
  margin-left:40px;
}

#button2:hover {
  background-color: #5e6bb1;
}

button:hover {
  background-color: #5e6bb1;
}
p{
  color: rgb(155, 161, 218);
  display:flex;
  font-weight:bold;
  font-size:20px;
}
.update-container{
  z-index: -1;
}

</style>


<body>
  
  <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>
  
<div class="container">

  <div class="login-form">
    <h2>Login</h2>
    
    <form id="loginForm" action="login.php" method="post">
  
      <input type="text"  name='user' placeholder="Username" required>
      <input type="password" name='password' placeholder="Password" required>
      <button type="submit" name="login">Login</button>
    </form>
  </div>

  <div class="signup-form">
    <h2>Sign Up</h2>
   
    <form id="signupForm" action="signup.php" method="post">
      <input type="text"  name='user' placeholder="Username" required>
      <input type="text"   name='number' placeholder="Contact Number" required>
      <input type="password"  name='password' placeholder="Password" required>
      <input type="password"  name='confirmpass' placeholder="Confirm Password" required>
      <button type="submit" name="signup">Sign Up</button>
      
    </form>
    
  </div>
  
  </div>
  <div class="update-container">
        
        <p class="message"></p>
        <?php 
         echo '<form method="POST" action="update.php" target="_parent">
            <input type="submit" value="Update password?" id="button1"/>
          </form>';
           
        ?>
    </div>
    
    <div class="update-container">
        
        <p class="message"></p>
        <?php 
         echo '<form method="POST" action="remove.php" target="_parent">
            <input type="submit" value="Remove account?" id="button2"/>
          </form>';
           
        ?>
    </div>

</body>


