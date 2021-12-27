<?php include_once('includes/header.php'); ?>
<?php include_once('includes/sqlFunction.php'); ?>

        <main class="page">
        <section id="content" style="width: 95%; margin: 0 auto;">
            <div id="l1">
            <h1>Librat</h1>
            <button class="shto"><a href="shto_liber.php">Shto librin</a></button>
        </div>

            <table id="members">    
                <tr>
                  <th>Nr</th>
                  <th>Titulli </th>
                  <th>Autori</th>
                  <th>Data e publikimit</th>
                  <th>Modifiko</th>
                  <th>Fshij</th>
                </tr>
        <?php
                    $librat=merrLibrat();
                    if(mysqli_num_rows($librat)>0 ){
                        while ($libri=mysqli_fetch_assoc($librat)){
                    
                            echo "<tr>"; 
                            $libriid=$libri['libriid']; 
                            echo "<td>" . $libri['libriid']."</td>";
                            echo "<td>" . $libri['titulli']."</td>";
                            echo "<td>" . $libri['emri']." " . $libri['mbiemri'] . "</td>";
                            echo "<td>" . $libri['dataepublikimit']."</td>";
                            echo "<td><a href='modifiko_liber.php?lib={$libriid}'style='text-decoration: none; color: #CD5C5C;'> Modifiko</a> </td>";
                            echo "<td><a href='fshij_liber.php?lib={$libriid}'style='text-decoration: none; color: #CD5C5C;'> Fshij</a> </td>";
                            echo "</tr>";
                        }
                    }else{
                        echo "Nuk ka shenime ne DB";
                    }

                ?>
            </table>          
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