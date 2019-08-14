<?php 

class  MKMage_Makgento_Block_Adminhtml_System_Config_Buttoncat extends Mage_Adminhtml_Block_System_Config_Form_Field
{
  
  protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('makgento/buttoncat.phtml');
    }
 
    protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
    {
        return $this->_toHtml();
    }
 
    public function getButtonHtml()
    {
        $button = $this->getLayout()->createBlock('adminhtml/widget_button')
            ->setData(array(
            'id'        => 'makgento_button',
            'label'     => $this->helper('adminhtml')->__('+ Add Category Image'),
            'onclick'   => 'javascript:addCategory(); return false;'
        ));
 
        return $button->toHtml();
    }
    
   
   
   
   
   
   
}