<?php

namespace App\Entity;

use App\Repository\StatusRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StatusRepository::class)]
class Status
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30)]
    private ?string $name_statu = null;

    /**
     * @var Collection<int, UserCollec>
     */
    #[ORM\OneToMany(targetEntity: UserCollec::class, mappedBy: 'satut', orphanRemoval: true)]
    private Collection $userCollecs;

    public function __construct()
    {
        $this->userCollecs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameStatu(): ?string
    {
        return $this->name_statu;
    }

    public function setNameStatu(string $name_statu): static
    {
        $this->name_statu = $name_statu;

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
            $userCollec->setSatut($this);
        }

        return $this;
    }

    public function removeUserCollec(UserCollec $userCollec): static
    {
        if ($this->userCollecs->removeElement($userCollec)) {
            // set the owning side to null (unless already changed)
            if ($userCollec->getSatut() === $this) {
                $userCollec->setSatut(null);
            }
        }

        return $this;
    }
}
