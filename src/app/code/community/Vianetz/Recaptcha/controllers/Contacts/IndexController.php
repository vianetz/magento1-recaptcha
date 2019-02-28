<?php
/**
 * reCAPTCHA Contacts Controller Rewrite
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

require_once('app/code/core/Mage/Contacts/controllers/IndexController.php');
class Vianetz_Recaptcha_Contacts_IndexController extends Mage_Contacts_IndexController
{
    public function postAction()
    {
        $post = $this->getRequest()->getPost();
        $token = $post['g-recaptcha-response'] ?? '';

        if (Mage::getModel('vianetz_recaptcha/recaptcha')->validate($token) === false) {
            Mage::getSingleton('customer/session')->addError(Mage::helper('contacts')->__('Unable to submit your request. Please, try again later'));
            $this->_redirect('*/*/index');
            return;
        }

        return parent::postAction();
    }
}