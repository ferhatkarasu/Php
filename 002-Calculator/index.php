
<!DOCTYPE HTML>  
<html>
<head>


<link rel="stylesheet" href="style.css  ">

</head>
<body> 

<div class="calculator">
<h1 class="title">PHP CALCULATOR</h1>
    <form action="calculate.php" method="post">

    <label>Number 1</label>
    <input type="number" name="number1" class="num">

    <label>Number 2</label>
    <input type="number" name="number2" class="num">


    <label>Select Process</label>
    <select name="select" class="num">
        <option value="add"> + </option>
        <option value="subtract"> - </option>
        <option value="multiply">*</option>
        <option value="divide">/</option>
    </select>
    <button type="submit" name="control" class="button">Calculate</button>
    </form>
</div>
</body>
</html>
