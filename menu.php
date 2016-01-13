<html>
    <head>
        <title></title>
        <meta charset="utf-8"></head>

    <?php
    session_start();
    echo "Seja bem-vindo, " . $_SESSION["usuario"] . ".";
    ?>
    <body>
        <style type="text/css"> 
            a.nounderline:link 
            { 
                text-decoration:none; 
            } 

        </style>
        <?php
        echo "<br><br><a href='nivel.php?jogo=1' class='nounderline'>Mentalizando</a><br>";
        echo "<a href='nivel.php?jogo=2' class='nounderline'>Quantos</a><br>";
        echo "<a href='nivel.php?jogo=3' class='nounderline'>Caça-Palavras</a><br>";
        echo "<a href='nivel.php?jogo=4' class='nounderline'>Jogo da memória</a><br><br>";
        ?>
        <a href="logout.php" class="nounderline">Sair</a>
    </body>
</html>