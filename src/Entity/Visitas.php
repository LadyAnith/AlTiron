<?php

namespace App\Entity;

use App\Repository\VisitasRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VisitasRepository::class)
 */
class Visitas
{
    /**
     * @ORM\Id 
     * @ORM\Column(type="string", length= 16)
     */
    private $ip;

    /**
     * @ORM\Id
     * @ORM\Column(type="date")
     */
    private $fecha;

    public function getIp(): ?string
    {
        return $this->ip;
    }

    public function setIp(string $ip): self
    {
        $this->ip = $ip;
        return $this;
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
}
