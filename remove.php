<style>
  body{
    display:center;
  background-color: rgb(23, 10, 53);
            color: rgb(155, 161, 218);
            opacity: 80%;
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
  margin: 20px;
  border-radius: 5px;
  width: 250px;
  height: 50%;
  color: #393174;
  text-align: center;
}

.signup-form {
  background-color:  #a6a6ec;
  padding: 20px;
  border: 2px solid #a6a6ec;
  margin: 20px;
  border-radius: 5px;
  width: 250px;
  height: 62%;
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

button:hover {
  background-color: #5e6bb1;
}

#button {
  background-color: #070766;
  color:#c3d5fc;
  border: none;
  cursor: pointer;
}

#button:hover {
  background-color: #5e6bb1;
}
p{

  color: rgb(155, 161, 218);
  display:flex;
  font-weight:bold;
  font-size:20px;
}


</style>
<body>
    
  <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>
  
<div class="container">
  <div class="signup-form">
    <h2>Remove Account</h2>
   
    <form id="signupForm" action="removes.php" method="post">
      <input type="text"  name='user' placeholder="Username" required>
      <input type="password"  name='password' placeholder="New Password" required>
      <button type="submit" name="remove">Remove Account</button>
      
    </form>

    <div class="update-container">
        
        <p class="message"></p>
        <?php 
         echo '<form method="POST" action="contact.html" target="_parent">
            <input type="submit" value="Back" id="button"/>
          </form>';
           
        ?>
</div>
    
  </div>