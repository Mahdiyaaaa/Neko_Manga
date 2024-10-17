<?php

namespace App\Entity;

use App\Repository\SeriesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SeriesRepository::class)]
class Series
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $total_volumes = null;

    /**
     * @var Collection<int, Mangas>
     */
    #[ORM\OneToMany(targetEntity: Mangas::class, mappedBy: 'manga_serie', orphanRemoval: true)]
    private Collection $mangas;

    /**
     * @var Collection<int, UserCollec>
     */
    #[ORM\OneToMany(targetEntity: UserCollec::class, mappedBy: 'usercollec_serie')]
    private Collection $userCollecs;

    #[ORM\Column(length: 150)]
    private ?string $serie_title = null;

    public function __construct()
    {
        $this->mangas = new ArrayCollection();
        $this->userCollecs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTotalVolumes(): ?int
    {
        return $this->total_volumes;
    }

    public function setTotalVolumes(int $total_volumes): static
    {
        $this->total_volumes = $total_volumes;

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
            $manga->setMangaSerie($this);
        }

        return $this;
    }

    public function removeManga(Mangas $manga): static
    {
        if ($this->mangas->removeElement($manga)) {
            // set the owning side to null (unless already changed)
            if ($manga->getMangaSerie() === $this) {
                $manga->setMangaSerie(null);
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
            $userCollec->setUsercollecSerie($this);
        }

        return $this;
    }

    public function removeUserCollec(UserCollec $userCollec): static
    {
        if ($this->userCollecs->removeElement($userCollec)) {
            // set the owning side to null (unless already changed)
            if ($userCollec->getUsercollecSerie() === $this) {
                $userCollec->setUsercollecSerie(null);
            }
        }

        return $this;
    }

    public function getSerieTitle(): ?string
    {
        return $this->serie_title;
    }

    public function setSerieTitle(string $serie_title): static
    {
        $this->serie_title = $serie_title;

        return $this;
    }
}
