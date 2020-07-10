<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Calc</h1>
    <form method="POST" action="object.php">
        <input type="text" name="a"><br>
        <select name="op">
            <option value="div">/</option>
            <option value="mul">*</option>
            <option value="sum">+</option>
            <option value="dif">-</option>
        </select><br>
        <input type="text" name="b"><br>
        <input type="submit" value="OK">
    </form>
</body>

</html