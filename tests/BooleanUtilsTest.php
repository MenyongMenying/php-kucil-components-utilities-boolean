<?php

use Kucil\Components\Utilities\BooleanUtils;
use Kucil\Components\Utilities\Enums\BooleanLanguageOption;
use PHPUnit\Framework\TestCase;
use stdClass;

class BooleanUtilsTest extends TestCase
{
    public function testIsBoolean(): void
    {
        $bool = new BooleanUtils;
        self::assertTrue($bool->isBoolean(true), 'test-1');
        self::assertTrue($bool->isBoolean(false), 'test-2');
        self::assertFalse($bool->isBoolean(1), 'test-3');
        self::assertFalse($bool->isBoolean(1.1), 'tset-4');
        self::assertFalse($bool->isBoolean([]), 'test-5');
        self::assertFalse($bool->isBoolean(new stdClass), 'test-6');
    }

    public function testToInteger(): void
    {
        $bool = new BooleanUtils;
        self::assertSame(1, $bool->toInteger(true), 'test-1');
        self::assertSame(0, $bool->toInteger(false), 'test-2');
    }

    public function testToString(): void
    {
        $bool = new BooleanUtils;
        self::assertSame('true', $bool->toString(true), 'test-1');
        self::assertSame('false', $bool->toString(false), 'test-2');
        self::assertSame('benar', $bool->toString(true, BooleanLanguageOption::ID), 'test-3');
        self::assertSame('salah', $bool->toString(false, BooleanLanguageOption::ID), 'test-4');
    }
}