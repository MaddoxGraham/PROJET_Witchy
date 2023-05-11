<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
use App\Repository\FactureRepository;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: FactureRepository::class)]
// #[ApiResource(normalizationContext: [
//     'groups' => ['factures:read'],
// ])]
class Facture
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['factures:read'])]
    private ?int $id = null;

    #[ORM\Column]
    #[Groups(['factures:read'])]
    private ?int $delaiPaiement = null;

    #[ORM\Column(length: 255)]
    #[Groups(['factures:read'])]
    private ?string $modePaiement = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Groups(['factures:read'])]
    private ?\DateTimeInterface $datePaiement = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]

    private ?commande $idCom = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?adresse $idAdresse = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDelaiPaiement(): ?int
    {
        return $this->delaiPaiement;
    }

    public function setDelaiPaiement(int $delaiPaiement): self
    {
        $this->delaiPaiement = $delaiPaiement;

        return $this;
    }

    public function getModePaiement(): ?string
    {
        return $this->modePaiement;
    }

    public function setModePaiement(string $modePaiement): self
    {
        $this->modePaiement = $modePaiement;

        return $this;
    }

    public function getDatePaiement(): ?\DateTimeInterface
    {
        return $this->datePaiement;
    }

    public function setDatePaiement(\DateTimeInterface $datePaiement): self
    {
        $this->datePaiement = $datePaiement;

        return $this;
    }

    public function getIdCom(): ?commande
    {
        return $this->idCom;
    }

    public function setIdCom(commande $idCom): self
    {
        $this->idCom = $idCom;

        return $this;
    }

    public function getIdAdresse(): ?adresse
    {
        return $this->idAdresse;
    }

    public function setIdAdresse(?adresse $idAdresse): self
    {
        $this->idAdresse = $idAdresse;

        return $this;
    }
}