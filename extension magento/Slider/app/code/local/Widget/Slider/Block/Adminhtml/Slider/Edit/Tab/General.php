<?php

/**
 * Created by PhpStorm.
 * User: VS9 X64Bit
 * Date: 8/23/2015
 * Time: 12:11 PM
 */
class Widget_Slider_Block_Adminhtml_Slider_Edit_Tab_General extends Mage_Adminhtml_Block_Widget_Form implements Mage_Adminhtml_Block_Widget_Tab_Interface
{
    protected function _prepareForm()
    {
        $storeList = Mage::helper('widget_slider')->getStores();
        $typeList  = Mage::helper('widget_slider')->getTypes();
        $aNa       = Mage::helper('widget_slider')->getStatuses();

        $form = new Varien_Data_Form();
        $this->setForm($form);

        $data     = Mage::registry('slider')->getData();
        $fieldset = $form->addFieldset('slider_form', [
            'legend' => Mage::helper('widget_slider')->__('Slider information'),
            ]);

        $fieldset->addField('name', 'text', [
            'label'    => Mage::helper('widget_slider')->__('Name Slider'),
            'required' => true,
            'name'     => 'name',
            ]);

//        /*Edit truong kieu select*/
        $fieldset->addField('store', 'select', [
            'label'    => Mage::helper('widget_slider')->__('Store'),
            'name'     => 'store',
            'values'   => $storeList,
            'disabled' => false,
            'readonly' => false,
            ]);
        $fieldset->addField('status', 'select', [
            'label'    => Mage::helper('widget_slider')->__('Status'),
            'name'     => 'status',
            'values'   => $aNa,
            'disabled' => false,
            'readonly' => false,
            ]);
        $fieldset->addField('type', 'select', [
            'label'    => Mage::helper('widget_slider')->__('Type'),
            'name'     => 'type',
            'values'   => $typeList,
            'disabled' => false,
            'readonly' => false,
            ]);
        $this->_addElementTypes($fieldset);

        $form->setValues($data);
        return parent::_prepareForm(); // TODO: Change the autogenerated stub
    }

    /**
     * Return Tab label
     * @return string
     */
    public function getTabLabel()
    {
        return Mage::helper('widget_slider')->__('Slider Information');
    }

    /**
     * Return Tab title
     * @return string
     */
    public function getTabTitle()
    {
        return Mage::helper('widget_slider')->__('Slider Information');
    }

    /**
     * Can show tab in tabs
     * @return boolean
     */
    public function canShowTab()
    {
        return true;
    }

    /**
     * Tab is hidden
     * @return boolean
     */
    public function isHidden()
    {
        return false;
    }

}