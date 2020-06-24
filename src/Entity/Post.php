<?php

namespace App\Entity;

use App\Repository\PostRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PostRepository::class)
 */
class Post
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     */
    private $yearEvent;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $categorySport;

    /**
     * @ORM\Column(type="text")
     */
    private $urlImage;

    /**
     * @ORM\Column(type="date")
     */
    private $datepost;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getYearEvent(): ?int
    {
        return $this->yearEvent;
    }

    public function setYearEvent(int $yearEvent): self
    {
        $this->yearEvent = $yearEvent;

        return $this;
    }

    public function getCategorySport(): ?string
    {
        return $this->categorySport;
    }

    public function setCategorySport(string $categorySport): self
    {
        $this->categorySport = $categorySport;

        return $this;
    }

    public function getUrlImage(): ?string
    {
        return $this->urlImage;
    }

    public function setUrlImage(string $urlImage): self
    {
        $this->urlImage = $urlImage;

        return $this;
    }

    public function getDatepost(): ?\DateTimeInterface
    {
        return $this->datepost;
    }

    public function setDatepost(\DateTimeInterface $datepost): self
    {
        $this->datepost = $datepost;

        return $this;
    }
}
