# prj_doctrine2

## Doctrine se basa en un conjunto de patrones:

1. **SOLID** [Youtube - SOLID explicación resumida](https://www.youtube.com/watch?v=xrZ5KYw5_Zw)
    1.  [Github - Repo del ejemplo del video](https://github.com/leomicheloni/SOLID-Principles-examples)
    2.  **S**: Single responsability principle
        - Este principio ayuda a determinar que partes de la app son partes diferentes y separarlas
        - Cada clase deberia tener solo una tarea
        - Es mejor tener muchas clases con pocas lineas de código que lo contrario

    3.  **O**: Open close principle
        - Que las clases tengan partes públicas para elementos que interactuen con otras clases
        - Mantener las partes privadas para aquellos atributos que intervengan en la tarea especifica a la que está destinada la clase
        - Permitir que las clases tengan acceso a objetos que utilizan usando metodos públicos

    4.  **L**: Liskov sustitution principle
        - Se debe permitir sustituir una clase hija por la clase padre
        - No cumplir con este principio hace que la aplicación no sea escalable

    5.  **I**: Interface segregation principle
        - [Youtube - SOLID - Principio de Responsabilidad Única y de Segregación de Interfaces](https://www.youtube.com/watch?v=c97P1UmF1cs)
        - Un cliente no debe ser forzado a implementar metodos que no usa
        - Si defino una interfaz con un metodo que va a quedar como vacio en algunas de las clases que la implementen, entonces se esta
        rompiendo este principio

    6.  **D**: Dependency inversion principle
        - Se evita usar el constructor new dentro de los metodos de la clase
        - Se definie un servicelocator, (es un repositorio de objetos). con metodos factoria
        - El servicelocator gestionaria la inyección de dependencias

2.  [Youtube - introducción Arquitectura Hexagonal - DDD](https://www.youtube.com/watch?v=GZ9ic9QSO5U)
    1.  Complejidad accidental. Ñapas puntuales que a la larga repercuten en mantenimiento.

3.  Arquitectura de aplicaciones empresarial. (Patterns of Enterprise Application Architecture]
4.  Dentro de ese patron se utiliza el patrón: ORMM (Object Relational Metadata Mapping Patterns)
5.  [Youtube - A su vez este se apoya en el patrón: Repository](https://www.youtube.com/watch?v=mb6bwnEaZ3U)

## Links
1. [Youtube - SOLID - Principios de diseño de software y patrones de diseño](https://www.youtube.com/watch?v=j_ZnM8FJcmA)
2. [Youtube - Doctrine ORM Good Practices and Tricks - Marco "Ocramius" Pivetta @ PHP Antwerp](https://www.youtube.com/watch?v=j4nS_dGxxs8)
3. https://github.com/Ocramius/Doctrine2ORMSlidesTutorial
4. [Blog - Generate Doctrine2 from existing db](https://jejakroda.wordpress.com/2011/02/03/generate-doctrine2-mappings-from-existing-database/)

## Pruebas básicas de doctrine 2.5

## Comandos a ejecutar dentro de la carpeta del proyecto

### MAPPINGS (comando: orm:convert-mapping)

- Los **mappings annotations** son los archivos de metadatos con los atributos en private y configurados con valor por defecto.
- Estos ficheros son necesarios para generar el resto de tipos como los entities
- Despues de generar estas clases habria que configurar Entity(repositoryClass="") con los namespaces oportunos
- Ejemplo: `* @ORM\Entity(repositoryClass="AppBundle\Entities\BaseArray")`

#### Mappings (archivos .php)
```
# Entidades con anotaciones
php vendor/doctrine/orm/bin/doctrine orm:convert-mapping --filter App[A-Z]  --from-database --namespace="Models\Application\\"  annotation "./mappings-annotations"
php vendor/doctrine/orm/bin/doctrine orm:convert-mapping --filter Base[A-Z]  --from-database --namespace="Models\Base\\"  annotation "./mappings-annotations"
php vendor/doctrine/orm/bin/doctrine orm:convert-mapping --filter Com[A-Z]  --from-database --namespace "Models\Comms\\"  annotation "./mappings-annotations"

# Campos para loader, no admite flag annotation
php vendor/doctrine/orm/bin/doctrine orm:convert-mapping --from-database php "./mappings-php"
```

#### Mapeo de Entidades (con anotaciones)
- **Ejemplo Mappings - Annotation (Modelo con: ns, get-set y anotaciones)**
```
php vendor/doctrine/orm/bin/doctrine orm:convert-mapping --filter AppActivity  --from-database --namespace="Models\Application\\"  annotation "./mappings-annotations"
```

```php
<?php
namespace Models\Application;
use Doctrine\ORM\Mapping as ORM;
/**
 * AppActivity
 *
 * @ORM\Table(name="app_activity")
 * @ORM\Entity
 */
class AppActivity
{
    /**
     * @var integer
     * @ORM\Column(name="id", type="integer", nullable=true)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="processflag", type="text", nullable=true)
     */
    private $processflag;
```

#### Mapeo de campos en PHP (sin anotaciones)
```
php vendor/doctrine/orm/bin/doctrine orm:convert-mapping --filter AppActivity --from-database php "./mappings-php"
```

Los **mappings-php** son los archivos con la configuración de los campos.
'fieldName','columnName','type','nullable','options','unsigned','id' => true,

- **Ejemplo Mappings - Campos**
```php
<?php
//AppActivity.php
use Doctrine\ORM\Mapping\ClassMetadataInfo;
$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setPrimaryTable(array(
   'name' => 'app_activity',
  ));
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'id',
   'columnName' => 'id',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => false,
   ),
   'id' => true,
  ));
```

#### Mapeo de campos en XML y YAML (sin anotaciones)
```
php vendor/doctrine/orm/bin/doctrine orm:convert-mapping --from-database xml "./mappings-xml"
php vendor/doctrine/orm/bin/doctrine orm:convert-mapping --from-database yaml "./mappings-yaml"
```
- **Ejemplo Mappings - XML**
```xml
//AppArray.dcm.xml
<?xml version="1.0" encoding="utf-8"?>
<doctrine-mapping xmlns="http://doctrine-project.org/schemas/orm/doctrine-mapping" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://doctrine-project.org/schemas/orm/doctrine-mapping http://doctrine-project.org/schemas/orm/doctrine-mapping.xsd">
  <entity name="AppArray" table="app_array">
    <id name="id" type="integer" column="id">
      <generator strategy="IDENTITY"/>
    </id>
    <field name="processflag" type="text" column="processflag" nullable="true">
      <options>
        <option name="fixed"/>
      </options>
    </field>
```

- **Ejemplo Mappings - YML**
```yml
AppArray:
    type: entity
    table: app_array
    id:
        id:
            type: integer
            nullable: true
            options:
                unsigned: false
            id: true
            generator:
                strategy: IDENTITY
    fields:
        processflag:
            type: text
            nullable: true
            length: null
            options:
                fixed: false
```

### ENTITIES (comando: orm:generate-entities)
- Las **Entities** son los archivos con los `atributos = campos` de las tablas y sus anotaciones de tipado. 
- Llevan implementadas sus **getters** y sus **setters**.
- Son los modelos de dominio.
- Antes de ejecutar el comando de entitites hay que configurar la ruta de las anotaciones en **bootstrap.php**
`$sPathSrc = __DIR__."/mappings-annotations";` Se le tiene que indicar a doctrine donde se encuentran los metadatos de modo que con estas anotaciones
sea capaz de generar los modelos 
- La dif entre Entities y Entities-Bundle es que 'bundle' tiene más anotaciones que son necesarias para crear el bundle de repositorio

- Antes de ejecutar este comando hay que configurar la ruta de las anotaciones en archivo bootstrap.php
```php
$config = Setup::createAnnotationMetadataConfiguration([$arPaths["mappings-annotations"]]
        ,$isDevMode,null,null,false);
```

#### Entities @ORM\* (entities-bundle)
```
# generate-annotations  tags @ORM\* en los campos
# generate-methods      getters y setters
php vendor/doctrine/orm/bin/doctrine orm:generate-entities --filter AppActivity --generate-annotations=1 --generate-methods=1  ./entities-bundle
```

- **Ejemplo @ORM**
```php
<?php
namespace Models\Application;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppActivity
 * @ORM\Table(name="app_activity")
 * @ORM\Entity
 */
class AppActivity
{
    /**
     * @var integer
     * @ORM\Column(name="id", type="integer", precision=0, scale=0, nullable=true, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="processflag", type="text", precision=0, scale=0, nullable=true, unique=false)
     */
    private $processflag;

```

#### Entities (sin argumentos)
```
php vendor/doctrine/orm/bin/doctrine orm:generate-entities "./entities"
```

- **Ejemplo Entities**
```php
<?php
//Entities/AppArray.php
/**
 * AppArray
 */
class AppArray
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $processflag;

...
    /**
     * Get id
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set processflag
     * @param string $processflag
     * @return AppArray
     */
    public function setProcessflag($processflag)
    {
        $this->processflag = $processflag;
        return $this;
    }

    /**
     * Get processflag
     * @return string
     */
    public function getProcessflag()
    {
        return $this->processflag;
    }
```

### PROXIES (comando: orm:generate-proxies)
- antes de ejecutar este comando es necesario tener configurada la ruta de archivos con anotaciones. Incluso valdria una **"Entidad"** con **@ORM\\***
```
php vendor/doctrine/orm/bin/doctrine orm:generate-proxies --filter AppActivity "./proxies"
```

- Son clases tipo __CG__<NomTabla>.php con métodos básicos: 
    - __load, __isInitialized, __setInitialized, __setInitializer, __getInitializer, __setCloner,
__getCloner, __getLazyProperties


- **Ejemplo Proxy**
```php
<?php
namespace DoctrineProxies\__CG__;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class AppArray extends \AppArray implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];

    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {
        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }

    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', ''."\0".'AppArray'."\0".'id', ''."\0".'AppArray'."\0".'processflag', ''."\0".'AppArray'."\0".'insertPlatform', ''."\0".'AppArray'."\0".'insertUser', ''."\0".'AppArray'."\0".'insertDate', ''."\0".'AppArray'."\0".'updatePlatform', ''."\0".'AppArray'."\0".'updateUser', ''."\0".'AppArray'."\0".'updateDate', ''."\0".'AppArray'."\0".'deletePlatform', ''."\0".'AppArray'."\0".'deleteUser', ''."\0".'AppArray'."\0".'deleteDate', ''."\0".'AppArray'."\0".'cruCsvnote', ''."\0".'AppArray'."\0".'isErpsent', ''."\0".'AppArray'."\0".'isEnabled', ''."\0".'AppArray'."\0".'i', ''."\0".'AppArray'."\0".'codeErp', ''."\0".'AppArray'."\0".'type', ''."\0".'AppArray'."\0".'module', ''."\0".'AppArray'."\0".'idTosave', ''."\0".'AppArray'."\0".'description', ''."\0".'AppArray'."\0".'orderBy'];
        }
        return ['__isInitialized__', ''."\0".'AppArray'."\0".'id', ''."\0".'AppArray'."\0".'processflag', ''."\0".'AppArray'."\0".'insertPlatform', ''."\0".'AppArray'."\0".'insertUser', ''."\0".'AppArray'."\0".'insertDate', ''."\0".'AppArray'."\0".'updatePlatform', ''."\0".'AppArray'."\0".'updateUser', ''."\0".'AppArray'."\0".'updateDate', ''."\0".'AppArray'."\0".'deletePlatform', ''."\0".'AppArray'."\0".'deleteUser', ''."\0".'AppArray'."\0".'deleteDate', ''."\0".'AppArray'."\0".'cruCsvnote', ''."\0".'AppArray'."\0".'isErpsent', ''."\0".'AppArray'."\0".'isEnabled', ''."\0".'AppArray'."\0".'i', ''."\0".'AppArray'."\0".'codeErp', ''."\0".'AppArray'."\0".'type', ''."\0".'AppArray'."\0".'module', ''."\0".'AppArray'."\0".'idTosave', ''."\0".'AppArray'."\0".'description', ''."\0".'AppArray'."\0".'orderBy'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (AppArray $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };
        }
    }

    /**
     */
    public function __clone(){$this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);}

    /**
     * Forces initialization of the proxy
     */
    public function __load(){$this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);}

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(){return $this->__isInitialized__;}

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized){$this->__isInitialized__ = $initialized;}

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null){$this->__initializer__ = $initializer;}

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(){return $this->__initializer__;}

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null){$this->__cloner__ = $cloner;}

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(){return $this->__cloner__;}

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties(){return self::$lazyPropertiesDefaults;}
}
```

### REPOSITORIES (comando: generate-repositories)
- Antes de ejecutar este comando hay que configurar en **bootstrap.php** la ruta del/de los archivos de mapeo de campos generados con el 
comando `orm:convert-mapping`

```bash
php vendor/doctrine/orm/bin/doctrine orm:generate-repositories --filter AppActivity ./repositories
```

- Me está dando este error:
```
Notice: Undefined variable: metadata in C:\xampp\htdocs\borrame\mappings-php\AppActivity.php on line 5

Fatal error: Uncaught Error: Call to a member function setInheritanceType() on null in C:\xampp\htdocs\borrame\mappings-php\AppActivity.php:5
Stack trace:
#0 C:\xampp\htdocs\borrame\vendor\doctrine\common\lib\Doctrine\Common\Persistence\Mapping\Driver\AnnotationDriver.php(236): 
    require_once()
    
#1 C:\xampp\htdocs\borrame\vendor\doctrine\common\lib\Doctrine\Common\Persistence\Mapping\AbstractClassMetadataFactory.php(114): 
    Doctrine\Common\Persistence\Mapping\Driver\AnnotationDriver->getAllClassNames()
    
#2 C:\xampp\htdocs\borrame\vendor\doctrine\orm\lib\Doctrine\ORM\Tools\Console\Command\GenerateRepositoriesCommand.php(73): 
    Doctrine\Common\Persistence\Mapping\AbstractClassMetadataFactory->getAllMetadata()
    
#3 C:\xampp\htdocs\borrame\vendor\symfony\console\Command\Command.php(264): 
    Doctrine\ORM\Tools\Console\Command\GenerateRepositoriesCommand->execute(Object(Symfony\Component\Console\Input\ArgvInput), Object(Symfony\Component\Console\Output\ConsoleOutput))
    
#4 C:\xampp\htdocs\borrame\vendor\symfony\console\Application.php(841): 
    S in C:\xampp\htdocs\borrame\mappings-php\AppActivity.php on line 5

```

# comando doctrine
```
Doctrine Command Line Interface 2.5.12

Usage:
  command [options] [arguments]

Options:
  -h, --help            Display this help message
  -q, --quiet           Do not output any message
  -V, --version         Display this application version
      --ansi            Force ANSI output
      --no-ansi         Disable ANSI output
  -n, --no-interaction  Do not ask any interactive question
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

Available commands:
  help                            Displays help for a command
  list                            Lists commands
 dbal
  dbal:import                     Import SQL file(s) directly to Database.
  dbal:run-sql                    Executes arbitrary SQL directly from the command line.
 orm
  orm:clear-cache:metadata        Clear all metadata cache of the various cache drivers.
  orm:clear-cache:query           Clear all query cache of the various cache drivers.
  orm:clear-cache:result          Clear all result cache of the various cache drivers.
  orm:convert-d1-schema           [orm:convert:d1-schema] Converts Doctrine 1.X schema into a Doctrine 2.X schema.
  orm:convert-mapping             [orm:convert:mapping] Convert mapping information between supported formats.
  orm:ensure-production-settings  Verify that Doctrine is properly configured for a production environment.
  orm:generate-entities           [orm:generate:entities] Generate entity classes and method stubs from your mapping information.
  orm:generate-proxies            [orm:generate:proxies] Generates proxy classes for entity classes.
  orm:generate-repositories       [orm:generate:repositories] Generate repository classes from your mapping information.
  orm:info                        Show basic information about all mapped entities
  orm:mapping:describe            Display information about mapped objects
  orm:run-dql                     Executes arbitrary DQL directly from the command line.
  orm:schema-tool:create          Processes the schema and either create it directly on EntityManager Storage Connection or generate the SQL output.
  orm:schema-tool:drop            Drop the complete database schema of EntityManager Storage Connection or generate the corresponding SQL output.
  orm:schema-tool:update          Executes (or dumps) the SQL needed to update the database schema to match the current mapping metadata.
  orm:validate-schema             Validate the mapping files.
```

