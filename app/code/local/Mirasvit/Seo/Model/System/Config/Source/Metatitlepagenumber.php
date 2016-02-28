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
 * @package   Advanced SEO Suite
 * @version   1.3.0
 * @build     1041
 * @copyright Copyright (C) 2015 Mirasvit (http://mirasvit.com/)
 */


class Mirasvit_Seo_Model_System_Config_Source_Metatitlepagenumber
{
    public function toOptionArray()
    {
        return array(
            array('value' => 0, 'label'=>Mage::helper('seo')->__('Disabled')),
            array('value' => Mirasvit_Seo_Model_Config::META_TITLE_PAGE_NUMBER_BEGIN, 'label'=>Mage::helper('seo')->__('At the beginning')),
            array('value' => Mirasvit_Seo_Model_Config::META_TITLE_PAGE_NUMBER_END, 'label'=>Mage::helper('seo')->__('At the end')),
            array('value' => Mirasvit_Seo_Model_Config::META_TITLE_PAGE_NUMBER_BEGIN_FIRST_PAGE, 'label'=>Mage::helper('seo')->__('At the beginning (add to the first page)')),
            array('value' => Mirasvit_Seo_Model_Config::META_TITLE_PAGE_NUMBER_END_FIRST_PAGE, 'label'=>Mage::helper('seo')->__('At the end (add to the first page)')),
        );
    }
}
