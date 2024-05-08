<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/beranda', function (){
//    return redirect()->route('welcome');
    return redirect()->route('admin.detail');
});

// parent
Route::name('admin.')->group(function (){
   // child
   Route::get('admin/detail', function (){
        echo "admin detail";
   })->name('detail');
});

// http://jda-alkademi.test/detail?id=1
Route::any("/detail", function () {
    return [
        "id" => request('id')
    ];
});

// http://jda-alkademi.test/user/1
Route::get('user/{id}', function($id) {
    return $id;
});

// http://jda-alkademi.test/user/1/hehehe
Route::get('user/{id}/{name}', function($id, $name) {
    return "{$id}_{$name}";
});

// http://jda-alkademi.test/barang/1
Route::get('/barang/{index}', function ($index){
    $data = [
        "ahihih",
        "bhihihihi",
        "chhihihi"
    ];

    return $data[$index];
});

//http://jda-alkademi.test/hash/eyJpdiI6IklteDhOWFJlNjhxYzNEZUtNUmE2bmc9PSIsInZhbHVlIjoiOU8xRDJqZUVpTUp3NWNJRU02b0ljQT09IiwibWFjIjoiMTFmOTAwZjNjYjRkOWVhODNmNTE3ZGQ1YjkxN2VmODY5NWJjMGFkMDg3ZmY1ZmM4MThlODU3ZGE3Yzk1NjYwMCIsInRhZyI6IiJ9
Route::get('/hash/{hash}', function ($hash){
//    echo encrypt($hash);
    $id = decrypt($hash);
    echo $hash;
    echo "<br/>";
    echo $id;
});


// view
Route::get('view/user', function (){
//    return view('user.detail');

    $user = [
        "name" => "jojo",
        "age" => 13
    ];

    // kirim data ke view
    return view('user.detail', [
        'user' => $user
    ]);

});
