<?php

namespace App\Entity;

use App\Repository\OrderRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrderRepository::class)
 * @ORM\Table(name="`order`")
 */
class Order
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $funeralHomeName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $funeralHomeContact;

    /**
     * @ORM\Column(type="date")
     */
    private $funeralHomeDate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $funeralHomeStreet;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $funeralHomeCity;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $funeralHomeState;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $funeralHomeZip;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $funeralHomeTelephone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $funeralHomeEmail;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $funeralHomeShipMerchandiseTo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fullNameOfDeceased;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $deceasedDateOfBirth;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $deceasedDateOfDeath;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $deceasedIntermentInformation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $familyContactName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $familyContactStreet;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $familyContactCity;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $familyContactState;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $familyContactZip;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $familyContactTelephone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $familyContactEmail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $symAckQuantity;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $symAckSentiment;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $symAckFont;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $symAckFontInk;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $symAckMotif;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $symAckMotifInk;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $symAckPaper;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $retAddImpStreet;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $retAddImpCity;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $retAddImpState;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $retAddImpZip;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $remPorStyle;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $remPorSize;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $remPorPhoto;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $remPorSpecialInstructions;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $memPraCarQuantity;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $memPraCarStyle;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $memPraCarVerse;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $memPraCarInk;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $memPraCarPaper;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $memPraCarCustomVerse;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $memBookObiQuantity;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $memBookObiPaper;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $memBookObiTasselColor;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $memBookObiObituaryFile;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $donCarEnvQuantity;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $donCarEnvDonationInformation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $donCarEnvStreet;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $donCarEnvCity;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $donCarEnvState;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $donCarEnvZip;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $funProQuantity;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $funProPaper;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $funProPhoto;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $funProSpecialInstructions;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFuneralHomeName(): ?string
    {
        return $this->funeralHomeName;
    }

    public function setFuneralHomeName(string $funeralHomeName): self
    {
        $this->funeralHomeName = $funeralHomeName;

        return $this;
    }

    public function getFuneralHomeContact(): ?string
    {
        return $this->funeralHomeContact;
    }

    public function setFuneralHomeContact(string $funeralHomeContact): self
    {
        $this->funeralHomeContact = $funeralHomeContact;

        return $this;
    }

    public function getFuneralHomeDate(): ?\DateTimeInterface
    {
        return $this->funeralHomeDate;
    }

    public function setFuneralHomeDate(\DateTimeInterface $funeralHomeDate): self
    {
        $this->funeralHomeDate = $funeralHomeDate;

        return $this;
    }

    public function getFuneralHomeStreet(): ?string
    {
        return $this->funeralHomeStreet;
    }

    public function setFuneralHomeStreet(string $funeralHomeStreet): self
    {
        $this->funeralHomeStreet = $funeralHomeStreet;

        return $this;
    }

    public function getFuneralHomeCity(): ?string
    {
        return $this->funeralHomeCity;
    }

    public function setFuneralHomeCity(string $funeralHomeCity): self
    {
        $this->funeralHomeCity = $funeralHomeCity;

        return $this;
    }

    public function getFuneralHomeState(): ?string
    {
        return $this->funeralHomeState;
    }

    public function setFuneralHomeState(string $funeralHomeState): self
    {
        $this->funeralHomeState = $funeralHomeState;

        return $this;
    }

    public function getFuneralHomeZip(): ?string
    {
        return $this->funeralHomeZip;
    }

    public function setFuneralHomeZip(string $funeralHomeZip): self
    {
        $this->funeralHomeZip = $funeralHomeZip;

        return $this;
    }

    public function getFuneralHomeTelephone(): ?string
    {
        return $this->funeralHomeTelephone;
    }

    public function setFuneralHomeTelephone(string $funeralHomeTelephone): self
    {
        $this->funeralHomeTelephone = $funeralHomeTelephone;

        return $this;
    }

    public function getFuneralHomeEmail(): ?string
    {
        return $this->funeralHomeEmail;
    }

    public function setFuneralHomeEmail(string $funeralHomeEmail): self
    {
        $this->funeralHomeEmail = $funeralHomeEmail;

        return $this;
    }

    public function getFuneralHomeShipMerchandiseTo(): ?string
    {
        return $this->funeralHomeShipMerchandiseTo;
    }

    public function setFuneralHomeShipMerchandiseTo(string $funeralHomeShipMerchandiseTo): self
    {
        $this->funeralHomeShipMerchandiseTo = $funeralHomeShipMerchandiseTo;

        return $this;
    }

    public function getFullNameOfDeceased(): ?string
    {
        return $this->fullNameOfDeceased;
    }

    public function setFullNameOfDeceased(?string $fullNameOfDeceased): self
    {
        $this->fullNameOfDeceased = $fullNameOfDeceased;

        return $this;
    }

    public function getDeceasedDateOfBirth(): ?\DateTimeInterface
    {
        return $this->deceasedDateOfBirth;
    }

    public function setDeceasedDateOfBirth(?\DateTimeInterface $deceasedDateOfBirth): self
    {
        $this->deceasedDateOfBirth = $deceasedDateOfBirth;

        return $this;
    }

    public function getDeceasedDateOfDeath(): ?\DateTimeInterface
    {
        return $this->deceasedDateOfDeath;
    }

    public function setDeceasedDateOfDeath(?\DateTimeInterface $deceasedDateOfDeath): self
    {
        $this->deceasedDateOfDeath = $deceasedDateOfDeath;

        return $this;
    }

    public function getDeceasedIntermentInformation(): ?string
    {
        return $this->deceasedIntermentInformation;
    }

    public function setDeceasedIntermentInformation(?string $deceasedIntermentInformation): self
    {
        $this->deceasedIntermentInformation = $deceasedIntermentInformation;

        return $this;
    }

    public function getFamilyContactName(): ?string
    {
        return $this->familyContactName;
    }

    public function setFamilyContactName(?string $familyContactName): self
    {
        $this->familyContactName = $familyContactName;

        return $this;
    }

    public function getFamilyContactStreet(): ?string
    {
        return $this->familyContactStreet;
    }

    public function setFamilyContactStreet(?string $familyContactStreet): self
    {
        $this->familyContactStreet = $familyContactStreet;

        return $this;
    }

    public function getFamilyContactCity(): ?string
    {
        return $this->familyContactCity;
    }

    public function setFamilyContactCity(?string $familyContactCity): self
    {
        $this->familyContactCity = $familyContactCity;

        return $this;
    }

    public function getFamilyContactState(): ?string
    {
        return $this->familyContactState;
    }

    public function setFamilyContactState(?string $familyContactState): self
    {
        $this->familyContactState = $familyContactState;

        return $this;
    }

    public function getFamilyContactZip(): ?string
    {
        return $this->familyContactZip;
    }

    public function setFamilyContactZip(?string $familyContactZip): self
    {
        $this->familyContactZip = $familyContactZip;

        return $this;
    }

    public function getFamilyContactTelephone(): ?string
    {
        return $this->familyContactTelephone;
    }

    public function setFamilyContactTelephone(?string $familyContactTelephone): self
    {
        $this->familyContactTelephone = $familyContactTelephone;

        return $this;
    }

    public function getFamilyContactEmail(): ?string
    {
        return $this->familyContactEmail;
    }

    public function setFamilyContactEmail(?string $familyContactEmail): self
    {
        $this->familyContactEmail = $familyContactEmail;

        return $this;
    }

    public function getSymAckQuantity(): ?string
    {
        return $this->symAckQuantity;
    }

    public function setSymAckQuantity(?string $symAckQuantity): self
    {
        $this->symAckQuantity = $symAckQuantity;

        return $this;
    }

    public function getSymAckSentiment(): ?string
    {
        return $this->symAckSentiment;
    }

    public function setSymAckSentiment(?string $symAckSentiment): self
    {
        $this->symAckSentiment = $symAckSentiment;

        return $this;
    }

    public function getSymAckFont(): ?string
    {
        return $this->symAckFont;
    }

    public function setSymAckFont(?string $symAckFont): self
    {
        $this->symAckFont = $symAckFont;

        return $this;
    }

    public function getSymAckFontInk(): ?string
    {
        return $this->symAckFontInk;
    }

    public function setSymAckFontInk(?string $symAckFontInk): self
    {
        $this->symAckFontInk = $symAckFontInk;

        return $this;
    }

    public function getSymAckMotif(): ?string
    {
        return $this->symAckMotif;
    }

    public function setSymAckMotif(?string $symAckMotif): self
    {
        $this->symAckMotif = $symAckMotif;

        return $this;
    }

    public function getSymAckMotifInk(): ?string
    {
        return $this->symAckMotifInk;
    }

    public function setSymAckMotifInk(?string $symAckMotifInk): self
    {
        $this->symAckMotifInk = $symAckMotifInk;

        return $this;
    }

    public function getSymAckPaper(): ?string
    {
        return $this->symAckPaper;
    }

    public function setSymAckPaper(?string $symAckPaper): self
    {
        $this->symAckPaper = $symAckPaper;

        return $this;
    }

    public function getRetAddImpStreet(): ?string
    {
        return $this->retAddImpStreet;
    }

    public function setRetAddImpStreet(?string $retAddImpStreet): self
    {
        $this->retAddImpStreet = $retAddImpStreet;

        return $this;
    }

    public function getRetAddImpCity(): ?string
    {
        return $this->retAddImpCity;
    }

    public function setRetAddImpCity(?string $retAddImpCity): self
    {
        $this->retAddImpCity = $retAddImpCity;

        return $this;
    }

    public function getRetAddImpState(): ?string
    {
        return $this->retAddImpState;
    }

    public function setRetAddImpState(?string $retAddImpState): self
    {
        $this->retAddImpState = $retAddImpState;

        return $this;
    }

    public function getRetAddImpZip(): ?string
    {
        return $this->retAddImpZip;
    }

    public function setRetAddImpZip(?string $retAddImpZip): self
    {
        $this->retAddImpZip = $retAddImpZip;

        return $this;
    }

    public function getRemPorStyle(): ?string
    {
        return $this->remPorStyle;
    }

    public function setRemPorStyle(?string $remPorStyle): self
    {
        $this->remPorStyle = $remPorStyle;

        return $this;
    }

    public function getRemPorSize(): ?string
    {
        return $this->remPorSize;
    }

    public function setRemPorSize(?string $remPorSize): self
    {
        $this->remPorSize = $remPorSize;

        return $this;
    }

    public function getRemPorPhoto(): ?string
    {
        return $this->remPorPhoto;
    }

    public function setRemPorPhoto(?string $remPorPhoto): self
    {
        $this->remPorPhoto = $remPorPhoto;

        return $this;
    }

    public function getRemPorSpecialInstructions(): ?string
    {
        return $this->remPorSpecialInstructions;
    }

    public function setRemPorSpecialInstructions(?string $remPorSpecialInstructions): self
    {
        $this->remPorSpecialInstructions = $remPorSpecialInstructions;

        return $this;
    }

    public function getMemPraCarQuantity(): ?string
    {
        return $this->memPraCarQuantity;
    }

    public function setMemPraCarQuantity(?string $memPraCarQuantity): self
    {
        $this->memPraCarQuantity = $memPraCarQuantity;

        return $this;
    }

    public function getMemPraCarStyle(): ?string
    {
        return $this->memPraCarStyle;
    }

    public function setMemPraCarStyle(?string $memPraCarStyle): self
    {
        $this->memPraCarStyle = $memPraCarStyle;

        return $this;
    }

    public function getMemPraCarVerse(): ?string
    {
        return $this->memPraCarVerse;
    }

    public function setMemPraCarVerse(?string $memPraCarVerse): self
    {
        $this->memPraCarVerse = $memPraCarVerse;

        return $this;
    }

    public function getMemPraCarInk(): ?string
    {
        return $this->memPraCarInk;
    }

    public function setMemPraCarInk(?string $memPraCarInk): self
    {
        $this->memPraCarInk = $memPraCarInk;

        return $this;
    }

    public function getMemPraCarPaper(): ?string
    {
        return $this->memPraCarPaper;
    }

    public function setMemPraCarPaper(?string $memPraCarPaper): self
    {
        $this->memPraCarPaper = $memPraCarPaper;

        return $this;
    }

    public function getMemPraCarCustomVerse(): ?string
    {
        return $this->memPraCarCustomVerse;
    }

    public function setMemPraCarCustomVerse(?string $memPraCarCustomVerse): self
    {
        $this->memPraCarCustomVerse = $memPraCarCustomVerse;

        return $this;
    }

    public function getMemBookObiQuantity(): ?string
    {
        return $this->memBookObiQuantity;
    }

    public function setMemBookObiQuantity(?string $memBookObiQuantity): self
    {
        $this->memBookObiQuantity = $memBookObiQuantity;

        return $this;
    }

    public function getMemBookObiPaper(): ?string
    {
        return $this->memBookObiPaper;
    }

    public function setMemBookObiPaper(?string $memBookObiPaper): self
    {
        $this->memBookObiPaper = $memBookObiPaper;

        return $this;
    }

    public function getMemBookObiTasselColor(): ?string
    {
        return $this->memBookObiTasselColor;
    }

    public function setMemBookObiTasselColor(?string $memBookObiTasselColor): self
    {
        $this->memBookObiTasselColor = $memBookObiTasselColor;

        return $this;
    }

    public function getMemBookObiObituaryFile(): ?string
    {
        return $this->memBookObiObituaryFile;
    }

    public function setMemBookObiObituaryFile(?string $memBookObiObituaryFile): self
    {
        $this->memBookObiObituaryFile = $memBookObiObituaryFile;

        return $this;
    }

    public function getDonCarEnvQuantity(): ?string
    {
        return $this->donCarEnvQuantity;
    }

    public function setDonCarEnvQuantity(?string $donCarEnvQuantity): self
    {
        $this->donCarEnvQuantity = $donCarEnvQuantity;

        return $this;
    }

    public function getDonCarEnvDonationInformation(): ?string
    {
        return $this->donCarEnvDonationInformation;
    }

    public function setDonCarEnvDonationInformation(?string $donCarEnvDonationInformation): self
    {
        $this->donCarEnvDonationInformation = $donCarEnvDonationInformation;

        return $this;
    }

    public function getDonCarEnvStreet(): ?string
    {
        return $this->donCarEnvStreet;
    }

    public function setDonCarEnvStreet(?string $donCarEnvStreet): self
    {
        $this->donCarEnvStreet = $donCarEnvStreet;

        return $this;
    }

    public function getDonCarEnvCity(): ?string
    {
        return $this->donCarEnvCity;
    }

    public function setDonCarEnvCity(?string $donCarEnvCity): self
    {
        $this->donCarEnvCity = $donCarEnvCity;

        return $this;
    }

    public function getDonCarEnvState(): ?string
    {
        return $this->donCarEnvState;
    }

    public function setDonCarEnvState(?string $donCarEnvState): self
    {
        $this->donCarEnvState = $donCarEnvState;

        return $this;
    }

    public function getDonCarEnvZip(): ?string
    {
        return $this->donCarEnvZip;
    }

    public function setDonCarEnvZip(?string $donCarEnvZip): self
    {
        $this->donCarEnvZip = $donCarEnvZip;

        return $this;
    }

    public function getFunProQuantity(): ?string
    {
        return $this->funProQuantity;
    }

    public function setFunProQuantity(?string $funProQuantity): self
    {
        $this->funProQuantity = $funProQuantity;

        return $this;
    }

    public function getFunProPaper(): ?string
    {
        return $this->funProPaper;
    }

    public function setFunProPaper(?string $funProPaper): self
    {
        $this->funProPaper = $funProPaper;

        return $this;
    }

    public function getFunProPhoto(): ?string
    {
        return $this->funProPhoto;
    }

    public function setFunProPhoto(?string $funProPhoto): self
    {
        $this->funProPhoto = $funProPhoto;

        return $this;
    }

    public function getFunProSpecialInstructions(): ?string
    {
        return $this->funProSpecialInstructions;
    }

    public function setFunProSpecialInstructions(?string $funProSpecialInstructions): self
    {
        $this->funProSpecialInstructions = $funProSpecialInstructions;

        return $this;
    }
}
