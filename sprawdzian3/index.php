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
        <div class="prawy">
            <h3>Kontakt</h3>
            <p>
            telefon: 123123123<br>
            e-mail: <a href="mailto:bok@sklep.pl">bok@sklep.pl</a>
            </p>
            <img alt="promocja" src="promocja2.png">
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
                <input type="submit">WYBIERZ</input>
            </form>
            <?php
                $form_value = $_POST['towar_select'];
                $sql = mysqli_connect('localhost', 'root', '', 'sklep');
                $query = mysqli_query($sql, 'SELECT cena FROM towary WHERE nazwa = "{$form_value}";');
                
                
            ?>
        </div>
        <div class="lewy">
            <h3>Promocja 15% obejmuje artykuły:</h3>
            <ul>
                <?php 
                $sql = mysqli_connect('localhost', 'root', '', 'sklep');
                $query = mysqli_query($sql, 'SELECT nazwa FROM towary WHERE promocja = 1;');
                $rows = mysqli_fetch_row($query);
                foreach ($rows as $row) {
                    echo "<li>$row</li>";
                } 
                mysqli_close($sql)
                ?>
            </ul>
        </div>
    </div>
    <div class="stopka">
        <h4>Autor strony 06231010911</h4>
    </div>
</body>