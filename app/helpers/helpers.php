<?php

/**
 * @param string $routeName
 * @return string
 */
function is_active(string $routeName)
{
    return null !== request()->segment(2) && request()->segment(2) == $routeName ? 'active' : '';
}

