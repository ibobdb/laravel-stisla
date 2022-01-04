<?php



Route::get('/', function () {
    return 'welcome';
});
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.dashboard');
    });
});
