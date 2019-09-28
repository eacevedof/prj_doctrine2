<?php



/**
 * AppPicture
 */
class AppPicture
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
    private $idType;

    /**
     * @var integer
     */
    private $idTypeEntity;

    /**
     * @var integer
     */
    private $idEntity;

    /**
     * @var integer
     */
    private $idOwnerEntity;

    /**
     * @var integer
     */
    private $idOwner;

    /**
     * @var string
     */
    private $uriLocal;

    /**
     * @var string
     */
    private $uriPublic;

    /**
     * @var string
     */
    private $filename;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $shortname;

    /**
     * @var string
     */
    private $extension;

    /**
     * @var string
     */
    private $createDate;

    /**
     * @var string
     */
    private $modifyDate;

    /**
     * @var integer
     */
    private $size;

    /**
     * @var integer
     */
    private $width;

    /**
     * @var integer
     */
    private $height;

    /**
     * @var integer
     */
    private $resolution;

    /**
     * @var string
     */
    private $source;

    /**
     * @var string
     */
    private $sourceFilename;

    /**
     * @var string
     */
    private $folder;

    /**
     * @var string
     */
    private $parentPath;

    /**
     * @var string
     */
    private $information;

    /**
     * @var string
     */
    private $informationExtra;

    /**
     * @var integer
     */
    private $rating;

    /**
     * @var string
     */
    private $imgTitle;

    /**
     * @var string
     */
    private $anchorText;

    /**
     * @var integer
     */
    private $idThumb1;

    /**
     * @var integer
     */
    private $idThumb2;

    /**
     * @var integer
     */
    private $idThumb3;

    /**
     * @var integer
     */
    private $idThumb4;

    /**
     * @var integer
     */
    private $idThumb5;

    /**
     * @var string
     */
    private $csvTags;

    /**
     * @var integer
     */
    private $show;

    /**
     * @var integer
     */
    private $isBydefault;

    /**
     * @var integer
     */
    private $isPublic;

    /**
     * @var integer
     */
    private $isFile;

    /**
     * @var integer
     */
    private $isError;

    /**
     * @var integer
     */
    private $isRepeated;

    /**
     * @var integer
     */
    private $orderBy;


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
     * @return AppPicture
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
     * @return AppPicture
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
     * @return AppPicture
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
     * @return AppPicture
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
     * @return AppPicture
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
     * @return AppPicture
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
     * @return AppPicture
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
     * @return AppPicture
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
     * @return AppPicture
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
     * @return AppPicture
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
     * @return AppPicture
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
     * @return AppPicture
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
     * @return AppPicture
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
     * @return AppPicture
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
     * @return AppPicture
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
     * @return AppPicture
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
     * Set idType
     *
     * @param integer $idType
     *
     * @return AppPicture
     */
    public function setIdType($idType)
    {
        $this->idType = $idType;

        return $this;
    }

    /**
     * Get idType
     *
     * @return integer
     */
    public function getIdType()
    {
        return $this->idType;
    }

    /**
     * Set idTypeEntity
     *
     * @param integer $idTypeEntity
     *
     * @return AppPicture
     */
    public function setIdTypeEntity($idTypeEntity)
    {
        $this->idTypeEntity = $idTypeEntity;

        return $this;
    }

    /**
     * Get idTypeEntity
     *
     * @return integer
     */
    public function getIdTypeEntity()
    {
        return $this->idTypeEntity;
    }

    /**
     * Set idEntity
     *
     * @param integer $idEntity
     *
     * @return AppPicture
     */
    public function setIdEntity($idEntity)
    {
        $this->idEntity = $idEntity;

        return $this;
    }

    /**
     * Get idEntity
     *
     * @return integer
     */
    public function getIdEntity()
    {
        return $this->idEntity;
    }

    /**
     * Set idOwnerEntity
     *
     * @param integer $idOwnerEntity
     *
     * @return AppPicture
     */
    public function setIdOwnerEntity($idOwnerEntity)
    {
        $this->idOwnerEntity = $idOwnerEntity;

        return $this;
    }

    /**
     * Get idOwnerEntity
     *
     * @return integer
     */
    public function getIdOwnerEntity()
    {
        return $this->idOwnerEntity;
    }

    /**
     * Set idOwner
     *
     * @param integer $idOwner
     *
     * @return AppPicture
     */
    public function setIdOwner($idOwner)
    {
        $this->idOwner = $idOwner;

        return $this;
    }

    /**
     * Get idOwner
     *
     * @return integer
     */
    public function getIdOwner()
    {
        return $this->idOwner;
    }

    /**
     * Set uriLocal
     *
     * @param string $uriLocal
     *
     * @return AppPicture
     */
    public function setUriLocal($uriLocal)
    {
        $this->uriLocal = $uriLocal;

        return $this;
    }

    /**
     * Get uriLocal
     *
     * @return string
     */
    public function getUriLocal()
    {
        return $this->uriLocal;
    }

    /**
     * Set uriPublic
     *
     * @param string $uriPublic
     *
     * @return AppPicture
     */
    public function setUriPublic($uriPublic)
    {
        $this->uriPublic = $uriPublic;

        return $this;
    }

    /**
     * Get uriPublic
     *
     * @return string
     */
    public function getUriPublic()
    {
        return $this->uriPublic;
    }

    /**
     * Set filename
     *
     * @param string $filename
     *
     * @return AppPicture
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return AppPicture
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set shortname
     *
     * @param string $shortname
     *
     * @return AppPicture
     */
    public function setShortname($shortname)
    {
        $this->shortname = $shortname;

        return $this;
    }

    /**
     * Get shortname
     *
     * @return string
     */
    public function getShortname()
    {
        return $this->shortname;
    }

    /**
     * Set extension
     *
     * @param string $extension
     *
     * @return AppPicture
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * Get extension
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Set createDate
     *
     * @param string $createDate
     *
     * @return AppPicture
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;

        return $this;
    }

    /**
     * Get createDate
     *
     * @return string
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * Set modifyDate
     *
     * @param string $modifyDate
     *
     * @return AppPicture
     */
    public function setModifyDate($modifyDate)
    {
        $this->modifyDate = $modifyDate;

        return $this;
    }

    /**
     * Get modifyDate
     *
     * @return string
     */
    public function getModifyDate()
    {
        return $this->modifyDate;
    }

    /**
     * Set size
     *
     * @param integer $size
     *
     * @return AppPicture
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return integer
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set width
     *
     * @param integer $width
     *
     * @return AppPicture
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get width
     *
     * @return integer
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set height
     *
     * @param integer $height
     *
     * @return AppPicture
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return integer
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set resolution
     *
     * @param integer $resolution
     *
     * @return AppPicture
     */
    public function setResolution($resolution)
    {
        $this->resolution = $resolution;

        return $this;
    }

    /**
     * Get resolution
     *
     * @return integer
     */
    public function getResolution()
    {
        return $this->resolution;
    }

    /**
     * Set source
     *
     * @param string $source
     *
     * @return AppPicture
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set sourceFilename
     *
     * @param string $sourceFilename
     *
     * @return AppPicture
     */
    public function setSourceFilename($sourceFilename)
    {
        $this->sourceFilename = $sourceFilename;

        return $this;
    }

    /**
     * Get sourceFilename
     *
     * @return string
     */
    public function getSourceFilename()
    {
        return $this->sourceFilename;
    }

    /**
     * Set folder
     *
     * @param string $folder
     *
     * @return AppPicture
     */
    public function setFolder($folder)
    {
        $this->folder = $folder;

        return $this;
    }

    /**
     * Get folder
     *
     * @return string
     */
    public function getFolder()
    {
        return $this->folder;
    }

    /**
     * Set parentPath
     *
     * @param string $parentPath
     *
     * @return AppPicture
     */
    public function setParentPath($parentPath)
    {
        $this->parentPath = $parentPath;

        return $this;
    }

    /**
     * Get parentPath
     *
     * @return string
     */
    public function getParentPath()
    {
        return $this->parentPath;
    }

    /**
     * Set information
     *
     * @param string $information
     *
     * @return AppPicture
     */
    public function setInformation($information)
    {
        $this->information = $information;

        return $this;
    }

    /**
     * Get information
     *
     * @return string
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * Set informationExtra
     *
     * @param string $informationExtra
     *
     * @return AppPicture
     */
    public function setInformationExtra($informationExtra)
    {
        $this->informationExtra = $informationExtra;

        return $this;
    }

    /**
     * Get informationExtra
     *
     * @return string
     */
    public function getInformationExtra()
    {
        return $this->informationExtra;
    }

    /**
     * Set rating
     *
     * @param integer $rating
     *
     * @return AppPicture
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return integer
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set imgTitle
     *
     * @param string $imgTitle
     *
     * @return AppPicture
     */
    public function setImgTitle($imgTitle)
    {
        $this->imgTitle = $imgTitle;

        return $this;
    }

    /**
     * Get imgTitle
     *
     * @return string
     */
    public function getImgTitle()
    {
        return $this->imgTitle;
    }

    /**
     * Set anchorText
     *
     * @param string $anchorText
     *
     * @return AppPicture
     */
    public function setAnchorText($anchorText)
    {
        $this->anchorText = $anchorText;

        return $this;
    }

    /**
     * Get anchorText
     *
     * @return string
     */
    public function getAnchorText()
    {
        return $this->anchorText;
    }

    /**
     * Set idThumb1
     *
     * @param integer $idThumb1
     *
     * @return AppPicture
     */
    public function setIdThumb1($idThumb1)
    {
        $this->idThumb1 = $idThumb1;

        return $this;
    }

    /**
     * Get idThumb1
     *
     * @return integer
     */
    public function getIdThumb1()
    {
        return $this->idThumb1;
    }

    /**
     * Set idThumb2
     *
     * @param integer $idThumb2
     *
     * @return AppPicture
     */
    public function setIdThumb2($idThumb2)
    {
        $this->idThumb2 = $idThumb2;

        return $this;
    }

    /**
     * Get idThumb2
     *
     * @return integer
     */
    public function getIdThumb2()
    {
        return $this->idThumb2;
    }

    /**
     * Set idThumb3
     *
     * @param integer $idThumb3
     *
     * @return AppPicture
     */
    public function setIdThumb3($idThumb3)
    {
        $this->idThumb3 = $idThumb3;

        return $this;
    }

    /**
     * Get idThumb3
     *
     * @return integer
     */
    public function getIdThumb3()
    {
        return $this->idThumb3;
    }

    /**
     * Set idThumb4
     *
     * @param integer $idThumb4
     *
     * @return AppPicture
     */
    public function setIdThumb4($idThumb4)
    {
        $this->idThumb4 = $idThumb4;

        return $this;
    }

    /**
     * Get idThumb4
     *
     * @return integer
     */
    public function getIdThumb4()
    {
        return $this->idThumb4;
    }

    /**
     * Set idThumb5
     *
     * @param integer $idThumb5
     *
     * @return AppPicture
     */
    public function setIdThumb5($idThumb5)
    {
        $this->idThumb5 = $idThumb5;

        return $this;
    }

    /**
     * Get idThumb5
     *
     * @return integer
     */
    public function getIdThumb5()
    {
        return $this->idThumb5;
    }

    /**
     * Set csvTags
     *
     * @param string $csvTags
     *
     * @return AppPicture
     */
    public function setCsvTags($csvTags)
    {
        $this->csvTags = $csvTags;

        return $this;
    }

    /**
     * Get csvTags
     *
     * @return string
     */
    public function getCsvTags()
    {
        return $this->csvTags;
    }

    /**
     * Set show
     *
     * @param integer $show
     *
     * @return AppPicture
     */
    public function setShow($show)
    {
        $this->show = $show;

        return $this;
    }

    /**
     * Get show
     *
     * @return integer
     */
    public function getShow()
    {
        return $this->show;
    }

    /**
     * Set isBydefault
     *
     * @param integer $isBydefault
     *
     * @return AppPicture
     */
    public function setIsBydefault($isBydefault)
    {
        $this->isBydefault = $isBydefault;

        return $this;
    }

    /**
     * Get isBydefault
     *
     * @return integer
     */
    public function getIsBydefault()
    {
        return $this->isBydefault;
    }

    /**
     * Set isPublic
     *
     * @param integer $isPublic
     *
     * @return AppPicture
     */
    public function setIsPublic($isPublic)
    {
        $this->isPublic = $isPublic;

        return $this;
    }

    /**
     * Get isPublic
     *
     * @return integer
     */
    public function getIsPublic()
    {
        return $this->isPublic;
    }

    /**
     * Set isFile
     *
     * @param integer $isFile
     *
     * @return AppPicture
     */
    public function setIsFile($isFile)
    {
        $this->isFile = $isFile;

        return $this;
    }

    /**
     * Get isFile
     *
     * @return integer
     */
    public function getIsFile()
    {
        return $this->isFile;
    }

    /**
     * Set isError
     *
     * @param integer $isError
     *
     * @return AppPicture
     */
    public function setIsError($isError)
    {
        $this->isError = $isError;

        return $this;
    }

    /**
     * Get isError
     *
     * @return integer
     */
    public function getIsError()
    {
        return $this->isError;
    }

    /**
     * Set isRepeated
     *
     * @param integer $isRepeated
     *
     * @return AppPicture
     */
    public function setIsRepeated($isRepeated)
    {
        $this->isRepeated = $isRepeated;

        return $this;
    }

    /**
     * Get isRepeated
     *
     * @return integer
     */
    public function getIsRepeated()
    {
        return $this->isRepeated;
    }

    /**
     * Set orderBy
     *
     * @param integer $orderBy
     *
     * @return AppPicture
     */
    public function setOrderBy($orderBy)
    {
        $this->orderBy = $orderBy;

        return $this;
    }

    /**
     * Get orderBy
     *
     * @return integer
     */
    public function getOrderBy()
    {
        return $this->orderBy;
    }
}

