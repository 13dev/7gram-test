### Test application
```
$ ./vendor/bin/phpunit
```


### Mocking static methods
- Para a resolução deste problema apenas usava a funcionalidade do mockery "Alias".
Embora não seja recomendado é a maneira mais rápida de se resolver.
  
  [Reference](http://docs.mockery.io/en/latest/reference/creating_test_doubles.html#creating-test-doubles-aliasing)

### Observações & Melhorias
- Podia aplicar a técnica TDD mas como é coisa simples é banal;

O que eu melhorava no projeto:
- Faria a classe `Shape` abstrata, removia as propriedades `width`, `length` e implementava na classe `Retangle` já que um shape é muito genério e nem todos podem ter essas propiedades;
- Metia o método `getArea` e `getObject` como abstrato assim a responsabilidade era da classe concreta e não da `Shape` (ou até mesmo utilizar uma interface)
