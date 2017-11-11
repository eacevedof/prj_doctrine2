<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ComProfilesTables
 *
 * @ORM\Table(name="com_profiles_tables")
 * @ORM\Entity
 */
class ComProfilesTables
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
     * @ORM\Column(name="processflag", type="text", nullable=true)
     */
    private $processflag;

    /**
     * @var string
     *
     * @ORM\Column(name="is_enabled", type="text", nullable=true)
     */
    private $isEnabled = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_com_profile", type="integer", nullable=true)
     */
    private $idComProfile;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_com_table", type="integer", nullable=true)
     */
    private $idComTable;

    /**
     * @var integer
     *
     * @ORM\Column(name="order_by", type="integer", nullable=false)
     */
    private $orderBy = '100';

    /**
     * @var string
     *
     * @ORM\Column(name="sql_out", type="text", nullable=true)
     */
    private $sqlOut;

    /**
     * @var string
     *
     * @ORM\Column(name="sql_in", type="text", nullable=true)
     */
    private $sqlIn;


}

