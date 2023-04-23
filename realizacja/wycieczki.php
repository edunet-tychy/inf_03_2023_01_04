<?php
    $con = mysqli_connect('localhost', 'root', '', 'biuro');

    // Skrypt 1
    $res_1 = "";
    $sql_1 = "SELECT wycieczki.id, wycieczki.dataWyjazdu, wycieczki.cel, wycieczki.cena FROM wycieczki WHERE wycieczki.dostepna = 1";
    $query_1 = mysqli_query($con, $sql_1);

    while($row = mysqli_fetch_row($query_1)){
        $res_1 .= "<li>$row[0]. dnia $row[1] jedziemy do $row[2], cena: $row[3]</li>";
    }

    // Skrypt 2
    $res_2 = "";
    $sql_2 = "SELECT zdjecia.nazwaPliku, zdjecia.podpis FROM zdjecia ORDER BY zdjecia.podpis DESC;";
    $query_2 = mysqli_query($con, $sql_2);

    while($row = mysqli_fetch_row($query_2)){
        $res_2 .= "<img src='$row[0]' alt='$row[0]'>";
    }


    mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wycieczki po Europie</title>
    <link rel="stylesheet" href="./styl4.css">
</head>
<body>
    <section class="baner">
        <h1>BIURO TURYSTYCZNE</h1>
    </section>
    <section class="dane">
        <h3>Wycieczki, na które są wolne miejsca</h3>
        <!-- Skrypt 1 -->
        <ul>
            <?=$res_1;?>
        </ul>
    </section>
    <div class="container">
        <section class="lewy">
            <h2>Bestselery</h2>
            <table>
                <tr>
                    <td>Wenecja</td>
                    <td>kwiecień</td>
                </tr>
                <tr>
                    <td>Londyn</td>
                    <td>lipiec</td>
                </tr>
                <tr>
                    <td>Rzym</td>
                    <td>wrzesień</td>
                </tr>
            </table>
        </section>
        <section class="srodek">
            <h2>Nasze zdjęcia</h2>
            <!-- Skrypt 2 -->
            <?=$res_2;?>
        </section>
        <section class="prawy">
            <h2>Skontaktuj się</h2>
            <a href="mailto: turysta@wycieczki.pl">napisz do nas</a>
            <p>telefon: 111222333</p>
        </section>        
    </div>

    <section class="stopka">
        <p>Stronę wykonał: 00000000000</p>
    </section>
</body>
</html>