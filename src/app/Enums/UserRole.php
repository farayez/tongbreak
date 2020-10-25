<?php

namespace App\Enums;

use BenSampo\Enum\FlaggedEnum;

final class UserRole extends FlaggedEnum
{
    const super_admin = 1 << 0;
    const developer = 1 << 1;
    const admin = 1 << 2;
    const staff = 1 << 3;
    const vendor = 1 << 4;
    const customer = 1 << 5;
}
