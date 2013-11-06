 <?php
/**
  * Magento
  *
00005  * NOTICE OF LICENSE
00006  *
00007  * This source file is subject to the Open Software License (OSL 3.0)
00008  * that is bundled with this package in the file LICENSE.txt.
00009  * It is also available through the world-wide-web at this URL:
00010  * http://opensource.org/licenses/osl-3.0.php
00011  * If you did not receive a copy of the license and are unable to
00012  * obtain it through the world-wide-web, please send an email
00013  * to license@magentocommerce.com so we can send you a copy immediately.
00014  *
00015  * DISCLAIMER
00016  *
00017  * Do not edit or add to this file if you wish to upgrade Magento to newer
00018  * versions in the future. If you wish to customize Magento for your
00019  * needs please refer to http://www.magentocommerce.com for more information.
00020  *
00021  * @category   Mage
00022  * @package    Mage_Adminhtml
00023  * @copyright  Copyright (c) 2008 Irubin Consulting Inc. DBA Varien (http://www.varien.com)
00024  * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
00025  */
 
 /**
00028  * Catalog Custom Options Config Renderer
00029  *
00030  * @category   Mage
00031  * @package    Mage_Adminhtml
00032  * @author     Magento Core Team <core@magentocommerce.com>
00033  */
 class Mage_Adminhtml_Block_Catalog_Form_Renderer_Config_YearRange extends Mage_Adminhtml_Block_System_Config_Form_Field
 {
 
     protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
     {
         $element->setStyle('width:70px;')
             ->setName($element->getName() . '[]');
 
         if ($element->getValue()) {
             $values = explode(',', $element->getValue());
         } else {
             $values = array();
         }
 
         $from = $element->setValue(isset($values[0]) ? $values[0] : null)->getElementHtml();
         $to = $element->setValue(isset($values[1]) ? $values[1] : null)->getElementHtml();
         return Mage::helper('adminhtml')->__('from') . ' ' . $from
             . ' '
             . Mage::helper('adminhtml')->__('to') . ' ' . $to;
     }
 }
