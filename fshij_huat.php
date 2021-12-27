<?php include_once('includes/header.php'); ?>
<?php include_once('includes/sqlFunction.php'); ?>

        <main class="page">
        <section id="content" style="width: 95%; margin: 0 auto;">
            <div id="l1">
            <h1>Fshij huazim</h1>
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

                         if(isset($_POST['fshijHuazim'])){
                            fshijHuazim($_GET['hid'] );
                          }
                          ?>

<form method="post">
<input type="hidden" name="huajaid" id="huajaid"><br>
                    <div class="forma">
                      <br>
                      <hr>
                      <br>
                    <label>Libri</label>
                    <label>Klienti</label> 
                    <label>Data e marrjes</label>
                <select name="libri" id="libri">
                        <option value=""></option>
                            <?php
                                $librat=merrLibrat();
                                while ($libri=mysqli_fetch_assoc($librat)) {
                                    $libriid=$libri['libriid'];
                                    $titulli=$libri['titulli'];
                                    echo "<option value='{$libriid}'>{$titulli}</option>";
                                }
                            ?>
                </select>
                      <select name="klienti" id="klienti">
                        <option value=""></option>
                            <?php
                                $klientet=merrKlientet();
                                while ($klienti=mysqli_fetch_assoc($klientet)) {
                                    $klientiid=$klienti['klientiid'];
                                    $emri=$klienti['emri'];
                                    $mbiemri=$klienti['mbiemri'];
                                    echo "<option value='{$klientiid}'>{$emri} {$mbiemri}</option>";
                                }
                            ?>
                </select>
                      <input type="date"  id="dataemarrjes" name="dataemarrjes"/> 
                      <label>Data e kthimit</label>
                      <label>Komente</label><br>
                     <input type="date"  id="dataekthimit" name="dataekthimit"/>
                     <input type="text"  id="komente" name="komente"/>
                    <br>
                    <br>
<input type="submit" class="btn" style="width:31%; margin-left: 10px;" name="fshijHuazim" value="Fshij">       
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