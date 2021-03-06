    <?php
     
    class Qiub_Slideshow_Block_Adminhtml_Slideshow_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
    {
        protected function _prepareForm()
        {
            $form = new Varien_Data_Form();
            $this->setForm($form);
            $fieldset = $form->addFieldset('slideshow_form', array('legend'=>Mage::helper('slideshow')->__('Slide information')));
           
            $fieldset->addField('title', 'text', array(
                'label'     => Mage::helper('slideshow')->__('Title'),
                'class'     => 'required-entry',
                'required'  => true,
                'name'      => 'title',
            ));
			
            $fieldset->addField('slide_url', 'text', array(
                'label'     => Mage::helper('slideshow')->__('Url'),
                'required'  => false,
                'name'      => 'slide_url',
            ));

            $fieldset->addField('slide_target', 'select', array(
                'label'     => Mage::helper('slideshow')->__('Target'),
                'name'      => 'slide_target',
                'values'    => array(
                    array(
                        'value'     => '_blank',
                        'label'     => Mage::helper('slideshow')->__('Blank'),
                    ),
                    array(
                        'value'     => '_new',
                        'label'     => Mage::helper('slideshow')->__('New'),
                    ),
                    array(
                        'value'     => '_parent',
                        'label'     => Mage::helper('slideshow')->__('Parent'),
                    ),
                    array(
                        'value'     => '_self',
                        'label'     => Mage::helper('slideshow')->__('Self'),
                    ),
                    array(
                        'value'     => '_top',
                        'label'     => Mage::helper('slideshow')->__('Top'),
                    ),
                ),
            ));

			$fieldset->addField('filename', 'image', array(
				'label'     => Mage::helper('slideshow')->__('Image File'),
				'required'  => true,
				'name'      => 'filename',
			));
     
            $fieldset->addField('slide_content', 'editor', array(
                'name'      => 'slide_content',
                'label'     => Mage::helper('slideshow')->__('Content'),
                'title'     => Mage::helper('slideshow')->__('Content'),
                'style'     => 'width:98%; height:100px;',
                'wysiwyg'   => true,
                'required'  => false,
            ));	 
			
            /*$fieldset->addField('action_button_text', 'text', array(
                'label'     => Mage::helper('slideshow')->__('Action Button Text'),
                'required'  => false,
                'name'      => 'action_button_text',
            ));*/
			
			$fieldset->addField('start_date', 'date', array(
                'label'     => Mage::helper('slideshow')->__('Start Date'),
				//'after_element_html' => '<small>Comments</small>',
                'required'  => false,
                'name'      => 'start_date',
				'title'     => Mage::helper('slideshow')->__('Start Date'),
				//'tabindex' 	=> 1,
				'format' => Mage::app()->getLocale()->getDateFormat(Mage_Core_Model_Locale::FORMAT_TYPE_SHORT),
				'image' => $this->getSkinUrl('images/grid-cal.gif'),
				'input_format' => Varien_Date::DATE_INTERNAL_FORMAT
            ));
			
			$fieldset->addField('end_date', 'date', array(
                'label'     => Mage::helper('slideshow')->__('End Date'),
				'required'  => false,
                'name'      => 'end_date',
				'title'     => Mage::helper('slideshow')->__('End Date'),
				'format' => Mage::app()->getLocale()->getDateFormat(Mage_Core_Model_Locale::FORMAT_TYPE_SHORT),
				'image' => $this->getSkinUrl('images/grid-cal.gif'),
				'input_format' => Varien_Date::DATE_INTERNAL_FORMAT
            ));
			
            $fieldset->addField('sort_order', 'text', array(
            		'label'     => Mage::helper('slideshow')->__('Sort Order'),
            		'name'      => 'sort_order',
            ));
			
            $fieldset->addField('status', 'select', array(
                'label'     => Mage::helper('slideshow')->__('Status'),
                'name'      => 'status',
                'values'    => array(
                    array(
                        'value'     => 1,
                        'label'     => Mage::helper('slideshow')->__('Active'),
                    ),
     
                    array(
                        'value'     => 0,
                        'label'     => Mage::helper('slideshow')->__('Inactive'),
                    ),
                ),
            ));

            if ( Mage::getSingleton('adminhtml/session')->getSlideshowData() ):
                $form->setValues(Mage::getSingleton('adminhtml/session')->getSlideshowData());
                Mage::getSingleton('adminhtml/session')->setSlideshowData(null);
            elseif ( Mage::registry('slideshow_data') ):
                $form->setValues(Mage::registry('slideshow_data')->getData());
            endif;
            return parent::_prepareForm();
        }
    }