<?php declare(strict_types=1);

namespace Denal05\AdobeCourse1063ExtensionAttributes\Model;

use Magento\Catalog\Api\Data\ProductInterface;
use Denal05\AdobeCourse1063ExtensionAttributes\Api\Data\MaterialInterface;

class Product extends \Magento\Catalog\Model\Product implements MaterialInterface
{
    /**
     * @return string|null
     */
    public function getMaterial()
    {
        return $this->_getData('material');
    }

    /**
     * @param string $value
     * @return void
     */
    public function setMaterial($value)
    {
        $this->setData('material', $value);
    }
}
