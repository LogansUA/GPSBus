<?php

use Doctrine\Entity;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;

/**
 * Stop
 *
 * @author Logans <Logansoleg@gmail.com>
 *
 * @Entity @Table(name="stop")
 */
class Stop
{
    /**
     * @var int $id Id
     *
     * @Id @Column(type="integer") @GeneratedValue
     */
    private $id;

    /**
     * @var string $stopName Stop Name
     *
     * @Column(type="string")
     */
    private $stopName;

    /**
     * @var float $latitude Latitude
     *
     * @Column(type="decimal", precision=18, scale=15)
     */
    private $latitude;

    /**
     * @var float $longitude Longitude
     *
     * @Column(type="decimal", precision=18, scale=15)
     */
    private $longitude;

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
     * Get stopName
     *
     * @return string StopName
     */
    public function getStopName()
    {
        return $this->stopName;
    }

    /**
     * Set stopName
     *
     * @param string $stopName stopName
     *
     * @return $this
     */
    public function setStopName($stopName)
    {
        $this->stopName = $stopName;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float Latitude
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set latitude
     *
     * @param float $latitude latitude
     *
     * @return $this
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float Longitude
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude longitude
     *
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

}
