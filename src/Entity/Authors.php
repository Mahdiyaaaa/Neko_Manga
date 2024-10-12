<?php

namespace App\Entity;

use App\Repository\AuthorsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AuthorsRepository::class)]
class Authors
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 60)]
    private ?string $name_author = null;

    /**
     * @var Collection<int, Mangas>
     */
    #[ORM\OneToMany(targetEntity: Mangas::class, mappedBy: 'id_author')]
    private Collection $mangas;

    public function __construct()
    {
        $this->mangas = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameAuthor(): ?string
    {
        return $this->name_author;
    }

    public function setNameAuthor(string $name_author): static
    {
        $this->name_author = $name_author;

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
            $manga->setIdAuthor($this);
        }

        return $this;
    }

    public function removeManga(Mangas $manga): static
    {
        if ($this->mangas->removeElement($manga)) {
            // set the owning side to null (unless already changed)
            if ($manga->getIdAuthor() === $this) {
                $manga->setIdAuthor(null);
            }
        }

        return $this;
    }
}
