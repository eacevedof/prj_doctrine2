# prj_doctrinedemo
Demo usando el clon: https://github.com/Ocramius/Doctrine2ORMSlidesTutorial

# errores

```
al ejecutar:
php doctrine-cli.php orm:schema-tool:create

PHP Warning:  require_once(C:\xampp\htdocs\prj_doctrinedemo/library/doctrine-orm/lib/Doctrine/ORM/Mapping/Driver/DoctrineAnnotations.php): failed to open stream: No such file or directory in C:\xampp\htdocs\prj_doctrinedemo\vendor\doctrine\annotations\lib\Doctrine\Common\Annotations\AnnotationRegistry.php on line 64
```

correccion: 
```
AnnotationRegistry::registerFile(__DIR__ . '/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/DoctrineAnnotations.php');
```
resultado:
```
ATTENTION: This operation should not be executed in a production environment.

Creating database schema...
Database schema created successfully!
```


