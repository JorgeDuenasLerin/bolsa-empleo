<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CicloRepository")
 */
class Ciclo
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
    private $título;

    /**
     * @ORM\Column(type="text")
     */
    private $descripción;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imagen;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTítulo(): ?string
    {
        return $this->título;
    }

    public function setTítulo(string $título): self
    {
        $this->título = $título;

        return $this;
    }

    public function getDescripción(): ?string
    {
        return $this->descripción;
    }

    public function setDescripción(string $descripción): self
    {
        $this->descripción = $descripción;

        return $this;
    }

    public function getImagen(): ?string
    {
        return $this->imagen;
    }

    public function setImagen(?string $imagen): self
    {
        $this->imagen = $imagen;

        return $this;
    }
}
