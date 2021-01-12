<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
        $titulo = "Design Responsivo"; 
        global $tituloPagina;
        if($tituloPagina != ''){
            $titulo .= ' | ' . $tituloPagina;
        }
    ?>
    <title><?php echo $titulo ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <header class="cabecalho">
        <div class="container">
            
            <?php if($tituloPagina == ''):?>
                <h1 class="logo">Design Responsivo</h1>
            <?php else: ?>
                <a href="index.php" class="logo">Design Responsivo</a>
            <?php endif; ?>
            <nav class="menu-principal menu-principal--fechado">
                <button class="menu-principal__btn">Abrir/Fechar menu</button>
                <ul class="menu-principal__lista">
                    <li><a class="menu-principal__item <?php echo $tituloPagina == '' ? 'menu-principal__item--atual' : ''?>" href="index.php">Home</a></li>
                    <li><a class="menu-principal__item <?php echo $tituloPagina == 'Sobre nós' ? 'menu-principal__item--atual' : ''?>" href="sobre.php">Sobre nós</a></li>
                    <li><a class="menu-principal__item <?php echo $tituloPagina == 'Portfolio' ? 'menu-principal__item--atual' : ''?>" href="portfolio.php">Portfolio</a></li>
                    <li><a class="menu-principal__item <?php echo $tituloPagina == 'Contato' ? 'menu-principal__item--atual' : ''?>" href="contato.php">Contato</a></li>
                </ul>
            </nav>
        </div> <!--Fim do container-->
    </header>
    <main> 