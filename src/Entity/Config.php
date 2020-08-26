<?php

namespace App\Entity;

use App\Repository\ConfigRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ConfigRepository::class)
 */
class Config
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
    private $parametro;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $valor;

    /**
     * @ORM\Column(type="date")
     */
    private $fecha_ultima_actualizacion;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getParametro(): ?string
    {
        return $this->parametro;
    }

    public function setParametro(string $parametro): self
    {
        $this->parametro = $parametro;

        return $this;
    }

    public function getValor(): ?string
    {
        return $this->valor;
    }

    public function setValor(string $valor): self
    {
        $this->valor = $valor;

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
