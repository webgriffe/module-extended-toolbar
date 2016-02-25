<?php

namespace Webgriffe\ExtendedToolbar\Test\Unit\Block\Product\ProductList;

use Webgriffe\ExtendedToolbar\Block\Product\ProductList\ExtendedToolbar;

/**
 * Created by PhpStorm.
 * User: ddonnini
 * Date: 18/02/16
 * Time: 10.27
 */
class ExtendedToolbarTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var ExtendedToolbar
     */
    private $extendedToolbar;

    public function setUp()
    {
        $contextMock = $this->getMockBuilder('Magento\Framework\View\Element\Template\Context')
            ->disableOriginalConstructor()
            ->getMock();
        $catalogSessionMock = $this->getMockBuilder('Magento\Catalog\Model\Session')
            ->disableOriginalConstructor()
            ->getMock();
        $catalogConfigMock = $this->getMockBuilder('Magento\Catalog\Model\Config')
            ->disableOriginalConstructor()
            ->getMock();
        $toolbarModelMock = $this->getMockBuilder('Magento\Catalog\Model\Product\ProductList\Toolbar')
            ->disableOriginalConstructor()
            ->getMock();
        $urlEncoderMock = $this->getMockBuilder('Magento\Framework\Url\EncoderInterface')
            ->disableOriginalConstructor()
            ->getMock();
        $productListHelperMock = $this->getMockBuilder('Magento\Catalog\Helper\Product\ProductList')
            ->disableOriginalConstructor()
            ->getMock();
        $postDataHelperMock = $this->getMockBuilder('Magento\Framework\Data\Helper\PostHelper')
            ->disableOriginalConstructor()
            ->getMock();

        $this->extendedToolbar = new ExtendedToolbar(
            $contextMock,
            $catalogSessionMock,
            $catalogConfigMock,
            $toolbarModelMock,
            $urlEncoderMock,
            $productListHelperMock,
            $postDataHelperMock,
            array()
        );
    }

    public function testIsShowable()
    {
        $extendedToolbar = $this->extendedToolbar;
        $this->assertInstanceOf('Magento\Catalog\Block\Product\ProductList\Toolbar', $extendedToolbar);

        $this->assertTrue($extendedToolbar->isShowable());

        $extendedToolbar->setShowable(false);

        $this->assertFalse($extendedToolbar->isShowable());
    }
}
