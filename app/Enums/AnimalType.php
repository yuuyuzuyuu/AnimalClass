<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class AnimalType extends Enum
{
    const Cat =   0;
    const Dog =   1;
    
    public static function getDescription($value): string
    {
        if ($value == self::Cat) {
            return '猫';
        }
        
        if ($value == self::Dog) {
            return '犬';
        }
        return parent::getDescription($value);
    }
    
    public static function getValue(string $key)
    {
        if ($key == '猫') {
            return self::Cat;
        }
        
        if ($key === '犬') {
            return self::Dog;
        }
        return parent::getValue($key);
    }
}
