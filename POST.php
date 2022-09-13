<form action="post.php" method="POST">
    <input type="text" name="namalengkap" placeholder="Ex. Satrio" /><br>
    <input type="text" name="Kelas" placeholder="Ex. 11 RPL 2" /><br>
    <input type="text" name="NIS" placeholder="Ex. 1231425" />

    <input type="submit" name="simpan" value="Simpan Data" />
</form>

<?php
    if( isset($_POST["simpan"]) ) {
        echo "<hr>";
        $nama = $_POST["namalengkap"];
        $kelas = $_POST["Kelas"];
        $NIS = $_POST["NIS"];

        echo "Nama Lengkap : $nama <br>";
        echo "Kelasnya : $Kelas <br>";
        echo "NIS : $NIS <br>";
    }
    
?>