<?php include_once('includes/header.php'); ?>
<?php include_once('includes/sqlFunction.php'); ?>

        <main class="page">
        <section id="content" style="width: 95%; margin: 0 auto;">
            <div id="l1">
            <h1>Fshij Librin</h1>
        </div>
                  <?php

                            if(isset($_GET['lib'])){
                              $lib=$_GET['lib'];
                              $autori=merrAutor($lib);
                              $libri=merrLiber($lib);
                              $libriid=$libri['libriid'];
                              $titulli=$libri['titulli'];
                              $emri=$libri['emri'];
                              $mbiemri=$libri['mbiemri'];
                              $dataepublikimit=$libri['dataepublikimit'];
                              }
                                if(isset($_POST['fshijLiber'])){
                                fshijLiber($_GET['lib'] );
                                }
                          ?>


<form method="post">
                    <div class="forma">
                      <br>
                      <hr>
                      <br>
                       <label>Titulli</label>
                       <label>Autori</label>
                       <label>Data e publikimit</label><br>
                        <input type="text"  id="titulli" name="titulli"/>
                 <select name="autori" id="autori">
                        <option value=""></option>
                            <?php
                                $autoret=merrAutoret();
                                while ($autori=mysqli_fetch_assoc($autoret)) {
                                    $autoriid=$autori['autoriid'];
                                    $emri=$autori['emri'];
                                    $mbiemri=$autori['mbiemri'];
                                    echo "<option value='{$autoriid}'>{$emri} {$mbiemri}</option>";
                                }
                            ?>
                     </select>
                    <input type="date"  id="dataepublikimit" name="dataepublikimit"/>
                      
                    <br>
                    <br>
<input type="submit" class="btn" style="width:31%; margin-left: 10px;" name="fshijLiber" value="Fshij liber">
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

            