<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculator</title>
</head>

<body>
  <form>
    <input type="number" name="num1">
    <input type="number" name="num2">
    <select name="operator">
      <option>None</option>
      <option>Add</option>
      <option>Subtract</option>
      <option>Multiply</option>
      <option>Divide</option>
    </select>
    <button name="submit" type="submit" value="submit">Calculate</button>
  </form>

  <p>The answer is: </p>
  <?php
  if (isset($_GET['submit'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $operator = $_GET['operator'];

    switch ($operator) {
      case 'None':
        echo 'Please select an operation';
      case 'Add':
        echo $num1 + $num2;
        break;
      case 'Subtract':
        echo $num1 - $num2;
        break;
      case 'Multiply':
        echo $num1 * $num2;
        break;
      case 'Divide':
        echo $num1 / $num2;
        break;
    }
  }
  ?>
</body>

</html>