<?php include_once 'includes/sqlFunction.php';?>
<!DOCTYPE html>
  <html>
    <head>
       <meta charset="utf-8">
       <title>Regjisteri</title>
       <style >
.register-box {
   font-family: sans-serif;
   width: 35%;
   position: absolute; 
   top: 50%;
   left: 50%;
   transform: translate(-50%,-50%);
    color: black;
 }
.register-box h1{
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
  border-bottom: 1px solid  #DB7093;
 }

 .textbox input[type="text"],input[type="password"],input[type="email"]{
    background: #FAF0E6;
    border: none;
    font-size: 16px;
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
.register-box p{
  font-size: 15px;
  color: black;
  padding: 5px;
}
  .errors {
            font-size: 12px;
            float: right;
            margin: 0px 0px -12px 30px;
        
}
      </style>
    </head>
    <?php
                
                if(isset($_POST['register'])){

                  $emri=$_POST['emri'];
                  $mbiemri= $_POST['mbiemri'];
                  $dataelindjes= $_POST['dataelindjes'];
                  $numripersonal=$_POST['numripersonal'];
                  $adresa= $_POST['adresa'];
                  $telefoni=$_POST['telefoni'];
                  $username= $_POST['username'];
                  $password= $_POST['password'];
                  $roli= $_POST['roli'];

      register($emri,$mbiemri,$dataelindjes,$numripersonal,$adresa,$telefoni,$username,$password,$roli);
                }

            ?>


<body style="background-color:#FAF0E6; ">
      <div class="register-box">
        <h1>Regjistrohu</h1>
<form method="post" id="forma">
              <div class="textbox">
                <input type="text" placeholder="Emri" name="emri"  id="emri" value="">
                <p id="message1" class="errors"></p>
              </div>
              <div class="textbox">
                <input type="text" placeholder="Mbiemri" name="mbiemri" id="mbiemri" value="">
                <p id="message2" class="errors"></p>
              </div>
              <div class="textbox">
                <input type="text" placeholder="Viti-muaji-data" name="dataelindjes" id="dataelindjes" value="">
                <p id="message3" class="errors"></p>
              </div>

              <div class="textbox">
                <input type="text" placeholder="Numri Personal" name="numripersonal" id="numripersonal" value="">
                <p id="message4" class="errors"></p>
              </div>

              <div class="textbox">
                <input type="text" placeholder="Adresa" name="adresa" id="adresa" value="">
                <p id="message5" class="errors"></p>
              </div>

              <div class="textbox">
                <input type="text" placeholder="Telefoni" name="telefoni" id="telefoni" value="">
                <p id="message6" class="errors"></p>
              </div>
              <div class="textbox">
                <input type="text" placeholder="Username" name="username"  id="username" value="">
                <p id="message7" class="errors"></p>
              </div>
              
              <div class="textbox">
                <input type="password" placeholder="Password" name="password" id="password" value="">
                <p id="message8" class="errors"></p>
              </div>

              <input type="hidden"  name="roli" value="">

              <p> Keni account? <a style="color: #b74d6f;text-decoration:none;" href="login.php">Kyqu</a>

              <input class="btn" type="submit" name="register" value="Regjistrohu">
              </form>
        </div>
<script src="js/jQuery.js"></script>
    <script>
        $(document).ready(function(){
            $("#forma").submit(function(){
              var emri = $("#emri").val();
              var mbiemri = $("#mbiemri").val();
              var dataelindjes = $("#dataelindjes").val();
              var numripersonal = $("#numripersonal").val();
              var adresa = $("#adresa").val();
              var telefoni = $("#telefoni").val();
              var username = $("#username").val();
              var password = $("#password").val();
              var errors = false;
                if(emri == ""){
                    $("#message1").html("Plotëso emrin!");
                    errors = true;
                }else{
                    $("#message1").html("");
                    errors = false;
                }
                if(mbiemri == ""){
                    $("#message2").html("Plotëso mbiemrin!");
                    errors = true;
                }else{
                    $("#message2").html("");
                    errors = false;
                }

                if(dataelindjes == ""){
                    $("#message3").html(" Plotëso datën e lindjes!");
                    errors = true;
                }else{
                    $("#message3").html("");
                    errors = false;
                }

                if(numripersonal == ""){
                    $("#message4").html(" Plotëso numrin personal!");
                    errors = true;
                }else{
                    $("#message4").html("");
                    errors = false;
                }

                if(adresa == ""){
                    $("#message5").html(" Plotëso adresën!");
                    errors = true;
                }else{
                    $("#message5").html("");
                    errors = false;
                }
                if(telefoni == ""){
                    $("#message6").html("Plotëso numër kontaktues!");
                    errors = true;
                }else{
                    $("#message6").html("");
                    errors = false;
                }
                if(username == ""){
                    $("#message7").html("Plotëso username!");
                    errors = true;
                }else{
                    $("#message7").html("");
                    errors = false;
                }

                if(password == ""){
                    $("#message8").html(" Plotëso password!");
                    errors = true;
                }else{
                    $("#message8").html("");
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