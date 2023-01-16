<?php
$a0 = 0;
$b0 = 0;
$a1 = 1;
$b1 = 1;
$tru=true;
$fal=false;
$o1=1;
$o0=0;
$i1=-1;
$u1="1";
$nul=null;
$php="php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="Description" content="Enter your description here" />
  <link rel="stylesheet" href="style.css">
  <title>11.7. Практика</title>
</head>

<body>
    <h1>11.7. Практика</h1>
    <h2>Задание 1. Таблица истинности PHP</h2>
    <p>У нас на входе есть 2 операнда — A и B. Они могут принимать значения 0 или 1. </p>
  <table align="center" cellspacing="0" border="1">
      <tr>
        <th>A</th>
        <th>B</th>
        <th>!A</th>
        <th>A || B</th>
        <th>A && B</th>
        <th>A xor B</th>
      </tr>
      <tr>
        <td><?= $a0; ?></td>
        <td><?= $b0; ?></td>
        <td><?php var_export(!$a0); ?></td>
        <td><?php var_export($a0 || $b0); ?></td>
        <td><?php var_export($a0 && $b0); ?></td>
        <td><?php var_export($a0 xor $b0); ?></td>
      </tr>
      <tr>
        <td><?= $a0; ?></td>
        <td><?= $b1; ?></td>
        <td><?php var_export(!$a0); ?></td>
        <td><?php var_export($a0 || $b1); ?></td>
        <td><?php var_export($a0 && $b1); ?></td>
        <td><?php var_export($a0 xor $b1); ?></td>
      </tr>
      <tr>
        <td><?= $a1; ?></td>
        <td><?= $b0; ?></td>
        <td><?php var_export(!$a1); ?></td>
        <td><?php var_export($a1 || $b0); ?></td>
        <td><?php var_export($a1 && $b0); ?></td>
        <td><?php var_export($a1 xor $b0); ?></td>
      </tr>
      <tr>
        <td><?= $a1; ?></td>
        <td><?= $b1; ?></td>
        <td><?php var_export(!$a1); ?></td>
        <td><?php var_export($a1 || $b1); ?></td>
        <td><?php var_export($a1 && $b1); ?></td>
        <td><?php var_export($a1 xor $b1); ?></td>
      </tr>
  </table>

  <h2>Задание 2. Таблица сравнения</h2>
  <h3>Гибкое сравнение в PHP</h3>
  <table align="center" cellspacing="0" border="1">
      <tr>
        <th></th>
        <th>true</th>
        <th>false</th>
        <th>1</th>
        <th>0</th>
        <th>-1</th>
        <th>"1"</th>
        <th>null</th>
        <th>"php"</th>
      </tr>
      <tr>
        <th>true</th>
        <td><?php var_export($tru == true); ?></td>
        <td><?php var_export($tru == false); ?></td>
        <td><?php var_export($tru == 1); ?></td>
        <td><?php var_export($tru == 0); ?></td>
        <td><?php var_export($tru == -1); ?></td>
        <td><?php var_export($tru == "1"); ?></td>
        <td><?php var_export($tru == null); ?></td>
        <td><?php var_export($tru == "php"); ?></td>
      </tr>
      <tr>
        <th>false</th>
        <td><?php var_export($fal == true); ?></td>
        <td><?php var_export($fal == false); ?></td>
        <td><?php var_export($fal == 1); ?></td>
        <td><?php var_export($fal == 0); ?></td>
        <td><?php var_export($fal == -1); ?></td>
        <td><?php var_export($fal == "1"); ?></td>
        <td><?php var_export($fal == null); ?></td>
        <td><?php var_export($fal == "php"); ?></td>
      </tr>
      <tr>
        <th>1</th>
        <td><?php var_export($o1 == true); ?></td>
        <td><?php var_export($o1 == false); ?></td>
        <td><?php var_export($o1 == 1); ?></td>
        <td><?php var_export($o1 == 0); ?></td>
        <td><?php var_export($o1 == -1); ?></td>
        <td><?php var_export($o1 == "1"); ?></td>
        <td><?php var_export($o1 == null); ?></td>
        <td><?php var_export($o1 == "php"); ?></td>
      </tr>
      <tr>
        <th>0</th>
        <td><?php var_export($o0 == true); ?></td>
        <td><?php var_export($o0 == false); ?></td>
        <td><?php var_export($o0 == 1); ?></td>
        <td><?php var_export($o0 == 0); ?></td>
        <td><?php var_export($o0 == -1); ?></td>
        <td><?php var_export($o0 == "1"); ?></td>
        <td><?php var_export($o0 == null); ?></td>
        <td><?php var_export($o0 == "php"); ?></td>
      </tr>
      <tr>
        <th>-1</th>
        <td><?php var_export($i1 == true); ?></td>
        <td><?php var_export($i1 == false); ?></td>
        <td><?php var_export($i1 == 1); ?></td>
        <td><?php var_export($i1 == 0); ?></td>
        <td><?php var_export($i1 == -1); ?></td>
        <td><?php var_export($i1 == "1"); ?></td>
        <td><?php var_export($i1 == null); ?></td>
        <td><?php var_export($i1 == "php"); ?></td>
      </tr>
      <tr>
        <th>"1"</th>
        <td><?php var_export($u1 == true); ?></td>
        <td><?php var_export($u1 == false); ?></td>
        <td><?php var_export($u1 == 1); ?></td>
        <td><?php var_export($u1 == 0); ?></td>
        <td><?php var_export($u1 == -1); ?></td>
        <td><?php var_export($u1 == "1"); ?></td>
        <td><?php var_export($u1 == null); ?></td>
        <td><?php var_export($u1 == "php"); ?></td>
      </tr>
      <th>null</th>
        <td><?php var_export($nul == true); ?></td>
        <td><?php var_export($nul == false); ?></td>
        <td><?php var_export($nul == 1); ?></td>
        <td><?php var_export($nul == 0); ?></td>
        <td><?php var_export($nul == -1); ?></td>
        <td><?php var_export($nul == "1"); ?></td>
        <td><?php var_export($nul == null); ?></td>
        <td><?php var_export($nul == "php"); ?></td>
      </tr>
      <th>"php"</th>
        <td><?php var_export($php == true); ?></td>
        <td><?php var_export($php == false); ?></td>
        <td><?php var_export($php == 1); ?></td>
        <td><?php var_export($php == 0); ?></td>
        <td><?php var_export($php == -1); ?></td>
        <td><?php var_export($php == "1"); ?></td>
        <td><?php var_export($php == null); ?></td>
        <td><?php var_export($php == "php"); ?></td>
      </tr>
      </table>
      <h3>Жёсткое сравнение в PHP</h3>
      <table align="center" cellspacing="0" border="1">
      <tr>
        <th></th>
        <th>true</th>
        <th>false</th>
        <th>1</th>
        <th>0</th>
        <th>-1</th>
        <th>"1"</th>
        <th>null</th>
        <th>"php"</th>
      </tr>
      <tr>
        <th>true</th>
        <td><?php var_export($tru === true); ?></td>
        <td><?php var_export($tru === false); ?></td>
        <td><?php var_export($tru === 1); ?></td>
        <td><?php var_export($tru === 0); ?></td>
        <td><?php var_export($tru === -1); ?></td>
        <td><?php var_export($tru === "1"); ?></td>
        <td><?php var_export($tru === null); ?></td>
        <td><?php var_export($tru === "php"); ?></td>
      </tr>
      <tr>
        <th>false</th>
        <td><?php var_export($fal === true); ?></td>
        <td><?php var_export($fal === false); ?></td>
        <td><?php var_export($fal === 1); ?></td>
        <td><?php var_export($fal === 0); ?></td>
        <td><?php var_export($fal === -1); ?></td>
        <td><?php var_export($fal === "1"); ?></td>
        <td><?php var_export($fal === null); ?></td>
        <td><?php var_export($fal === "php"); ?></td>
      </tr>
      <tr>
        <th>1</th>
        <td><?php var_export($o1 === true); ?></td>
        <td><?php var_export($o1 === false); ?></td>
        <td><?php var_export($o1 === 1); ?></td>
        <td><?php var_export($o1 === 0); ?></td>
        <td><?php var_export($o1 === -1); ?></td>
        <td><?php var_export($o1 === "1"); ?></td>
        <td><?php var_export($o1 === null); ?></td>
        <td><?php var_export($o1 === "php"); ?></td>
      </tr>
      <tr>
        <th>0</th>
        <td><?php var_export($o0 === true); ?></td>
        <td><?php var_export($o0 === false); ?></td>
        <td><?php var_export($o0 === 1); ?></td>
        <td><?php var_export($o0 === 0); ?></td>
        <td><?php var_export($o0 === -1); ?></td>
        <td><?php var_export($o0 === "1"); ?></td>
        <td><?php var_export($o0 === null); ?></td>
        <td><?php var_export($o0 === "php"); ?></td>
      </tr>
      <tr>
        <th>-1</th>
        <td><?php var_export($i1 === true); ?></td>
        <td><?php var_export($i1 === false); ?></td>
        <td><?php var_export($i1 === 1); ?></td>
        <td><?php var_export($i1 === 0); ?></td>
        <td><?php var_export($i1 === -1); ?></td>
        <td><?php var_export($i1 === "1"); ?></td>
        <td><?php var_export($i1 === null); ?></td>
        <td><?php var_export($i1 === "php"); ?></td>
      </tr>
      <tr>
        <th>"1"</th>
        <td><?php var_export($u1 === true); ?></td>
        <td><?php var_export($u1 === false); ?></td>
        <td><?php var_export($u1 === 1); ?></td>
        <td><?php var_export($u1 === 0); ?></td>
        <td><?php var_export($u1 === -1); ?></td>
        <td><?php var_export($u1 === "1"); ?></td>
        <td><?php var_export($u1 === null); ?></td>
        <td><?php var_export($u1 === "php"); ?></td>
      </tr>
      <th>null</th>
        <td><?php var_export($nul === true); ?></td>
        <td><?php var_export($nul === false); ?></td>
        <td><?php var_export($nul === 1); ?></td>
        <td><?php var_export($nul === 0); ?></td>
        <td><?php var_export($nul === -1); ?></td>
        <td><?php var_export($nul === "1"); ?></td>
        <td><?php var_export($nul === null); ?></td>
        <td><?php var_export($nul === "php"); ?></td>
      </tr>
      <th>"php"</th>
        <td><?php var_export($php === true); ?></td>
        <td><?php var_export($php === false); ?></td>
        <td><?php var_export($php === 1); ?></td>
        <td><?php var_export($php === 0); ?></td>
        <td><?php var_export($php === -1); ?></td>
        <td><?php var_export($php === "1"); ?></td>
        <td><?php var_export($php === null); ?></td>
        <td><?php var_export($php === "php"); ?></td>
      </tr>
      </table>
</body>

</html>