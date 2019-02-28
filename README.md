Vianetz reCAPTCHA Extension for Magento 1
=========================================

Facts
-----
- extension key: Vianetz_Recaptcha

Description
-----------
This module for the Magento 1 online shop software adds the Google reCAPTCHA v2 to the Magento contact form.

Requirements
------------
- PHP >= 7.0.x
- Mage_Core
- Mage_Contacts

Compatibility
-------------
- Magento >= 1.7

Usage
-----
This extension adds the Google reCAPTCHA v2 to the Magento contact form and only allows the submit if the reCAPTCHA 
was filled correctly.

To insert the reCAPTCHA into your contact form you have to add the following code to your theme in _contacts/form.phtml_:
```
<?php echo $this->getChild('vianetz.contacts.recaptcha')->toHtml(); ?>
```

Installation Instructions
-------------------------
For installation notes please see also [our FAQ](https://www.vianetz.com/en/faq/how-to-install-the-magento-extension.html).

1. Do a backup of your Magento installation for safety reasons.
2. Disable Magento compilation feature (if activated): System > Tools > Compiler
3. Unzip the setup package and copy the contents of the src/ folder into the Magento root folder. (The folder structure
   is the same as in your Magento installation. No files will be overwritten.)
   Please assure that the files are uploaded with the same file user permissions as the Magento installation!
4. Clear the Magento cache (and related caches like APC if available)
5. Logout from the admin panel and then login again
6. Enable the Magento compilation feature (if it was activated before): System > Tools > Compiler
7. Place your Google reCAPTCHA site key and secret into the configuration System > Configuration > Google reCAPTCHA

As an alternative you can install the module via modman.
Please find more information about that installation method at [https://github.com/colinmollenhour/modman](https://github.com/colinmollenhour/modman)
(Thanks @colinmollenhour)

We also offer paid installation services. If you are interested please contact me at support@vianetz.com.

Uninstallation
--------------
1. Remove the folder app/code/community/Vianetz/AttachTermsAndConditions
2. Remove the file app/etc/modules/Vianetz_AttachTermsAndConditions.xml

Frequently Asked Questions
--------------------------
Please find the [Frequently Asked Questions on our website](https://www.vianetz.com/en/faq).

Support
-------
If you have any issues or suggestions with this extension, please do not hesitate to
[contact me](https://www.vianetz.com/en/contacts) or [send me an email](mailto:support@vianetz.com).

Developer
---------
Christoph Massmann
[https://www.vianetz.com](https://www.vianetz.com)
[@vianetz](https://twitter.com/vianetz)

Licence
-------
[GNU GENERAL PUBLIC LICENSE](http://www.gnu.org/licenses/gpl-3.0.txt)

Copyright
---------
(c) since 2006 vianetz

This Magento Extension uses Semantic Versioning - please find more information at http://semver.org.
