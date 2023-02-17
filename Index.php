<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>11.7. Практика</title>
</head>
<body>

<h1 class="text-uppercase text-center text-danger mb-4">11.7. Практика</h1>
    <?php 
    $a0 = 0;
    $b0 = 0;
    $a1 = 1;
    $b1 = 1;
      
    var_dump(!$a0); 
    var_dump($a0 || $b0);
    var_dump($a0 && $b0);
    var_dump($a0 xor $b0);
    ?>
    
<table class="table table-bordered mb-5">
    <caption>Задание 1. Таблица истинности PHP</caption>
  <thead class="table-dark">
    <tr>
      <th scope="col">A</th>
      <th scope="col">B</th>
      <th scope="col">!A</th>
      <th scope="col">A || B</th>
      <th scope="col">A && B</th>
      <th scope="col">A xor B</th>
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

<table class="table table-bordered">
    <caption>Задание 1. Таблица истинности PHP</caption>
  <thead class="table-dark">
    <tr>
      <th scope="col">A</th>
      <th scope="col">B</th>
      <th scope="col">!A</th>
      <th scope="col">A || B</th>
      <th scope="col">A && B</th>
      <th scope="col">A xor B</th>
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

</body>
</html>