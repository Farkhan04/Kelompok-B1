<?php
$hari = "Sabtu";

switch ($hari) {
    case "Senin":
    case "Selasa":
    case "Rabu":
    case "Kamis":
    case "Jumat":
        echo "Hari kerja.";
        break;
    case "Sabtu":
    case "Minggu":
        echo "Hari libur.";
        break;
    default:
        echo "Hari tidak valid.";
        break;
}
