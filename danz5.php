<html> 
    <head>
        <title> PHP / Fatih And Daniel</title>
    </head>
<body>
    <h1> Tugas Jadwal Kegiatan Andi / Fatih and Daniel </h1>
    <div>
      <table border="3" width = "60%" align="center">
        <tr>
            <th colspan="2">Kegiatan Andi Setelah Pulang Sekolah</th>
        </tr>
        <tr>
            <th>Jam</th>
            <th>Kegiatan</th>
        </tr>
        <tr>
            <th>22:00 - 05:30</th>
            <th>Andi di bawa Ke alam barzah</th>
        </tr>
        <tr>
            <th>05:30 - 05:50</th>
            <th>
                Andi Bangun tidur & <br/>u8ki
                sholat shubuh
            </th>
        </tr>
        <tr>
            <th>05:50 - 07:00</th>
            <th>Andi Persiapan Sekolah Dan Berangkat</th>
        </tr>
        <tr>
            <th>06:30 - 15:30</th>
            <th>Andi Sedang Sekolah</th>
        </tr>
        <tr>
            <th>15:30 - 15:50</th>
            <th>Andi Pulang Sekolah Dan Membeli Bumbu</th>
        </tr>
        <tr>
            <th>15:50 - 16:10</th>
            <th>Andi Mandi Untuk Mengaji</th>
        </tr>
        <tr>
            <th>16:10 - 16:40</th>
            <th>Andi Mengaji</th>
        </tr>
        <tr>
            <th>16:40 - 17:10</th>
            <th>Andi Menghafalkan Dialog </th>
        </tr>
        <tr>
            <th>17:10- 17:40</th>
            <th>Andi Chattingan Dengan Raya</th>
        </tr>
        <tr>
            <th>17:40 - 18:05</th>
            <th>Waktu Untuk Andi ngopi atau istirahat</th>
        </tr>
        <tr>
            <th>18:05 - 18:20</th>  
            <th>Andi Sholat Maghrib</th>
        </tr>
        <tr>
            <th>18:20 - 19:00</th>
            <th>Andi Makan malam bersama orang tua nya</th>
        </tr>
        <tr>
            <th>19:01 - 19:30</th>
            <th>Andi Sholat Isya Dan Yasinan</th>
        </tr>
        <tr>
            <th>19:30 - 21:30</th>
            <th>Andi Mengerjakan Tugasnya Sendiri</th>
        </tr>
        <tr>
            <th>21:30 - 22:00</th>
            <th>Andi Ngobrol sama orang tua nya</th>
        </tr>
        <tr>
            <th>22:00 - 05:30</th>
            <th>Andi di bawa ke alam barzah</th>
        </tr>
      </table>
    </div>

    <?php 
    $andi =date("19:20:00");

    echo "<br> Jam : $andi";
    echo "<br>";

    $pr =true;
    $sekolah = true;
    $mengaji = true;

    if ($andi >= "00:00:00" && $andi <= "05:30:00") {
        echo "Andi Sedang tidur. Masih jam $andi";
    }   else {

    if ($andi > "05:30:00" && $andi <= "06:30:00") {
                echo "Andi persiapan ke sekolah";
    }      else {

    if ($andi > "06:30:00" && $andi < "07:00:00") {
    echo "Andi berangkat ke sekolah";
     }   else {

   if ($andi >= "07:00:00" && $andi < "15:30:00") {
   if ($sekolah) {
   echo "Andi pada jam $andi lagi sekolah";
   } else {
   echo "Andi ada acara di sekolah mungkin ia bisa balik cepat";
   }
   }   else {

   if ($andi >= "15:30:00" && $andi < "15:45:00") {
   echo "Andi lagi pulang sekolah";
   }   else {

   if ($andi == "15:45:00") {
   echo "Andi di rumah dari sekolah";
   }   else {

   if ($andi > "15:45:00" && $andi <= "15:50:00") {
   if ($beli) {
   echo "Andi lagi beli bumbu buat ibunya";
    } else {
    echo "Andi tidak beli bumbu, Andi dapat langsung mandi";
    }
    }   else {

    if ($andi > "15:50:00" && $andi < "16:10:00") {
    echo "Andi lagi mandi.";
    }   else {

    if ($andi >= "16:10:00" && $andi <= "16:40:00") {
    echo "Andi  mengaji. Karena Dia Seorang Muslim";
    }   else {

    if ($andi > "16:40:00" && $andi <= "17:10:00") {
    echo "Andi lagi menghafalkan dialog untuk tampil di festival pentas seni";
    }   else {

    if ($andi > "17:10:00" && $andi <= "17:40:00") {
    echo "Andi sedang chattingan dengan temannya Raya";
    }   else {

    if ($andi > "17:40:00" && $andi < "18:05:00") {
    echo "Andi Sedang Beristirahat atau Lagi nyantai";
    }   else {

    if ($andi >= "18:05:00" && $andi <= "18:20:00") {
    echo "Andi sedang sholat maghrib";
    }   else {

    if ($andi > "18:20:00" && $andi <= "19;00;00") {
    echo "Andi sedang makan malam bersama keluarganya";
    }   else {
    echo "Andi Tidak Makan Malam";

    if ($andi >= "19:00:00" && $andi <= "19:30:00") {
    echo "Andi lagi sholat isya dan yasinan";
    } else {
    echo "Andi Tidak Melaksanakan Kewajibannya";   

    }   if ($andi > "19:30:00" && $andi <= "21:30:00") {
    if ($pr) {
    echo "Andi sedang mengerjakan pr";
    } else {
    echo "Andi mempunyai waktu bebas karena tidak ada pr";
    }
    }  else {

    if ($andi > "21:30:00" && $andi <= "22:00:00") {
    echo "Andi lagi ngobrol sama orang tua";
    }   else {

    if ($andi > "22:00:00" && $andi <= "24:00:00") {
    echo "Andi lagi tidur. Masih jam $andi";
    }   else {
    echo "pinteran dikit lah!!";
    }      
    }
    }  
    } 
    }  
    }  
    }
    }   
    }
    }
    }
    }
    }
    }
    }
    }
    }
    ?>
</body>
</html>

