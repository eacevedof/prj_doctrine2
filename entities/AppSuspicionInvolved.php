<?php



/**
 * AppSuspicionInvolved
 */
class AppSuspicionInvolved
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $processflag;

    /**
     * @var string
     */
    private $insertPlatform;

    /**
     * @var string
     */
    private $insertUser;

    /**
     * @var string
     */
    private $insertDate;

    /**
     * @var string
     */
    private $updatePlatform;

    /**
     * @var string
     */
    private $updateUser;

    /**
     * @var string
     */
    private $updateDate;

    /**
     * @var string
     */
    private $deletePlatform;

    /**
     * @var string
     */
    private $deleteUser;

    /**
     * @var string
     */
    private $deleteDate;

    /**
     * @var string
     */
    private $cruCsvnote;

    /**
     * @var string
     */
    private $isErpsent;

    /**
     * @var string
     */
    private $isEnabled;

    /**
     * @var integer
     */
    private $i;

    /**
     * @var string
     */
    private $codeErp;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $idSuspicion;

    /**
     * @var integer
     */
    private $number;

    /**
     * @var string
     */
    private $nrAccount;

    /**
     * @var string
     */
    private $nrCreditcard;

    /**
     * @var string
     */
    private $nrMtcn;

    /**
     * @var string
     */
    private $nrPolice;

    /**
     * @var string
     */
    private $nrBrief;

    /**
     * @var string
     */
    private $nrClient;

    /**
     * @var string
     */
    private $nrExtra;

    /**
     * @var string
     */
    private $subjName;

    /**
     * @var string
     */
    private $subjInfix1;

    /**
     * @var string
     */
    private $subjMarriedName;

    /**
     * @var string
     */
    private $subjInfix2;

    /**
     * @var string
     */
    private $subjInitials;

    /**
     * @var string
     */
    private $subjFullName;

    /**
     * @var integer
     */
    private $subjTypeSex;

    /**
     * @var string
     */
    private $subjBirthdate;

    /**
     * @var string
     */
    private $subjBirthplace;

    /**
     * @var string
     */
    private $subjBirthCountry;

    /**
     * @var integer
     */
    private $subjTypeNation;

    /**
     * @var integer
     */
    private $subjTypeProfession;

    /**
     * @var string
     */
    private $iddoc;

    /**
     * @var integer
     */
    private $iddocType;

    /**
     * @var string
     */
    private $iddocIssueDate;

    /**
     * @var string
     */
    private $iddocExpiryDate;

    /**
     * @var string
     */
    private $iddocIssuePlace;

    /**
     * @var string
     */
    private $iddocIssueCountry;

    /**
     * @var string
     */
    private $iddocNationality;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $addressNr;

    /**
     * @var string
     */
    private $addressChars;

    /**
     * @var string
     */
    private $addressPlace;

    /**
     * @var string
     */
    private $addressZip;

    /**
     * @var integer
     */
    private $addressTypeCountry;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var integer
     */
    private $phoneType;

    /**
     * @var integer
     */
    private $phoneTypeCountry;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set processflag
     *
     * @param string $processflag
     *
     * @return AppSuspicionInvolved
     */
    public function setProcessflag($processflag)
    {
        $this->processflag = $processflag;

        return $this;
    }

    /**
     * Get processflag
     *
     * @return string
     */
    public function getProcessflag()
    {
        return $this->processflag;
    }

    /**
     * Set insertPlatform
     *
     * @param string $insertPlatform
     *
     * @return AppSuspicionInvolved
     */
    public function setInsertPlatform($insertPlatform)
    {
        $this->insertPlatform = $insertPlatform;

        return $this;
    }

    /**
     * Get insertPlatform
     *
     * @return string
     */
    public function getInsertPlatform()
    {
        return $this->insertPlatform;
    }

    /**
     * Set insertUser
     *
     * @param string $insertUser
     *
     * @return AppSuspicionInvolved
     */
    public function setInsertUser($insertUser)
    {
        $this->insertUser = $insertUser;

        return $this;
    }

    /**
     * Get insertUser
     *
     * @return string
     */
    public function getInsertUser()
    {
        return $this->insertUser;
    }

    /**
     * Set insertDate
     *
     * @param string $insertDate
     *
     * @return AppSuspicionInvolved
     */
    public function setInsertDate($insertDate)
    {
        $this->insertDate = $insertDate;

        return $this;
    }

    /**
     * Get insertDate
     *
     * @return string
     */
    public function getInsertDate()
    {
        return $this->insertDate;
    }

    /**
     * Set updatePlatform
     *
     * @param string $updatePlatform
     *
     * @return AppSuspicionInvolved
     */
    public function setUpdatePlatform($updatePlatform)
    {
        $this->updatePlatform = $updatePlatform;

        return $this;
    }

    /**
     * Get updatePlatform
     *
     * @return string
     */
    public function getUpdatePlatform()
    {
        return $this->updatePlatform;
    }

    /**
     * Set updateUser
     *
     * @param string $updateUser
     *
     * @return AppSuspicionInvolved
     */
    public function setUpdateUser($updateUser)
    {
        $this->updateUser = $updateUser;

        return $this;
    }

    /**
     * Get updateUser
     *
     * @return string
     */
    public function getUpdateUser()
    {
        return $this->updateUser;
    }

    /**
     * Set updateDate
     *
     * @param string $updateDate
     *
     * @return AppSuspicionInvolved
     */
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;

        return $this;
    }

    /**
     * Get updateDate
     *
     * @return string
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    /**
     * Set deletePlatform
     *
     * @param string $deletePlatform
     *
     * @return AppSuspicionInvolved
     */
    public function setDeletePlatform($deletePlatform)
    {
        $this->deletePlatform = $deletePlatform;

        return $this;
    }

    /**
     * Get deletePlatform
     *
     * @return string
     */
    public function getDeletePlatform()
    {
        return $this->deletePlatform;
    }

    /**
     * Set deleteUser
     *
     * @param string $deleteUser
     *
     * @return AppSuspicionInvolved
     */
    public function setDeleteUser($deleteUser)
    {
        $this->deleteUser = $deleteUser;

        return $this;
    }

    /**
     * Get deleteUser
     *
     * @return string
     */
    public function getDeleteUser()
    {
        return $this->deleteUser;
    }

    /**
     * Set deleteDate
     *
     * @param string $deleteDate
     *
     * @return AppSuspicionInvolved
     */
    public function setDeleteDate($deleteDate)
    {
        $this->deleteDate = $deleteDate;

        return $this;
    }

    /**
     * Get deleteDate
     *
     * @return string
     */
    public function getDeleteDate()
    {
        return $this->deleteDate;
    }

    /**
     * Set cruCsvnote
     *
     * @param string $cruCsvnote
     *
     * @return AppSuspicionInvolved
     */
    public function setCruCsvnote($cruCsvnote)
    {
        $this->cruCsvnote = $cruCsvnote;

        return $this;
    }

    /**
     * Get cruCsvnote
     *
     * @return string
     */
    public function getCruCsvnote()
    {
        return $this->cruCsvnote;
    }

    /**
     * Set isErpsent
     *
     * @param string $isErpsent
     *
     * @return AppSuspicionInvolved
     */
    public function setIsErpsent($isErpsent)
    {
        $this->isErpsent = $isErpsent;

        return $this;
    }

    /**
     * Get isErpsent
     *
     * @return string
     */
    public function getIsErpsent()
    {
        return $this->isErpsent;
    }

    /**
     * Set isEnabled
     *
     * @param string $isEnabled
     *
     * @return AppSuspicionInvolved
     */
    public function setIsEnabled($isEnabled)
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }

    /**
     * Get isEnabled
     *
     * @return string
     */
    public function getIsEnabled()
    {
        return $this->isEnabled;
    }

    /**
     * Set i
     *
     * @param integer $i
     *
     * @return AppSuspicionInvolved
     */
    public function setI($i)
    {
        $this->i = $i;

        return $this;
    }

    /**
     * Get i
     *
     * @return integer
     */
    public function getI()
    {
        return $this->i;
    }

    /**
     * Set codeErp
     *
     * @param string $codeErp
     *
     * @return AppSuspicionInvolved
     */
    public function setCodeErp($codeErp)
    {
        $this->codeErp = $codeErp;

        return $this;
    }

    /**
     * Get codeErp
     *
     * @return string
     */
    public function getCodeErp()
    {
        return $this->codeErp;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return AppSuspicionInvolved
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set idSuspicion
     *
     * @param integer $idSuspicion
     *
     * @return AppSuspicionInvolved
     */
    public function setIdSuspicion($idSuspicion)
    {
        $this->idSuspicion = $idSuspicion;

        return $this;
    }

    /**
     * Get idSuspicion
     *
     * @return integer
     */
    public function getIdSuspicion()
    {
        return $this->idSuspicion;
    }

    /**
     * Set number
     *
     * @param integer $number
     *
     * @return AppSuspicionInvolved
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return integer
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set nrAccount
     *
     * @param string $nrAccount
     *
     * @return AppSuspicionInvolved
     */
    public function setNrAccount($nrAccount)
    {
        $this->nrAccount = $nrAccount;

        return $this;
    }

    /**
     * Get nrAccount
     *
     * @return string
     */
    public function getNrAccount()
    {
        return $this->nrAccount;
    }

    /**
     * Set nrCreditcard
     *
     * @param string $nrCreditcard
     *
     * @return AppSuspicionInvolved
     */
    public function setNrCreditcard($nrCreditcard)
    {
        $this->nrCreditcard = $nrCreditcard;

        return $this;
    }

    /**
     * Get nrCreditcard
     *
     * @return string
     */
    public function getNrCreditcard()
    {
        return $this->nrCreditcard;
    }

    /**
     * Set nrMtcn
     *
     * @param string $nrMtcn
     *
     * @return AppSuspicionInvolved
     */
    public function setNrMtcn($nrMtcn)
    {
        $this->nrMtcn = $nrMtcn;

        return $this;
    }

    /**
     * Get nrMtcn
     *
     * @return string
     */
    public function getNrMtcn()
    {
        return $this->nrMtcn;
    }

    /**
     * Set nrPolice
     *
     * @param string $nrPolice
     *
     * @return AppSuspicionInvolved
     */
    public function setNrPolice($nrPolice)
    {
        $this->nrPolice = $nrPolice;

        return $this;
    }

    /**
     * Get nrPolice
     *
     * @return string
     */
    public function getNrPolice()
    {
        return $this->nrPolice;
    }

    /**
     * Set nrBrief
     *
     * @param string $nrBrief
     *
     * @return AppSuspicionInvolved
     */
    public function setNrBrief($nrBrief)
    {
        $this->nrBrief = $nrBrief;

        return $this;
    }

    /**
     * Get nrBrief
     *
     * @return string
     */
    public function getNrBrief()
    {
        return $this->nrBrief;
    }

    /**
     * Set nrClient
     *
     * @param string $nrClient
     *
     * @return AppSuspicionInvolved
     */
    public function setNrClient($nrClient)
    {
        $this->nrClient = $nrClient;

        return $this;
    }

    /**
     * Get nrClient
     *
     * @return string
     */
    public function getNrClient()
    {
        return $this->nrClient;
    }

    /**
     * Set nrExtra
     *
     * @param string $nrExtra
     *
     * @return AppSuspicionInvolved
     */
    public function setNrExtra($nrExtra)
    {
        $this->nrExtra = $nrExtra;

        return $this;
    }

    /**
     * Get nrExtra
     *
     * @return string
     */
    public function getNrExtra()
    {
        return $this->nrExtra;
    }

    /**
     * Set subjName
     *
     * @param string $subjName
     *
     * @return AppSuspicionInvolved
     */
    public function setSubjName($subjName)
    {
        $this->subjName = $subjName;

        return $this;
    }

    /**
     * Get subjName
     *
     * @return string
     */
    public function getSubjName()
    {
        return $this->subjName;
    }

    /**
     * Set subjInfix1
     *
     * @param string $subjInfix1
     *
     * @return AppSuspicionInvolved
     */
    public function setSubjInfix1($subjInfix1)
    {
        $this->subjInfix1 = $subjInfix1;

        return $this;
    }

    /**
     * Get subjInfix1
     *
     * @return string
     */
    public function getSubjInfix1()
    {
        return $this->subjInfix1;
    }

    /**
     * Set subjMarriedName
     *
     * @param string $subjMarriedName
     *
     * @return AppSuspicionInvolved
     */
    public function setSubjMarriedName($subjMarriedName)
    {
        $this->subjMarriedName = $subjMarriedName;

        return $this;
    }

    /**
     * Get subjMarriedName
     *
     * @return string
     */
    public function getSubjMarriedName()
    {
        return $this->subjMarriedName;
    }

    /**
     * Set subjInfix2
     *
     * @param string $subjInfix2
     *
     * @return AppSuspicionInvolved
     */
    public function setSubjInfix2($subjInfix2)
    {
        $this->subjInfix2 = $subjInfix2;

        return $this;
    }

    /**
     * Get subjInfix2
     *
     * @return string
     */
    public function getSubjInfix2()
    {
        return $this->subjInfix2;
    }

    /**
     * Set subjInitials
     *
     * @param string $subjInitials
     *
     * @return AppSuspicionInvolved
     */
    public function setSubjInitials($subjInitials)
    {
        $this->subjInitials = $subjInitials;

        return $this;
    }

    /**
     * Get subjInitials
     *
     * @return string
     */
    public function getSubjInitials()
    {
        return $this->subjInitials;
    }

    /**
     * Set subjFullName
     *
     * @param string $subjFullName
     *
     * @return AppSuspicionInvolved
     */
    public function setSubjFullName($subjFullName)
    {
        $this->subjFullName = $subjFullName;

        return $this;
    }

    /**
     * Get subjFullName
     *
     * @return string
     */
    public function getSubjFullName()
    {
        return $this->subjFullName;
    }

    /**
     * Set subjTypeSex
     *
     * @param integer $subjTypeSex
     *
     * @return AppSuspicionInvolved
     */
    public function setSubjTypeSex($subjTypeSex)
    {
        $this->subjTypeSex = $subjTypeSex;

        return $this;
    }

    /**
     * Get subjTypeSex
     *
     * @return integer
     */
    public function getSubjTypeSex()
    {
        return $this->subjTypeSex;
    }

    /**
     * Set subjBirthdate
     *
     * @param string $subjBirthdate
     *
     * @return AppSuspicionInvolved
     */
    public function setSubjBirthdate($subjBirthdate)
    {
        $this->subjBirthdate = $subjBirthdate;

        return $this;
    }

    /**
     * Get subjBirthdate
     *
     * @return string
     */
    public function getSubjBirthdate()
    {
        return $this->subjBirthdate;
    }

    /**
     * Set subjBirthplace
     *
     * @param string $subjBirthplace
     *
     * @return AppSuspicionInvolved
     */
    public function setSubjBirthplace($subjBirthplace)
    {
        $this->subjBirthplace = $subjBirthplace;

        return $this;
    }

    /**
     * Get subjBirthplace
     *
     * @return string
     */
    public function getSubjBirthplace()
    {
        return $this->subjBirthplace;
    }

    /**
     * Set subjBirthCountry
     *
     * @param string $subjBirthCountry
     *
     * @return AppSuspicionInvolved
     */
    public function setSubjBirthCountry($subjBirthCountry)
    {
        $this->subjBirthCountry = $subjBirthCountry;

        return $this;
    }

    /**
     * Get subjBirthCountry
     *
     * @return string
     */
    public function getSubjBirthCountry()
    {
        return $this->subjBirthCountry;
    }

    /**
     * Set subjTypeNation
     *
     * @param integer $subjTypeNation
     *
     * @return AppSuspicionInvolved
     */
    public function setSubjTypeNation($subjTypeNation)
    {
        $this->subjTypeNation = $subjTypeNation;

        return $this;
    }

    /**
     * Get subjTypeNation
     *
     * @return integer
     */
    public function getSubjTypeNation()
    {
        return $this->subjTypeNation;
    }

    /**
     * Set subjTypeProfession
     *
     * @param integer $subjTypeProfession
     *
     * @return AppSuspicionInvolved
     */
    public function setSubjTypeProfession($subjTypeProfession)
    {
        $this->subjTypeProfession = $subjTypeProfession;

        return $this;
    }

    /**
     * Get subjTypeProfession
     *
     * @return integer
     */
    public function getSubjTypeProfession()
    {
        return $this->subjTypeProfession;
    }

    /**
     * Set iddoc
     *
     * @param string $iddoc
     *
     * @return AppSuspicionInvolved
     */
    public function setIddoc($iddoc)
    {
        $this->iddoc = $iddoc;

        return $this;
    }

    /**
     * Get iddoc
     *
     * @return string
     */
    public function getIddoc()
    {
        return $this->iddoc;
    }

    /**
     * Set iddocType
     *
     * @param integer $iddocType
     *
     * @return AppSuspicionInvolved
     */
    public function setIddocType($iddocType)
    {
        $this->iddocType = $iddocType;

        return $this;
    }

    /**
     * Get iddocType
     *
     * @return integer
     */
    public function getIddocType()
    {
        return $this->iddocType;
    }

    /**
     * Set iddocIssueDate
     *
     * @param string $iddocIssueDate
     *
     * @return AppSuspicionInvolved
     */
    public function setIddocIssueDate($iddocIssueDate)
    {
        $this->iddocIssueDate = $iddocIssueDate;

        return $this;
    }

    /**
     * Get iddocIssueDate
     *
     * @return string
     */
    public function getIddocIssueDate()
    {
        return $this->iddocIssueDate;
    }

    /**
     * Set iddocExpiryDate
     *
     * @param string $iddocExpiryDate
     *
     * @return AppSuspicionInvolved
     */
    public function setIddocExpiryDate($iddocExpiryDate)
    {
        $this->iddocExpiryDate = $iddocExpiryDate;

        return $this;
    }

    /**
     * Get iddocExpiryDate
     *
     * @return string
     */
    public function getIddocExpiryDate()
    {
        return $this->iddocExpiryDate;
    }

    /**
     * Set iddocIssuePlace
     *
     * @param string $iddocIssuePlace
     *
     * @return AppSuspicionInvolved
     */
    public function setIddocIssuePlace($iddocIssuePlace)
    {
        $this->iddocIssuePlace = $iddocIssuePlace;

        return $this;
    }

    /**
     * Get iddocIssuePlace
     *
     * @return string
     */
    public function getIddocIssuePlace()
    {
        return $this->iddocIssuePlace;
    }

    /**
     * Set iddocIssueCountry
     *
     * @param string $iddocIssueCountry
     *
     * @return AppSuspicionInvolved
     */
    public function setIddocIssueCountry($iddocIssueCountry)
    {
        $this->iddocIssueCountry = $iddocIssueCountry;

        return $this;
    }

    /**
     * Get iddocIssueCountry
     *
     * @return string
     */
    public function getIddocIssueCountry()
    {
        return $this->iddocIssueCountry;
    }

    /**
     * Set iddocNationality
     *
     * @param string $iddocNationality
     *
     * @return AppSuspicionInvolved
     */
    public function setIddocNationality($iddocNationality)
    {
        $this->iddocNationality = $iddocNationality;

        return $this;
    }

    /**
     * Get iddocNationality
     *
     * @return string
     */
    public function getIddocNationality()
    {
        return $this->iddocNationality;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return AppSuspicionInvolved
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set addressNr
     *
     * @param string $addressNr
     *
     * @return AppSuspicionInvolved
     */
    public function setAddressNr($addressNr)
    {
        $this->addressNr = $addressNr;

        return $this;
    }

    /**
     * Get addressNr
     *
     * @return string
     */
    public function getAddressNr()
    {
        return $this->addressNr;
    }

    /**
     * Set addressChars
     *
     * @param string $addressChars
     *
     * @return AppSuspicionInvolved
     */
    public function setAddressChars($addressChars)
    {
        $this->addressChars = $addressChars;

        return $this;
    }

    /**
     * Get addressChars
     *
     * @return string
     */
    public function getAddressChars()
    {
        return $this->addressChars;
    }

    /**
     * Set addressPlace
     *
     * @param string $addressPlace
     *
     * @return AppSuspicionInvolved
     */
    public function setAddressPlace($addressPlace)
    {
        $this->addressPlace = $addressPlace;

        return $this;
    }

    /**
     * Get addressPlace
     *
     * @return string
     */
    public function getAddressPlace()
    {
        return $this->addressPlace;
    }

    /**
     * Set addressZip
     *
     * @param string $addressZip
     *
     * @return AppSuspicionInvolved
     */
    public function setAddressZip($addressZip)
    {
        $this->addressZip = $addressZip;

        return $this;
    }

    /**
     * Get addressZip
     *
     * @return string
     */
    public function getAddressZip()
    {
        return $this->addressZip;
    }

    /**
     * Set addressTypeCountry
     *
     * @param integer $addressTypeCountry
     *
     * @return AppSuspicionInvolved
     */
    public function setAddressTypeCountry($addressTypeCountry)
    {
        $this->addressTypeCountry = $addressTypeCountry;

        return $this;
    }

    /**
     * Get addressTypeCountry
     *
     * @return integer
     */
    public function getAddressTypeCountry()
    {
        return $this->addressTypeCountry;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return AppSuspicionInvolved
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set phoneType
     *
     * @param integer $phoneType
     *
     * @return AppSuspicionInvolved
     */
    public function setPhoneType($phoneType)
    {
        $this->phoneType = $phoneType;

        return $this;
    }

    /**
     * Get phoneType
     *
     * @return integer
     */
    public function getPhoneType()
    {
        return $this->phoneType;
    }

    /**
     * Set phoneTypeCountry
     *
     * @param integer $phoneTypeCountry
     *
     * @return AppSuspicionInvolved
     */
    public function setPhoneTypeCountry($phoneTypeCountry)
    {
        $this->phoneTypeCountry = $phoneTypeCountry;

        return $this;
    }

    /**
     * Get phoneTypeCountry
     *
     * @return integer
     */
    public function getPhoneTypeCountry()
    {
        return $this->phoneTypeCountry;
    }
}

