<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator - Mini Project</title>
</head>
<body>
    <form action="" method="get">
        <input type="number" name="num1" id="" placeholder="Number 1">
        <input type="number" name="num2" id="" placeholder="Number 2">
        <select name="operator" id="">
             <option value="add">+</option>
             <option value="minus">-</option>
             <option value="times">*</option>
             <option value="divide">/</option>
             <option value="mod">%</option>
             <option value="expo">**</option>
        </select>
        <br><br>
        <button type="submit" name="submit" value="submit">Calculate</button>
    </form>
    
    <?php
      if(isset($_GET['submit'])){
          $num1 = $_GET['num1'];
          $num2 = $_GET['num2'];
          $operator = $_GET['operator'];
          $result;
          switch ($operator){
              case 'add':
                $result = $num1 + $num2;
                break;
              case 'minus':
                $result = $num1 - $num2;
                break;
              case 'times':
                $result = $num1 * $num2;
                break;
              case 'divide':
                $result = $num1 / $num2;
                break;
              case 'mod':
                $result = $num1 % $num2;    
                break;
              case 'expo':
                 $result = $num1 ** $num2;
                 break;          
          }
          
      }
      
      
    ?>
    <h5> The result is ; <?php  if(isset($result)){echo $result;} ?> </h5>




</body>
</html>