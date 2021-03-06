<?php
/**
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the GNU General Public License (GPL 3)
 * that is bundled with this package in the file LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Payone_Core to newer
 * versions in the future. If you wish to customize Payone_Core for your
 * needs please refer to http://www.payone.de for more information.
 *
 * @category        Payone
 * @package         Payone_Core_Model
 * @subpackage      System
 * @copyright       Copyright (c) 2017 <kontakt@fatchip.de> - www.fatchip.de
 * @author          FATCHIP GmbH <kontakt@fatchip.de>
 * @license         <http://www.gnu.org/licenses/> GNU General Public License (GPL 3)
 * @link            http://www.fatchip.de
 */
class Payone_Core_Model_System_Config_AmazonButtonType extends Payone_Core_Model_System_Config_AmazonAbstractOption
{
    const NORMAL = 0;
    const SMALLER = 1;
    const SMALLEST = 2;

    /**
     * @param int|null $index
     * @return string
     */
    public static function getParameter($index)
    {
        return [self::NORMAL => 'PwA', self::SMALLER => 'Pay', self::SMALLEST => 'A'][intval($index)];
    }
}
