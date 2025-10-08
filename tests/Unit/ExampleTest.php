<?php

declare(strict_types=1);

use Fkrzski\TestPacakge\TestPacakgeClass;

mutates(TestPacakgeClass::class);

it('foo', function (): void {
    $example = new TestPacakgeClass;

    expect($example)->toBeObject();
});
