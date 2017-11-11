<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AppTempTranslation
 *
 * @ORM\Table(name="app_temp_translation")
 * @ORM\Entity
 */
class AppTempTranslation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=true)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="code_erp", type="text", nullable=true)
     */
    private $codeErp;

    /**
     * @var string
     *
     * @ORM\Column(name="description_tr", type="text", nullable=true)
     */
    private $descriptionTr;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_source", type="integer", nullable=true)
     */
    private $idSource;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_language", type="integer", nullable=true)
     */
    private $idLanguage;


}

