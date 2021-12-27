<?php include_once('includes/header.php'); ?>
<?php include_once('includes/sqlFunction.php'); ?>
        <main class="page">
        <section id="content" style="width: 95%; margin: 0 auto;">
            <div id="l1">
            <h1>Modifiko huazimet</h1>
        </div>

                <?php
                                if(isset($_GET['hid'])){
                                $hid=$_GET['hid'];
                                $huaja=merrHuazim($hid);
                                $libri=merrLiber($hid);
                                $klienti=merrKlient($hid);
                                $huajaid=$huaja['huajaid'];
                                $libri=$huaja['titulli'];
                                $klienti=$huaja['emri'];
                                $klienti=$huaja['mbiemri'];
                                $dataemarrjes=$huaja['dataemarrjes'];
                                $dataekthimit=$huaja['dataekthimit'];
                                $komente=$huaja['komente'];
                                }
                                if(isset($_POST['modifikoHuazim'])){
                                    modifikoHuazim($_GET['hid'],
                                               $_POST['dataemarrjes'],
                                                $_POST['dataekthimit'],
                                                $_POST['komente']);
                                }
                                ?>
<form method="post" id="forma">
<input type="hidden" name="huajaid" id="huajaid"><br />

                    <div class="forma">
                      <br>
                      <hr>
                      <br>                     
                    <label>Data e marrjes</label>
                    <label>Data e kthimit</label>
                    <label>Komente</label><br>  
                     <input type="date"  id="dataemarrjes" name="dataemarrjes" value="<?php if(!empty($dataemarrjes)){ echo $dataemarrjes; } ?>">
                     <input type="date"  id="dataekthimit" name="dataekthimit" value="<?php if(!empty($dataekthimit)){ echo $dataekthimit; } ?>">
                     <input type="text"  id="komente" name="komente"value="<?php if(!empty($komente)){ echo $komente; } ?>">
                    <br>
                    <br>
<div id="errormessage" style="float:left;width:100%; color:red; "></div>

<input type="submit" class="btn" style="width:31%; margin-left: 10px;" name="modifikoHuazim" value="Modifiko">       
                </div>
                  </form>
                  <script>
            $("#forma").submit(function(event){      
                var dataemarrjes=$("#dataemarrjes").val();
                var dataekthimit=$("#dataekthimit").val();             
                var errors=false;
                var message=""; 

                if(dataemarrjes==""){
                    message+="*Ploteso daten e marrjes! <br>";
                    errors=true;
                }
                if(dataekthimit==""){
                    message+="*Ploteso daten e kthimit! <br>";
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