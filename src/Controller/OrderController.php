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
        if ($form->isSubmitted()) {

            // get form data
            $order_form_data = $form->getData();
            $order->setFuneralHome($order_form_data->getFuneralHome());

            // Persist data
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($order);
            $entityManager->flush();

            // success form
            return $this->redirectToRoute('order_form_confirm', [
                'order_id' => $order_form_data->getId(),
            ]);

        }

        return $this->render('order_form/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
