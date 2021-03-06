<?php
declare(strict_types=1);
namespace App\Entity;

use Symfony\Component\Serializer\Annotation\Groups;

trait Timestampable{

    /**
     * @var \DateTimeInterface
     * @ORM\Column(type="datetime")
     */
    private \DateTimeInterface $createdAt;
    /**
     * @var \DateTimeInterface
     * @ORM\Column(type="datetime",nullable=true)
     * @Groups({"publication"})
     */
    private ?\DateTimeInterface $updatetAt;

   
    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->createdAt;
    }

  
    // public function setCreatedAt(\DateTimeInterface $createdAt)
    // {
    //     $this->createdAt = $createdAt;

    //     return $this;
    // }

  
    public function getUpdatetAt():?\DateTimeInterface
    {
        return $this->updatetAt;
    }

  
    public function setUpdatetAt(?\DateTimeInterface $updatetAt): Timestampable
    {
        $this->updatetAt = $updatetAt;

        return $this;
    }
}