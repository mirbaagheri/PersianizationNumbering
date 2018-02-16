<?php
namespace localization\persianizationNumbering;
/**
 * Persianization Numbering
 *
 * This package can convert any english numbers to persian numbers in a string.
 * just pass your string to localizeNow function, then print result.
 *
 * PHP versions 4,5,7
 *
 * @category    Localization
 * @package     Persianization Numbering
 * @version     1.0.0(2018-02-16)
 * @author      Sayed Mostafa Mirbagheri <mostafa.mirii65@gmail.com>
 * @copyright   2018
 * @license     https://opensource.org/licenses/MIT
 * @link        http://mirbaagheri.ir
 */
class persianizationNumbering
{
    public function localizeNow($string){
        $en_num = array("0","1","2","3","4","5","6","7","8","9");
        $fa_num = array("۰","۱","۲","۳","۴","۵","۶","۷","۸","۹");
        return str_replace($en_num,$fa_num,$string);
    }
}