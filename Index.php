<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>11.7. Практика</title>
</head>
<body class="p-5">

<h1 class="text-uppercase text-center text-danger mb-4">11.7. Практика</h1>
    <?php 
    $a0 = 0;
    $b0 = 0;
    $a1 = 1;
    $b1 = 1;
    $a1non = !$a1;

    /*var_dump(!$a1); 
    print_r($a0 || $b0);
    print_r($a0 && $b0);
    print_r($a0 xor $b0);*/
    ?>
    
<table class="table table-bordered align-middle text-center mb-5">
    <caption>Задание 1. Таблица истинности PHP</caption>
  <thead class="table-dark">
    <tr>
      <th>A</th>
      <th>B</th>
      <th>!A</th>
      <th>A || B</th>
      <th>A && B</th>
      <th>A xor B</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>0</td>
      <td>0</td>
      <td><?php var_dump(!$a0); ?></td>
      <td><?php var_dump($a0 || $b0); ?></td>
      <td><?php var_dump($a0 && $b0); ?></td>
      <td><?php var_dump($a0 xor $b0); ?></td>
    </tr>
    <tr>
      <td>0</td>
      <td>1</td>
      <td><?php var_dump(!$a0); ?></td>
      <td><?php var_dump($a0 || $b1); ?></td>
      <td><?php var_dump($a0 && $b1); ?></td>
      <td><?php var_dump($a0 xor $b1); ?></td>
    </tr>
    <tr>
      <td>1</td>
      <td>0</td>
      <td><?php var_dump(!$a1); ?></td>
      <td><?php var_dump($a1 || $b0); ?></td>
      <td><?php var_dump($a1 && $b0); ?></td>
      <td><?php var_dump($a1 xor $b0); ?></td>
    </tr>
    <tr>
      <td>1</td>
      <td>1</td>
      <td><?php var_dump(!$a1); ?></td>
      <td><?php var_dump($a1 || $b1); ?></td>
      <td><?php var_dump($a1 && $b1); ?></td>
      <td><?php var_dump($a1 xor $b1); ?></td>
    </tr>
  </tbody>
</table>

