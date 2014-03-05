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
    const ETAT_PUBLIE = 'publié';
    const ETAT_DEPUBLIE = 'dépublié';
    const ETAT_VENDU = 'vendu';

    const MAISON = 'maison';
    const APPARTEMENT = 'appartement';

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
     * @ORM\Column(name="etat", type="string", length=255)
     */
    private $etat;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix", type="integer")
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="typeTarif", type="string", length=255, nullable=true)
     */
    private $typeTarif;

    /**
     * @var string
     *
     * @ORM\Column(name="typeDispo", type="string", length=255)
     */
    private $typeDispo;

    /**
     * @var integer
     *
     * @ORM\Column(name="surfacehab", type="integer")
     */
    private $surfacehab;

    /**
     * @var integer
     *
     * @ORM\Column(name="chambres", type="smallint", nullable=true)
     */
    private $chambres;

    /**
     * @var integer
     *
     * @ORM\Column(name="surfaceterrain", type="integer", nullable=true)
     */
    private $surfaceterrain;

    /**
     * @var integer
     *
     * @ORM\Column(name="pieces", type="smallint", nullable=true)
     */
    private $pieces;

    /**
     * @var integer
     *
     * @ORM\Column(name="sdb", type="smallint", nullable=true)
     */
    private $sdb;

    /**
     * @var integer
     *
     * @ORM\Column(name="wc", type="smallint", nullable=true)
     */
    private $wc;

    /**
     * @var \stdClass
     *
     * @ORM\ManyToMany(targetEntity="Media", cascade={"persist"})
     * @ORM\JoinTable(name="BienMedia",
     *      joinColumns={@ORM\JoinColumn(name="idBien", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="idMedia", referencedColumnName="id")}
     *      )
     */
    private $medias;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=255, nullable=true)
     */
    private $reference;

    /**
     * @var \stdClass
     *
     * @ORM\ManyToMany(targetEntity="Equipement", cascade={"persist"})
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
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @var bool
     *
     * @ORM\Column(name="pleinPied", type="boolean", nullable=true)
     */
    private $pleinPied;

    /**
     * @var bool
     *
     * @ORM\Column(name="vueMer", type="boolean", nullable=true)
     */
    private $vueMer;

    /**
     * @var bool
     *
     * @ORM\Column(name="etage", type="integer", nullable=true)
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

    /**
     * @param string $typeTarif
     * @return $this
     */
    public function setTypeTarif($typeTarif)
    {
        $this->typeTarif = $typeTarif;

        return $this;
    }

    /**
     * @return string
     */
    public function getTypeTarif()
    {
        return $this->typeTarif;
    }

    /**
     * @param string $typeDispo
     * @return $this
     */
    public function setTypeDispo($typeDispo)
    {
        $this->typeDispo = $typeDispo;

        return $this;
    }

    /**
     * @return string
     */
    public function getTypeDispo()
    {
        return $this->typeDispo;
    }

    public static function getBatiments()
    {
        return array(
            'Maison',
            'Appartement',
            'Studio'
        );
    }

    public static function getTypesDispo()
    {
        return array(
            'Vente',
            'Location à la semaine',
            'Location au mois',
            'Location à l\'année'
        );
    }

    public static function getTypesTarif()
    {
        return array(
            'semaine',
            'mois',
            'année'
        );
    }

    public static function getEtats()
    {
        return array(
            'Publié',
            'Vendu',
            'Loué',
            'Dépublié'
        );
    }
}
