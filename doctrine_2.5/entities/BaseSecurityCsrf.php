<?php



/**
 * BaseSecurityCsrf
 */
class BaseSecurityCsrf
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
    private $remoteIp;

    /**
     * @var string
     */
    private $sessionid;

    /**
     * @var string
     */
    private $sessionck;

    /**
     * @var string
     */
    private $csrf;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $reqGet;

    /**
     * @var string
     */
    private $reqPost;


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
     * @return BaseSecurityCsrf
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
     * @return BaseSecurityCsrf
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
     * @return BaseSecurityCsrf
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
     * @return BaseSecurityCsrf
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
     * Set remoteIp
     *
     * @param string $remoteIp
     *
     * @return BaseSecurityCsrf
     */
    public function setRemoteIp($remoteIp)
    {
        $this->remoteIp = $remoteIp;

        return $this;
    }

    /**
     * Get remoteIp
     *
     * @return string
     */
    public function getRemoteIp()
    {
        return $this->remoteIp;
    }

    /**
     * Set sessionid
     *
     * @param string $sessionid
     *
     * @return BaseSecurityCsrf
     */
    public function setSessionid($sessionid)
    {
        $this->sessionid = $sessionid;

        return $this;
    }

    /**
     * Get sessionid
     *
     * @return string
     */
    public function getSessionid()
    {
        return $this->sessionid;
    }

    /**
     * Set sessionck
     *
     * @param string $sessionck
     *
     * @return BaseSecurityCsrf
     */
    public function setSessionck($sessionck)
    {
        $this->sessionck = $sessionck;

        return $this;
    }

    /**
     * Get sessionck
     *
     * @return string
     */
    public function getSessionck()
    {
        return $this->sessionck;
    }

    /**
     * Set csrf
     *
     * @param string $csrf
     *
     * @return BaseSecurityCsrf
     */
    public function setCsrf($csrf)
    {
        $this->csrf = $csrf;

        return $this;
    }

    /**
     * Get csrf
     *
     * @return string
     */
    public function getCsrf()
    {
        return $this->csrf;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return BaseSecurityCsrf
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set reqGet
     *
     * @param string $reqGet
     *
     * @return BaseSecurityCsrf
     */
    public function setReqGet($reqGet)
    {
        $this->reqGet = $reqGet;

        return $this;
    }

    /**
     * Get reqGet
     *
     * @return string
     */
    public function getReqGet()
    {
        return $this->reqGet;
    }

    /**
     * Set reqPost
     *
     * @param string $reqPost
     *
     * @return BaseSecurityCsrf
     */
    public function setReqPost($reqPost)
    {
        $this->reqPost = $reqPost;

        return $this;
    }

    /**
     * Get reqPost
     *
     * @return string
     */
    public function getReqPost()
    {
        return $this->reqPost;
    }
}

