<?php
/**
 * Created by PhpStorm.
 * User: jbenastey
 * Date: 02-Apr-19
 * Time: 22:27
 */

defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('level')){
    function level($lvl){
        $level = array(
            'umum' => 'Bagian Umum',
            'kepala' => 'Kepala Bapas',
            'kasubsibka' => 'Kasubsi BKA',
            'kasubsibkd' => 'Kasubsi BKD',
            'pk' => 'Pembimbing Kemasyarakatan',
        );
        return $level[$lvl];
    }
}