<?php namespace GoCart\Controller;
/**
 * AdminShipping Class
 *
 * @package     GoCart
 * @subpackage  Controllers
 * @category    AdminUpload
 * @author      SUPER Team
 */

class AdminUpload extends Admin {

    public function index()
    {
        \CI::auth()->check_access('Admin', true);

        \CI::lang()->load('settings');
        \CI::load()->helper('inflector');

        global $uploadModules;

        $data['upload_modules'] = $uploadModules;
        $data['enabled_modules'] = \CI::Settings()->get_settings('upload_modules');

        $data['page_title'] = lang('common_upload_modules');
        $this->view('upload_index', $data);
    }
}