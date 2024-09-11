<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formularz</title>
</head>
<body>
    <form action="" method="post">
        imie <input name="imie"><br>
        nazwisko <input name="nazwisko"><br> 
        e-mail <input name="email"><br>
        <input type="submit" value="oblicz">

    <?php
    if(isset($_POST["imie"]))
    {
    echo"<ul>";
    echo"<li>",$_POST['imie'],"</li>";
    echo"<li>",$_POST['nazwisko'],"</li>";
    echo"<li>",$_POST['email'],"</li>";
    echo"</ul>";
    };
    ?>
</body>
</html>