<?php

namespace App\Entity;

use App\Repository\RrssRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RrssRepository::class)
 */
class Rrss
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
    private $nombre;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $url;

    /**
     * @ORM\Column(type="boolean")
     */
    private $activa;

    /**
     * @ORM\Column(type="date")
     */
    private $fecha_alta;

    /**
     * @ORM\Column(type="date")
     */
    private $fecha_ultima_actualizacion;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

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

    public function getActiva(): ?bool
    {
        return $this->activa;
    }

    public function setActiva(bool $activa): self
    {
        $this->activa = $activa;

        return $this;
    }

    public function getFechaAlta(): ?\DateTimeInterface
    {
        return $this->fecha_alta;
    }

    public function setFechaAlta(\DateTimeInterface $fecha_alta): self
    {
        $this->fecha_alta = $fecha_alta;

        return $this;
    }

    public function getFechaUltimaActualizacion(): ?\DateTimeInterface
    {
        return $this->fecha_ultima_actualizacion;
    }

    public function setFechaUltimaActualizacion(\DateTimeInterface $fecha_ultima_actualizacion): self
    {
        $this->fecha_ultima_actualizacion = $fecha_ultima_actualizacion;

        return $this;
    }
}
