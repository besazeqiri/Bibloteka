<?php

global $dbcon;
function connection(){
    $dbcon = mysqli_connect('localhost','root','','biblioteka');
    if(!$dbcon){
        die(mysqli_error($dbcon));
    }
    return $dbcon;
}
connection();

//stafi
function merrStafin(){
    $dbcon = connection();
    $sql="SELECT stafiid, emri, mbiemri, dataelindjes,numripersonal,adresa,telefoni,roli FROM stafi";
    return mysqli_query($dbcon,$sql); 
}
function merrStaf($stafiid){
    $dbcon = connection();
    $sql="SELECT stafiid, emri, mbiemri, dataelindjes,numripersonal,adresa,telefoni,roli FROM stafi WHERE stafiid=$stafiid";
    $res=mysqli_query($dbcon,$sql);
    return mysqli_fetch_assoc($res);
}
function shtoStaf($emri,$mbiemri,$dataelindjes,$numripersonal,$adresa,$telefoni,$username,$password,$roli){
    $dbcon = connection();
    $sql = "INSERT INTO stafi(emri, mbiemri, dataelindjes,numripersonal,adresa,telefoni,username,password,roli)VALUES
    ('$emri', '$mbiemri', '$dataelindjes','$numripersonal', '$adresa', '$telefoni','$username','$password','$roli')";
    $result=mysqli_query($dbcon,$sql);
    if($result){
        header("location: stafi.php");
   
    }
}
function modifikoStaf($stafiid,$emri,$mbiemri,$dataelindjes,$numripersonal,$adresa,$telefoni, $roli)
{
    $dbcon = connection();
    $sql="UPDATE stafi SET emri='$emri',mbiemri='$mbiemri', dataelindjes='$dataelindjes', numripersonal='$numripersonal',
 adresa='$adresa',telefoni='$telefoni', roli='$roli' WHERE stafiid=$stafiid";
    $result=mysqli_query($dbcon,$sql);
    if($result){
        header("location: stafi.php");
    }
}

function fshijStaf($stafiid){
    $dbcon = connection();
    $sql="DELETE FROM stafi WHERE stafiid=$stafiid";
    $result=mysqli_query($dbcon,$sql);
    if($result){
        header("location: stafi.php");
    }
}

//klientet
function merrKlientet(){
    $dbcon = connection();
    $sql="SELECT * FROM klienti";
    return mysqli_query($dbcon,$sql); 
}
function merrKlient($klientiid){
    $dbcon = connection();
    $sql="SELECT klientiid,emri, mbiemri, dataelindjes,numripersonal,adresa,komuna, emaili, telefoni FROM klienti WHERE klientiid=$klientiid";
    $res=mysqli_query($dbcon,$sql);
    return mysqli_fetch_assoc($res);
}
function shtoKlient($emri,$mbiemri,$dataelindjes,$numripersonal,$adresa,$komuna,$emaili,$telefoni){
    $dbcon = connection();
    $sql = "INSERT INTO klienti(emri, mbiemri, dataelindjes,numripersonal,adresa,komuna, emaili, telefoni)";
    $sql.="VALUES('$emri', '$mbiemri', '$dataelindjes', '$numripersonal', '$adresa', '$komuna','$emaili','$telefoni')";
    $result=mysqli_query($dbcon,$sql);
    if($result){
        header("location: klientet.php");
    }
}
function modifikoKlient($klientiid,$emri, $mbiemri, $dataelindjes, $numripersonal, $adresa, $komuna,$emaili,$telefoni){
    $dbcon = connection();
    $sql="UPDATE klienti SET emri='$emri',mbiemri='$mbiemri', dataelindjes='$dataelindjes', numripersonal='$numripersonal',
    adresa='$adresa',komuna='$komuna' ,emaili='$emaili', telefoni= '$telefoni' WHERE klientiid=$klientiid";
    $result=mysqli_query($dbcon,$sql);
    if($result){
        header("location: klientet.php");
    }
}
function fshijKlient($klientiid){
    $dbcon = connection();
    $sql="DELETE FROM klienti WHERE klientiid=$klientiid";
    $result=mysqli_query($dbcon,$sql);
    if($result){
        header("location: klientet.php");
    }
}



