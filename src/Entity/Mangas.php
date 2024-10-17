<?php

namespace App\Entity;

use App\Repository\MangasRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MangasRepository::class)]
class Mangas
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $title = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $publication_date = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $synopsis = null;

    #[ORM\Column(length: 255)]
    private ?string $manga_cover = null;

    #[ORM\Column(nullable: true)]
    private ?float $average_rating = null;

    #[ORM\ManyToOne(inversedBy: 'mangas')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Authors $id_author = null;

    /**
     * @var Collection<int, MangaGender>
     */
    #[ORM\ManyToMany(targetEntity: MangaGender::class, inversedBy: 'mangas')]
    private Collection $gender;

    #[ORM\ManyToOne(inversedBy: 'mangas')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Series $manga_serie = null;

    public function __construct()
    {
        $this->gender = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getPublicationDate(): ?\DateTimeInterface
    {
        return $this->publication_date;
    }

    public function setPublicationDate(\DateTimeInterface $publication_date): static
    {
        $this->publication_date = $publication_date;

        return $this;
    }

    public function getSynopsis(): ?string
    {
        return $this->synopsis;
    }

    public function setSynopsis(string $synopsis): static
    {
        $this->synopsis = $synopsis;

        return $this;
    }


    public function getMangaCover(): ?string
    {
        return $this->manga_cover;
    }

    public function setMangaCover(string $manga_cover): static
    {
        $this->manga_cover = $manga_cover;

        return $this;
    }

    public function getAverageRating(): ?float
    {
        return $this->average_rating;
    }

    public function setAverageRating(?float $average_rating): static
    {
        $this->average_rating = $average_rating;

        return $this;
    }

    public function getIdAuthor(): ?Authors
    {
        return $this->id_author;
    }

    public function setIdAuthor(?Authors $id_author): static
    {
        $this->id_author = $id_author;

        return $this;
    }

    /**
     * @return Collection<int, MangaGender>
     */
    public function getGender(): Collection
    {
        return $this->gender;
    }

    public function addGender(MangaGender $gender): static
    {
        if (!$this->gender->contains($gender)) {
            $this->gender->add($gender);
        }

        return $this;
    }

    public function removeGender(MangaGender $gender): static
    {
        $this->gender->removeElement($gender);

        return $this;
    }

    public function getMangaSerie(): ?Series
    {
        return $this->manga_serie;
    }

    public function setMangaSerie(?Series $manga_serie): static
    {
        $this->manga_serie = $manga_serie;

        return $this;
    }
}
