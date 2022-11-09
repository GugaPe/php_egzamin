<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wędkowanie</title>
  <link rel="stylesheet" href="./style_1.css" />
</head>
<body>
  <div class="baner">
    <h1>Portal dla wędkarzy</h1>
  </div>
  <div class="content">
    <div class="blok_lewy">
      <div class="blok_lewy1"> 
        <h3>Ryby zamieszkujące rzeki</h3>
        <ol>
              <?php
                  include_once 'skrypt1.php';
                  
                  skrypt1();
              ?>
        </ol>
      </div>
      <div class="blok_lewy2"> 
        <h3>Ryby drapieżne naszych wód</h3>
        <table>
          <tr>
              <th>L.p.</th>
              <th>Gatunek</th>
              <th>Występowanie</th>
          </tr>
          <?php
              include_once 'skrypt2.php';

              skrypt2();
          ?>
        </table>
      </div>
    </div>
    <div class="blok_prawy">
      <div>
      <img src="./ryba1.jpg" alt="Sum" />
      </div>
      <div>
      <a href="kwarendy.txt">Pobierz kwerendy</a>
      </div>
    </div>
  </div>
  <div class="stopka">
    <p>Stronę wykonał: 00000000000</p>
  </div>
</body>
</html>