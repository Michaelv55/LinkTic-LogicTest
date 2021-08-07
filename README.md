# LinkTic-LogicTest

Los métodos requeridos para dar solución a los 3 puntos de la prueba lógica se encuentran en la clase LogicTest.
- Para dar solución al primer punto: Dado un numero n encontrar todos los múltiplos de 3 y 5 menores al número dado, el método debe retornar la suma de los múltiplos encontrados. Ejemplos:
  	Si el numeroingresado es 10, los múltiplos de 3 y 5 menores a 10 son: 3, 5, 6, 9, el resultado de la función debe ser 23, debido a que es la suma de 3, 5, 6, 9.
 Se usó el método: LogicTest::sumOfMultiples(int $limit, int ...$multiples)

- Para dar solución al segundo punto: "Dado un string separado por espacios, guiones y guiones bajos. Se debe implementar una función camel case que transforme la oración. Ejemplos:
        Dado "Bienvenido a_Trabajo-remoto" retornar "BienvenidoATrabajoRemoto"
        Dado "bienvenido-a_ Trabajo remoto" retornar "BienvenidoATrabajoRemoto"
 Se usó el método: LogicTest::toUpperCamelCase(string $text)
- Para dar solución al tercer punto: Dada una frase, devolver la frase donde las palabras con mayor a 5 letras esten al revés. Ejemplos:
        Dado "Bienvenido a Traba Remoto" retornar "odinevneiB a Traba snoituloS"
Se usó el método: LogicTest::reverseWords(string $text, int $numberOfLetters = 5)
