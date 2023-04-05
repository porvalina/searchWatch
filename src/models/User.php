<?php

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'users')]
class User
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int|null $id = null;
    
    /** @var string */
    #[ORM\Column(type: 'string')]
    private string $email;

    /** @var string */
    #[ORM\Column(type: 'string')]
    private string $password;

    public function getId(): int|null
    {
        return $this->id;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function addToUser(SearchWatch $searchWatches): void
    {
        $this->searchWatches[] = $searchWatches;
    }

    /** @return Collection<int, SearchWatch> */
    public function getSearchWatches(): Collection
    {
        return $this->watches;
    }

    /** @var Collection<int, SearchWatch> */
    private Collection $searchWatches;

    public function __construct()
    {
        $this->searchWatches = new ArrayCollection();
    }
}