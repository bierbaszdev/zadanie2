<?php
$conn=mysqli_connect('localhost','root','','filmy');
            if(!$conn)
            {
            echo("Błąd połączenia z serwerem");
            }
            else{
            $rodzaj=$_POST['gatunek'];
            $tytul=$_POST['tytul'];
            $ocena=$_POST['ocena'];
            $opis=$_POST['opis'];
            $pytanko="insert into filmy (rodzaj, tytul, ocena, opis)values('$rodzaj','$tytul','$ocena','$opis');";
            $pyt=mysqli_query($conn,$pytanko);
                $powrot="../index.html";
                $baza= "../odczyt/odczyt.php";

                echo '<a href="'.$powrot.'">Powrót do strony głównej</a></br>';
                echo '<a href="'.$baza.'">Baza filmów</a>';
            }

            mysqli_close($conn);
?>