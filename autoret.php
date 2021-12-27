<?php include_once('includes/header.php'); ?>
<?php include_once('includes/sqlFunction.php'); ?>

        <main class="page">
        <section id="content" style="width: 95%; margin: 0 auto;">
            <div id="l1">
            <h1>Autoret</h1>
            <button class="shto"><a href="shto_autor.php">Shto autor</a></button>
        </div>

            <table id="members">    
                <tr>
                  <th>Nr</th>
                  <th>Emri </th>
                  <th>Mbiemri</th>
                  <th>Shteti</th>
                  <th>Modifiko</th>
                  <th>Fshij</th>
                </tr>
            <?php

                    $autoret=merrAutoret();
                    if(mysqli_num_rows($autoret)>0 ){
                        while ($autori=mysqli_fetch_assoc($autoret)){
                    
                            echo "<tr>"; 
                            $autoriid=$autori['autoriid']; 
                            echo "<td>" . $autori['autoriid']."</td>";
                            echo "<td>" . $autori['emri']."</td>";
                            echo "<td>" . $autori['mbiemri']."</td>";
                            echo "<td>" . $autori['shteti']."</td>";
                            echo "<td><a href='modifiko_autor.php?aid={$autoriid}'style='text-decoration: none; color: #CD5C5C;'> Modifiko</a> </td>";
                            echo "<td><a href='fshij_autor.php?aid={$autoriid}'style='text-decoration: none; color: #CD5C5C;'> Fshij</a> </td>";
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