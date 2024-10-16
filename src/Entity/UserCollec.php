<?php

namespace App\Entity;

use App\Repository\UserCollecRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserCollecRepository::class)]
class UserCollec
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $rating = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $owned_volumes = null;

    #[ORM\ManyToOne(inversedBy: 'userCollecs')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Status $satut = null;

    #[ORM\ManyToOne(inversedBy: 'userCollecs')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Users $user = null;

    #[ORM\ManyToOne(inversedBy: 'userCollecs')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Series $usercollec_serie = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRating(): ?int
    {
        return $this->rating;
    }

    public function setRating(?int $rating): static
    {
        $this->rating = $rating;

        return $this;
    }

    public function getOwnedVolumes(): ?int
    {
        return $this->owned_volumes;
    }

    public function setOwnedVolumes(int $owned_volumes): static
    {
        $this->owned_volumes = $owned_volumes;

        return $this;
    }

    public function getSatut(): ?Status
    {
        return $this->satut;
    }

    public function setSatut(?Status $satut): static
    {
        $this->satut = $satut;

        return $this;
    }

    public function getUser(): ?Users
    {
        return $this->user;
    }

    public function setUser(?Users $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getUsercollecSerie(): ?Series
    {
        return $this->usercollec_serie;
    }

    public function setUsercollecSerie(?Series $usercollec_serie): static
    {
        $this->usercollec_serie = $usercollec_serie;

        return $this;
    }

}
