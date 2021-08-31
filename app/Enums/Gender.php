<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class Gender extends Enum
{
    const Boy =   0;
    const Girl =   1;
    
    public static function getDescription($value): string
    {
        if ($value === self::Boy) {
            return '男の子';
        }
        
        if ($value === self::Girl) {
            return '女の子';
        }
        return parent::getDescription($value);
    }
    
    public static function getValue(string $key)
    {
        if ($key === '男の子') {
            return self::Boy;
        }
        
        if ($key === '女の子') {
            return self::Girl;
        }
        return parent::getValue($key);
    }
}
