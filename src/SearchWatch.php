<?php

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'watches')]
class SearchWatch
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int|null $id = null;

    /** @var string */
    #[ORM\Column(type: 'string')]
    private string $text;

    #[ORM\Column(type: 'datetime')]
    private DateTime $created;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'watches')]
    private User|null $user = null;
}