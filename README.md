# prj_doctrine2

```
comandos a ejecutar dentro de la carpeta del proyecto

/*
los mappings php son los archivos con la configuración de los campos
*/
php vendor\doctrine\orm\bin\doctrine orm:convert-mapping --from-database php ".\mappings"

/*
las mappings annotations son los archivos con los atributos en private y configurados con valor por defecto
Estos son necesarios para el resto de tipos como los entities
*/
php vendor\doctrine\orm\bin\doctrine orm:convert-mapping --from-database annotation ".\annotations"

/*
antes de esto hay que configurar la ruta de las anotaciones en bootstrap.php 
$sPathSrc = __DIR__."/annotations";
estos archivos serian los modelos
*/
php vendor\doctrine\orm\bin\doctrine orm:generate-entities ".\entities"

/*
son clases tipo __CG__<NomTabla>.php con métodos básicos 
__load, __isInitialized, __setInitialized, __setInitializer, __getInitializer, __setCloner,
__getCloner, __getLazyProperties
*/
php vendor\doctrine\orm\bin\doctrine orm:generate-proxies ".\proxies"
```