<table class="table table-bordered mb-5 align-middle text-center">
    <caption>Задание 2.1 Гибкое сравнение в PHP(==)</caption>
  <thead class="table-dark">
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
  </thead>
  <tbody>
    <tr>
      <th class="table-dark">true</th>
      
      <td><?php var_dump(true == true); ?></th>
      <td><?php var_dump(true == false); ?></td>
      <td><?php var_dump(true == 1); ?></td>
      <td><?php var_dump(true == 0); ?></td>
      <td><?php var_dump(true == -1); ?></td>
      <td><?php var_dump(true == '1'); ?></td>
      <td><?php var_dump(true == null); ?></td>
      <td><?php var_dump(true == 'php'); ?></td>
    </tr>
    <tr>
      <th class="table-dark">false</th>
      <td><?php var_dump(false == true); ?></td>
      <td><?php var_dump(false == false); ?></td>
      <td><?php var_dump(false == 1); ?></td>
      <td><?php var_dump(false == 0); ?></td>
      <td><?php var_dump(false == -1); ?></td>
      <td><?php var_dump(false == '1'); ?></td>
      <td><?php var_dump(false == null); ?></td>
      <td><?php var_dump(false == 'php'); ?></td>
    </tr>
    <tr>
      <th class="table-dark">1</th>
      <td><?php var_dump(1 == true); ?></td>
      <td><?php var_dump(1 == false); ?></td>
      <td><?php var_dump(1 == 1); ?></td>
      <td><?php var_dump(1 == 0); ?></td>
      <td><?php var_dump(1 == -1); ?></td>
      <td><?php var_dump(1 == '1'); ?></td>
      <td><?php var_dump(1 == null); ?></td>
      <td><?php var_dump(1 == 'php'); ?></td>
    </tr>
    <tr>
      <th class="table-dark">0</th>
      <td><?php var_dump(0 == true); ?></td>
      <td><?php var_dump(0 == false); ?></td>
      <td><?php var_dump(0 == 1); ?></td>
      <td><?php var_dump(0 == 0); ?></td>
      <td><?php var_dump(0 == -1); ?></td>
      <td><?php var_dump(0 == '1'); ?></td>
      <td><?php var_dump(0 == null); ?></td>
      <td><?php var_dump(0 == 'php'); ?></td>
    </tr>
    <tr>
      <th class="table-dark">-1</th>
      <td><?php var_dump(-1 == true); ?></td>
      <td><?php var_dump(-1 == false); ?></td>
      <td><?php var_dump(-1 == 1); ?></td>
      <td><?php var_dump(-1 == 0); ?></td>
      <td><?php var_dump(-1 == -1); ?></td>
      <td><?php var_dump(-1 == '1'); ?></td>
      <td><?php var_dump(-1 == null); ?></td>
      <td><?php var_dump(-1 == 'php'); ?></td>
    </tr>
    <tr>
      <th class="table-dark">"1"</th>
      <td><?php var_dump('1' == true); ?></td>
      <td><?php var_dump('1' == false); ?></td>
      <td><?php var_dump('1' == 1); ?></td>
      <td><?php var_dump('1' == 0); ?></td>
      <td><?php var_dump('1' == -1); ?></td>
      <td><?php var_dump('1' == '1'); ?></td>
      <td><?php var_dump('1' == null); ?></td>
      <td><?php var_dump('1' == 'php'); ?></td>
    </tr>
    <tr>
      <th class="table-dark">null</th>
      <td><?php var_dump(null == true); ?></td>
      <td><?php var_dump(null == false); ?></td>
      <td><?php var_dump(null == 1); ?></td>
      <td><?php var_dump(null == 0); ?></td>
      <td><?php var_dump(null == -1); ?></td>
      <td><?php var_dump(null == '1'); ?></td>
      <td><?php var_dump(null == null); ?></td>
      <td><?php var_dump(null == 'php'); ?></td>
    </tr>
    <tr>
      <th class="table-dark">"php"</th>
      <td><?php var_dump('php' == true); ?></td>
      <td><?php var_dump('php' == false); ?></td>
      <td><?php var_dump('php' == 1); ?></td>
      <td><?php var_dump('php' == 0); ?></td>
      <td><?php var_dump('php' == -1); ?></td>
      <td><?php var_dump('php' == '1'); ?></td>
      <td><?php var_dump('php' == null); ?></td>
      <td><?php var_dump('php' == 'php'); ?></td>
    </tr>
  </tbody>
</table>

