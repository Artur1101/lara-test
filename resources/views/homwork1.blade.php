<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Первая страница домашней работы</h1>
    <p><h3>Интересная деталь когла в файле views\homwork1 ставлю {{}} они видны на странице <h3></p>
    <p><h3>И когда в ollHomwork пишу код $var = "Первая страница домашней работы";
        return view('homwork1'); $var подчеркивает как ощибку но все паказывает, а так $var = "Первая страница домашней работы";
        return view('homwork1', ['var' => $var]); всё норм</h3></p>
</body>
</html>
