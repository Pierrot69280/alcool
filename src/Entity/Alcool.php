<?php

namespace App\Entity;

use App\Repository\AlcoolRepository;
use Core\Attributes\Table;
use Core\Attributes\TargetRepository;

#[Table(name: 'alcool')]
#[TargetRepository(name: AlcoolRepository::class)]
class Alcool
{
    private int $id;
    private string $name;
    private string $description;
    private float $degree;

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getDegree(): float
    {
        return $this->degree;
    }

    public function setDegree(float $degree): void
    {
        $this->degree = $degree;
    }


}