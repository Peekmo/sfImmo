<?php

namespace Peekmo\SfImmoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Peekmo\SfImmoBundle\Entity\UtilisateurRepository")
 */
class Utilisateur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var bool
     *
     * @ORM\Column(name="isAdmin", type="boolean")
     */
    private $isAdmin;

    /**
     * @var string
     *
     * @ORM\Column(name="inscription", type="string", length=255)
     */
    private $inscription;

    /**
     * @var boolean
     *
     * @ORM\Column(name="newsletter", type="boolean")
     */
    private $newsletter;

    /**
     * @var \stdClass
     *
     * @ORM\OneToMany(targetEntity="Recherche", mappedBy="user")
     */
    private $recherches;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Utilisateur
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Utilisateur
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set inscription
     *
     * @param string $inscription
     *
     * @return Utilisateur
     */
    public function setInscription($inscription)
    {
        $this->inscription = $inscription;

        return $this;
    }

    /**
     * Get inscription
     *
     * @return string 
     */
    public function getInscription()
    {
        return $this->inscription;
    }

    /**
     * Set newsletter
     *
     * @param boolean $newsletter
     *
     * @return Utilisateur
     */
    public function setNewsletter($newsletter)
    {
        $this->newsletter = $newsletter;

        return $this;
    }

    /**
     * Get newsletter
     *
     * @return boolean 
     */
    public function getNewsletter()
    {
        return $this->newsletter;
    }

    /**
     * Set recherches
     *
     * @param \stdClass $recherches
     *
     * @return Utilisateur
     */
    public function setRecherches($recherches)
    {
        $this->recherches = $recherches;

        return $this;
    }

    /**
     * Get recherches
     *
     * @return \stdClass 
     */
    public function getRecherches()
    {
        return $this->recherches;
    }

    /**
     * @param boolean $isAdmin
     * @return $this
     */
    public function setIsAdmin($isAdmin)
    {
        $this->isAdmin = $isAdmin;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAdmin()
    {
        return $this->isAdmin;
    }
}
