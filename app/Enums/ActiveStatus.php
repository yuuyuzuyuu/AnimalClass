<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class ActiveStatus extends Enum
{
    const Start  =   0;
    const End =   1;
    
    public static function getDescription($value): string
    {
        if ($value === self::Start) {
            return '募集中';
        }
        
        if ($value === self::End) {
            return '募集終了';
        }
        return parent::getDescription($value);
    }
    
    public static function getValue(string $key)
    {
        if ($key === '募集中') {
            return self::Start;
        }
        
        if ($key === '募集終了') {
            return self::End;
        }
        return parent::getValue($key);
    }
}
