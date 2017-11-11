<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ComProfilesUsers
 *
 * @ORM\Table(name="com_profiles_users")
 * @ORM\Entity
 */
class ComProfilesUsers
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
     * @ORM\Column(name="id_user", type="integer", nullable=true)
     */
    private $idUser;


}

