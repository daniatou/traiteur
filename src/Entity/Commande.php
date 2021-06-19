<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommandeRepository::class)
 */
class Commande
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
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telephone;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_reception;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_convives;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $salle_reception;

    /**
     * @ORM\Column(type="string")
     */
    private $adresse_reception;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type_ceremonie;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="commandes")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity=Menu::class, inversedBy="commandes")
     */
    private $menu;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getDateReception(): ?\DateTimeInterface
    {
        return $this->date_reception;
    }

    public function setDateReception(\DateTimeInterface $date_reception): self
    {
        $this->date_reception = $date_reception;

        return $this;
    }

    public function getNombreConvives(): ?int
    {
        return $this->nombre_convives;
    }

    public function setNombreConvives(int $nombre_convives): self
    {
        $this->nombre_convives = $nombre_convives;

        return $this;
    }

    public function getSalleReception(): ?string
    {
        return $this->salle_reception;
    }

    public function setSalleReception(string $salle_reception): self
    {
        $this->salle_reception = $salle_reception;

        return $this;
    }

    public function getAdresseReception(): ?string
    {
        return $this->adresse_reception;
    }

    public function setAdresseReception(string $adresse_reception): self
    {
        $this->adresse_reception = $adresse_reception;

        return $this;
    }

    public function getTypeCeremonie(): ?string
    {
        return $this->type_ceremonie;
    }

    public function setTypeCeremonie(string $type_ceremonie): self
    {
        $this->type_ceremonie = $type_ceremonie;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getMenu(): ?Menu
    {
        return $this->menu;
    }

    public function setMenu(?Menu $menu): self
    {
        $this->menu = $menu;

        return $this;
    }
}
