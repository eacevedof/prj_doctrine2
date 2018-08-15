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

## Pruebas básicas de doctrine 2.5


## Comandos a ejecutar dentro de la carpeta del proyecto

### Mappings
```
/*
los mappings php son los archivos con la configuración de los campos.
'fieldName','columnName','type','nullable','options','unsigned','id' => true,
*/
php vendor\doctrine\orm\bin\doctrine orm:convert-mapping --from-database php ".\mappings-php"

/*
las mappings annotations son los archivos con los atributos en private y configurados con valor por defecto
Estos son necesarios para el resto de tipos como los entities
*/
php vendor\doctrine\orm\bin\doctrine orm:convert-mapping --from-database annotation ".\mappings-annotations"

php vendor\doctrine\orm\bin\doctrine orm:convert-mapping --from-database xml ".\mappings-xml"

php vendor\doctrine\orm\bin\doctrine orm:convert-mapping --from-database yaml ".\mappings-yaml"

/*
antes de esto hay que configurar la ruta de las anotaciones en bootstrap.php
$sPathSrc = __DIR__."/mappings-annotations";
estos archivos serian los modelos
*/
php vendor\doctrine\orm\bin\doctrine orm:generate-entities ".\entities"

/*
son clases tipo __CG__<NomTabla>.php con métodos básicos 
__load, __isInitialized, __setInitialized, __setInitializer, __getInitializer, __setCloner,
__getCloner, __getLazyProperties
*/
php vendor\doctrine\orm\bin\doctrine orm:generate-proxies ".\proxies"

/*
no funciona, no crea el atributo repositoryClass
*/
php vendor/doctrine/orm/bin/doctrine orm:generate-entities --filter Base[a-z,A-Z]* --generate-annotations=1 --generate-methods=1  ./entities-bundle

/*
Añado manualmente el atributo Entity(repositoryClass="") en las clases de la carpeta: "entities-bundle"
Cambio en bootstrap el origen a "entities-bundle":
createAnnotationMetadataConfiguration([$arPaths["entities-bundle"]], $isDevMode, null, null, false);
y ejecuto el comando
*/
php ./vendor/doctrine/orm/bin/doctrine orm:generate-repositories ./repositories-bundle

```

# comando doctrine
```
# 

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

