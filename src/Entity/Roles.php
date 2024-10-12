<?php

namespace App\Entity;

use App\Repository\RolesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RolesRepository::class)]
class Roles
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30)]
    private ?string $name_role = null;

    /**
     * @var Collection<int, Users>
     */
    #[ORM\OneToMany(targetEntity: Users::class, mappedBy: 'id_role')]
    private Collection $user_role;

    public function __construct()
    {
        $this->user_role = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameRole(): ?string
    {
        return $this->name_role;
    }

    public function setNameRole(string $name_role): static
    {
        $this->name_role = $name_role;

        return $this;
    }

    /**
     * @return Collection<int, Users>
     */
    public function getUserRole(): Collection
    {
        return $this->user_role;
    }

    public function addUserRole(Users $userRole): static
    {
        if (!$this->user_role->contains($userRole)) {
            $this->user_role->add($userRole);
            $userRole->setIdRole($this);
        }

        return $this;
    }

    public function removeUserRole(Users $userRole): static
    {
        if ($this->user_role->removeElement($userRole)) {
            // set the owning side to null (unless already changed)
            if ($userRole->getIdRole() === $this) {
                $userRole->setIdRole(null);
            }
        }

        return $this;
    }
}
