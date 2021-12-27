<?php include_once('includes/header.php'); ?>
<?php include_once('includes/sqlFunction.php'); ?>


        <main class="page">
        <section id="content" style="width: 95%; margin: 0 auto;">
            <div id="l1">
            <h1>Modifiko staf</h1>
        </div>
     <?php
                          if(isset($_GET['sid'])){
                          $sid=$_GET['sid'];
                          $stafi=merrStaf($sid);
                          $stafiid=$stafi['stafiid'];
                          $emri=$stafi['emri'];
                          $mbiemri=$stafi['mbiemri'];
                          $dataelindjes=$stafi['dataelindjes'];
                          $numripersonal=$stafi['numripersonal'];
                          $adresa=$stafi['adresa'];
                          $telefoni=$stafi['telefoni'];
                          $roli=$stafi['roli'];
                          }

                          if(isset($_POST['modifikoStaf'])){
                            modifikoStaf($_GET['sid'],
                                          $_POST['emri'],
                                          $_POST['mbiemri'],
                                          $_POST['dataelindjes'],
                                          $_POST['numripersonal'],
                                          $_POST['adresa'],
                                          $_POST['telefoni'],
                                          $_POST['roli']
                                        );
                          }
?>
           
<form method="post" id="forma">
<input type="hidden" name="stafiid" id="stafiid" value="<?php if(!empty($stafiid)){ echo $stafiid; } ?>"><br />
                    <div class="forma">
                      <br>
                      <hr>
                      <br>
                       <label>Emri</label>
                       <label>Mbiemri</label>
                       <label>Data e lindjes</label>
<input type="text" id="emri" name="emri" value="<?php if(!empty($emri)){ echo $emri; } ?>">
<input type="text"  id="mbiemri" name="mbiemri"  value="<?php if(!empty($mbiemri)){ echo $mbiemri; } ?>">
<input type="date"  id="dataelindjes" name="dataelindjes"value="<?php if(!empty($dataelindjes)){ echo $dataelindjes; } ?>">
        
                    <label>Numri Personal</label>
                    <label>Adresa</label>
                    <label>Telefoni</label>
<input type="text"  id="numripersonal" name="numripersonal"value="<?php if(!empty($numripersonal)){ echo $numripersonal; } ?>">
<input type="text"  id="adresa" name="adresa"value="<?php if(!empty($adresa)){ echo $adresa; } ?>">
<input type="text"  id="telefoni" name="telefoni"value="<?php if(!empty($telefoni)){ echo $telefoni; } ?>">                    
                     <label>Roli</label><br>
<input type="text" id="roli" name="roli"value="<?php if(!empty($roli)){ echo $roli; } ?>">
                    <br>
                    <br>
<div id="errormessage" style="float:left;width:100%; color:red; "></div>
<input type="submit" class="btn" style="width:31%; margin-left: 10px;" name="modifikoStaf" value="Modifiko staf">
                    </div>
                  </form>
                  <script>
            $("#forma").submit(function(event){
                var emri=$("#emri").val();
                var mbiemri=$("#mbiemri").val();
                var dataelindjes=$("#dataelindjes").val();
                var numripersonal=$("#numripersonal").val();
                var adresa=$("#adresa").val();
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