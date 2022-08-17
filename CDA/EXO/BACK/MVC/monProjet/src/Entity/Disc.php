<?php

namespace App\Entity;

use App\Entity\Artist;
use App\Entity\Comments;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\DiscRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: DiscRepository::class)]
#[ApiResource(
    itemOperations: ["get" => ["normalizationContext" => ["groups"=> "read:disc"]]]
)]
class Disc
{
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    #[Groups(['read:disc'])]
    private $title;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    #[Groups(['read:disc'])]    
    private $picture;

    #[ORM\Column(type: 'string', length: 255)]
    #[Groups(['read:disc'])]
    private $label;

    #[ORM\ManyToOne(targetEntity: Artist::class, inversedBy: 'discs')]
    #[Groups(['read:disc'])]
    private $artist;

    #[ORM\OneToMany(mappedBy: 'disc', targetEntity: Comments::class )]
    private $comments;

    public function __construct()
    {
        $this->comments = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(?string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getArtist(): ?Artist
    {
        return $this->artist;
    }

    public function setArtist(?Artist $artist): self
    {
        $this->artist = $artist;

        return $this;
    }

    public function __toString(): string
    { 
        return $this->getTitle();        
    }

    /**
     * @return Collection<int, Comments>
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function addComment(Comments $comment): self
    {
        if (!$this->comments->contains($comment)) {
            $this->comments[] = $comment;
            $comment->setDisc($this);
        }

        return $this;
    }

    public function removeComment(Comments $comment): self
    {
        if ($this->comments->removeElement($comment)) {
            // set the owning side to null (unless already changed)
            if ($comment->getDisc() === $this) {
                $comment->setDisc(null);
            }
        }

        return $this;
    }
}
