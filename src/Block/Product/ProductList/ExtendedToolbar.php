<?php

namespace Webgriffe\ExtendedToolbar\Block\Product\ProductList;

use Magento\Catalog\Block\Product\ProductList\Toolbar;

/**
 * Created by PhpStorm.
 * User: ddonnini
 * Date: 18/02/16
 * Time: 10.30
 */
class ExtendedToolbar extends Toolbar
{
    /**
     * @var bool
     */
    protected $showable = true;

    /**
     * @return bool
     */
    public function isShowable()
    {
        return $this->showable;
    }

    /**
     * @param bool $showable
     * @return $this
     */
    public function setShowable($showable)
    {
        $this->showable = $showable;
        return $this;
    }

    public function getModuleName()
    {
        return self::extractModuleName(get_class($this->getParentBlock()));
    }

    protected function _toHtml()
    {
        if ($this->isShowable()) {
            return parent::_toHtml();
        }
        return '';
    }
}
