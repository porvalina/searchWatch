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

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'searchWatches')]
    private User|null $user = null;

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): void
    {
        $this->text = $text;
    }

    public function getCreated(): DateTime
    {
        return $this->created;
    }

    public function setCreated(DateTime $created): void
    {
        $this->created = $created;
    }

    public function setUser(User $user): void
    {
        $this->user = $user;
    }
    
}