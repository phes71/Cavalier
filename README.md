# Mage2 Module Cavalier CustomOrderAttribute

    ``cavalier/module-customorderattribute``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities
Custom order attributes
The custom attribute is added to the order table in the file
CustomOrderAttribute/etc/db_schema.xml

We listen for the event checkout_submit_all_after
We then save the PO Number to the customer_reference we created in our db_schema.xml
## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/Cavalier`
 - Enable the module by running `php bin/magento module:enable Cavalier_CustomOrderAttribute`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`



## Configuration

You need to enable Purchase Order Payment Method for this to work


## Specifications

  - Observer
	- checkout_submit_all_after > Cavalier\CustomOrderAttribute\Observer\Checkout\SubmitAllAfter



## Attributes

 - Sales - Customer Reference (customer_reference)