<table class="table table-bordered mb-5 align-middle text-center">
    <caption>Задание 2.2 Жёсткое сравнение в PHP (===)</caption>
  <thead class="table-dark">
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
  </thead>
  <tbody>
    <tr>
      <th class="table-dark">true</th>
      <td><?php var_dump(true === true); ?></th>
      <td><?php var_dump(true === false); ?></td>
      <td><?php var_dump(true === 1); ?></td>
      <td><?php var_dump(true === 0); ?></td>
      <td><?php var_dump(true === -1); ?></td>
      <td><?php var_dump(true === '1'); ?></td>
      <td><?php var_dump(true === null); ?></td>
      <td><?php var_dump(true === 'php'); ?></td>
    </tr>
    <tr>
      <th class="table-dark">false</th>
      <td><?php var_dump(false === true); ?></td>
      <td><?php var_dump(false === false); ?></td>
      <td><?php var_dump(false === 1); ?></td>
      <td><?php var_dump(false === 0); ?></td>
      <td><?php var_dump(false === -1); ?></td>
      <td><?php var_dump(false === '1'); ?></td>
      <td><?php var_dump(false === null); ?></td>
      <td><?php var_dump(false === 'php'); ?></td>
    </tr>
    <tr>
      <th class="table-dark">1</th>
      <td><?php var_dump(1 === true); ?></td>
      <td><?php var_dump(1 === false); ?></td>
      <td><?php var_dump(1 === 1); ?></td>
      <td><?php var_dump(1 === 0); ?></td>
      <td><?php var_dump(1 === -1); ?></td>
      <td><?php var_dump(1 === '1'); ?></td>
      <td><?php var_dump(1 === null); ?></td>
      <td><?php var_dump(1 === 'php'); ?></td>
    </tr>
    <tr>
      <th class="table-dark">0</th>
      <td><?php var_dump(0 === true); ?></td>
      <td><?php var_dump(0 === false); ?></td>
      <td><?php var_dump(0 === 1); ?></td>
      <td><?php var_dump(0 === 0); ?></td>
      <td><?php var_dump(0 === -1); ?></td>
      <td><?php var_dump(0 === '1'); ?></td>
      <td><?php var_dump(0 === null); ?></td>
      <td><?php var_dump(0 === 'php'); ?></td>
    </tr>
    <tr>
      <th class="table-dark">-1</th>
      <td><?php var_dump(-1 === true); ?></td>
      <td><?php var_dump(-1 === false); ?></td>
      <td><?php var_dump(-1 === 1); ?></td>
      <td><?php var_dump(-1 === 0); ?></td>
      <td><?php var_dump(-1 === -1); ?></td>
      <td><?php var_dump(-1 === '1'); ?></td>
      <td><?php var_dump(-1 === null); ?></td>
      <td><?php var_dump(-1 === 'php'); ?></td>
    </tr>
    <tr>
      <th class="table-dark">"1"</th>
      <td><?php var_dump('1' === true); ?></td>
      <td><?php var_dump('1' === false); ?></td>
      <td><?php var_dump('1' === 1); ?></td>
      <td><?php var_dump('1' === 0); ?></td>
      <td><?php var_dump('1' === -1); ?></td>
      <td><?php var_dump('1' === '1'); ?></td>
      <td><?php var_dump('1' === null); ?></td>
      <td><?php var_dump('1' === 'php'); ?></td>
    </tr>
    <tr>
      <th class="table-dark">null</th>
      <td><?php var_dump(null === true); ?></td>
      <td><?php var_dump(null === false); ?></td>
      <td><?php var_dump(null === 1); ?></td>
      <td><?php var_dump(null === 0); ?></td>
      <td><?php var_dump(null === -1); ?></td>
      <td><?php var_dump(null === '1'); ?></td>
      <td><?php var_dump(null === null); ?></td>
      <td><?php var_dump(null === 'php'); ?></td>
    </tr>
    <tr>
      <th class="table-dark">"php"</th>
      <td><?php var_dump('php' === true); ?></td>
      <td><?php var_dump('php' === false); ?></td>
      <td><?php var_dump('php' === 1); ?></td>
      <td><?php var_dump('php' === 0); ?></td>
      <td><?php var_dump('php' === -1); ?></td>
      <td><?php var_dump('php' === '1'); ?></td>
      <td><?php var_dump('php' === null); ?></td>
      <td><?php var_dump('php' === 'php'); ?></td>
    </tr>
  </tbody>
</table>

<div><strong>Выводы о сравнении в PHP</strong></div>
<ol>
  <li>При нестрогом сравнении оператор осуществляет приведение между двумя различными типами, если они различаются. То есть он сравнивает значение после преобразования типов.</li>
  <li>При строгом сравнении оператор вернет true, только если оба операнда имеют одинаковый тип и одно и то же значение</li>
  <li>При нестрогом сравнении, например, строки с числом, строка приводится к числу (int) и это даёт 0</li>
  <li><strong>Во избежании неожиданных результатов при сравнении необходимо по возможности исполтзовать операторами с строгим сравнением.</strong></li>
</ol>

</body>
</html>