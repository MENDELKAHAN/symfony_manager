<?php
// src/Controller/DefaultController.php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
class DefaultController extends AbstractController{
/**
* @Route("/hello/{name}")
*/
public function index($name) {
	return $this->render('default/index.html.twig', [
'name' => $name,
 ]);
}
}

?>