<?php

namespace App\Application\Sonata\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Sonata\UserBundle\Entity\BaseUser as BaseUser;

/**
 * This file has been generated by the SonataEasyExtendsBundle.
 *
 * @link https://sonata-project.org/easy-extends
 *
 * References:
 * @link http://www.doctrine-project.org/projects/orm/2.0/docs/reference/working-with-objects/en
 *
 * @ORM\Entity
 * @UniqueEntity(fields="email")
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
     * @ORM\Column(type="string", nullable=true)
     */
    protected $facebookUid;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $vkontakteUid;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $odnoklassnikiUid;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $googleUid;

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
    public function getGoogleUid()
    {
        return $this->googleUid;
    }

    /**
     * @param mixed $googleUid
     */
    public function setGoogleUid($googleUid): void
    {
        $this->googleUid = $googleUid;
    }

    /**
     * @return mixed
     */
    public function getOdnoklassnikiUid()
    {
        return $this->odnoklassnikiUid;
    }

    /**
     * @param mixed $odnoklassnikiUid
     */
    public function setOdnoklassnikiUid($odnoklassnikiUid): void
    {
        $this->odnoklassnikiUid = $odnoklassnikiUid;
    }

    /**
     * @return mixed
     */
    public function getVkontakteUid()
    {
        return $this->vkontakteUid;
    }

    /**
     * @param mixed $vkontakteUid
     */
    public function setVkontakteUid($vkontakteUid): void
    {
        $this->vkontakteUid = $vkontakteUid;
    }


}