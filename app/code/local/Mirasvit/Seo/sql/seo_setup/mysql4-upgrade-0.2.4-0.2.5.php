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


$installer = $this;
$version = Mage::helper('mstcore/version')->getModuleVersionFromDb('seo');
if ($version == '0.2.5') {
    return;
} elseif ($version != '0.2.4') {
    die("Please, run migration 0.2.4");
}

$installer->endSetup();
$installer->run("
    ALTER TABLE `{$this->getTable('seo/template')}` CHANGE `sort_order` `sort_order` int(11) UNSIGNED NOT NULL DEFAULT '10' COMMENT 'Sort Order';
");
$installer->endSetup();
