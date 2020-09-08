


<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Scraper extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function one()
    {
        $url = "https://webscraper.io/test-sites";
        $html = file_get_html($url);
        $data =  $html->find('.site-heading');

        $asd = count($data);

        $zxc = '';
        for ($i = 0; $i < $asd; $i++) {
            $zxc .= $data[$i];
        }

        echo $zxc;
    }

    public function two()
    {
        $url = "https://www.w3schools.com/";
        $html = file_get_html($url);
        $data =  $html->find('#mySidenav');
        $arr_list =  $html->find('a');

        $asd = count($arr_list);

        $zxc = '';
        for ($i = 0; $i < $asd; $i++) {
            $zxc .= $arr_list[$i] . "<br />";

        }

        echo $zxc;
    }

    public function three()
    {
        $url = "https://www.borrowit.ph/see-all";
        $html = file_get_html($url);
        $data =  $html->find('#col_item');
        $arr_list =  $html->find('a');

        $asd = count($arr_list);

        $zxc = '';
        for ($i = 0; $i < $asd; $i++) {
            $zxc .= $arr_list[$i] . "<br />";

        }

        echo $zxc;
    }

}
