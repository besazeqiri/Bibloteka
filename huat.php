<?php include_once('includes/header.php'); ?>
<?php include_once('includes/sqlFunction.php'); ?>

        <main class="page">
        <section id="content" style="width: 95%; margin: 0 auto;">
            <div id="l1">
            <h1>Huazimet</h1>
            <button class="shto"><a href="shto_hua.php">Shto huazim</a></button>
        </div>

            <table id="members">    
                <tr>
                  <th>Nr</th>
                  <th>Libri </th>
                  <th>Klienti</th>
                  <th>Data e marrjes</th>
                  <th>Data e kthimit</th>
                  <th>Komente</th> 
                  <th>Modifiko</th>
                  <th>Fshij</th>
                </tr>
                     
            <?php
              $huazimet=merrHuazimet();
              if(mysqli_num_rows($huazimet)>0){
                  while ($huaja=mysqli_fetch_assoc($huazimet)) {
                      echo "<tr>";
                      $huajaid=$huaja['huajaid'];
                      echo "<td>" . $huaja['huajaid']."</td>";
                      echo "<td>" . $huaja['titulli']."</td>";
                      echo "<td>" . $huaja['emri']." " . $huaja['mbiemri'] . "</td>";
                      echo "<td>". $huaja['dataemarrjes'] ."</td>";
                      echo "<td>". $huaja['dataekthimit'] ."</td>";
                      echo "<td>". $huaja['komente'] ."</td>";
                      echo "<td><a href='modifiko_huat.php?hid={$huajaid}'style='text-decoration: none; color: #CD5C5C;'> Modifiko</a> </td>";
                      echo "<td><a href='fshij_huat.php?hid={$huajaid}'style='text-decoration: none; color: #CD5C5C;'> Fshij</a> </td>";
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