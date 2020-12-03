# Module Unimix EnableShippingLabel

    ``unimix/module-enableshippinglabel``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities
Enable Create Shipping Label for all carriers 

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/Unimix`
 - Enable the module by running `php bin/magento module:enable Unimix_EnableShippingLabel`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

## Specifications

 - Plugin
	- afterIsShippingLabelsAvailable - Magento\Shipping\Model\Carrier\AbstractCarrier > Unimix\EnableShippingLabel\Plugin\Magento\Shipping\Model\Carrier\AbstractCarrier


