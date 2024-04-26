<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Концепт MVC</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Концепт MVC</h1>
    <div>
        <form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
            <label for="title">Заголовок:<br>
                <input type="text" id="title" name="title" value="<?=$article['title']?>" class="form-item" required>
            </label><br>
            <label for="date">Дата:<br>
                <input type="date" id="date" name="date" value="<?=$article['date']?>" class="form-item" required> 
            </label><br>
            <label for="content">Текст:<br> 
                <textarea id="content" class="form-item" name="content" required><?=$article['content']?></textarea>
            </label><br>
            <label>
                <input type="submit" value="Сохранить" class="btn">
            </label>
        </form>
    </div>
    <footer>
        <p>Концепт MVC<br>Copyright &copy; 2018</p>
    </footer>
</div>
</body>
</html>