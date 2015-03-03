<?php

/**
 * Driver
 *
 * @author Logans <Logansoleg@gmail.com>
 *
 * @Entity @Table(name="driver")
 */
class Driver
{
    /**
     * @var int $id Id
     *
     * @Id @Column(name="id", type="integer") @GeneratedValue
     */
    private $id;

    /**
     * @var string $firstName First Name
     *
     * @Column(type="string")
     */
    private $firstName;

    /**
     * @var string $lastName Last Name
     *
     * @Column(type="string")
     */
    private $lastName;

    /**
     * @var string $email Email
     *
     * @Column(type="string")
     */
    private $email;

    /**
     * @var string $password Password
     *
     * @Column(type="string")
     */
    private $password;

    /**
     * @var int $idRoute Id Route
     *
     * @Column(type="integer", nullable=true)
     */
    private $idRoute;

    /**
     * @var string $role Role
     *
     * @Column(type="string")
     */
    private $role;

    /**
     * Get firstName
     *
     * @return string FirstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

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
     * Set firstName
     *
     * @param string $firstName firstName
     *
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string LastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName lastName
     *
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get email
     *
     * @return string Email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get password
     *
     * @return string Password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set password
     *
     * @param string $password password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get idRoute
     *
     * @return int IdRoute
     */
    public function getIdRoute()
    {
        return $this->idRoute;
    }

    /**
     * Set idRoute
     *
     * @param int $idRoute idRoute
     *
     * @return $this
     */
    public function setIdRoute($idRoute)
    {
        $this->idRoute = $idRoute;

        return $this;
    }

    /**
     * Get role
     *
     * @return string Role
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set role
     *
     * @param string $role role
     *
     * @return $this
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

}
