<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('format_indo')) {
    function format_indo($date)
    {
         if ($date == null || $date == '0000-00-00') {
            return '-';
        }

        $BulanIndo = array("Jan", "Feb", "Mar", "Apr", "Mei", "Juni", "Juli", "Agust", "Sept", "Okt", "Nov", "Des");

        $tahun = substr($date, 0, 4);
        $bulan = substr($date, 5, 2);
        $tgl   = substr($date, 8, 2);

        $bulan_index = (int)$bulan - 1;

        return $tgl . ' ' . $BulanIndo[$bulan_index] . ' ' . $tahun;
    }
}