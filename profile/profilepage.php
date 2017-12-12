<!DOCTYPE html>

<?php
    $firstname="John";
    $lastname="Doe";
    $program="Computer Programmer Analyst";
    $email="john.doe@humber.ca";
?>
        
<html>
<head>
<style>
    body{
        background-color:#EEE
    }
#card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  width: 300px;
  text-align: center;
  font-family: arial;
    float: left;
    margin-right: 5px;
    padding:5px;
}

#title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

button:hover, a:hover {
  opacity: 0.5;
}
#container{
    background-color: white;
    width: 800px;
    margin-left: auto;
    margin-right:auto;
    }
    
    #bio{
        padding:20px 10px 5px 5px;
        width:450px;
        float:right;
    }
    #footer{
        padding: 5px;
        clear:both;
        background-color:#0f4baa;
    }

</style>
</head>
<body>
<div id="container">
<div id="card">
  <img src="avatar.png" style="width:100%">
  <h1><?php echo $firstname?> <?php echo $lastname ?> </h1>
  <p id="title"><?php echo $program?></p>
  <p><?php echo $email?></p>
    <div>
 <p><button>Request Tutor</button></p>
</div>
    </div>
    <div id="bio">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</div>
    <div id="footer">Copyright &copy; 2017</div>
    </div>
</body>
</html>