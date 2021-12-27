<?php require('includes/sqlFunction.php'); ?>
<?php include_once('includes/header.php'); ?>
        <main class="page">
         <section id="slide-bar">
                 <div id="img">
                </div>
        </section>
        <section id="content" style="width: 95%; margin: 0 auto;">
            <div id="l1">
                <h1>Librat</h1>
            </div>     
                        <?php
                        $librat=merrLibrat();
                        while ($libri=mysqli_fetch_assoc($librat)){
                           $titulli=$libri['titulli'];
                           $emri=$libri['emri'];
                           $mbiemri=$libri['mbiemri'];
                           $dataepublikimit=$libri['dataepublikimit'];
                           echo "<article class='item1'>";
                           echo "<img src='images/item11.gif' alt='libri i pare' width='140' height='100'>";
                           echo "<h2>{$titulli}</h2>";
                           echo "<p>{$emri} {$mbiemri}</p>";
                           echo "<p>{$dataepublikimit}</p>";
                           echo "</article>";
                           
                        }              
                     ?>
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