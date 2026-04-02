<?php

function get_title($page_title) {
    $base_title = "Design Studio";
    if (empty($page_title)) {
        return $base_title;
    }
    return $page_title;
}


function redirect_to($url) {
    header("Location: " . $url);
    exit;
}
