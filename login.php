<html>
 


<div class="login-page">
    
    <div class="logo">
    <img src="HumberStudyBuddy.png">
    </div>
    <div class="form">
    <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
      
      <!--- This is the user text boxes/login button --->
    <form class="login-form" action "phpindex.php" method=post>
      <input type="text" placeholder="username"/ name = "username">
      <input type="password" placeholder="password" name = "password"/>
      <button name = "login" type = "submit">login</button>
      <p class="message">Not registered? <a href="phpcreate.php">Create an account</a></p>
    </form>
      
  </div>
</div>
<div class="faq">
     <form class="form2">
        <h1 class="header">Welcome To HU StudyBuddy?</h1>  
        <h2 class="Para">Welcome to Humber StudyBuddy! We hope you find the help you need here today!
        </h2>
         <br>
         <br>
         <br>
         <h1 class="header">What is StudyBuddy?</h1>  
        <h2 class="Para">StudyBuddy brings student, and tutor together. StudyBuddy allows students to find tutors they need quickly, and allow students willing to tutor to find people who require their services.
        </h2>
         <br>
         <br>
         <br>
         <h1 class="header">How Does It Work?</h1>  
         <h1 class="MiniHeader">Students</h1>
         <h2 class="Para">Students are required to first make an account. All they will need is an email, and their student card number. Once their account has been made, they are able to cycle through our list of classes. There they will find available tutors. The student may then choose a tutor and request tutoring.</h2>
         <h1 class="MiniHeader">Tutor</h1>
         <h2 class="Para">Tutors will require as well to make an account and they will as well need an email, and their student number. Once they have logged in, tutors can go to the tutor tab where they will select the class they would like to tutor students in. They may write a small paragraph explaining their background in the subject and what their hourly prices will be.</h2>
         <br>
         <br>
         <br>
         <h1 class="header">Why Use Study Buddy?</h1>  
        <h2 class="Para">This is a free service offered to students who wish to tutor or need tutoring. We cannot guarantee success in finding a tutor in your specific class but we are merely another means of finding help or putting yourself out there to help others. 
        </h2>
    </form>  
</div>
    </html>


<!--- ---------------------------------------------------------------- -->
<!--- Login background color = #4f91f9 -->

<style>
.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
position:relative;
    bottom:120px;
}
    
.form {
  position: relative;
  z-index: 1;
  background: #4f91f9;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    border-radius: 3px;
    
}
    .form2 {
  position: relative;
  opacity: 0.75;
  z-index: 1;
  background: #7fb0ff;
  max-width: 60%;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: left;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
  border-radius: 3px;
            bottom:120px;

        
}
    .header{
    font-family: Arial;
	font-size: 36px;
	font-style: normal;
	font-variant: normal;
	font-weight: 700;
	line-height: 40px;
    }
    .MiniHeader{
    font-family: Arial;
	font-size: 30px;
	font-style: normal;
	font-variant: normal;
	font-weight: 700;
	line-height: 35px;
    }
    
    .Para{
    font-family: Arial;
	font-size: 26px;
	font-style: normal;
	font-variant: normal;
	line-height: 30px;
    }
  
    .logo{
        position: relative;
        right: 80px;
    }
        
        /* This affects the username, password  */
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
border-radius: 3px;
}
    
/* This changes the button settings */
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #1454ba;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
    border-radius: 3px;
}
    
/* This makes a hover effect */
.form button:hover,.form button:active,.form button:focus {
  background: #0f4baa;
}
.form .message {
  margin: 15px 0 0;
  color: #f4f4f4;
  font-size: 12px;
}
.form .message a {
  color: white;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}

body {
  background: #b3cbf2; /* fallback for old browsers */
  background: -webkit-linear-gradient(right, #b3cbf2, #ecfcab);
  background: -moz-linear-gradient(right, #b3cbf2, #ecfcab);
  background: -o-linear-gradient(right, #b3cbf2, #ecfcab);
  background: linear-gradient(to left, #b3cbf2, #ecfcab);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}

</style>


<!--- ---------------------------------------------------------------- -->


<script>

$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
    
</script>