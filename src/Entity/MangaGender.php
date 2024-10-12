<?php

namespace App\Entity;

use App\Repository\MangaGenderRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MangaGenderRepository::class)]
class MangaGender
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30)]
    private ?string $name_gender = null;

    /**
     * @var Collection<int, Mangas>
     */
    #[ORM\ManyToMany(targetEntity: Mangas::class, mappedBy: 'gender')]
    private Collection $mangas;

    public function __construct()
    {
        $this->mangas = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameGender(): ?string
    {
        return $this->name_gender;
    }

    public function setNameGender(string $name_gender): static
    {
        $this->name_gender = $name_gender;

        return $this;
    }

    /**
     * @return Collection<int, Mangas>
     */
    public function getMangas(): Collection
    {
        return $this->mangas;
    }

    public function addManga(Mangas $manga): static
    {
        if (!$this->mangas->contains($manga)) {
            $this->mangas->add($manga);
            $manga->addGender($this);
        }

        return $this;
    }

    public function removeManga(Mangas $manga): static
    {
        if ($this->mangas->removeElement($manga)) {
            $manga->removeGender($this);
        }

        return $this;
    }
}
