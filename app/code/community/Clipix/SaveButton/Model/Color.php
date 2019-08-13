<?php
class Clipix_SaveButton_Model_Color
{
    public function toOptionArray()
    {
        return array(
            array('value'=>'gray', 'label'=>Mage::helper('Clipix_SaveButton')->__('Gray')),
            array('value'=>'white', 'label'=>Mage::helper('Clipix_SaveButton')->__('White')),
            array('value'=>'orange', 'label'=>Mage::helper('Clipix_SaveButton')->__('Orange')),                  
        );
    }

}
?>