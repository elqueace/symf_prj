<?php

namespace App\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

trait SortablePositionTrait
{
    /**
     * @Gedmo\SortablePosition
     * @ORM\Column(name="position", type="integer",  nullable=true)
     */
    private $position;

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }

}