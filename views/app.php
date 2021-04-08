<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/app.css">
    <title><?= $title ?? '' ?></title>
</head>
<body>
    <div class="container">
        <header>
            <nav>
                <a href="/" class="logo">Logo</a>
                <ul class="links_header">
                    <li><a href="/Product">Productos</a></li>
                    <li><a href="/about">About</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <?= $content ?? '' ?>
        </main>
    </div>
</body>
</html>