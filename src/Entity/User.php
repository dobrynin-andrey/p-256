<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity
 * @UniqueEntity(fields="email", message="Email already taken")
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $facebookID;


    public function __construct()
    {
        parent::__construct();
        $this->roles = ['ROLE_USER'];
    }

    /**
     *  Проверка, чтобы username всегда совпадал с email
     *
     * @param string $username
     * @return $this|BaseUser
     */
    public function setUsername($username)
    {
        $this->username = $this->email === $username ?  $username : $this->email;

        return $this;
    }

    /**
     *  Проверка, чтобы usernameCanonical всегда совпадал с email
     *
     * @param string $usernameCanonical
     * @return $this|BaseUser
     */
    public function setUsernameCanonical($usernameCanonical)
    {
        $this->usernameCanonical = $this->email === $usernameCanonical ? $usernameCanonical : $this->email;

        return $this;
    }


    /**
     * @return mixed
     */
    public function getFacebookID()
    {
        return $this->facebookID;
    }

    /**
     * @param $facebookID
     * @return User
     */
    public function setFacebookID($facebookID)
    {
        $this->facebookID = $facebookID;

        return $this;
    }
}