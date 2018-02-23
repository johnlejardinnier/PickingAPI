<?php

namespace AppBundle\Entity\User;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

use AppBundle\Entity\EntityBase;

/**
 * @ORM\Table(name="user_caracteristic")
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserCaracteristic\UserCaracteristicRepository")
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 */
class UserCaracteristic extends EntityBase {

    /**
    * @ORM\OneToOne(targetEntity="AppBundle\Entity\User")
    */
    private $user;

    /**
    * @ORM\Column(type="string")
    */
    private $stamina;

    /**
    * @ORM\Column(type="string")
    */
    private $strength;

    /**
     * Get the value of User
     *
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of User
     *
     * @param mixed user
     *
     * @return self
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get the value of Stamina
     *
     * @return mixed
     */
    public function getStamina()
    {
        return $this->stamina;
    }

    /**
     * Set the value of Stamina
     *
     * @param mixed stamina
     *
     * @return self
     */
    public function setStamina($stamina)
    {
        $this->stamina = $stamina;

        return $this;
    }

    /**
     * Get the value of Strength
     *
     * @return mixed
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * Set the value of Strength
     *
     * @param mixed strength
     *
     * @return self
     */
    public function setStrength($strength)
    {
        $this->strength = $strength;

        return $this;
    }

}
