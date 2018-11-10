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
    protected $firstName;

    /**
     * @ORM\Column(type="string")
     */
    protected $lastName;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $facebookID;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $vkontakteID;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $odnoklassnikiID;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $googleID;

    public function __construct()
    {
        parent::__construct();
        $this->roles = ['ROLE_USER'];
    }

    /**
     * Overridden so that username is now optional
     *
     * @param $email
     * @return User
     */
    public function setEmail($email): User
    {
        $this->setUsername($email);

        return parent::setEmail($email);
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName): void
    {
        $this->lastName = $lastName;
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
     */
    public function setFacebookID($facebookID): void
    {
        $this->facebookID = $facebookID;

    }

    /**
     * @return mixed
     */
    public function getVkontakteID()
    {
        return $this->vkontakteID;
    }

    /**
     * @param mixed $vkontakteID
     */
    public function setVkontakteID($vkontakteID): void
    {
        $this->vkontakteID = $vkontakteID;
    }

    /**
     * @return mixed
     */
    public function getOdnoklassnikiID()
    {
        return $this->odnoklassnikiID;
    }

    /**
     * @param mixed $odnoklassnikiID
     */
    public function setOdnoklassnikiID($odnoklassnikiID): void
    {
        $this->odnoklassnikiID = $odnoklassnikiID;
    }

    /**
     * @return mixed
     */
    public function getGoogleID()
    {
        return $this->googleID;
    }

    /**
     * @param mixed $googleID
     */
    public function setGoogleID($googleID): void
    {
        $this->googleID = $googleID;
    }

}