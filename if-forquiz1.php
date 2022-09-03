<?php

    //variable
    echo"<hr>";
    $nama = "Egi,Eryan,Rizki";
    $kelas = "XI RPL 2";
    $quiz = 1;

    echo "nama : " . $nama;
    echo "<br>";
    echo "kelas :" . $kelas;
    echo "<br>";
    echo "quiz : " . $quiz;
    echo "<br>";
    
    // segitiga mengarah atas
    echo "<hr>";
	$star=10;
	for( $a=$star;$a>0;$a--){
	for($i=1; $i<=$a; $i++){
		echo "&nbsp";
	}
	for($a1=$star;$a1>=$a;$a1--){
		echo"*";
	}
	echo"<br>";
	}

    // segitiga mengarah ke aras sisi kanan
    echo "<hr>";
	$star=10;
	for($a=$star;$a>0;$a--){
	for($b=$star;$b>=$a;$b--){
		echo "*";
	}
	echo "<br>";
	}

    // segitiga mengarah ke atas sisi kiri
    echo "<hr>";
	$star=10;
	for($a=$star;$a>0;$a--){
	for($i=1; $i<=$a; $i++){
		echo " &nbsp";
	}
	for($a1=$star;$a1>=$a;$a1--){
		echo"*";
	}
	echo"<br>";
	}

    // segitiga mengarah ke bawah
    echo "<hr>";
	$star=10;
	for($a=1; $a<=$star; $a++){
	for($b=1; $b<=$a; $b++){
		echo "&nbsp";
	}
	for($c=$star; $c>=$a; $c-=1){
		echo "*";
	}
	echo "<br>";
	}

    // segitiga mengarah ke bawah sisi kiri
    echo "<hr>";
	$star=10;
	for($a=1; $a<=$star; $a++){
	for($i=1; $i<=$a; $i++){
		echo " &nbsp";
	}
	for($c=$star; $c>=$a; $c-=1){
		echo "*";
	}
	echo "<br>";
	}

    // segitiga mengarah ke sisi kanan
    echo "<hr>";
	$star=10;
	for($a=1; $a<=$star; $a++){
	for($c=$star; $c>=$a; $c-=1){
		echo "*";
	}
	echo "<br>";
	}

    // segitiga pola belah ketupat
    echo "<hr>";
	$star=10;
	for($a=1; $a<=$star; $a++){
	for($b=$star; $b>=$a; $b-=1){
		echo "&nbsp";
	}
	for($c=1; $c<=$a; $c++){
		echo "*";
	}
	echo "<br>";
	}
	for($a=1; $a<=$star; $a++){
	for($b=1; $b<=$a; $b++){
		echo "&nbsp";
	}
	for($c=$star; $c>=$a; $c-=1){
		echo "*";
	}
	echo "<br>";
	}

   
    echo "<hr>";
    for ($i=1; $i <=5 ; $i++) {
    for ($j=4; $j>=$i ; $j--) {
    echo "&nbsp;&nbsp;";
 }
 
    for ($k=$i; $k >=1 ; $k--) {
    echo "$k";
 }
    echo "<br>";
}


    echo "<hr>";


?>