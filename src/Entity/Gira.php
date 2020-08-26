<?php

namespace App\Entity;

use App\Repository\GiraRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GiraRepository::class)
 */
class Gira
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $fecha;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $lugar;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $coordenadas;

    /**
     * @ORM\Column(type="time")
     */
    private $horario;

    /**
     * @ORM\Column(type="float")
     */
    private $precio;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $webs;

    /**
     * @ORM\Column(type="boolean")
     */
    private $precio_visible;

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

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
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

    public function getLugar(): ?string
    {
        return $this->lugar;
    }

    public function setLugar(string $lugar): self
    {
        $this->lugar = $lugar;

        return $this;
    }

    public function getCoordenadas(): ?string
    {
        return $this->coordenadas;
    }

    public function setCoordenadas(string $coordenadas): self
    {
        $this->coordenadas = $coordenadas;

        return $this;
    }

    public function getHorario(): ?\DateTimeInterface
    {
        return $this->horario;
    }

    public function setHorario(\DateTimeInterface $horario): self
    {
        $this->horario = $horario;

        return $this;
    }

    public function getPrecio(): ?float
    {
        return $this->precio;
    }

    public function setPrecio(float $precio): self
    {
        $this->precio = $precio;

        return $this;
    }

    public function getWebs(): ?string
    {
        return $this->webs;
    }

    public function setWebs(string $webs): self
    {
        $this->webs = $webs;

        return $this;
    }

    public function getPrecioVisible(): ?bool
    {
        return $this->precio_visible;
    }

    public function setPrecioVisible(bool $precio_visible): self
    {
        $this->precio_visible = $precio_visible;

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
