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
            // funeral home name
            'funeral_home_name' => $order->getFuneralHomeName(),
            'funeral_home_contact' => $order->getFuneralHomeContact(),
            'funeral_home_date' => $order->getFuneralHomeDate(),
            'funeral_home_street' => $order->getFuneralHomeStreet(),
            'funeral_home_city' => $order->getFuneralHomeCity(),
            'funeral_home_state' => $order->getFuneralHomeState(),
            'funeral_home_zip' => $order->getFuneralHomeZip(),
            'funeral_home_telephone' => $order->getFuneralHomeTelephone(),
            'funeral_home_email' => $order->getFuneralHomeEmail(),
            'funeral_home_ship_merchandise_to' => $order->getFuneralHomeShipMerchandiseTo(),
            // Deceased information
            'full_name_of_deceased' => $order->getFullNameOfDeceased(),
            'deceased_date_of_birth' => $order->getDeceasedDateOfBirth(),
            'deceased_date_of_death' => $order->getDeceasedDateOfDeath(),
            'deceased_interment_information' => $order->getDeceasedIntermentInformation(),
            // Family contact
            'family_contact_name' => $order->getFamilyContactName(),
            'family_contact_street' => $order->getFamilyContactStreet(),
            'family_contact_city' => $order->getFamilyContactCity(),
            'family_contact_state' => $order->getFamilyContactState(),
            'family_contact_zip' => $order->getFamilyContactZip(),
            'family_contact_telephone' => $order->getFamilyContactTelephone(),
            'family_contact_email' => $order->getFamilyContactEmail(),
            // Sympathy acknowledgement
            'sym_ack_quantity' => $order->getSymAckQuantity(),
            'sym_ack_sentiment' => $order->getSymAckSentiment(),
            'sym_ack_font' => $order->getSymAckFont(),
            'sym_ack_font_ink' => $order->getSymAckFontInk(),
            'sym_ack_motif' => $order->getSymAckMotif(),
            'sym_ack_motif_ink' => $order->getSymAckMotifInk(),
            'sym_ack_paper' => $order->getSymAckPaper(),
            // Return address Imprint
            'ret_add_imp_street' => $order->getRetAddImpStreet(),
            'ret_add_imp_city' => $order->getRetAddImpCity(),
            'ret_add_imp_state' => $order->getRetAddImpState(),
            'ret_add_imp_zip' => $order->getRetAddImpZip(),
            // remembrance portrait
            'rem_por_style' => $order->getremPorStyle(),
            'rem_por_size' => $order->getremPorSize(),
            'rem_por_photo' => $order->getremPorPhoto(),
            'rem_por_special_instructions' => $order->getremPorSpecialInstructions(),
            // memorial prayer cards
            'mem_pra_car_quantity' => $order->getMemPraCarQuantity(),
            'mem_pra_car_style' => $order->getMemPraCarStyle(),
            'mem_pra_car_verse' => $order->getMemPraCarVerse(),
            'mem_pra_car_ink' => $order->getMemPraCarInk(),
            'mem_pra_car_paper' => $order->getMemPraCarPaper(),
            'mem_pra_car_custom_verse' => $order->getMemPraCarCustomVerse(),
            // Memorial bookmark obituary
            'mem_book_obi_quantity' => $order->getMemBookObiQuantity(),
            'mem_book_obi_paper' => $order->getMemBookObiPaper(),
            'mem_book_obi_tassel_color' => $order->getMemBookObiTasselColor(),
            'mem_book_obi_obituary_file' => $order->getMemBookObiObituaryFile(),
            // Donation cards with envelopes
            'don_car_env_quantity' => $order->getDonCarEnvQuantity(),
            'don_car_env_donation_information' => $order->getDonCarEnvDonationInformation(),
            'don_car_env_street' => $order->getDonCarEnvStreet(),
            'don_car_env_city' => $order->getDonCarEnvCity(),
            'don_car_env_state' => $order->getDonCarEnvState(),
            'don_car_env_zip' => $order->getDonCarEnvZip(),
            // funeral programs
            'fun_pro_quantity' => $order->getFunProQuantity(),
            'fun_pro_paper' => $order->getFunProPaper(),
            'fun_pro_photo' => $order->getFunProPhoto(),
            'fun_pro_special_instructions' => $order->getFunProSpecialInstructions(),
        ]);

    }
}
