<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AppSuspicionInvolved
 *
 * @ORM\Table(name="app_suspicion_involved")
 * @ORM\Entity
 */
class AppSuspicionInvolved
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
     * @var integer
     *
     * @ORM\Column(name="id_suspicion", type="integer", nullable=true)
     */
    private $idSuspicion;

    /**
     * @var integer
     *
     * @ORM\Column(name="number", type="integer", nullable=true)
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(name="nr_account", type="text", nullable=true)
     */
    private $nrAccount;

    /**
     * @var string
     *
     * @ORM\Column(name="nr_creditcard", type="text", nullable=true)
     */
    private $nrCreditcard;

    /**
     * @var string
     *
     * @ORM\Column(name="nr_mtcn", type="text", nullable=true)
     */
    private $nrMtcn;

    /**
     * @var string
     *
     * @ORM\Column(name="nr_police", type="text", nullable=true)
     */
    private $nrPolice;

    /**
     * @var string
     *
     * @ORM\Column(name="nr_brief", type="text", nullable=true)
     */
    private $nrBrief;

    /**
     * @var string
     *
     * @ORM\Column(name="nr_client", type="text", nullable=true)
     */
    private $nrClient;

    /**
     * @var string
     *
     * @ORM\Column(name="nr_extra", type="text", nullable=true)
     */
    private $nrExtra;

    /**
     * @var string
     *
     * @ORM\Column(name="subj_name", type="text", nullable=true)
     */
    private $subjName;

    /**
     * @var string
     *
     * @ORM\Column(name="subj_infix1", type="text", nullable=true)
     */
    private $subjInfix1;

    /**
     * @var string
     *
     * @ORM\Column(name="subj_married_name", type="text", nullable=true)
     */
    private $subjMarriedName;

    /**
     * @var string
     *
     * @ORM\Column(name="subj_infix2", type="text", nullable=true)
     */
    private $subjInfix2;

    /**
     * @var string
     *
     * @ORM\Column(name="subj_initials", type="text", nullable=true)
     */
    private $subjInitials;

    /**
     * @var string
     *
     * @ORM\Column(name="subj_full_name", type="text", nullable=true)
     */
    private $subjFullName;

    /**
     * @var integer
     *
     * @ORM\Column(name="subj_type_sex", type="integer", nullable=true)
     */
    private $subjTypeSex;

    /**
     * @var string
     *
     * @ORM\Column(name="subj_birthdate", type="text", nullable=true)
     */
    private $subjBirthdate;

    /**
     * @var string
     *
     * @ORM\Column(name="subj_birthplace", type="text", nullable=true)
     */
    private $subjBirthplace;

    /**
     * @var string
     *
     * @ORM\Column(name="subj_birth_country", type="text", nullable=true)
     */
    private $subjBirthCountry;

    /**
     * @var integer
     *
     * @ORM\Column(name="subj_type_nation", type="integer", nullable=true)
     */
    private $subjTypeNation;

    /**
     * @var integer
     *
     * @ORM\Column(name="subj_type_profession", type="integer", nullable=true)
     */
    private $subjTypeProfession;

    /**
     * @var string
     *
     * @ORM\Column(name="iddoc", type="text", nullable=true)
     */
    private $iddoc;

    /**
     * @var integer
     *
     * @ORM\Column(name="iddoc_type", type="integer", nullable=true)
     */
    private $iddocType;

    /**
     * @var string
     *
     * @ORM\Column(name="iddoc_issue_date", type="text", nullable=true)
     */
    private $iddocIssueDate;

    /**
     * @var string
     *
     * @ORM\Column(name="iddoc_expiry_date", type="text", nullable=true)
     */
    private $iddocExpiryDate;

    /**
     * @var string
     *
     * @ORM\Column(name="iddoc_issue_place", type="text", nullable=true)
     */
    private $iddocIssuePlace;

    /**
     * @var string
     *
     * @ORM\Column(name="iddoc_issue_country", type="text", nullable=true)
     */
    private $iddocIssueCountry;

    /**
     * @var string
     *
     * @ORM\Column(name="iddoc_nationality", type="text", nullable=true)
     */
    private $iddocNationality;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="text", nullable=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="address_nr", type="text", nullable=true)
     */
    private $addressNr;

    /**
     * @var string
     *
     * @ORM\Column(name="address_chars", type="text", nullable=true)
     */
    private $addressChars;

    /**
     * @var string
     *
     * @ORM\Column(name="address_place", type="text", nullable=true)
     */
    private $addressPlace;

    /**
     * @var string
     *
     * @ORM\Column(name="address_zip", type="text", nullable=true)
     */
    private $addressZip;

    /**
     * @var integer
     *
     * @ORM\Column(name="address_type_country", type="integer", nullable=true)
     */
    private $addressTypeCountry;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="text", nullable=true)
     */
    private $phone;

    /**
     * @var integer
     *
     * @ORM\Column(name="phone_type", type="integer", nullable=true)
     */
    private $phoneType;

    /**
     * @var integer
     *
     * @ORM\Column(name="phone_type_country", type="integer", nullable=true)
     */
    private $phoneTypeCountry;


}

