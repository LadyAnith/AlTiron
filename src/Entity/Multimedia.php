<?php

namespace App\Entity;

use App\Repository\MultimediaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MultimediaRepository::class)
 */
class Multimedia
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $tipo;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $url;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $categoria;

    /**
     * @ORM\Column(type="date")
     */
    private $fecha_material;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $fecha_creacion;

    /**
     * @ORM\Column(type="date")
     */
    private $ultima_actualizacion;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getCategoria(): ?string
    {
        return $this->categoria;
    }

    public function setCategoria(string $categoria): self
    {
        $this->categoria = $categoria;

        return $this;
    }

    public function getFechaMaterial(): ?\DateTimeInterface
    {
        return $this->fecha_material;
    }

    public function setFechaMaterial(\DateTimeInterface $fecha_material): self
    {
        $this->fecha_material = $fecha_material;

        return $this;
    }

    public function getFechaCreacion(): ?\DateTimeInterface
    {
        return $this->fecha_creacion;
    }

    public function setFechaCreacion(\DateTimeInterface $fecha_creacion): self
    {
        $this->fecha_creacion = $fecha_creacion;

        return $this;
    }

    public function getUltimaActualizacion(): ?\DateTimeInterface
    {
        return $this->ultima_actualizacion;
    }

    public function setUltimaActualizacion(\DateTimeInterface $ultima_actualizacion): self
    {
        $this->ultima_actualizacion = $ultima_actualizacion;

        return $this;
    }
}
