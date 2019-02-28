<?php
/**
 * reCAPTCHA Block
 *
 * @section LICENSE
 * This file is created by vianetz <info@vianetz.com>.
 * The code is distributed under the GPL license.
 *
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@vianetz.com so we can send you a copy immediately.
 *
 * @category    Vianetz
 * @package     Vianetz\Recaptcha
 * @author      Christoph Massmann, <C.Massmann@vianetz.com>
 * @link        https://www.vianetz.com
 * @copyright   Copyright (c) since 2006 vianetz - Dipl.-Ing. C. Massmann (https://www.vianetz.com)
 * @license     http://www.gnu.org/licenses/gpl-3.0.txt GNU GENERAL PUBLIC LICENSE
 */

class Vianetz_Recaptcha_Block_Recaptcha extends Mage_Core_Block_Template
{
    public function isEnabled(): bool
    {
        return Mage::getStoreConfigFlag('vianetz_recaptcha/general/enabled');
    }

    public function getSitekey(): string
    {
        return Mage::getStoreConfig('vianetz_recaptcha/general/sitekey');
    }
}