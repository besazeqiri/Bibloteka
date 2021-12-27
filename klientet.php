<?php include_once('includes/header.php'); ?>
<?php include_once('includes/sqlFunction.php'); ?>
        <main class="page">
        <section id="content" style="width: 95%; margin: 0 auto;">
            <div id="l1">
            <h1>Klientët</h1>
            <button class="shto"><a href="shto_klient.php">Shto klient</a></button>
        </div>

            <table id="members">    
                <tr>
                  <th>Nr</th>
                  <th>Emri </th>
                  <th>Mbiemri</th>
                  <th>Data e lindjes</th>
                  <th>Numri Personal</th>
                  <th>Adresa</th>
                  <th>Komuna</th>
                  <th>Email</th> 
                  <th>Telefoni</th>
                  <th>Modifiko</th>
                  <th>Fshij</th>
                </tr>
                
            <?php
                    $klientet=merrKlientet();
                    if(mysqli_num_rows($klientet)>0){
                        while ($klienti=mysqli_fetch_assoc($klientet)) {
                                                     
                            echo "<tr>";
                            $klientiid=$klienti['klientiid'];
                            echo "<td>" . $klienti['klientiid']."</td>";
                            echo "<td>" . $klienti['emri']."</td>";
                            echo "<td>". $klienti['mbiemri'] ."</td>";
                            echo "<td>". $klienti['dataelindjes'] ."</td>";
                            echo "<td>". $klienti['numripersonal'] ."</td>";
                            echo "<td>". $klienti['adresa'] ."</td>";
                            echo "<td>". $klienti['komuna'] ."</td>";
                            echo "<td>". $klienti['emaili'] ."</td>";
                            echo "<td>". $klienti['telefoni'] ."</td>";
                            echo "<td><a href='modifiko_klient.php?kid={$klientiid}'style='text-decoration: none; color: #CD5C5C;'> Modifiko</a> </td>";
                            echo "<td><a href='fshij_klient.php?kid={$klientiid}'style='text-decoration: none; color: #CD5C5C;'> Fshij</a> </td>";
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