<?php

namespace Pidev\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommentaireProfile
 *
 * @ORM\Table(name="commentaire_profile", indexes={@ORM\Index(name="id_publication", columns={"id_publication"}), @ORM\Index(name="id_publication_2", columns={"id_publication"})})
 * @ORM\Entity
 */
class CommentaireProfile
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_com", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCom;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text", length=255, nullable=false)
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var \PublicationProfil
     *
     * @ORM\ManyToOne(targetEntity="PublicationProfil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_publication", referencedColumnName="id")
     * })
     */
    private $idPublication;


}

