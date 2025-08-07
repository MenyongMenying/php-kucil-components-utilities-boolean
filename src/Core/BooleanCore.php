<?php

namespace Kucil\Components\Utilities\Core;

use Kucil\Components\Utilities\Contracts\BooleanCoreInterface;
use Kucil\Components\Utilities\Enums\BooleanLanguageOption;

use function is_bool;

/**
 * @author  MenyongMenying <menyongmenying.main@email.com>
 * 
 * @version 0.0.1
 * 
 * 
 */
class BooleanCore implements BooleanCoreInterface
{
    /**
     * @see BooleanUtilsTest::testIsBoolean()
     * 
     * 
     */
    public static function isBoolean(mixed $boolean): null|bool
    {
        return is_bool($boolean);
    }

    /**
     * @see BooleanUtilsTest::testToInteger()
     * 
     * 
     */
    public static function toInteger(bool $boolean): null|int
    {
        if ($boolean) {
            return 1;
        }
        return 0;
    }

    /**
     * @see BooleanUtilsTest::testToString()
     * 
     * 
     */
    public static function toString(bool $boolean, BooleanLanguageOption $lang = BooleanLanguageOption::EN): null|string
    {
        $id = BooleanLanguageOption::ID;
        $en = BooleanLanguageOption::EN;
        if ($lang === $id && $boolean) {
            return 'benar';
        }
        if ($lang === $id && !$boolean) {
            return 'salah';
        }
        if ($lang === $en && $boolean) {
            return 'true';
        }
        if ($lang === $en && !$boolean) {
            return 'false';
        }
        return null;
    }
}