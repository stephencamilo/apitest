# Teste de API Laravel <img src="https://avatars3.githubusercontent.com/u/619543?s=460&u=6f261db6b295f29d08cfa9bbade15e9c94e9feb2&v=4" width="20">

## Requisitos:
- [Lando](https://docs.lando.dev/basics/installation.html) -> https://docs.lando.dev/basics/installation.html
- - Lando é uma abstração de **DOCKER** que facilita a vida de usuários iniciantes e Devs avançados é mais fácil de usar do que o **Docker Compose**
- Instale o [Git](https://git-scm.com/downloads) -> https://git-scm.com/downloads

## Configurando o ambiente: 
- Após a instalação do [Lando](https://docs.lando.dev/basics/installation.html) e do [Git](https://git-scm.com/downloads)
- Crie uma pasta no seu diretório Documentos chamada **projetos**
- Dentro da pasta projetos execute o comando `git clone https://github.com/stephencamilo/apitest.git`
- Entre na pasta apitest
- Dentro da pasta apiteste execute o comando `lando start`, aguarde o lando montar o ambiente de desenvolvomento
- Apos o setup o lando te dará algumas opções de URL entre elas deve estar [http://apitest.lndo.site/](http://apitest.lndo.site/)
- - Essa página estará vazia pois ainda não criamos dados de test no bando
- Para criar e polular o banco de dados (que já foi criado pelo lando) com dados dummy execute o seguinte comando:
- - `lando php artisan migrate:fresh && lando php artisan test`
- - ***(Esse comando cria um teste automático que executa uma Factory usando o Faker Generator para gerar dados no banco de dados)***
