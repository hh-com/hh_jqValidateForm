<?php

/**
 * 
 * @package ect_responsive
 * Copyright (C) 2014 Harald Huber
 * http://www.harald-huber.com
 *
*/

class ValidateForm extends Frontend 
{
    public function includeJS(ContentModel $objModel, $strBuffer, $objElement)
    {
        if (TL_MODE == 'FE')
        {
            if ($objModel->type == "form")
            {	
                if (version_compare(VERSION, '3', '>='))
                {
                        $GLOBALS['TL_JAVASCRIPT'][] = TL_PATH.'/system/modules/hh_jqValidateForm/assets/js/validatr.js||static';
                }
                else
                {
                        $GLOBALS['TL_JAVASCRIPT'][] = TL_PATH.'/system/modules/hh_jqValidateForm/assets/js/validatr.js';
                }

                $GLOBALS['TL_HEAD'][] = '
                <script type="text/javascript">

                        $(document).ready(function() {
                                $("form").validatr();
                        });

                </script>';
            }
        }
       
        return $strBuffer;
    }
}
?>