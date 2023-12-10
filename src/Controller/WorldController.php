<?php
declare(strict_types=1);

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

/**
 * Created by PhpStorm at 10.12.2023
 *
 * Class WorldController
 *
 * @author Jean-Claude <jeanyao@ymail.com>
 *
 * @package App\Controller
 */
class WorldController
{
       public function hello(): Response
       {
           return new Response('<html><body><h1><b>Hello,</b> <i>world</i>!!!!</h1></body></html>');
       }
}