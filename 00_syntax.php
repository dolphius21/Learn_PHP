<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <form method="GET">
    <input type="text" name="person">
    <button>SUBMIT</button>
  </form>
  <?php
  $name = $_GET['person'];
  echo "Hello $name";
  echo " and PHP"
  ?>

  <?php
  echo '<br>';
  echo '<button>Click me</button>';
  echo "Hello World from another tag";
  ?>
</body>

</html>