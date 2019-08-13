<?php
class Clipix_SaveButton_Model_Size
{
    public function toOptionArray()
    {
        return array(
            array('value'=>'small', 'label'=>Mage::helper('Clipix_SaveButton')->__('Small')),
            array('value'=>'medium', 'label'=>Mage::helper('Clipix_SaveButton')->__('Medium')),
            array('value'=>'large', 'label'=>Mage::helper('Clipix_SaveButton')->__('Large')),                  
        );
    }

}
?>