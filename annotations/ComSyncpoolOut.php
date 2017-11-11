<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ComSyncpoolOut
 *
 * @ORM\Table(name="com_syncpool_out")
 * @ORM\Entity
 */
class ComSyncpoolOut
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
     * @var string
     *
     * @ORM\Column(name="server_datetime", type="text", nullable=true)
     */
    private $serverDatetime;

    /**
     * @var string
     *
     * @ORM\Column(name="device_datetime", type="text", nullable=true)
     */
    private $deviceDatetime;

    /**
     * @var integer
     *
     * @ORM\Column(name="irow", type="integer", nullable=true)
     */
    private $irow;

    /**
     * @var integer
     *
     * @ORM\Column(name="server_status", type="integer", nullable=true)
     */
    private $serverStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="device_status", type="integer", nullable=true)
     */
    private $deviceStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_type_status", type="integer", nullable=true)
     */
    private $idTypeStatus;


}

