<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Sklep papierniczy</title>
    <link rel="stylesheet" href="./styl.css"></link>
</head>
<body>
    <div class="baner">
        <h1>W naszym sklepie internetowym kupisz najtaniej</h1>
    </div>

    <div class="contener">
        <div class="lewy">
            <h3>Promocja 15% obejmuje artykuły:</h3>
            <ul>
                <?php 
                $sql = mysqli_connect('localhost', 'root', '', 'sklep');
                $query = mysqli_query($sql, 'SELECT nazwa FROM towary WHERE promocja = 1;');
                
                while ($row = mysqli_fetch_array($query)) {
                    echo "<li>" . $row["nazwa"] . "</li>";
                } 
                mysqli_close($sql)
                ?>
            </ul>
        </div>
        <div class="srodek">
            <h3>Cena wybranego artykułu w promocji</h3>
            <form method="post" action="">
                <select id="towar_select">
                    <option value="1">Gumka do mazania</option>
                    <option value="2">Cienkopis</option>
                    <option value="3">Pisaki 60 szt.</option>
                    <option value="4">Markery 4 szt.</option>
                </select>
                <input type="submit" value="WYBIERZ"></input>
            </form>
            <?php
                if (isset($_POST['towar_select'])) {
                    $selected_val = $_POST['towar_select'];
                    $sql = mysqli_connect('localhost', 'root', '', 'sklep'); 
                    $query = mysqli_query($sql, "SELECT cena FROM towary WHERE id = '$selected_val';"); 
                    $row = mysqli_fetch_row($query);
                    $cena = $row[0];
                    $cena_promocyjna = round($cena * 0.85, 2);
                    mysqli_close($sql);

                    echo $cena_promocyjna;
                }
            ?>
        </div>
            <div class="prawy">
                <h3>Kontakt</h3>
                <p>
                telefon: 123123123<br>
                e-mail: <a href="mailto:bok@sklep.pl">bok@sklep.pl</a>
                </p>
                <img alt="promocja" src="promocja2.png">
            </div>
    </div>
    <div class="stopka">
        <h4>Autor strony 06231010911</h4>
    </div>
</body>