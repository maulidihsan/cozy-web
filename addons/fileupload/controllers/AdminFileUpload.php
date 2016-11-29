<?php namespace GoCart\Controller;
/**
 * AdminCod Class
 *
 * @package     GoCart
 * @subpackage  Controllers
 * @category    AdminCod
 * @author      Clear Sky Designs
 * @link        http://gocartdv.com
 */

class AdminFileUpload extends Admin { 

    public function __construct()
    {       
        parent::__construct();
        
        \CI::auth()->check_access('Admin', true);
        \CI::lang()->load('fileupload');
    }

    //back end installation functions
    public function install()
    {
        //set a default blank setting for flatrate shipping
        \CI::Settings()->save_settings('upload_modules', array('fileupload'=>'1'));
        \CI::Settings()->save_settings('fileupload', array('enabled'=>'1'));

        redirect('admin/upload');
    }

    public function uninstall()
    {
        \CI::Settings()->delete_setting('upload_modules', 'fileupload');
        \CI::Settings()->delete_settings('fileupload');
        redirect('admin/upload');
    }

    //admin end form and check functions
    public function form()
    {
        //this same function processes the form
        \CI::load()->helper('form');
        \CI::load()->library('form_validation');

        \CI::form_validation()->set_rules('enabled', 'lang:enabled', 'trim|numeric');

        if (\CI::form_validation()->run() == FALSE)
        {
            $settings = \CI::Settings()->get_settings('fileupload');
            $enabled = $settings['enabled'];

            $this->view('fileupload_form', ['enabled'=>$enabled]);
        }
        else
        {
            \CI::Settings()->save_settings('fileupload', array('enabled'=>$_POST['enabled']));
            redirect('admin/upload');
        }
    }
}