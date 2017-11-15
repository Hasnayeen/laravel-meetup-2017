<?php

Route::get('/page/{page}', function ($page) {
    return view('page.' . $page);
});
