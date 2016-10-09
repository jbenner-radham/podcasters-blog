<?php

if (!function_exists('str_remove_first')) {

    /**
     * Remove the first occurrence of a given value in the string.
     *
     * @param  string  $search
     * @param  string  $subject
     * @return string
     */
    function str_remove_first($search, $subject) {
        $count   = 1;
        $replace = '';

        return str_replace($search, $replace, $subject, $count);
    }
}
