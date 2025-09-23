<?php

declare(strict_types=1);

arch()->preset()->php();
arch()->preset()->strict();
arch()->preset()->security();

arch('base')
    ->expect('VendorName\Skeleton')
    ->toUseStrictEquality()
    ->toUseStrictTypes();

it('will not use debugging functions')
    ->expect(['dd', 'dump', 'ray', 'var_dump', 'print_r'])
    ->not->toBeUsed();
