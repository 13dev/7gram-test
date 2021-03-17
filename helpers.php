<?php

if (!function_exists('unique_id')) {
    function unique_id(): string
    {
        return bin2hex(random_bytes(32));
    }
}