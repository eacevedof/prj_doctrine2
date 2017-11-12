# prj_doctrine2

https://www.youtube.com/watch?v=j4nS_dGxxs8

```
comandos a ejecutar dentro de la carpeta del proyecto

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
Añado manualmente el atributo Entity(repositoryClass="")
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

