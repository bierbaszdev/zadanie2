<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lista Filmów</title>
</head>
<body>
    <div class="baner">
        Baza danych Filmoteka

        </div>

    <div class="obramka">
        <div class="panel-lewy">
            <h2>Filmy</h2>
                <?php
                $conn=mysqli_connect('localhost','root','','filmy');
                if(!$conn)
                {
                exit("Błąd połączenia z serwerem");
                }
                else{
                $pyt=mysqli_query($conn,'select tytul, rodzaj, opis, ocena from filmy;');
                 $il_wierszy=mysqli_num_rows($pyt);
                 echo"<table>
                 <tr>
                 <th>Tytul</th>
                 <th>Rodzaj</th>
                 <th>Opis</th>
                 <th>Ocena</th>
                 </tr>
                 </table>";


                 for($i=0;$i<$il_wierszy;$i++){
                    $result=mysqli_fetch_array($pyt);

                    echo"<tr><td>".$result['tytul']."</td><td>".$result['rodzaj']."</td><td>".$result['opis']."</td><td>".$result['ocena']."</td></tr>";
                 }
                 echo"</table>";
                }mysqli_close($conn);
                ?>



        </div>

        <div class="panel-prawy">
            <h3>Dostęne gatunki</h3>
        <ol>
            <li>Romans</li>
            <li>Thriller</li>
            <li>Akcja</li>
            <li>Romans</li>
            <li>Dramat</li>
            <li>Komedie</li>
            <li>Dokumentalne</li>
            <li>INNY</li>
        </ol>
        <br>

        </div>
    </div>
        <div class="stopka">
        <a href="../index.html">Powrót do strony głównej</a></br>
        <a href="../dodanie/dodanie.html">Dodaj anime</a>

        </div>

</body>
</html>