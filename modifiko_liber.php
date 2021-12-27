<?php include_once('includes/header.php'); ?>
<?php include_once('includes/sqlFunction.php'); ?>
        <main class="page">
        <section id="content" style="width: 95%; margin: 0 auto;">
            <div id="l1">
            <h1>Modifiko Librin</h1>
        </div>
        <?php
            if(isset($_GET['lib'])){
            $lib=$_GET['lib'];
            $libri=merrLiber($lib);
            $libriid=$libri['libriid'];
            $titulli=$libri['titulli'];
            $dataepublikimit=$libri['dataepublikimit'];
            }
            if(isset($_POST['modifikoLiber'])){
              modifikoLiber($_GET['lib'], $_POST['titulli'], $_POST['dataepublikimit'] );
            }
        ?>

<form method="post" id="forma">
<div class="forma">
                      <br>
                      <hr>
                      <br>
                       <label>Titulli</label>
                       <label>Data e publikimit</label><br>
<input type="text"  id="titulli" name="titulli" value="<?php if(!empty($titulli)){ echo $titulli; } ?>">
<input type="date"  id="dataepublikimit" name="dataepublikimit" value="<?php if(!empty($dataepublikimit)){ echo $dataepublikimit; } ?>">
                      
                    <br>
                    <br>
 <div id="errormessage" style="float:left;width:100%; color:red; "></div>

<input type="submit" class="btn" style="width:31%; margin-left: 10px;" name="modifikoLiber" value="Modifiko liber">
                    </div>
                  </form>
                  <script>
            $("#forma").submit(function(event){
             
                var titulli=$("#titulli").val();
                var dataepublikimit=$("#dataepublikimit").val();
                var errors=false;
                var message=""; 

                if(titulli==""){
                    message+="*Ploteso titullin! <br>";
                    errors=true;
                }
                if(dataepublikimit==""){
                    message+="*Ploteso daten e publikimit! <br>";
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
            