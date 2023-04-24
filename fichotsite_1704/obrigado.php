<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Exemplo: Land Page com Bootstrap</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/style.css" />
</head>

<body data-spy="scroll" data-target="#nav-menu" data-offset="150">
    <header>
        <div id="banner">
            <h1>ICON</h1>
            <h2>Exemplo - Land Page com Bootstrap</h2>
        </div>
        <nav class="navbar navbar-inverse" id="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#nav-menu">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#banner">ICON</a>
                </div>
            </div>
        </nav>
    </header>
    <h3>Obrigado!</h3>
    <?php 
    $nome = ['name'];
    $idade = ['idade'];
    $cidade = ['city'];

    echo "Nome: " . $_POST['name'];
    echo "<br>";
    echo "Idade: " . $_POST['age'];
    echo "<br>";
    echo "Cidade: " . $_POST['city'];
    

    ?>
</body>
</html>