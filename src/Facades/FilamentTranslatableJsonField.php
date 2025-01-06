<?php

namespace AbdulmajeedJamaan\FilamentTranslatableJsonField\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AbdulmajeedJamaan\FilamentTranslatableJsonField\FilamentTranslatableJsonField
 */
class FilamentTranslatableJsonField extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \AbdulmajeedJamaan\FilamentTranslatableJsonField\FilamentTranslatableJsonField::class;
    }
}
