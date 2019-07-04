# Kata FizzBuzz

Resolución de la Kata. Puedes verlo en un vídeo de livecoding en
https://premium.danielprimo.io/desafios/directos/aprender-tdd-con-kata-programacion


### Descripción de la Kata Fizz Buzz

Escribe un programa que imprima los números del 1 al 100, pero aplicando las siguientes normas:
- Devuelve Fizz si el número es divisible por 3.
- Devuelve Buzz si el número es divisible por 5.
- Devuelve FizzBuzz si el número es divisible por 3 y por 5

### Instalación

La Kata está ejecutada en PHP.

Debes instalar composer globalmente. [Instrucciones de instalación](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos).

Los requerimientos de la Kata son princopalmente dos
- Librería de testing PHPUnit
- PHP 7.2 o superior

Después de descargar el código ejecuta:

````
composer install
````

### Ejecución  de los tests

Puedes ejecutar los tests directamente con este comando:

````
./vendor/bin/phpunit --bootstrap vendor/autoload.php --colors tests
````

### Advertencias

**Al añadir nuevos ficheros**

Si quieres crear nuevas clases en la carpeta `/src` debes decirle a composer que precargue en su _autoload_ esos ficheros. 

Basta con lanzar este comando

````
composer dumpautoload
````

**Versiones anteriores de PHP**

No está comprobado pero para versiones anteriores de PHP, para que los tests funcionen correctamente hay que hacer los siguientes cambios.

- Eliminar o cambiar la dependencia de la versión de PHP en `composer.json`

- Cambiar la dependencia de PHPUnit por la aconsejada según versión de PHP. [Ver documentación](https://phpunit.de/getting-started/phpunit-8.html)

- En `FuzzBuzzerTest.php` la línea `public function setUp() : void {` podrá ser sustituida por `public function setUp() {` . Eliminamos de esta manera el TypeHint.


Más info en https://www.danielprimo.io/
