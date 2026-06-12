<?php

function potongTeks($teks, $batas = 50) {
    if (strlen($teks) > $batas) {
        return substr($teks, 0, $batas) . '...';
    }
    return $teks;
}

function formatRating($angka) {
    return "★ " . number_format((float)$angka, 1, '.', '');
}
?>