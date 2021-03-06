<?php
/**
 * E-Abi (Aktsiamaailm LLC)
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to info@e-abi.ee so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this module to newer
 * versions in the future.
 *
 * @category   Eabi
 * @package    Eabi_Zoom
 * @copyright  Copyright (c) 2013 Aktsiamaailm LLC (http://en.e-abi.ee/)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @author     Matis Halmann <info@e-abi.ee>
 * 
 */
/**
 * Description of Event
 *
 * @author matishalmann
 */
class Eabi_Zoom_Model_Source_Event {
    
    public function toOptionArray() {

        $options = array();

        $options[] = array(
            'label' => sprintf(Mage::helper('eabi_zoom')->__('When clicking on the large image (%s event)'), 'click'),
            'value' => 'click',
        );
        
        $options[] = array(
            'label' => sprintf(Mage::helper('eabi_zoom')->__('When mouse moves over the large image (%s event)'), 'mouseover'),
            'value' => 'mouseover',
        );
        
        
        
        return $options;
    }

}


