<?php session_start(); ?>
     <!DOCTYPE html>
  <html>
    <head>
        <meta charset="utf-8">
        <title>Projekti</title>
        <link rel="stylesheet" href="css/style.css">
        <script type="text/javascript" src="js/jquery.js"></script>
    </head>
    <body>
          <header class="container">
            <section id="s1">
                <img src="images/llogo1.png" alt="llogo" width="150" height="50">
             <nav id="menyte" style="margin-top:3px;">
             <ul>
                     <?php if (isset($_SESSION['stafiid']) &&  $_SESSION['roli'] == 1) : ?>
                        <li><a href="stafi.php">Stafi</a></li>
                        <li><a href="klientet.php">Klientët</a></li>
                        <li><a href="librat.php">Librat</a></li>
                        <li><a href="autoret.php">Autoret</a></li>
                        <li><a href="huat.php">Huazimet</a></li>   
                         <li><a href="logout.php">Dilni</a></li>    
<li><a style="text-decoration:none; padding: 15px; background-color: #F08080; border-radius: 10px;  color: black;" 
                        href="modifiko_profilin.php"><?php echo $_SESSION['emri'] . " " .$_SESSION['mbiemri']; ?></a></li>  
        
            <?php elseif(isset($_SESSION['stafiid']) &&  $_SESSION['roli'] == 0) : ?>
                        <li><a href="librat.php">Librat</a></li>
                        <li><a href="huat.php">Huazimet</a></li>   
                         <li><a href="logout.php">Dilni</a></li>    
                        <li><a style="text-decoration:none; padding: 15px; background-color: #F08080; border-radius: 10px;  color: black;" 
                        href="modifiko_profilin.php"><?php echo $_SESSION['emri'] . " " .$_SESSION['mbiemri']; ?></a></li> 

                        <?php else : ?>
                        <li><a href="index.php" class="active">Ballina</a></li>
                        <li><a href="#l1">Librat</a></li>
                         <li><a href="#box">Kontakti</a></li>
                        <li><a style="text-decoration:none; 
                        padding: 15px; background-color: #ef9dac; border-radius: 10px; " href="login.php">Kyqu</a></li>
                    <?php endif; ?> 

                        </ul>
                </nav>
            </section>
        </header>