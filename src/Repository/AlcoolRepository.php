<?php

namespace App\Repository;

use App\Entity\Alcool;
use Core\Attributes\TargetEntity;
use Core\Repository\Repository;

#[TargetEntity(name: Alcool::class)]
class AlcoolRepository extends Repository
{
    public function save(Alcool $alcool)
    {
        $query = $this->pdo->prepare("INSERT INTO $this->tableName SET name = :name, description = :description, degree = :degree");

        $query->execute([
            ":name" => $alcool->getName(),
            ":description" => $alcool->getDescription(),
            ":degree" => $alcool->getDegree()
        ]);
    }

}