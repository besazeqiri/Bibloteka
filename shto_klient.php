<?php include_once('includes/header.php'); ?>
<?php include_once('includes/sqlFunction.php'); ?>

        <main class="page">
        <section id="content" style="width: 95%; margin: 0 auto;">
            <div id="l1">
            <h1>Shto klient</h1>
        </div>
                   
        <?php  
                if(isset($_POST['shtoKlient'])){

                  $emri=$_POST['emri'];
                  $mbiemri= $_POST['mbiemri'];
                  $dataelindjes= $_POST['dataelindjes'];
                  $numripersonal=$_POST['numripersonal'];
                  $adresa= $_POST['adresa'];
                  $komuna=$_POST['komuna'];
                   $emaili= $_POST['emaili'];
                   $telefoni= $_POST['telefoni'];
                   shtoKlient($emri,$mbiemri,$dataelindjes,$numripersonal,$adresa,$komuna,$emaili,$telefoni);
                }
            ?>
<form method="post" id="forma">
                    <div class="forma">
                      <br>
                      <hr>
                      <br>
                       <label>Emri</label>
                       <label>Mbiemri</label>
                       <label>Data e lindjes</label>
                    <input type="text" id="emri" name="emri"/>
                    <input type="text"  id="mbiemri" name="mbiemri"/>
                    <input type="date"  id="dataelindjes" name="dataelindjes"/>
          
                    <label>Numri Personal</label>
                    <label>Adresa</label>
                    <label>Komuna</label>
                        <input type="text"  id="numripersonal" name="numripersonal"/>
                        <input type="text"  id="adresa" name="adresa"/>
                        <input type="text"  id="komuna" name="komuna"/> 
                        
                    <label>Emaili</label>
                    <label>Telefoni</label><br>
                        <input type="email"  id="emaili" name="emaili"/>
                        <input type="text" id="telefoni" name="telefoni"/>
                    <br>
                    <br>
<div id="errormessage" style="float:left;width:100%; color:red; "></div>
<input type="submit" class="btn" style="width:31%; margin-left: 10px;" name="shtoKlient" value="Shto klient">
                    </div>
                  </form>
                
                  <script>
 $("#forma").submit(function(event){
             
                var emri=$("#emri").val();
                var mbiemri=$("#mbiemri").val();
                var dataelindjes=$("#dataelindjes").val();
                var numripersonal=$("#numripersonal").val();
                var adresa=$("#adresa").val();
                var komuna=$("#komuna").val();
                var emaili=$("#emaili").val();
                var telefoni=$("#telefoni").val();
                var errors=false;
                var message=""; 

                if(emri==""){
                    message+="*Ploteso emrin! <br>";
                    errors=true;
                }

                if(mbiemri==""){
                    message+=" *Ploteso mbiemrin <br>";
                    errors=true;
                }
                if(dataelindjes==""){
                    message+="*Ploteso daten e lindjes! <br>";
                    errors=true;
                }

                if(numripersonal==""){
                    message+="*Ploteso numrin personal! <br>";
                    errors=true;
                }

                if(adresa==""){
                    message+="*Ploteso adresen! <br>";
                    errors=true;
                }

                if(komuna==""){
                    message+="*Ploteso komunen! <br>";
                    errors=true;
                }

                if(emaili==""){
                    message+="*Ploteso email! <br>";
                    errors=true;
                }
                if(telefoni==""){
                    message+="*Ploteso telefonin! <br>";
                    errors=true;
                }
                if(errors){
                    $("#errormessage").html(message);
                    return false;
                }else{
                    return true;
                }
            });
    </script>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  </section> 
                   <section id="box" >
                           <article class="b1">
                           <h2>Orari</h2>
                            <p> E hënë - E premte: 08:00 - 18:00</p>
                            <p>E shtunë: 09:00 - 15:00</p>
                           </article>
                            <article class="b1">
                                <h2>Kontakti</h2>
                                <p>Telefoni: 044-444-444 </p>
                                <p>Email:biblioteka@gmail.com</p>
                          </article>
                             <article class="b1">
                                <h2>Adresa </h2>
                                <p> Rruga e Tiranës  Nr 15, Prishtinë</p>
                                <p>Kosovë</p>

                          </article>
                  </section>
               </main>
<?php include_once('includes/footer.php'); ?>