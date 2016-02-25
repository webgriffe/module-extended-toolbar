EXtended Toolbar Magento 2 Module
================================

[![Build Status](https://travis-ci.org/webgriffe/module-extended-toolbar.svg?branch=master)](https://travis-ci.org/webgriffe/module-extended-toolbar)

An extended version of Magento 2 Toolbar.

Installation
------------

Please, use [Composer](https://getcomposer.org) and add `webgriffe/module-extended-toolbar` to your dependencies. Also add this repository to your `composer.json`.

	"repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/webgriffe/module-extended-toolbar.git"
        }
    ]
    
Features
--------

This module rewrites Magento\Catalog\Block\Product\ProductList\Toolbar adding a property `showable` in order to display or not itself.

Use it in a page_configuration layout file like this:

    <?xml version="1.0"?>
    <page xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:framework:View/Layout/etc/page_configuration.xsd">
        <body>
            [...]
                <referenceContainer name="main">
                    <block class="Magento\Catalog\Block\Product\ProductList\Toolbar" name="product_list_toolbar" template="product/list/toolbar.phtml" cacheable="false">
                        <action method="setShowable">
                            <argument name="showable" xsi:type="boolean">false</argument>
                        </action>
                    </block>
                    <action method="setToolbarBlockName">
                        <argument name="name" xsi:type="string">product_list_toolbar</argument>
                    </action>
                </referenceContainer>
            [...]
        </body>
    </page>
    
To Do
-----

* Add more specific show/hide options for every single toolbar component.

Credits
-------

* Developed by [Webgriffe®](http://webgriffe.com)





