<?php

$pages = collect(scandir(resource_path() . '/views/page'));
$pages = $pages->transform(function ($item, $key) {
    return ['serial' => (int) str_replace('.blade.php', '', $item)];
})->filter(function ($value, $key) {
    return is_int($value['serial']) && $value['serial'] > 0;
})->sort()->toArray();

return $pages;
