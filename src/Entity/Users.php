<?php

namespace App\Entity;

use App\Repository\UsersRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UsersRepository::class)]
class Users
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 60)]
    private ?string $username = null;

    #[ORM\Column(length: 150)]
    private ?string $mail = null;

    #[ORM\Column(length: 100)]
    private ?string $password = null;

    #[ORM\Column(length: 8, nullable: true)]
    private ?string $admin_code = null;

    #[ORM\ManyToOne(inversedBy: 'user_role')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Roles $id_role = null;

    /**
     * @var Collection<int, Wishlist>
     */
    #[ORM\OneToMany(targetEntity: Wishlist::class, mappedBy: 'id_user')]
    private Collection $wishlists;

    /**
     * @var Collection<int, UserCollec>
     */
    #[ORM\OneToMany(targetEntity: UserCollec::class, mappedBy: 'user', orphanRemoval: true)]
    private Collection $userCollecs;

    public function __construct()
    {
        $this->wishlists = new ArrayCollection();
        $this->userCollecs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): static
    {
        $this->username = $username;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): static
    {
        $this->mail = $mail;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    public function getAdminCode(): ?string
    {
        return $this->admin_code;
    }

    public function setAdminCode(?string $admin_code): static
    {
        $this->admin_code = $admin_code;

        return $this;
    }

    public function getIdRole(): ?Roles
    {
        return $this->id_role;
    }

    public function setIdRole(?Roles $id_role): static
    {
        $this->id_role = $id_role;

        return $this;
    }

    /**
     * @return Collection<int, Wishlist>
     */
    public function getWishlists(): Collection
    {
        return $this->wishlists;
    }

    public function addWishlist(Wishlist $wishlist): static
    {
        if (!$this->wishlists->contains($wishlist)) {
            $this->wishlists->add($wishlist);
            $wishlist->setIdUser($this);
        }

        return $this;
    }

    public function removeWishlist(Wishlist $wishlist): static
    {
        if ($this->wishlists->removeElement($wishlist)) {
            // set the owning side to null (unless already changed)
            if ($wishlist->getIdUser() === $this) {
                $wishlist->setIdUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, UserCollec>
     */
    public function getUserCollecs(): Collection
    {
        return $this->userCollecs;
    }

    public function addUserCollec(UserCollec $userCollec): static
    {
        if (!$this->userCollecs->contains($userCollec)) {
            $this->userCollecs->add($userCollec);
            $userCollec->setUser($this);
        }

        return $this;
    }

    public function removeUserCollec(UserCollec $userCollec): static
    {
        if ($this->userCollecs->removeElement($userCollec)) {
            // set the owning side to null (unless already changed)
            if ($userCollec->getUser() === $this) {
                $userCollec->setUser(null);
            }
        }

        return $this;
    }
}
