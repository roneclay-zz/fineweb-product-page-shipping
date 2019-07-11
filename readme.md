# Fineweb-Shipping
Magento 2 module for estimate shipping rate in product page
## Como instalar
### Via Composer

```sh
composer require fineweb/shipping
php bin/magento module:enable --clear-static-content Finweb_Shipping
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy //ou php bin/magento setup:static-content:deploy pt_BR
```
## Features
* Cálculo de frete na página do produto