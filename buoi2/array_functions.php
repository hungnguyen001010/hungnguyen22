<?php
function timGiaTriLonNhat($array) {
    return max($array);
}

function timGiaTriNhoNhat($array) {
    return min($array);
}

function tinhTongMang($array) {
    return array_sum($array);
}

function kiemTraPhanTuCoThuocMang($array, $value) {
    return in_array($value, $array);
}

function sapXepMangTangDan($array) {
    sort($array);
    return $array;
}
?>
