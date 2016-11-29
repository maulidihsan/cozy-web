<?php namespace GoCart\Controller;
/**
 * AdminFlatRate Class
 *
 * @package     GoCart
 * @subpackage  Controllers
 * @category    AdminFlatRate
 * @author      Clear Sky Designs
 * @link        http://gocartdv.com
 */

class AdminGoJek extends Admin { 

    public function __construct()
    {       
        parent::__construct();
        \CI::auth()->check_access('Admin', true);
        \CI::lang()->load('GoJek');
    }

    //back end installation functions
    public function install()
    {
        //set a default blank setting for flatrate shipping
        \CI::Settings()->save_settings('shipping_modules', ['GoJek'=>'1']);
        \CI::Settings()->save_settings('GoJek', ['enabled'=>'1', 'rate'=>0]);

        redirect('admin/shipping');
    }

    public function uninstall()
    {
        \CI::Settings()->delete_setting('shipping_modules', 'GoJek');
        \CI::Settings()->delete_settings('GoJek');
        redirect('admin/shipping');
    }
    
    //admin end form and check functions
    public function form()
    {
        //this same function processes the form
        \CI::load()->helper('form');
        \CI::load()->library('form_validation');

        \CI::form_validation()->set_rules('enabled', 'lang:enabled', 'trim|numeric');
        \CI::form_validation()->set_rules('rate', 'lang:rate', 'trim|floatval');

        if (\CI::form_validation()->run() == FALSE)
        {
            $settings = \CI::Settings()->get_settings('GoJek');

            $this->view('gojek_form', $settings);
        }
        else
        {
            
            \CI::Settings()->save_settings('GoJek', \CI::input()->post());
            redirect('admin/shipping');
        }
    }
}