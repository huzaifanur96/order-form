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

            // set form data to entity
            $order_form_data = $form->getData();

            // Funeral Home
            $order->setFuneralHomeName($order_form_data->getFuneralHomeName());
            $order->setFuneralHomeContact($order_form_data->getFuneralHomeContact());
            $order->setFuneralHomeDate($order_form_data->getFuneralHomeDate());
            $order->setFuneralHomeStreet($order_form_data->getFuneralHomeStreet());
            $order->setFuneralHomeCity($order_form_data->getFuneralHomeCity());
            $order->setFuneralHomeState($order_form_data->getFuneralHomeState());
            $order->setFuneralHomeZip($order_form_data->getFuneralHomeZip());
            $order->setFuneralHomeTelephone($order_form_data->getFuneralHomeTelephone());
            $order->setFuneralHomeEmail($order_form_data->getFuneralHomeEmail());
            $order->setFuneralHomeShipMerchandiseTo($order_form_data->getFuneralHomeShipMerchandiseTo());

            // Deceased information
            $order->setfullNameOfDeceased($order_form_data->getfullNameOfDeceased());
            $order->setDeceasedDateOfBirth($order_form_data->getDeceasedDateOfBirth());
            $order->setDeceasedDateOfDeath($order_form_data->getDeceasedDateOfDeath());
            $order->setDeceasedIntermentInformation($order_form_data->getDeceasedIntermentInformation());

            // Family contact name
            $order->setfamilyContactName($order_form_data->getfamilyContactName());
            $order->setfamilyContactStreet($order_form_data->getfamilyContactStreet());
            $order->setfamilyContactCity($order_form_data->getfamilyContactCity());
            $order->setfamilyContactState($order_form_data->getfamilyContactState());
            $order->setfamilyContactZip($order_form_data->getfamilyContactZip())
            ;
            $order->setfamilyContactTelephone($order_form_data->getfamilyContactTelephone());
            $order->setfamilyContactEmail($order_form_data->getfamilyContactEmail());

            // Sympathy Acknowledgements
            $order->setSymAckQuantity($order_form_data->getSymAckQuantity());
            $order->setSymAckSentiment($order_form_data->getSymAckSentiment());
            $order->setSymAckFont($order_form_data->getSymAckFont());
            $order->setSymAckFontInk($order_form_data->getSymAckFontInk());
            $order->setSymAckMotif($order_form_data->getSymAckMotif());
            $order->setSymAckMotifInk($order_form_data->getSymAckMotifInk());
            $order->setSymAckPaper($order_form_data->getSymAckPaper());

            // Return Address imprint
            $order->setRetAddImpStreet($order_form_data->getRetAddImpStreet());
            $order->setRetAddImpCity($order_form_data->getRetAddImpCity());
            $order->setRetAddImpState($order_form_data->getRetAddImpState());
            $order->setRetAddImpZip($order_form_data->getRetAddImpZip());

            // Remembrance Portrait
            $order->setremPorStyle($order_form_data->getremPorStyle());
            $order->setremPorSize($order_form_data->getremPorSize());
            $order->setremPorPhoto($order_form_data->getremPorPhoto());
            $order->setremPorSpecialInstructions($order_form_data->getremPorSpecialInstructions());
            
            // Memorial prayer cards
            $order->setMemPraCarQuantity($order_form_data->getMemPraCarQuantity());
            $order->setMemPraCarStyle($order_form_data->getMemPraCarStyle());
            $order->setMemPraCarVerse($order_form_data->getMemPraCarVerse());
            $order->setMemPraCarInk($order_form_data->getMemPraCarInk());
            $order->setMemPraCarPaper($order_form_data->getMemPraCarPaper());
            $order->setMemPraCarCustomVerse($order_form_data->getMemPraCarCustomVerse());

            // Memorial Bookmark Obituary
            $order->setMemBookObiQuantity($order_form_data->getMemBookObiQuantity());
            $order->setMemBookObiPaper($order_form_data->getMemBookObiPaper());
            $order->setMemBookObiTasselColor($order_form_data->getMemBookObiTasselColor());
            $order->setMemBookObiObituaryFile($order_form_data->getMemBookObiObituaryFile());

            // Donation Cards With Envelopes 
            $order->setDonCarEnvQuantity($order_form_data->getDonCarEnvQuantity());
            $order->setDonCarEnvDonationInformation($order_form_data->getDonCarEnvDonationInformation());
            $order->setDonCarEnvStreet($order_form_data->getDonCarEnvStreet());
            $order->setDonCarEnvCity($order_form_data->getDonCarEnvCity());
            $order->setDonCarEnvState($order_form_data->getDonCarEnvState());
            $order->setDonCarEnvZip($order_form_data->getDonCarEnvZip());

            // Funeral Programs
            $order->setFunProQuantity($order_form_data->getFunProQuantity());
            $order->setFunProPaper($order_form_data->getFunProPaper());
            $order->setFunProPhoto($order_form_data->getFunProPhoto());
            $order->setFunProSpecialInstructions($order_form_data->getFunProSpecialInstructions());


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
