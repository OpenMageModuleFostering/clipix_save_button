<?php
class Clipix_SaveButton_Model_Language
{
    public function toOptionArray()
    {
        return array(
            array('value'=>'en', 'label'=>Mage::helper('Clipix_SaveButton')->__('English')),
            array('value'=>'es', 'label'=>Mage::helper('Clipix_SaveButton')->__('español')),              
            array('value'=>'fr', 'label'=>Mage::helper('Clipix_SaveButton')->__('français')),              
			array('value'=>'he', 'label'=>Mage::helper('Clipix_SaveButton')->__('עברית')),   
			array('value'=>'zh', 'label'=>Mage::helper('Clipix_SaveButton')->__('中文')), 
			array('value'=>'it', 'label'=>Mage::helper('Clipix_SaveButton')->__('italiano')), 
			array('value'=>'tr', 'label'=>Mage::helper('Clipix_SaveButton')->__('Türkçe')), 
			array('value'=>'de', 'label'=>Mage::helper('Clipix_SaveButton')->__('Deutsch')), 
			array('value'=>'pt', 'label'=>Mage::helper('Clipix_SaveButton')->__('Português')), 
			array('value'=>'ko', 'label'=>Mage::helper('Clipix_SaveButton')->__('한국어')), 
			array('value'=>'ja', 'label'=>Mage::helper('Clipix_SaveButton')->__('日本語')), 
			array('value'=>'ru', 'label'=>Mage::helper('Clipix_SaveButton')->__('русский')), 
        );
    }

}
?>