<?php
/**
 * reCAPTCHA Model
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

class Vianetz_Recaptcha_Model_Recaptcha extends Mage_Core_Model_Abstract
{
    /**
     * @var string
     */
    const API_URL = 'https://www.google.com/recaptcha/api/siteverify';

    public function validate(string $token): bool
    {
        if (! Mage::getStoreConfigFlag('vianetz_recaptcha/general/enabled')) {
            return true;
        }

        $verifyData = array(
            'secret' => Mage::getStoreConfig('vianetz_recaptcha/general/secret'),
            'response' => $token
        );

        $verifyResult = $this->postData($verifyData);

        return (isset($verifyResult['success']) && $verifyResult['success'] === true);
    }

    private function postData(array $data)
    {
        $client = Mage_HTTP_Client::getInstance();
        $client->post(self::API_URL, $data);

        return Zend_Json::decode($client->getBody());
    }
}