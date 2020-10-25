<?php

namespace App\Utils;

use App\Exceptions\InvalidEnumException;

class Validation
{
    /**
     * Validate Enum fields
     *
     * @param mixed $field
     * @param BenSampo\Enum\Enum $enum
     * @return void
     */
    public static function validate_enum($field_value, $enum)
    {
        /* Flagged Enum */
        if (is_subclass_of($enum, 'BenSampo\\Enum\\FlaggedEnum')) {
            if ($field_value > (max($enum::getValues()) << 1) - 1 || !is_numeric($field_value)) {
                throw new InvalidEnumException();
            }

            return;
        }

        /* Regular Enum */
        if (!in_array($field_value, $enum::getValues())) {
            throw new InvalidEnumException();
        }
    }
}
