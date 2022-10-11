<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./styl_1.css" />
    <title>Document</title>
  </head>
  <body>
    <div class="baner">
      <h1>Witamy w restauracji „Wszystkie Smaki”</h1>
    </div>
    <div class="panel">
      <div class="panel_lewy">
        <img alt="Nasze Dania" src="./Zrzut ekranu 2022-09-20 093239.jpg" />
      </div>
      <div class="panel_prawy">
        <h4>U nas dobrze zjesz!</h4>
        <ol>
            <?php
                require_once 'rezerwacja.php';
                wczytaj("localhost", "root", "", "baza");
            ?>
        </ol>
      </div>
    </div>
    <form class="panel_dolny" action="rezerwacje.php" method="POST">
      <h2>Zarezerwuj stolik on-line</h2>
      <p>Data (format rrrr-mm-dd):</p>
      <!-- label zamiast p -->
      <input type="text" name="data_rez" id="data_rez" />
      <p>Ile osób?</p>
      <input type="number" name="liczba_osob" id="liczba_osob" />
      <p>Twój numer telefonu</p>
      <input type="text" name="telefon" id="telefon" />
      <div class="dane_osobowe">
        <input type="checkbox" />
        <p>Zgadzam się na przetwarzanie moich danych osobowych</p>
      </div>
      <input type="reset" placeholder="WYCZYŚĆ" />
      <input type="submit" placeholder="REZERWUJ" />
    </form>
    <div class="stopka">Stronę internetową opracował: <i>00000000000</i></div>
    <!-- italic =pochylenie -->
  </body>
</html>
