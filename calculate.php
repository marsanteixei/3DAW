<!DOCTYPE html>
<html>
<head> 
    <meta charset="UTF-8">
    <title>Interface Calculadora</title>
<style>
body {
background-color: blue;
}
h1 {
color: red;
}
</style>
</head>
<body>
    <h1>Calculator: </h1>
    <h3>Enter values: </h3>
 <form method ="post" action="calc.php">
   Value 1: <input type="text" name="x"><br>
   <br>
  Value 2: <input type="text" name="y"><br>
  <br>
  <h3>Select the Operation: </h3>
  <select name="operation">
     <option>add+</option>
     <option>sub-</option>
     <option>mult*</option>
     <option>div/</option>
  </select>
  <input type="submit" value="Calculate">
 </form>
</body>
</html>
