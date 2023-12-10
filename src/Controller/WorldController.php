<?php
declare(strict_types=1);

namespace App\Controller;


use App\Manager\UserManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
class WorldController extends AbstractController
{

       protected UserManager $userManager;


       public function __construct(UserManager $userManager)
       {
           $this->userManager = $userManager;
       }



       public function hello(): Response
       {
           $user = $this->userManager->create('My user');

           return $this->json($user->toArray());
       }
}