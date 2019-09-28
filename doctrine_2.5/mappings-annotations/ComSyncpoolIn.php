<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ComSyncpoolIn
 *
 * @ORM\Table(name="com_syncpool_in")
 * @ORM\Entity
 */
class ComSyncpoolIn
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
     * @var string
     *
     * @ORM\Column(name="csv_keys", type="text", nullable=true)
     */
    private $csvKeys;

    /**
     * @var string
     *
     * @ORM\Column(name="csv_values", type="text", nullable=true)
     */
    private $csvValues;

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
     * @ORM\Column(name="id_device_pool", type="integer", nullable=true)
     */
    private $idDevicePool;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_type_status", type="integer", nullable=true)
     */
    private $idTypeStatus;


}

