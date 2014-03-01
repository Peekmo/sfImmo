<?php

namespace Peekmo\SfImmoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bien
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Peekmo\SfImmoBundle\Entity\BienRepository")
 */
class Bien
{
    const ETAT_PUBLIE = 0;
    const ETAT_DEPUBLIE = 1;
    const ETAT_VENDU = 2;

    const MAISON = 0;
    const APPARTEMENT = 1;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat", type="smallint")
     */
    private $etat;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix", type="integer")
     */
    private $prix;

    /**
     * @var integer
     *
     * @ORM\Column(name="surfacehab", type="integer")
     */
    private $surfacehab;

    /**
     * @var integer
     *
     * @ORM\Column(name="chambres", type="smallint")
     */
    private $chambres;

    /**
     * @var integer
     *
     * @ORM\Column(name="surfaceterrain", type="integer")
     */
    private $surfaceterrain;

    /**
     * @var integer
     *
     * @ORM\Column(name="pieces", type="smallint")
     */
    private $pieces;

    /**
     * @var integer
     *
     * @ORM\Column(name="sdb", type="smallint")
     */
    private $sdb;

    /**
     * @var integer
     *
     * @ORM\Column(name="wc", type="smallint")
     */
    private $wc;

    /**
     * @var \stdClass
     *
     * @ORM\ManyToMany(targetEntity="Media")
     * @ORM\JoinTable(name="BienMedia",
     *      joinColumns={@ORM\JoinColumn(name="idBien", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="idMedia", referencedColumnName="id")}
     *      )
     */
    private $medias;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=255)
     */
    private $reference;

    /**
     * @var \stdClass
     *
     * @ORM\ManyToMany(targetEntity="Equipement")
     * @ORM\JoinTable(name="BienEquipement",
     *      joinColumns={@ORM\JoinColumn(name="idBien", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="idEquipement", referencedColumnName="id")}
     *      )
     */
    private $equipements;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer")
     */
    private $type;

    /**
     * @var bool
     *
     * @ORM\Column(name="pleinPied", type="boolean")
     */
    private $pleinPied;

    /**
     * @var bool
     *
     * @ORM\Column(name="vueMer", type="boolean")
     */
    private $vueMer;

    /**
     * @var bool
     *
     * @ORM\Column(name="etage", type="integer")
     */
    private $etage;


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
     * Set etat
     *
     * @param integer $etat
     *
     * @return Bien
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return integer 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     *
     * @return Bien
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return integer 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set surfacehab
     *
     * @param integer $surfacehab
     *
     * @return Bien
     */
    public function setSurfacehab($surfacehab)
    {
        $this->surfacehab = $surfacehab;

        return $this;
    }

    /**
     * Get surfacehab
     *
     * @return integer 
     */
    public function getSurfacehab()
    {
        return $this->surfacehab;
    }

    /**
     * Set chambres
     *
     * @param integer $chambres
     *
     * @return Bien
     */
    public function setChambres($chambres)
    {
        $this->chambres = $chambres;

        return $this;
    }

    /**
     * Get chambres
     *
     * @return integer 
     */
    public function getChambres()
    {
        return $this->chambres;
    }

    /**
     * Set surfaceterrain
     *
     * @param integer $surfaceterrain
     *
     * @return Bien
     */
    public function setSurfaceterrain($surfaceterrain)
    {
        $this->surfaceterrain = $surfaceterrain;

        return $this;
    }

    /**
     * Get surfaceterrain
     *
     * @return integer 
     */
    public function getSurfaceterrain()
    {
        return $this->surfaceterrain;
    }

    /**
     * Set pieces
     *
     * @param integer $pieces
     *
     * @return Bien
     */
    public function setPieces($pieces)
    {
        $this->pieces = $pieces;

        return $this;
    }

    /**
     * Get pieces
     *
     * @return integer 
     */
    public function getPieces()
    {
        return $this->pieces;
    }

    /**
     * Set sdb
     *
     * @param integer $sdb
     *
     * @return Bien
     */
    public function setSdb($sdb)
    {
        $this->sdb = $sdb;

        return $this;
    }

    /**
     * Get sdb
     *
     * @return integer 
     */
    public function getSdb()
    {
        return $this->sdb;
    }

    /**
     * Set wc
     *
     * @param integer $wc
     *
     * @return Bien
     */
    public function setWc($wc)
    {
        $this->wc = $wc;

        return $this;
    }

    /**
     * Get wc
     *
     * @return integer 
     */
    public function getWc()
    {
        return $this->wc;
    }

    /**
     * Set medias
     *
     * @param \stdClass $medias
     *
     * @return Bien
     */
    public function setMedias($medias)
    {
        $this->medias = $medias;

        return $this;
    }

    /**
     * Get medias
     *
     * @return \stdClass 
     */
    public function getMedias()
    {
        return $this->medias;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Bien
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set reference
     *
     * @param string $reference
     *
     * @return Bien
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string 
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set equipements
     *
     * @param \stdClass $equipements
     *
     * @return Bien
     */
    public function setEquipements($equipements)
    {
        $this->equipements = $equipements;

        return $this;
    }

    /**
     * Get equipements
     *
     * @return \stdClass 
     */
    public function getEquipements()
    {
        return $this->equipements;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Bien
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param boolean $etage
     * @return $this
     */
    public function setEtage($etage)
    {
        $this->etage = $etage;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getEtage()
    {
        return $this->etage;
    }

    /**
     * @param boolean $pleinPied
     * @return $this
     */
    public function setPleinPied($pleinPied)
    {
        $this->pleinPied = $pleinPied;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getPleinPied()
    {
        return $this->pleinPied;
    }

    /**
     * @param int $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param boolean $vueMer
     * @return $this
     */
    public function setVueMer($vueMer)
    {
        $this->vueMer = $vueMer;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getVueMer()
    {
        return $this->vueMer;
    }


}
