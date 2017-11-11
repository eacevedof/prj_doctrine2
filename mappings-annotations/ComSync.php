<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ComSync
 *
 * @ORM\Table(name="com_sync")
 * @ORM\Entity
 */
class ComSync
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
     * @ORM\Column(name="id_device_user", type="integer", nullable=true)
     */
    private $idDeviceUser;

    /**
     * @var string
     *
     * @ORM\Column(name="last_date", type="text", nullable=true)
     */
    private $lastDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_type_status", type="integer", nullable=true)
     */
    private $idTypeStatus;


}

