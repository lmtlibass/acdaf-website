<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AproposController;

Route::get('/', function () {
    $partners = [
        (object) [
            'image_url' => 'https://placehold.co/200x200',
            'name' => 'Partner 1',
        ],
        (object) [
            'image_url' => 'https://placehold.co/200x200',
            'name' => 'Partner 2',
        ],
        (object) [
            'image_url' => 'https://placehold.co/200x200',
            'name' => 'Partner 3',
        ],
        // Ajoutez autant de partenaires que nécessaire
    ];
    return view('home', [
        'partners' => $partners

    ]);
})->name('home');

Route::controller(AproposController::class)->group(function () {
    Route::get('quisommenous', 'quisommeNous')->name('quisommenous');
    Route::get('mission', 'mission')->name('mission');
    Route::get('vision', 'vision')->name('vision');
});



