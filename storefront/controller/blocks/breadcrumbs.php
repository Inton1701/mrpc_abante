<?php
/*------------------------------------------------------------------------------
  $Id$

  AbanteCart, Ideal OpenSource Ecommerce Solution
  http://www.AbanteCart.com

  Copyright © 2011-2021 Belavier Commerce LLC

  This source file is subject to Open Software License (OSL 3.0)
  License details is bundled with this package in the file LICENSE.txt.
  It is also available at this URL:
  <http://www.opensource.org/licenses/OSL-3.0>

 UPGRADE NOTE:
   Do not edit or add to this file if you wish to upgrade AbanteCart to newer
   versions in the future. If you wish to customize AbanteCart for your
   needs please refer to http://www.AbanteCart.com for more information.
------------------------------------------------------------------------------*/
if (!defined('DIR_CORE')) {
    header('Location: static_pages/');
}

class ControllerBlocksBreadcrumbs extends AController
{
    public function main($instance_id = 0, $custom_block_id = 0, $inData = [])
    {
        //init controller data
        $this->extensions->hk_InitData($this, __FUNCTION__);

        $this->data['breadcrumbs'] = $inData['breadcrumbs'] ? : $this->document->getBreadcrumbs();
        $this->data['text_home'] = $this->language->get('text_home');
        $this->view->batchAssign($this->data);
        $this->processTemplate();

        //init controller data
        $this->extensions->hk_UpdateData($this, __FUNCTION__);
    }
}
