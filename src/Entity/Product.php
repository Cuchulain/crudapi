<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ApiResource]
#[ORM\Entity]
class Product
{
                #[ORM\Id]
                #[ORM\GeneratedValue]
                #[ORM\Column(type: "integer")]
                private $id;

                #[ORM\Column(type: "string", length: 255)]
                #[Assert\NotBlank]
                #[Assert\Length(min: 5)]
                private $name;

                // další pole a getter/setter metody...
}
