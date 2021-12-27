<?php include_once 'includes/sqlFunction.php'; ?>
<!DOCTYPE html>
<html>
	 <head>
  	   	<meta charset="utf-8">
  		  <title>login</title>     
  <style >
 
          /*login file*/
.login-box {
  font-family:sans-serif;
  width: 280px;
  position: absolute; 
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: black;
}
.login-box h1{
  float: left;
  font-size: 40px;
  border-bottom: 6px solid #DB7093;
  margin-bottom: 50px;
  padding: 13px 0;
  color: black; 
}
.textbox{
  width: 100%;
  overflow: hidden;
  font-size: 20px;
  padding: 8px 0;
  margin: 8px 0;
  border-bottom: 1px solid #DB7093;
}

.textbox input{
  border:none;
  outline: none;
  background: none;
  color: black;
  font-size: 18px;
  width: 80%;
  float: left;
  margin: 0 10px;
}
.login-box p{
  font-size: 13px;
  color: black;
  padding: 10px;
}
.btn{
  width: 100%;
  background: none;
  border: 2px solid #DB7093;
  color: black;
  padding: 5px;
  font-size: 18px;
  margin: 12px 0;
  cursor: pointer;
}

.errors {
            font-size: 12px;
            float: left;
            margin-left: 30px;
            margin: -12px 0px -12px 30px;
        
}
  </style>
	 </head>

   <?php
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    login($username, $password);
}
?>
	<body style="background-color:#FAF0E6; ">
		  <div class="login-box">
  			<h1>Mirë se vini!</h1>
<form method= "post" name=forma id="forma">
  		<div class="textbox">
    		<input type="text" placeholder="&#x1F464; Username" name="username" id="username">
        <p id="usernameMessage" class="errors"></p>
  		</div>

		  <div class="textbox">
   			 <input type="password" placeholder="&#128274; Password" name="password" id="password">
          <p id="passwordMessage" class="errors"></p>

  		</div>

		<p>Nuk keni akoma account? <a style="color: #b74d6f;text-decoration:none;" href="register.php">Regjistrohu</a>
			 <input class="btn" type="submit" name="login" value="Kyqu">
		</div>

  </form>
    <script src="js/jQuery.js"></script>
    <script>
        $(document).ready(function(){
            $("#forma").submit(function(){
                var username = $("#username").val();
                var password = $("#password").val();
                var errors = false;
                if(username == ""){
                    $("#usernameMessage").html("Ju lutem shkruani username-in!");
                    errors = true;
                }else{
                    $("#usernameMessage").html("");
                    errors = false;
                }
                if(password == ""){
                    $("#passwordMessage").html("Ju lutem shkruani password-in!");
                    errors = true;
                }else{
                    $("#passwordMessage").html("");
                    errors = false;
                }
                if(errors){
                    return false;
                }else{
                    return true;
                }
            });
        });
    </script>
   </body>
</html>



