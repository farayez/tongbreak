<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class AccountStatus extends Enum
{
    const pending = 'pending';
    const active = 'active';
    const suspended = 'suspended';
    const banned = 'banned';
    const inactive = 'inactive';
}
