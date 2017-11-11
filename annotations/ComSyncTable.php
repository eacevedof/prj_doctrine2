<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ComSyncTable
 *
 * @ORM\Table(name="com_sync_table")
 * @ORM\Entity
 */
class ComSyncTable
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
     * @var integer
     *
     * @ORM\Column(name="id_sync", type="integer", nullable=true)
     */
    private $idSync;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_table", type="integer", nullable=true)
     */
    private $idTable;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_type_status", type="integer", nullable=true)
     */
    private $idTypeStatus;


}

