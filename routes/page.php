<?php

Route::get('/page/{page}', function ($page) {
    $current = $page;
    $pages = App\Models\Page::paginate(15);
    return view('page.' . $page, compact("pages", "current"));
});
