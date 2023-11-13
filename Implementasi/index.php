<?php
$total_belanja = 150000;

if($total_belanja > 100000){ 
    echo "Anda dapat hadiah!"; 
}   echo "<br \>";
?>

<?php
$umur = 13;

if ($umur < 18 ){
    echo "Kamu tidak boleh membuka situs ini!";
} else {
    echo "Selamat datang di website kami!";
}   echo "<br \>";
?>

<?php
$umur = 19;

if ($umur < 18 ){
    echo "Kamu tidak boleh membuka situs ini!";
} else {
    echo "Selamat datang di website kami!";
}   echo "<br \>";
?>

<?php
$nilai = 88;

if ($nilai > 90) { 
    $grade = "A";
} elseif($nilai > 80){ 
    $grade = "B";
} elseif($nilai > 60){ 
    $grade = "C";
} elseif($nilai > 40){ 
    $grade = "D";
} elseif($nilai > 30){ 
    $grade = "E";
} else { 
    $grade = "F";
}
echo "Nilai Anda: $nilai<br>";
echo "Grade: $grade";
echo "<br \>";
?>

<?php
$level = 3;
switch($level){
case 1:
    echo "Pelajari HTML"; 
    break;
case 2:
    echo "Pelajari CSS"; 
    break; 
case 3:
    echo "Pelajari PHP"; 
    break;
default:
    echo "Kamu bukan programmer!";
}   echo "<br \>";
?>

<?php
$age = 25;  // Menentukan Nilai Umur

if ($age < 18) {
    echo "Maaf, Anda belum cukup umur untuk mengakses situs ini.";  // jika umur kurang dari 18 maka tidak diperbolehkan 
} elseif ($age >= 18 && $age < 21) {
    echo "Anda sudah cukup umur, tetapi masih di bawah usia untuk minum alkohol.";  // jika umur antara 18 sampai 21 sudah cukup tetapi masih tidak diperbolehkan
} else {
    echo "Selamat datang! Anda dapat mengakses situs ini dan menikmati semuanya.";  // jika anda mencukupi umur, anda boleh menikmatinya
}   echo "<br \>";

$vehicle = "Car";   // kendaraan

switch ($vehicle) {
    case "Car":
        echo "You are driving a car.";  // anda sedang mengendarai mobil 
        break;
    case "Bicycle":
        echo "You are cycling.";    // anda sedang bersepeda
        break;
    case "Motorcycle":
        echo "You are riding a motorcycle.";    // anda sedang mengendarai sepeda motor
        break;
    default:
        echo "Not sure what mode of transportation you're using.";  // tidak yakin dengan mode transportasi yang anda gunakan
}   echo "<br \>";
?>