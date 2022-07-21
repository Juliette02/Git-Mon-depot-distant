<?php

namespace App\Entity;

use App\Entity\Disc;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\CommentsRepository;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CommentsRepository::class)]

// On lance 'composer rep api' dans le terminale pour lancer l'installation de l'API
// Puis on ajoute #[ApiResource()] pour avoir accés à la page API
#[ApiResource(
    //On peut filtrer les points d'entrés en passant des paramètres dans l'annotation :
    // 'collectionOperations={""}' Permet de filtrer les méthodes sur tous les commentaires.
    // 'itemOperations{""}' Permet de filtrer les méthodes sur un commentaire un particulier.

    // Exemple, nous voulons uniquement garder les méthodes pour récupérer tous les commentaires,
    // ainsi qu'un unique commentaire :
       /* collectionOperations: ['get'], */
        itemOperations: ["get" => ["normalizationContext" => ["groups"=> "read:comment"]]]
       /* order: [condition] */
)]

class Comments
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'text')]
    #[Assert\NotBlank()]

    // On crée des groups 
    #[Groups(['read:comment'])]
    private $content;

    #[ORM\Column(type: 'boolean')]
    private $active = false;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank]
    #[Groups(['read:comment'])]
    private $niskname;

    #[ORM\Column(type: 'datetime')]
    #[Groups(['read:comment'])]
    private $created_at;

    #[ORM\Column(type: 'boolean')]
    private $rgpd;

    #[ORM\ManyToOne(targetEntity: Disc::class, inversedBy: 'comments')]
    #[ORM\JoinColumn(nullable: false)]
    private $disc;

    public function __construct()
    {
        $this->replies = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function isActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getNiskname(): ?string
    {
        return $this->niskname;
    }

    public function setNiskname(string $niskname): self
    {
        $this->niskname = $niskname;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function isRgpd(): ?bool
    {
        return $this->rgpd;
    }

    public function setRgpd(bool $rgpd): self
    {
        $this->rgpd = $rgpd;

        return $this;
    }

    public function getDisc(): ?Disc
    {
        return $this->disc;
    }

    public function setDisc(?Disc $disc): self
    {
        $this->disc = $disc;

        return $this;
    }
}
