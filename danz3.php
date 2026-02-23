<?php
$nilai = -3;

if($nilai <= 100 && $nilai >= 90)
{
    echo"A";
}
else if ($nilai <=89 && $nilai >=80) {
    echo "B";
}

else if($nilai <= 79 && $nilai >= 70)
{
    echo"C";
}
else if ($nilai <=69 && $nilai >=0) {
    echo " D";
}
else {
    echo "nilai wajib diatas 0";
}

?> 


<?php
$waktu=date("04.00");
if($waktu >=date(format: 00.00) && $waktu <=date(format: 04.00))
{
    echo $waktu,"Dini hari";

}
else if($waktu >=date(format: 04.00 ) && $waktu <=date(format:10.00))
{
    echo $waktu,"Pagi hari";
}
else if($waktu >=date(format: 10.00 ) && $waktu <=date(format:15.00))
{
    echo $waktu,"Siang hari";
}
else if($waktu >=date(format: 15.00 ) && $waktu <=date(format:18.00))
{
    echo $waktu,"Sore hari";
}
else if($waktu >=date(format: 18.00 ) && $waktu <=date(format:00.00))
{
    echo $waktu,"Pagi hari";
}
else
{
    echo "Anda di isekai";
}
?>

<!--
if else ($x===$y)
!=
!===
and &&
or||
<kurang dari
>lebih dari
-->
