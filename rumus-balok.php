<form action="rumus-balok.php" method="POST">
    <h1>Rumus Luas dan volume Balok</h1>
    <p>rusuk :</p>
    <input type="number" name="rusuk" placeholder="Ex.5" />
    <input type="submit" name="proses" value="Hitung Luas & volume" />
</form>

<?php
    if(isset ($_POST["proses"])){
        echo "<hr>";
        $rusuk = $_POST["rusuk"];
        $luas = 6 * $rusuk * $rusuk;
        $volume = $rusuk * $rusuk * $rusuk; 
       
        echo "Rusuk : $rusuk <br>";
        echo "Luas balok : $luas <br>";
        echo "Volume : $volume <br>";
       
    }

?>