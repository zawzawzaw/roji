<?php
/**
 * Mirasvit
 *
 * This source file is subject to the Mirasvit Software License, which is available at http://mirasvit.com/license/.
 * Do not edit or add to this file if you wish to upgrade the to newer versions in the future.
 * If you wish to customize this module for your needs.
 * Please refer to http://www.magentocommerce.com for more information.
 *
 * @category  Mirasvit
 * @package   Follow Up Email
 * @version   1.1.34
 * @build     851
 * @copyright Copyright (C) 2017 Mirasvit (http://mirasvit.com/)
 */




class Mirasvit_EmailDesign_Helper_Variables_Product
{
    /**
     * Get or print product attribute value formatted according to given mask if exist.
     *
     * @param Varien_Object $parent
     * @param array $args - with the following elements:
     * [0] - Mage_Catalog_Model_Product - product instance
     * [1] - string - product attribute code
     * [2] - string - output mask
     * [3] - string - if exist print output, otherwise return
     *
     * @return string
     */
    public function getAttribute($parent, $args)
    {
        $output = '';
        if (isset($args[0])
            && $args[0] instanceof Mage_Catalog_Model_Product
            && isset($args[1])
        ) {
            $product = $args[0];
            $attributeCode = $args[1];
            $output = $product->getResource()->getAttribute($attributeCode)->getFrontend()->getValue($product);

            // $args[2] - mask
            if ($output && isset($args[2])) {
                $output = Mage::helper('email')->__($args[2], $output);
            }
        }

        if (isset($args[3])) {
            echo $output;
        } else {
            return $output;
        }
    }
}
