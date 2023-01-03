<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/style.css" type="text/css"/>
<head>
<title>Kill Smoke</title>
<meta charset="utf-8" />
</head>
<body>
<h3>Форма ввода данных</h3>
<form action="func.php" method="POST">
    <p>Ты курил?</p>
    <div class="radio-container">
        <input class="radio-input" id="answer" type="radio" name="answer" />
        <label class="radio" for="answer">+</label> 
        <input class="radio-input" id="answer" type="radio" name="answer" />
        <label class="radio" for="answer">-</label>
    </div>
    <input type="submit" value="Отправить">
</form>
</body>
</html>