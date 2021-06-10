<?php

require_once __DIR__.'\database.php';

require_once __DIR__.'\Client.php';


class ListeClients
{
    public array $customersArray= array();



    public function __construct() {
        foreach (list_customers() as $customer) {

            $customer = new Client( $customer["first_name"],$customer["last_name"] );

            array_push($this->customersArray,$customer);

        }

    }



    public function displayALLClient()
    {
        foreach ( $this->customersArray as  $CustomerList) {

            $CustomerList->displayClient() ;
        }
    }
}