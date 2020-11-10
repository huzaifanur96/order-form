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
}
