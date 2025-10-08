<?php

declare(strict_types=1);

namespace Fkrzski\TestPacakge\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Fkrzski\TestPacakge\TestPacakgeClass
 */
final class TestPacakge extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Fkrzski\TestPacakge\TestPacakgeClass::class;
    }
}
