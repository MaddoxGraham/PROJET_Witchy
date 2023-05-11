<?php

namespace App\Entity;

use App\Repository\HistoriqueRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HistoriqueRepository::class)]
class Historique
{

    #[ORM\Id]
    #[ORM\ManyToOne(inversedBy: 'historiques')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Client $idClient = null;

    #[ORM\Id]
    #[ORM\ManyToOne(inversedBy: 'historiques')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Commande $idCom = null;

    #[ORM\Column(length: 255)]
    private ?string $NomHistorique = null;

    #[ORM\Column(length: 255)]
    private ?string $PrenomHistorique = null;

    #[ORM\Column(length: 255)]
    private ?string $MailHistorique = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $TelephoneHistorique = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $RaisonSocialeHistorique = null;



    public function getIdClient(): ?Client
    {
        return $this->idClient;
    }

    public function setIdClient(?Client $idClient): self
    {
        $this->idClient = $idClient;

        return $this;
    }

    public function getIdCom(): ?Commande
    {
        return $this->idCom;
    }

    public function setIdCom(?Commande $idCom): self
    {
        $this->idCom = $idCom;

        return $this;
    }

    public function getNomHistorique(): ?string
    {
        return $this->NomHistorique;
    }

    public function setNomHistorique(string $NomHistorique): self
    {
        $this->NomHistorique = $NomHistorique;

        return $this;
    }

    public function getPrenomHistorique(): ?string
    {
        return $this->PrenomHistorique;
    }

    public function setPrenomHistorique(string $PrenomHistorique): self
    {
        $this->PrenomHistorique = $PrenomHistorique;

        return $this;
    }

    public function getMailHistorique(): ?string
    {
        return $this->MailHistorique;
    }

    public function setMailHistorique(string $MailHistorique): self
    {
        $this->MailHistorique = $MailHistorique;

        return $this;
    }

    public function getTelephoneHistorique(): ?string
    {
        return $this->TelephoneHistorique;
    }

    public function setTelephoneHistorique(?string $TelephoneHistorique): self
    {
        $this->TelephoneHistorique = $TelephoneHistorique;

        return $this;
    }

    public function getRaisonSocialeHistorique(): ?string
    {
        return $this->RaisonSocialeHistorique;
    }

    public function setRaisonSocialeHistorique(?string $RaisonSocialeHistorique): self
    {
        $this->RaisonSocialeHistorique = $RaisonSocialeHistorique;

        return $this;
    }
}
