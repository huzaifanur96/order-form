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
}
