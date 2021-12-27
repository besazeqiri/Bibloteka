<?php include_once('includes/header.php'); ?>
<?php include_once('includes/sqlFunction.php'); ?>

    <main class="page">
        <section id="content" style="width: 95%; margin: 0 auto;">
            <div id="l1">
            <h1>Shto Autor</h1>
        </div>
        <?php
                
                if(isset($_POST['shtoAutor'])){
                  $emri=$_POST['emri'];
                  $mbiemri= $_POST['mbiemri'];
                  $shteti= $_POST['shteti'];
                  shtoAutor($emri,$mbiemri,$shteti);
                }
            ?>
<form method="post" id="forma">
                    <div class="forma">
                      <br>
                      <hr>
                      <br>
                       <label>Emri</label>
                       <label>Mbiemri</label>
                       <label>Shteti</label>
                    <input type="text" id="emri" name="emri"/>
                    <input type="text"  id="mbiemri" name="mbiemri"/>
                    <input type="text"  id="shteti" name="shteti"/>                                                      
                    <br>
                    <br>
<div id="errormessage" style="float:left;width:100%; color:red; "></div>
<input type="submit" class="btn" style="width:31%; margin-left: 10px;" name="shtoAutor" value="Shto autor">
   
                    </div>
                  </form>
                  <script>
            $("#forma").submit(function(event){
             
                var emri=$("#emri").val();
                var mbiemri=$("#mbiemri").val();
                var shteti=$("#shteti").val();
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
                if(shteti==""){
                    message+="*Ploteso shtetin! <br>";
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