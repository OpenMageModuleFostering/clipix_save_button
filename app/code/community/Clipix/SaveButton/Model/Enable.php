<?php
class Clipix_SaveButton_Model_Enable
{
    public function toOptionArray()
    {
        return array(
            array('value'=>1, 'label'=>Mage::helper('Clipix_SaveButton')->__('Yes')),
            array('value'=>0, 'label'=>Mage::helper('Clipix_SaveButton')->__('No')),              
        );
    }

}
?>