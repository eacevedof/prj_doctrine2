<?php



/**
 * AppCmsContent
 */
class AppCmsContent
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
    private $orderBy;

    /**
     * @var integer
     */
    private $idLanguage;

    /**
     * @var integer
     */
    private $idCmsmodule;

    /**
     * @var integer
     */
    private $idCmssection;

    /**
     * @var integer
     */
    private $idCmscategory;

    /**
     * @var integer
     */
    private $isActive;

    /**
     * @var integer
     */
    private $isPublished;

    /**
     * @var string
     */
    private $postUpdate;

    /**
     * @var string
     */
    private $postTitle;

    /**
     * @var string
     */
    private $postSubtitle;

    /**
     * @var string
     */
    private $postAuthor;

    /**
     * @var string
     */
    private $postKeys;

    /**
     * @var string
     */
    private $postContent;

    /**
     * @var string
     */
    private $postResume;

    /**
     * @var string
     */
    private $postCreatedate;

    /**
     * @var string
     */
    private $postPublishdate;

    /**
     * @var string
     */
    private $postSlug;

    /**
     * @var string
     */
    private $extraPubplaces;

    /**
     * @var string
     */
    private $urlPermalink;

    /**
     * @var string
     */
    private $urlNopermalink;

    /**
     * @var string
     */
    private $urlMinlink;

    /**
     * @var string
     */
    private $urlImagesmall;

    /**
     * @var string
     */
    private $urlImagelarge;

    /**
     * @var string
     */
    private $urlVideo;

    /**
     * @var string
     */
    private $urlFile;


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
     * @return AppCmsContent
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
     * @return AppCmsContent
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
     * @return AppCmsContent
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
     * @return AppCmsContent
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
     * @return AppCmsContent
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
     * @return AppCmsContent
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
     * @return AppCmsContent
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
     * @return AppCmsContent
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
     * @return AppCmsContent
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
     * @return AppCmsContent
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
     * @return AppCmsContent
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
     * @return AppCmsContent
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
     * @return AppCmsContent
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
     * @return AppCmsContent
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
     * @return AppCmsContent
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
     * @return AppCmsContent
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
     * Set orderBy
     *
     * @param integer $orderBy
     *
     * @return AppCmsContent
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

    /**
     * Set idLanguage
     *
     * @param integer $idLanguage
     *
     * @return AppCmsContent
     */
    public function setIdLanguage($idLanguage)
    {
        $this->idLanguage = $idLanguage;

        return $this;
    }

    /**
     * Get idLanguage
     *
     * @return integer
     */
    public function getIdLanguage()
    {
        return $this->idLanguage;
    }

    /**
     * Set idCmsmodule
     *
     * @param integer $idCmsmodule
     *
     * @return AppCmsContent
     */
    public function setIdCmsmodule($idCmsmodule)
    {
        $this->idCmsmodule = $idCmsmodule;

        return $this;
    }

    /**
     * Get idCmsmodule
     *
     * @return integer
     */
    public function getIdCmsmodule()
    {
        return $this->idCmsmodule;
    }

    /**
     * Set idCmssection
     *
     * @param integer $idCmssection
     *
     * @return AppCmsContent
     */
    public function setIdCmssection($idCmssection)
    {
        $this->idCmssection = $idCmssection;

        return $this;
    }

    /**
     * Get idCmssection
     *
     * @return integer
     */
    public function getIdCmssection()
    {
        return $this->idCmssection;
    }

    /**
     * Set idCmscategory
     *
     * @param integer $idCmscategory
     *
     * @return AppCmsContent
     */
    public function setIdCmscategory($idCmscategory)
    {
        $this->idCmscategory = $idCmscategory;

        return $this;
    }

    /**
     * Get idCmscategory
     *
     * @return integer
     */
    public function getIdCmscategory()
    {
        return $this->idCmscategory;
    }

    /**
     * Set isActive
     *
     * @param integer $isActive
     *
     * @return AppCmsContent
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return integer
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set isPublished
     *
     * @param integer $isPublished
     *
     * @return AppCmsContent
     */
    public function setIsPublished($isPublished)
    {
        $this->isPublished = $isPublished;

        return $this;
    }

    /**
     * Get isPublished
     *
     * @return integer
     */
    public function getIsPublished()
    {
        return $this->isPublished;
    }

    /**
     * Set postUpdate
     *
     * @param string $postUpdate
     *
     * @return AppCmsContent
     */
    public function setPostUpdate($postUpdate)
    {
        $this->postUpdate = $postUpdate;

        return $this;
    }

    /**
     * Get postUpdate
     *
     * @return string
     */
    public function getPostUpdate()
    {
        return $this->postUpdate;
    }

    /**
     * Set postTitle
     *
     * @param string $postTitle
     *
     * @return AppCmsContent
     */
    public function setPostTitle($postTitle)
    {
        $this->postTitle = $postTitle;

        return $this;
    }

    /**
     * Get postTitle
     *
     * @return string
     */
    public function getPostTitle()
    {
        return $this->postTitle;
    }

    /**
     * Set postSubtitle
     *
     * @param string $postSubtitle
     *
     * @return AppCmsContent
     */
    public function setPostSubtitle($postSubtitle)
    {
        $this->postSubtitle = $postSubtitle;

        return $this;
    }

    /**
     * Get postSubtitle
     *
     * @return string
     */
    public function getPostSubtitle()
    {
        return $this->postSubtitle;
    }

    /**
     * Set postAuthor
     *
     * @param string $postAuthor
     *
     * @return AppCmsContent
     */
    public function setPostAuthor($postAuthor)
    {
        $this->postAuthor = $postAuthor;

        return $this;
    }

    /**
     * Get postAuthor
     *
     * @return string
     */
    public function getPostAuthor()
    {
        return $this->postAuthor;
    }

    /**
     * Set postKeys
     *
     * @param string $postKeys
     *
     * @return AppCmsContent
     */
    public function setPostKeys($postKeys)
    {
        $this->postKeys = $postKeys;

        return $this;
    }

    /**
     * Get postKeys
     *
     * @return string
     */
    public function getPostKeys()
    {
        return $this->postKeys;
    }

    /**
     * Set postContent
     *
     * @param string $postContent
     *
     * @return AppCmsContent
     */
    public function setPostContent($postContent)
    {
        $this->postContent = $postContent;

        return $this;
    }

    /**
     * Get postContent
     *
     * @return string
     */
    public function getPostContent()
    {
        return $this->postContent;
    }

    /**
     * Set postResume
     *
     * @param string $postResume
     *
     * @return AppCmsContent
     */
    public function setPostResume($postResume)
    {
        $this->postResume = $postResume;

        return $this;
    }

    /**
     * Get postResume
     *
     * @return string
     */
    public function getPostResume()
    {
        return $this->postResume;
    }

    /**
     * Set postCreatedate
     *
     * @param string $postCreatedate
     *
     * @return AppCmsContent
     */
    public function setPostCreatedate($postCreatedate)
    {
        $this->postCreatedate = $postCreatedate;

        return $this;
    }

    /**
     * Get postCreatedate
     *
     * @return string
     */
    public function getPostCreatedate()
    {
        return $this->postCreatedate;
    }

    /**
     * Set postPublishdate
     *
     * @param string $postPublishdate
     *
     * @return AppCmsContent
     */
    public function setPostPublishdate($postPublishdate)
    {
        $this->postPublishdate = $postPublishdate;

        return $this;
    }

    /**
     * Get postPublishdate
     *
     * @return string
     */
    public function getPostPublishdate()
    {
        return $this->postPublishdate;
    }

    /**
     * Set postSlug
     *
     * @param string $postSlug
     *
     * @return AppCmsContent
     */
    public function setPostSlug($postSlug)
    {
        $this->postSlug = $postSlug;

        return $this;
    }

    /**
     * Get postSlug
     *
     * @return string
     */
    public function getPostSlug()
    {
        return $this->postSlug;
    }

    /**
     * Set extraPubplaces
     *
     * @param string $extraPubplaces
     *
     * @return AppCmsContent
     */
    public function setExtraPubplaces($extraPubplaces)
    {
        $this->extraPubplaces = $extraPubplaces;

        return $this;
    }

    /**
     * Get extraPubplaces
     *
     * @return string
     */
    public function getExtraPubplaces()
    {
        return $this->extraPubplaces;
    }

    /**
     * Set urlPermalink
     *
     * @param string $urlPermalink
     *
     * @return AppCmsContent
     */
    public function setUrlPermalink($urlPermalink)
    {
        $this->urlPermalink = $urlPermalink;

        return $this;
    }

    /**
     * Get urlPermalink
     *
     * @return string
     */
    public function getUrlPermalink()
    {
        return $this->urlPermalink;
    }

    /**
     * Set urlNopermalink
     *
     * @param string $urlNopermalink
     *
     * @return AppCmsContent
     */
    public function setUrlNopermalink($urlNopermalink)
    {
        $this->urlNopermalink = $urlNopermalink;

        return $this;
    }

    /**
     * Get urlNopermalink
     *
     * @return string
     */
    public function getUrlNopermalink()
    {
        return $this->urlNopermalink;
    }

    /**
     * Set urlMinlink
     *
     * @param string $urlMinlink
     *
     * @return AppCmsContent
     */
    public function setUrlMinlink($urlMinlink)
    {
        $this->urlMinlink = $urlMinlink;

        return $this;
    }

    /**
     * Get urlMinlink
     *
     * @return string
     */
    public function getUrlMinlink()
    {
        return $this->urlMinlink;
    }

    /**
     * Set urlImagesmall
     *
     * @param string $urlImagesmall
     *
     * @return AppCmsContent
     */
    public function setUrlImagesmall($urlImagesmall)
    {
        $this->urlImagesmall = $urlImagesmall;

        return $this;
    }

    /**
     * Get urlImagesmall
     *
     * @return string
     */
    public function getUrlImagesmall()
    {
        return $this->urlImagesmall;
    }

    /**
     * Set urlImagelarge
     *
     * @param string $urlImagelarge
     *
     * @return AppCmsContent
     */
    public function setUrlImagelarge($urlImagelarge)
    {
        $this->urlImagelarge = $urlImagelarge;

        return $this;
    }

    /**
     * Get urlImagelarge
     *
     * @return string
     */
    public function getUrlImagelarge()
    {
        return $this->urlImagelarge;
    }

    /**
     * Set urlVideo
     *
     * @param string $urlVideo
     *
     * @return AppCmsContent
     */
    public function setUrlVideo($urlVideo)
    {
        $this->urlVideo = $urlVideo;

        return $this;
    }

    /**
     * Get urlVideo
     *
     * @return string
     */
    public function getUrlVideo()
    {
        return $this->urlVideo;
    }

    /**
     * Set urlFile
     *
     * @param string $urlFile
     *
     * @return AppCmsContent
     */
    public function setUrlFile($urlFile)
    {
        $this->urlFile = $urlFile;

        return $this;
    }

    /**
     * Get urlFile
     *
     * @return string
     */
    public function getUrlFile()
    {
        return $this->urlFile;
    }
}

