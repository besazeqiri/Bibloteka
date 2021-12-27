<?php include_once('includes/header.php'); ?>
<?php include_once('includes/sqlFunction.php'); ?>

        <main class="page">
        <section id="content" style="width: 95%; margin: 0 auto;">
            <div id="l1">
            <h1>Fshij Klient</h1>
        </div>

        <?php
                        if(isset($_GET['kid'])){
                        $kid=$_GET['kid'];
                        $klienti=merrKlient($kid);
                        $klientiid=$klienti['klientiid'];
                        $emri=$klienti['emri'];
                        $mbiemri=$klienti['mbiemri'];
                        $dataelindjes=$klienti['dataelindjes'];
                        $numripersonal=$klienti['numripersonal'];
                        $adresa=$klienti['adresa'];
                        $komuna=$klienti['komuna'];
                        $emaili=$klienti['emaili'];
                        $telefoni=$klienti['telefoni'];
                        }

                        if(isset($_POST['fshijKlient'])){
                          fshijKlient($_POST['klientiid']);                       
                        }
                        ?>

<form method="post">
<input type="hidden" name="klientiid" id="klientiid" value="<?php if(!empty($klientiid)){ echo $klientiid; } ?>"><br />
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
                    <label>Komuna</label>
<input type="text"  id="numripersonal" name="numripersonal"value="<?php if(!empty($numripersonal)){ echo $numripersonal; } ?>">
<input type="text"  id="adresa" name="adresa"value="<?php if(!empty($adresa)){ echo $adresa; } ?>">
<input type="text"  id="komuna" name="komuna"value="<?php if(!empty($komuna)){ echo $komuna; } ?>">
                    
                    <label>Emaili</label>
                    <label>Telefoni</label><br>
<input type="email"  id="emaili" name="emaili" value="<?php if(!empty($emaili)){ echo $emaili; } ?>">
<input type="text" id="telefoni" name="telefoni"value="<?php if(!empty($telefoni)){ echo $telefoni; } ?>">
                    <br>
                    <br>
<input type="submit" class="btn" style="width:31%; margin-left: 10px;" name="fshijKlient" value="Fshij klient">

                    </div>
                  </form>            
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