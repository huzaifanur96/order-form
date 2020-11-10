<?php

namespace App\Controller;

use App\Entity\Order;
use App\Form\OrderType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrderController extends AbstractController
{
    /**
     * @Route("/", name="order")
     */
    public function index(Request $request): Response
    {
        // create the form
        $order = new Order;
        $form = $this->createForm(OrderType::class, $order);

        // handle form request
        $form->handleRequest($request);

        // check form submission
        if ($form->isSubmitted()) {return $this->render('order_form/index.html.twig', [
            'form' => $form->createView(),
        ]);
            // TODO
        }

        return $this->render('order_form/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
