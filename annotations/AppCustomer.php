<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AppCustomer
 *
 * @ORM\Table(name="app_customer")
 * @ORM\Entity
 */
class AppCustomer
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
     * @ORM\Column(name="insert_platform", type="text", nullable=true)
     */
    private $insertPlatform = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="insert_user", type="text", nullable=true)
     */
    private $insertUser;

    /**
     * @var string
     *
     * @ORM\Column(name="insert_date", type="text", nullable=true)
     */
    private $insertDate;

    /**
     * @var string
     *
     * @ORM\Column(name="update_platform", type="text", nullable=true)
     */
    private $updatePlatform;

    /**
     * @var string
     *
     * @ORM\Column(name="update_user", type="text", nullable=true)
     */
    private $updateUser;

    /**
     * @var string
     *
     * @ORM\Column(name="update_date", type="text", nullable=true)
     */
    private $updateDate;

    /**
     * @var string
     *
     * @ORM\Column(name="delete_platform", type="text", nullable=true)
     */
    private $deletePlatform;

    /**
     * @var string
     *
     * @ORM\Column(name="delete_user", type="text", nullable=true)
     */
    private $deleteUser;

    /**
     * @var string
     *
     * @ORM\Column(name="delete_date", type="text", nullable=true)
     */
    private $deleteDate;

    /**
     * @var string
     *
     * @ORM\Column(name="cru_csvnote", type="text", nullable=true)
     */
    private $cruCsvnote;

    /**
     * @var string
     *
     * @ORM\Column(name="is_erpsent", type="text", nullable=true)
     */
    private $isErpsent;

    /**
     * @var string
     *
     * @ORM\Column(name="is_enabled", type="text", nullable=true)
     */
    private $isEnabled = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="i", type="integer", nullable=true)
     */
    private $i;

    /**
     * @var string
     *
     * @ORM\Column(name="code_erp", type="text", nullable=true)
     */
    private $codeErp;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="company", type="text", nullable=true)
     */
    private $company;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="text", nullable=true)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name_1", type="text", nullable=true)
     */
    private $lastName1;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name_2", type="text", nullable=true)
     */
    private $lastName2;

    /**
     * @var string
     *
     * @ORM\Column(name="taxid_nr", type="text", nullable=true)
     */
    private $taxidNr;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="text", nullable=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="text", nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_1", type="text", nullable=true)
     */
    private $phone1;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_2", type="text", nullable=true)
     */
    private $phone2;

    /**
     * @var string
     *
     * @ORM\Column(name="contact", type="text", nullable=true)
     */
    private $contact;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_phone", type="text", nullable=true)
     */
    private $contactPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="is_robinson_email", type="text", nullable=true)
     */
    private $isRobinsonEmail;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_country", type="integer", nullable=true)
     */
    private $idCountry;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_seller", type="integer", nullable=true)
     */
    private $idSeller = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_type", type="integer", nullable=true)
     */
    private $idType;

    /**
     * @var float
     *
     * @ORM\Column(name="last_sale", type="float", precision=10, scale=0, nullable=true)
     */
    private $lastSale;

    /**
     * @var string
     *
     * @ORM\Column(name="is_validated", type="text", nullable=true)
     */
    private $isValidated;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_userext", type="integer", nullable=true)
     */
    private $idUserext;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_type_gender", type="integer", nullable=true)
     */
    private $idTypeGender;

    /**
     * @var string
     *
     * @ORM\Column(name="birthdate", type="text", nullable=true)
     */
    private $birthdate;

    /**
     * @var float
     *
     * @ORM\Column(name="bonus_points", type="float", precision=10, scale=0, nullable=true)
     */
    private $bonusPoints;


}

