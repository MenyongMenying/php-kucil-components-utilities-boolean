<?php

namespace Kucil\Components\Utilities\Contracts;

use Kucil\Components\Utilities\Enums\BooleanLanguageOption;

/**
 * @author  MenyongMenying <menyongmenying.main@email.com>
 * 
 * @version 0.0.1
 *
 * 
 */
interface BooleanCoreInterface
{
    /**
     * Memeriksa apakah nilai yang diberikan merupakan boolean.
     * 
     * Meneruskan `true` jika nilai yang diberikan merupakan boolean.
     * Jika bukan, maka akan meneruskan `false`.
     * 
     * Apabila nilai yang diberikan tidak v dianggapalid, maka akan meneruskan `null`.
     * 
     * @param  mixed     $boolean Nilai yang akan diperiksa.
     *
     * @return null|bool          `true` jika nilai $boolean bertipe data boolean, dan `false` jika tidak.
     * 
     * @see    BooleanUtilsTest::testIsBoolean()
     * 
     * 
     */
    public static function isBoolean(mixed $boolean): null|bool;

    /**
     * Mengonversi nilai boolean yang diberikan ke dalam bentuk integer.
     *
     * Meneruskan `1` jika nilai boolean yang diberikan adalah `true`, dan `0` jika bernilai `false`.
     * 
     * Apabila nilai boolean yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     * 
     * @param  bool     $boolean Boolean yang akan dikonversi ke dalam bentuk integer.
     *
     * @return null|int          Hasil konversi nilai $boolean ke dalam bentuk integer, atau `null` jika nilai $boolean tidak valid.
     * 
     * @see    BooleanUtilsTest::testToInteger()
     * 
     * 
     */
    public static function toInteger(bool $boolean): null|int;

    /**
     * Mengonversi nilai boolean ke dalam bentuk string.
     * 
     * Apabila nilai boolean yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  bool                  $boolean Nilai boolean yang akan dikonversi ke dalam bentuk string.
     * @param  BooleanLanguageOption $lang    Bahasa yang digunakan untuk melakukan konversi.
     *
     * @return null|string                    Hasil konversi nilai $boolean ke dalam bentuk string, atau `null` jika nilai $boolean tidak valid.
     * 
     * @see    BooleanUtilsTest::testToString()
     * 
     * 
     */
    public static function toString(bool $boolean, BooleanLanguageOption $lang): null|string;
}