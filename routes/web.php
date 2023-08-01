<?php

use Illuminate\Support\Facades\Route;
use XBase\TableReader as TableReader;
use Illuminate\Support\Facades\DB;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $dataSource = dirname('V:\data1\\');
    $dataFROMdbf = array();
    $data = dbase_open($dataSource . 'data1\hdrpn.dbf', 2);
    $dataNum = dbase_numrecords($data);
    for ($i = 1; $i <= $dataNum; $i++) {
        # code...
        $record = dbase_get_record($data, $i);
        DB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle']);
        $newData = array('No' => $record[0], 'Tanggal' => $record[1]);
        array_push($dataFROMdbf, $newData);
    }
    return view('welcome', ['dataNum' => $dataFROMdbf]);
});
