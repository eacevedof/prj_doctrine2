<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AppPicture
 *
 * @ORM\Table(name="app_picture")
 * @ORM\Entity
 */
class AppPicture
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
     * @ORM\Column(name="id_type", type="integer", nullable=true)
     */
    private $idType;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_type_entity", type="integer", nullable=true)
     */
    private $idTypeEntity;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_entity", type="integer", nullable=true)
     */
    private $idEntity;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_owner_entity", type="integer", nullable=true)
     */
    private $idOwnerEntity;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_owner", type="integer", nullable=true)
     */
    private $idOwner;

    /**
     * @var string
     *
     * @ORM\Column(name="uri_local", type="text", nullable=true)
     */
    private $uriLocal;

    /**
     * @var string
     *
     * @ORM\Column(name="uri_public", type="text", nullable=true)
     */
    private $uriPublic;

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="text", nullable=true)
     */
    private $filename;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="text", nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="shortname", type="text", nullable=true)
     */
    private $shortname;

    /**
     * @var string
     *
     * @ORM\Column(name="extension", type="text", nullable=true)
     */
    private $extension;

    /**
     * @var string
     *
     * @ORM\Column(name="create_date", type="text", nullable=true)
     */
    private $createDate;

    /**
     * @var string
     *
     * @ORM\Column(name="modify_date", type="text", nullable=true)
     */
    private $modifyDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="size", type="integer", nullable=true)
     */
    private $size;

    /**
     * @var integer
     *
     * @ORM\Column(name="width", type="integer", nullable=true)
     */
    private $width;

    /**
     * @var integer
     *
     * @ORM\Column(name="height", type="integer", nullable=true)
     */
    private $height;

    /**
     * @var integer
     *
     * @ORM\Column(name="resolution", type="integer", nullable=true)
     */
    private $resolution;

    /**
     * @var string
     *
     * @ORM\Column(name="source", type="text", nullable=true)
     */
    private $source;

    /**
     * @var string
     *
     * @ORM\Column(name="source_filename", type="text", nullable=true)
     */
    private $sourceFilename;

    /**
     * @var string
     *
     * @ORM\Column(name="folder", type="text", nullable=true)
     */
    private $folder;

    /**
     * @var string
     *
     * @ORM\Column(name="parent_path", type="text", nullable=true)
     */
    private $parentPath;

    /**
     * @var string
     *
     * @ORM\Column(name="information", type="text", nullable=true)
     */
    private $information;

    /**
     * @var string
     *
     * @ORM\Column(name="information_extra", type="text", nullable=true)
     */
    private $informationExtra;

    /**
     * @var integer
     *
     * @ORM\Column(name="rating", type="integer", nullable=true)
     */
    private $rating;

    /**
     * @var string
     *
     * @ORM\Column(name="img_title", type="text", nullable=true)
     */
    private $imgTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="anchor_text", type="text", nullable=true)
     */
    private $anchorText;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_thumb_1", type="integer", nullable=true)
     */
    private $idThumb1;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_thumb_2", type="integer", nullable=true)
     */
    private $idThumb2;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_thumb_3", type="integer", nullable=true)
     */
    private $idThumb3;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_thumb_4", type="integer", nullable=true)
     */
    private $idThumb4;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_thumb_5", type="integer", nullable=true)
     */
    private $idThumb5;

    /**
     * @var string
     *
     * @ORM\Column(name="csv_tags", type="text", nullable=true)
     */
    private $csvTags;

    /**
     * @var integer
     *
     * @ORM\Column(name="show", type="integer", nullable=true)
     */
    private $show;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_bydefault", type="integer", nullable=true)
     */
    private $isBydefault;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_public", type="integer", nullable=true)
     */
    private $isPublic;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_file", type="integer", nullable=true)
     */
    private $isFile;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_error", type="integer", nullable=true)
     */
    private $isError;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_repeated", type="integer", nullable=true)
     */
    private $isRepeated;

    /**
     * @var integer
     *
     * @ORM\Column(name="order_by", type="integer", nullable=false)
     */
    private $orderBy = '100';


}

