<?php

namespace App\Entity;

use ApiPlatform\Doctrine\Orm\Filter\BooleanFilter;
use ApiPlatform\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Metadata\ApiFilter;
use ApiPlatform\Metadata\ApiResource;
use App\Repository\PhotoRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ApiFilter (SearchFilter::class, properties: ['RefProduit' => 'exact'])]
#[ApiFilter(BooleanFilter::class, properties: ['majorPicture'])]
#[ApiResource(normalizationContext: [
    'groups' => ['photos:read'],
])]
#[ORM\Entity(repositoryClass: PhotoRepository::class)]
class Photo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['photos:read'])]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Groups(['photos:read'])]
    private ?string $src = null;

    #[ORM\Column]
    #[Groups(['photos:read'])]
    private ?bool $isprimary = null;

    #[ORM\ManyToOne(inversedBy: 'photos')]
    #[Groups(['photos:read'])]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups(['photos:read'])]
    private ?Produit $RefProduit = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSrc(): ?string
    {
        return $this->src;
    }

    public function setSrc(string $src): self
    {
        $this->src = $src;

        return $this;
    }

    public function isIsprimary(): ?bool
    {
        return $this->isprimary;
    }

    public function setIsprimary(bool $isprimary): self
    {
        $this->isprimary = $isprimary;

        return $this;
    }

    public function getRefProduit(): ?Produit
    {
        return $this->RefProduit;
    }

    public function setRefProduit(?Produit $RefProduit): self
    {
        $this->RefProduit = $RefProduit;

        return $this;
    }
}
