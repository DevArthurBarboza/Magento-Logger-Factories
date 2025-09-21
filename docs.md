# Factories

O presente módulo se trata de um módulo para estudo e aplicação do design pattern Abstract Factory.

A abstract factory `Model\Factory\GeneralFactory` recebe como parâmetro, definido no `di.xml`, as respectivas factories `Model\Factory\CsvLoggerFactory` e `Model\Factory\JsonLoggerFactory`, cada uma responsável por fornecer uma instância de seu respectivo logger o qual é definido no diretório `/Logger`, e com seu handlers definidos em `/Logger/Handlers`.

`GeneralFactory` implementa a interface `AbstractGeneralLoggerFactoryInterface`, requisitando que o mesmo apresente o método `get($type)`, assim podendo determinar qual factory deve ser chamada e retornar a instância correta de logger. 

Cada factory implementa a interface `Api\Log\AbstractLoggerFactoryInterface`, permitindo a declaração na AbstractFactory de um array de `AbstractLoggerFactoryInterface` como argumento recebido pelo `ObjectManager` no instante de sua criação. As factories apresentam como propriedade uma instância de seu respectivo logger.

Cada logger apresenta seu próprio handler, definido no `di.xml`, tendo em mente que em cada handler será especificado o nome e tipo de arquivo a ser gerado pelo logger. Existe também a possibilidade de se criar arquivos de log com nomes variados em runtime de outras formas, por exemplo utilizando a [biblioteca Zend ou Laminas](https://magento.stackexchange.com/a/344670), mas decidi seguir através das boas práticas do Magento e da [PSR-3 (Logger Interface)](https://www.php-fig.org/psr/psr-3/), com a declaração dos handlers e loggers através do `di.xml`.