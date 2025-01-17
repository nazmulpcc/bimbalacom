<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\ContactController;

// Authentication routes
Auth::routes();


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Bimbala included
Route::get('/team', static function () {
    return view('theme::team', ['seo' => ['seo_title' => 'Our Team', 'seo_description' => 'Check out our awesome team which consists of 2 crazy jacks-of-all-trades men. You can easily connect with them.',
            ]]);
})->name('team');
Route::get('/about-us', static function () {
    return view('theme::about_us', ['seo' => ['seo_title' => 'About Us', 'seo_description' => 'Read our amazing company history. It all became as a joke and now we grow strong.',
    ]]);
})->name('about-us');
Route::get('/try-it', static function () {
    return view('theme::try_it', ['seo' => ['seo_title' => 'Try it', 'seo_description' => 'Try our product and be part of our beta testers group. We promise - you will love it!',
    ]]);
})->name('try-it');
Route::get('/integrations', static function () {
    return view('theme::integrations', ['seo' => ['seo_title' => 'Integrations', 'seo_description' => 'Everyone loves to work as a team. Here are part of our officially supported friends.',
    ]]);
})->name('integrations');
Route::get('/use-case', static function () {
    return view('theme::use_case', ['seo' => ['seo_title' => 'Use Cases', 'seo_description' => 'Here we provide examples of the best ways to use our system. If you have more ideas please share them with us.',
    ]]);
})->name('use-case');
Route::redirect('/discord','https://discord.gg/tADx7aJusB');

Route::get('/contact', [ContactController::class, 'serveThePage'])->name('contact');
Route::post('/contact', [ContactController::class, 'sendEmail'])->name('contact-send');

// Include Wave Routes
Wave::routes();
