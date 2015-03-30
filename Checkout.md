# Acesso por linha de comando #

## Acesso em modo anônimo ##
> Utilize este comando para verificar o código fonte mais recente projeto:
```sh

# Não-membros podem efetuar check out de uma cópia de trabalho somente-leitura anônima via HTTP.
svn checkout "http://cobalto-php.googlecode.com/svn/trunk/" "cobalto-php"```

## Membros do projeto ##
> Se você quiser fazer alterações no código, utilize este comando para verificação via HTTPS:
```sh

# Membros do projeto devem autenticar-se via HTTPS para permitir comittar suas alterações.
svn checkout "https://cobalto-php.googlecode.com/svn/trunk/" "cobalto-php" --username "USERNAME@gmail.com"```
    * _Quando pedido, informe sua [senha automática do GoogleCode](http://code.google.com/hosting/settings)._

# Acesso via interface gráfica ou IDE #
> This project's Subversion repository may be accessed using [many different client programs and plug-ins](http://subversion.apache.org/packages.html). See your client's documentation for more information.