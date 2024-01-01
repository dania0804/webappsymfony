<?php

namespace App\Entity;

use App\Repository\CouponsTypesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CouponsTypesRepository::class)]
class CouponsTypes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $name = null;

    #[ORM\OneToMany(mappedBy: 'coupons_types', targetEntity: Coupppons::class, orphanRemoval: true)]
    private Collection $coupppons;

    public function __construct()
    {
        $this->coupppons = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, Coupppons>
     */
    public function getCoupppons(): Collection
    {
        return $this->coupppons;
    }

    public function addCoupppon(Coupppons $coupppon): static
    {
        if (!$this->coupppons->contains($coupppon)) {
            $this->coupppons->add($coupppon);
            $coupppon->setCouponsTypes($this);
        }

        return $this;
    }

    public function removeCoupppon(Coupppons $coupppon): static
    {
        if ($this->coupppons->removeElement($coupppon)) {
            // set the owning side to null (unless already changed)
            if ($coupppon->getCouponsTypes() === $this) {
                $coupppon->setCouponsTypes(null);
            }
        }

        return $this;
    }
}
