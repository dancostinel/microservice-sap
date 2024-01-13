<?php

namespace App\Entity;

use App\Repository\BrRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BrRepository::class)]
class Br
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $startDate = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $endDate = null;

    #[ORM\Column]
    private ?int $accordType = null;

    #[ORM\Column]
    private ?float $value = null;

    #[ORM\Column]
    private ?int $type = null;

    #[ORM\Column(nullable: true)]
    private ?int $productId = null;

    #[ORM\Column(nullable: true)]
    private ?int $categoryId = null;

    #[ORM\Column(nullable: true)]
    private ?int $brandId = null;

    #[ORM\Column]
    private ?int $supplierId = null;

    #[ORM\Column]
    private ?float $calculatedValue = null;

    #[ORM\Column(options: ['default' => 0])]
    private bool $isActive = false;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(\DateTimeInterface $startDate): static
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->endDate;
    }

    public function setEndDate(\DateTimeInterface $endDate): static
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function getAccordType(): ?int
    {
        return $this->accordType;
    }

    public function setAccordType(int $accordType): static
    {
        $this->accordType = $accordType;

        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(float $value): static
    {
        $this->value = $value;

        return $this;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(int $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getProductId(): ?int
    {
        return $this->productId;
    }

    public function setProductId(?int $productId): static
    {
        $this->productId = $productId;

        return $this;
    }

    public function getCategoryId(): ?int
    {
        return $this->categoryId;
    }

    public function setCategoryId(?int $categoryId): static
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    public function getBrandId(): ?int
    {
        return $this->brandId;
    }

    public function setBrandId(?int $brandId): static
    {
        $this->brandId = $brandId;

        return $this;
    }

    public function getSupplierId(): ?int
    {
        return $this->supplierId;
    }

    public function setSupplierId(int $supplierId): static
    {
        $this->supplierId = $supplierId;

        return $this;
    }

    public function getCalculatedValue(): ?float
    {
        return $this->calculatedValue;
    }

    public function setCalculatedValue(float $calculatedValue): static
    {
        $this->calculatedValue = $calculatedValue;

        return $this;
    }

    public function isIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): static
    {
        $this->isActive = $isActive;

        return $this;
    }
}
