<?php

namespace App\Entity;

use App\Repository\WishlistRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: WishlistRepository::class)]
class Wishlist
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Mangas $id_manga = null;

    #[ORM\ManyToOne(inversedBy: 'wishlists')]
    private ?Users $id_user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdManga(): ?Mangas
    {
        return $this->id_manga;
    }

    public function setIdManga(?Mangas $id_manga): static
    {
        $this->id_manga = $id_manga;

        return $this;
    }

    public function getIdUser(): ?Users
    {
        return $this->id_user;
    }

    public function setIdUser(?Users $id_user): static
    {
        $this->id_user = $id_user;

        return $this;
    }
}