//regjister
function register($emri,$mbiemri,$dataelindjes,$numripersonal,$adresa,$telefoni,$username,$password,$roli){
    $dbcon = connection();
    $sql = "INSERT INTO stafi(emri, mbiemri, dataelindjes, numripersonal, adresa,telefoni, username, password,roli)";
    $sql.="VALUES('$emri','$mbiemri','$dataelindjes',$numripersonal, '$adresa','$telefoni','$username','$password','')";
    $result = mysqli_query($dbcon, $sql);
    if($result){
        header('Location: login.php');
    }
}

//logini
function login($username, $password){
    $dbcon = connection();
    $sql = "SELECT * FROM stafi WHERE username = '$username' AND password='$password'";
    $result = mysqli_query($dbcon, $sql);
    if($result){
        if(mysqli_num_rows($result) == 1){
            $res = mysqli_fetch_assoc($result);
            if($res['username']==$username && $res['password']== $password){
                header("Location: index.php");
                session_start();
                $_SESSION['stafiid'] = $res['stafiid'];
                $_SESSION['emri'] = $res['emri'];
                $_SESSION['mbiemri'] = $res['mbiemri'];
                $_SESSION['dataelindjes'] = $res['dataelindjes'];
                $_SESSION['numripersonal'] = $res['numripersonal'];
                $_SESSION['adresa'] = $res['adresa'];
                $_SESSION['telefoni'] = $res['telefoni'];
                $_SESSION['username'] = $res['username'];
                $_SESSION['password'] = $res['password'];
                $_SESSION['roli'] = $res['roli'];
            }
        
            }
        }
    }

//Profili
function merrProfil(){
$dbcon = connection();
$sql="SELECT stafiid, emri, mbiemri, dataelindjes,numripersonal,adresa,telefoni,username,password FROM stafi";
return mysqli_query($dbcon,$sql); 
    }

function merrProfilin($stafiid){
$dbcon = connection();
$sql="SELECT stafiid, emri, mbiemri, dataelindjes,numripersonal,adresa,telefoni,username, password FROM stafi WHERE 
stafiid=$stafiid";
$res=mysqli_query($dbcon,$sql);
return mysqli_fetch_assoc($res);
}
        
function modifikoProfilin($stafiid,$emri,$mbiemri,$dataelindjes,$numripersonal,$adresa,$telefoni,$username,$password){
$dbcon = connection();
$sql="UPDATE stafi SET emri='$emri',mbiemri='$mbiemri', dataelindjes='$dataelindjes', numripersonal='$numripersonal',
adresa='$adresa',telefoni='$telefoni', username='$username',password='$password' WHERE stafiid=$stafiid";
$result=mysqli_query($dbcon,$sql);
if($result){
header("location: index.php");
            }
        }
        


//librat

function merrLibrat (){
    $dbcon = connection();
    $sql="SELECT l.libriid, l.titulli, a.emri, a.mbiemri,l.dataepublikimit from libri l ";
    $sql.="INNER JOIN autori a ON l.autoriid=a.autoriid";
    return mysqli_query($dbcon,$sql); 

}
function merrLiber($libriid){
    $dbcon = connection();
    $sql="SELECT l.libriid, l.titulli, a.emri, a.mbiemri,l.dataepublikimit from libri l ";
    $sql.="INNER JOIN autori a ON l.autoriid=a.autoriid WHERE libriid=$libriid";
    $res=mysqli_query($dbcon,$sql);
    return mysqli_fetch_assoc($res);
}


function shtoLiber ($titulli,$autoriid,$dataepublikimit){
$dbcon = connection();
$sql="INSERT INTO libri(titulli,autoriid,dataepublikimit) VALUES";
$sql.= "('$titulli', '$autoriid', '$dataepublikimit')";
$result=mysqli_query($dbcon,$sql);
if($result){
    header("location: librat.php");
}
}

