<form action="input-siswa.php" method="POST">
    <label for="nis">Nomor Induk SIswa :</label>
    <input type="number" name="nis" placeholder="Ex. 12003102"/><br>

    <label for="nis">Nama Lengkap :</label>
    <input type="text" name="nama" placeholder="Ex. Agung Aryanto"/><br>

    <label for="tanggal_lahir">Tanggal Lahir :</label>
    <input type="date" name="tanggal_lahir"/><br>

    <input type="submit" name="simpan" value="simpan data" />

</form>

<?php
    echo "<hr>";
    include('./input-config.php');

    $no = 1;
    $tabledata = "";
    $data = mysqli_query($mysqli," SELECT * FROM datadiri ");
    while($row = mysqli_fetch_array($data)){
        $tabledata .="
            <tr>
                <td>".$no."</td>
                <td>".$row["nis"]."</td>
                <td>".$row["namalengkap"]."</td>
                <td>".$row["tanggal_lahir"]."</td>
                <td>".$row["nilai"]."</td>
            <tr>
        ";
        $no++;
    }

    echo "
        <table cellpadding=5 border=1 cellspacing=0>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama Lengkap</th>
                <th>Tanggal Lahir</th>
                <th>Nilai</th>
            </tr>
            $tabledata
        </table>
    
    "
?>