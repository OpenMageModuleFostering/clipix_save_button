<?php
 
class Clipix_SaveButton_Block_SaveButton extends Mage_Core_Block_Template
{
	public $color;
	public $size;
	public $language;

    /**
     * Constructor. Set template.
     */
    protected function _construct()
    {
        if (Mage::getStoreConfig('Clipix_SaveButton_Config/configuration/Clipix_SaveButton_Enabled')) {
			parent::_construct();
			$this->setTemplate('clipix/savebutton.phtml');
			$this->color = Mage::getStoreConfig('Clipix_SaveButton_Config/configuration/Clipix_SaveButton_Color');
			$this->size = Mage::getStoreConfig('Clipix_SaveButton_Config/configuration/Clipix_SaveButton_Size');
			$this->language = Mage::getStoreConfig('Clipix_SaveButton_Config/configuration/Clipix_SaveButton_Language');
		}
    }
	
	protected function getColor() {
		return $this->color;
	}
	
	protected function getSize() {
		return $this->size;
	}
	
	protected function getLanguage() {
		return $this->language;
	}
	
	protected function getOpt() {
		$_color = $this->getColor();
		$_size = $this->getSize();
		switch ($_color) {
				    case "gray":
				    	switch ($_size)
				    		{
				    			case "small":
									return 1;
									break;
				    			case "medium":
									return 2;
									break;
				    			case "large":
									return 3;
									break;							
							}
				        break;
				    case "orange":
				    	switch ($_size)
				    		{
				    			case "small":
									return 4;
									break;
				    			case "medium":
									return 5;
									break;
				    			case "large":
									return 6;
									break;							
							}
				        break;
				   case "white":
				    	switch ($_size)
				    		{
				    			case "small":
									return 7;
									break;
				    			case "medium":
									return 8;
									break;
				    			case "large":
									return 9;
									break;							
							}
				        break;
		}
		
		return 1;
	}
	
}
?>