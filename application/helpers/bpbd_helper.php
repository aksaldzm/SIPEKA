<?php
defined('BASEPATH') or exit('No direct script access allowed');

function is_active($title, $sidebar)
{
    if ($title == $sidebar) {
        return "active";
    }
}
