<?php

namespace App\Controller\API;

use FOS\RestBundle\Controller\Annotations\View;

class ProductsController
{
    /**
     * @View()
     */
    public function getProductsAction()
    {
        return ['products' => [
            [
                'name' => 'Door',
            ],
            [
                'name' => 'Table',
            ]
        ]];
    }
}
