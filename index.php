<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8"/>
            <script type="text/javascript" src="js/main.js"></script>
        </head>
        <body>
            <button id=search onclick="searchBoletim()">Buscar Boletim </button>
            <button id=search onclick="setgg()">Alterar gg </button>
            <form action="" method="POST">
                <input id="gg" type="text" name="phrase">
                <input type="submit" value="Buscar boletim">
            </form> 
            <?php
                if(isset($_POST["phrase"]) && $_POST["phrase"]!=""){
                    echo "<div id=phrase>";
                    echo $_POST["phrase"];
                    echo "</div>";
                ?>
                
                <?php
                }else

                for($i=0;$i<=10;$i++){
                    echo "<div id=b$i>";
                    echo "Boletin";
                    echo "</div>";
                    echo "<br>";
                }
            ?>
        </body>
    </html>