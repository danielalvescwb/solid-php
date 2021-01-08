## Passos:

### Instalar Composer
No diretório raiz do projeto executar os códigos abaixo:
```
- php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
- php -r "if (hash_file('sha384', 'composer-setup.php') === '756890a4488ce9024fc62c56153228907f1545c228516cbf63f885e036d37e9a59d27d63f46af1d4d07ee0f76181c7d3') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
- php composer-setup.php
- php -r "unlink('composer-setup.php');"
```

### Inicializar composer
```
- cd {project}
- php ../composer.phar init
- Adicionar no composer.json
"autoload": {
    "psr-4": {
        "src\\": "src/"
    }
}
- php ../composer.phar install
```

### Para refazer o autoload com o composer
```
- php ../composer.phar dumpautoload -o
```
## Iniciar servidor com php
```
- php -S localhost:8000
```
## Adicionando biblioteca de testes phpunit
```
- cd {project}
- php ../composer.phar require --dev --prefer-dist phpunit/phpunit ^9.0
```