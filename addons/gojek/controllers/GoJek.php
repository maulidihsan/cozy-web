<?php namespace GoCart\Controller;
/**
 * FlatRate Class
 *
 * @package     GoCart
 * @subpackage  Controllers
 * @category    FlatRate
 * @author      Clear Sky Designs
 * @link        http://gocartdv.com
 */

class GoJek extends Front { 

    public function __construct()
    {
        parent::__construct();
        \CI::load()->model(array('Locations'));
        $this->customer = \CI::Login()->customer();
    }

    public function rates()
    {
        $settings = \CI::Settings()->get_settings('GoJek');
        
        if(isset($settings['enabled']) && (bool)$settings['enabled'])
        {
            return ['Go-Jek'=> $settings['rate']];
        }
        else
        {
            return [];
        }
    }
}