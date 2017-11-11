<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AppCmsContent
 *
 * @ORM\Table(name="app_cms_content")
 * @ORM\Entity
 */
class AppCmsContent
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
    private $updatePlatform = '1';

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
     * @ORM\Column(name="order_by", type="integer", nullable=false)
     */
    private $orderBy = '100';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_language", type="integer", nullable=true)
     */
    private $idLanguage = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_cmsmodule", type="integer", nullable=true)
     */
    private $idCmsmodule;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_cmssection", type="integer", nullable=true)
     */
    private $idCmssection;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_cmscategory", type="integer", nullable=true)
     */
    private $idCmscategory;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_active", type="integer", nullable=true)
     */
    private $isActive = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="is_published", type="integer", nullable=true)
     */
    private $isPublished;

    /**
     * @var string
     *
     * @ORM\Column(name="post_update", type="text", nullable=true)
     */
    private $postUpdate;

    /**
     * @var string
     *
     * @ORM\Column(name="post_title", type="text", nullable=true)
     */
    private $postTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="post_subtitle", type="text", nullable=true)
     */
    private $postSubtitle;

    /**
     * @var string
     *
     * @ORM\Column(name="post_author", type="text", nullable=true)
     */
    private $postAuthor;

    /**
     * @var string
     *
     * @ORM\Column(name="post_keys", type="text", nullable=true)
     */
    private $postKeys;

    /**
     * @var string
     *
     * @ORM\Column(name="post_content", type="text", nullable=true)
     */
    private $postContent;

    /**
     * @var string
     *
     * @ORM\Column(name="post_resume", type="text", nullable=true)
     */
    private $postResume;

    /**
     * @var string
     *
     * @ORM\Column(name="post_createdate", type="text", nullable=true)
     */
    private $postCreatedate;

    /**
     * @var string
     *
     * @ORM\Column(name="post_publishdate", type="text", nullable=true)
     */
    private $postPublishdate;

    /**
     * @var string
     *
     * @ORM\Column(name="post_slug", type="text", nullable=true)
     */
    private $postSlug;

    /**
     * @var string
     *
     * @ORM\Column(name="extra_pubplaces", type="text", nullable=true)
     */
    private $extraPubplaces;

    /**
     * @var string
     *
     * @ORM\Column(name="url_permalink", type="text", nullable=true)
     */
    private $urlPermalink;

    /**
     * @var string
     *
     * @ORM\Column(name="url_nopermalink", type="text", nullable=true)
     */
    private $urlNopermalink;

    /**
     * @var string
     *
     * @ORM\Column(name="url_minlink", type="text", nullable=true)
     */
    private $urlMinlink;

    /**
     * @var string
     *
     * @ORM\Column(name="url_imagesmall", type="text", nullable=true)
     */
    private $urlImagesmall;

    /**
     * @var string
     *
     * @ORM\Column(name="url_imagelarge", type="text", nullable=true)
     */
    private $urlImagelarge = '/images/custom/blog_image_default.png';

    /**
     * @var string
     *
     * @ORM\Column(name="url_video", type="text", nullable=true)
     */
    private $urlVideo;

    /**
     * @var string
     *
     * @ORM\Column(name="url_file", type="text", nullable=true)
     */
    private $urlFile;


}

