<?php

defined('BASEPATH') or exit('No direct script access allowed');

class History extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }


    public function index()
    {
        $data['data'] = $this->guzzle_get();
        // echo '<pre>' . var_export($data, true) . '</pre>';
        $this->load->view('history/index.php', $data, FALSE);
    }

    private function guzzle_get()
    {
        $client = new GuzzleHttp\Client();
        $response = $client->request('GET', 'http://localhost/CI3-REST-API-SERVER-CHRISKACERGUIS/history');
        // $data = $response->getBody()->getContents();
        $data = json_decode($response->getBody()->getContents(), true);
        return $data;
    }
}
        
    /* End of file  History.php */
