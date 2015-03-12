<?php

use Doctrine\Entity;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;

/**
 * Route
 *
 * @author Logans <Logansoleg@gmail.com>
 *
 * @Entity @Table(name="route")
 */
class Route
{
    /**
     * @var int $id Id
     *
     * @Id @Column(type="integer") @GeneratedValue
     */
    private $id;

    /**
     * @var string $name Route Name
     *
     * @Column(type="string")
     */
    private $name;

    /**
     * @var string
     *
     * @Column(type="string")
     */
    private $stops;

    /**
     * @var array $area Area
     *
     * @Column(type="json_array")
     */
    private $area;

    /**
     * Get id
     *
     * @return int Id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get name
     *
     * @return string Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get stops
     *
     * @return string Stops
     */
    public function getStops()
    {
        return $this->stops;
    }

    /**
     * Set stops
     *
     * @param string $stops stops
     *
     * @return $this
     */
    public function setStops($stops)
    {
        $this->stops = $stops;

        return $this;
    }

    /**
     * Get area
     *
     * @return array Area
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set area
     *
     * @param array $area area
     *
     * @return $this
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }
}
