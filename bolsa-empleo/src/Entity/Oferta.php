<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OfertaRepository")
 */
class Oferta
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
     * @ORM\Column(type="string", length=255)
     */
    private $empresa;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adminemail;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $admintoken;

    /**
     * @ORM\Column(type="boolean")
     */
    private $aceptada;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fichero;

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

    public function getEmpresa(): ?string
    {
        return $this->empresa;
    }

    public function setEmpresa(string $empresa): self
    {
        $this->empresa = $empresa;

        return $this;
    }

    public function getAdminemail(): ?string
    {
        return $this->adminemail;
    }

    public function setAdminemail(string $adminemail): self
    {
        $this->adminemail = $adminemail;

        return $this;
    }

    public function getAdmintoken(): ?string
    {
        return $this->admintoken;
    }

    public function setAdmintoken(string $admintoken): self
    {
        $this->admintoken = $admintoken;

        return $this;
    }

    public function getAceptada(): ?bool
    {
        return $this->aceptada;
    }

    public function setAceptada(bool $aceptada): self
    {
        $this->aceptada = $aceptada;

        return $this;
    }

    public function getFichero(): ?string
    {
        return $this->fichero;
    }

    public function setFichero(?string $fichero): self
    {
        $this->fichero = $fichero;

        return $this;
    }
}
