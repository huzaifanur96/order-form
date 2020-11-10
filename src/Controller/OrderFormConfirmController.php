<?php

namespace App\Controller;

use App\Entity\Order;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrderFormConfirmController extends AbstractController
{
    /**
     * @Route("/confirm/{order_id}", name="order_form_confirm")
     */
    public function index($order_id): Response
    {

        $order = $this->getDoctrine()
            ->getRepository(Order::class)->find($order_id);

        if (!$order) {
            throw $this->createNotFoundException('No order for this id: ' . $order_id);
        }

        return $this->render('order_form_confirm/index.html.twig', [
            'funeral_home_name' => $order->getFuneralHome(),
        ]);
    }
}
