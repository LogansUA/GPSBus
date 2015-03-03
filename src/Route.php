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
     * @var string $routeName Route Name
     *
     * @Column(type="string")
     */
    private $routeName;

    /**
     * @var string
     *
     * @Column(type="string")
     */
    private $stops;

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
     * Get routeName
     *
     * @return string RouteName
     */
    public function getRouteName()
    {
        return $this->routeName;
    }

    /**
     * Set routeName
     *
     * @param string $routeName routeName
     *
     * @return $this
     */
    public function setRouteName($routeName)
    {
        $this->routeName = $routeName;

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
}