function modifikoLiber($libriid,$titulli, $dataepublikimit){
    $dbcon = connection();
    $sql="UPDATE libri SET titulli='$titulli', dataepublikimit='$dataepublikimit'
     WHERE libriid='$libriid'";
    $result=mysqli_query($dbcon,$sql);
    if($result){
        header("location: librat.php");
    }
    }


function fshijLiber($libriid){
    $dbcon = connection();
    $sql="DELETE FROM libri WHERE libriid=$libriid";
    $result=mysqli_query($dbcon,$sql);
    if($result){
        header("location: librat.php");
    
    }
}

//autoret

function merrAutoret (){
    $dbcon = connection();
    $sql="SELECT * FROM autori";
    return mysqli_query($dbcon,$sql); 
}

function merrAutor($autoriid){
    $dbcon = connection();
    $sql="SELECT * FROM autori WHERE autoriid=$autoriid";
    $res=mysqli_query($dbcon,$sql);
    return mysqli_fetch_assoc($res);
}

function shtoAutor ($emri,$mbiemri,$shteti){
    $dbcon = connection();
    $sql="INSERT INTO autori(emri,mbiemri,shteti) VALUES";
    $sql.= "('$emri', '$mbiemri', '$shteti')";
    $result=mysqli_query($dbcon,$sql);
    if($result){
        header("location: autoret.php");
    }
    }
    
function modifikoAutor($autoriid,$emri, $mbiemri, $shteti){
    $dbcon = connection();
    $sql="UPDATE autori SET emri='$emri',mbiemri='$mbiemri', shteti='$shteti' WHERE autoriid='$autoriid'";
    $result=mysqli_query($dbcon,$sql);
    if($result){
        header("location: autoret.php");
    }
}


function fshijAutor($autoriid){
    $dbcon = connection();
    $sql="DELETE FROM autori WHERE autoriid=$autoriid";
    $result=mysqli_query($dbcon,$sql);
    if($result){
        header("location: autoret.php");
    }
}

    


//huazimet
function merrHuazimet(){
    $dbcon = connection();
    $sql="SELECT h.huajaid, l.titulli, k.emri, k.mbiemri, h.dataemarrjes,h.dataekthimit, h.komente from huazimet h
    inner join libri l on l.libriid=h.libriid inner join klienti k on k.klientiid=h.klientiid";
    return mysqli_query($dbcon,$sql); 
}
   
function merrHuazim($huajaid){
    $dbcon = connection();
    $sql="SELECT h.huajaid, l.titulli, k.emri, k.mbiemri, h.dataemarrjes,h.dataekthimit, h.komente from huazimet h
    inner join libri l on l.libriid=h.libriid inner join klienti k on k.klientiid=h.klientiid where h.huajaid=$huajaid";
    $res=mysqli_query($dbcon,$sql);
    return mysqli_fetch_assoc($res);
}
   
function shtoHuazim ($libriid,$klientiid,$dataemarrjes,$dataekthimit,$komente){
    $dbcon = connection();
    $sql="INSERT INTO huazimet(libriid,klientiid,dataemarrjes,dataekthimit,komente) VALUES";
    $sql.= "('$libriid', '$klientiid', '$dataemarrjes','$dataekthimit','$komente')";
    $result=mysqli_query($dbcon,$sql);
    if($result){
        header("location: huat.php");
    }
    }


function modifikoHuazim($huajaid, $dataemarrjes, $dataekthimit,$komente){
    $dbcon = connection();
    $sql="UPDATE huazimet  SET dataemarrjes='$dataemarrjes', dataekthimit='$dataekthimit', komente='$komente'
     WHERE huajaid='$huajaid'";
    $result=mysqli_query($dbcon,$sql);
    if($result){
        header("location: huat.php");
    }
}

function fshijHuazim($huajaid){
    $dbcon = connection();
    $sql="DELETE FROM huazimet WHERE huajaid=$huajaid";
    $result=mysqli_query($dbcon,$sql);
    if($result){
        header("location: huat.php");  
    }
}
?>















