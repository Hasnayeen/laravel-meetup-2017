<?php

Route::get('/page/{page}', function ($page) {
    $current = $page;
    $pages = config('pages');
    return view('page.' . $page, compact("pages", "current"));
});
