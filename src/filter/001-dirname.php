<?php


function dirname($path, ...$args) {
    $result = call_user_func(PRVD_RENAME_PREFIX."dirname", $path, ...$args);
    if (PRVD_TAINT_ENABLE && prvd_xcheck($path)) {
        prvd_xmark($result);
    }

    return $result;
}
