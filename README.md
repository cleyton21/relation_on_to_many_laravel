
# Relacionamento one-to-many (um para muitos) Laravel

A relação `One To Many` é bem parecida com a relação `One To One`, a diferença está na declaração do `model`. Vamos ao passos.

Neste exemplo vamos relacionar uma tabela de `usuários` com uma tabela `endereços`. Onde um usuário pode conter vários endereços, mas um endereço pertence apenas a um usuário.

Desta forma, evitamos que a tabela `usuários` contenha vários campos.


## Instalação

Ao instalar o laravel, o mesmo já possui a migration responsável para criação da tabela `usuários`, então vamos criar apenas a migration responsável pela tabela de `endereços`.

### Instalação Laravel

é necessário ter o composer instalado.

```bash
composer create-project laravel/laravel example-app
```

## Criação da migration Address

Esse comando irá criar a model e a respectiva migration, tudo de uma vez.

```bash
php artisan make:model Address -m
```

## Arquivo migration address

![App Screenshot](https://github.com/cleyton21/images/raw/master/migration_address.png?raw=true)

### Execute o seguinte comando no seu terminal

```bash
php artisan migrate
```

Verifique agora que foi criada a tabela addresses, relacionada com a tabela users.
## Model Address

Na nossa Model Address vamos preencher a propriedade `fillable` do Model.

![App Screenshot](https://github.com/cleyton21/images/raw/master/model_address.png?raw=true)

## Model User

Agora que começa a mudança em relação ao tipo de relação `One To One`.

- O nome a função agora está no plural;
- E usamos agora o `hasMany` em vez de `hasOne`

![App Screenshot](https://github.com/cleyton21/images/blob/master/hasMany.png?raw=true)

## Resultado do relacionamento

O Resultado do relacionamento deverá ficar como o da figura abaixo:

![App Screenshot](https://github.com/cleyton21/images/blob/master/eer_diagrama_one_to_one.png?raw=true)


## Testando com Tinker

Vamos testar nosso relacionamento criado usando o console interativo `Tinker`.

Para isso rode o seguinte comando no terminal dentro do seu projeto.

```bash
php artisan tinker
```
## Criando o primeiro usuário com o Tinker

Agora que estamos dentro do console interativo do laravel, vamos criar nosso primeiro usuário.

A escrita é e mesma como se estivéssemos dentro do nosso editor de código preferido, a diferença é que não precisamos verificar a resposta no nosso navegador. Tudo será feito no console do `Tinker`.

![App Screenshot](https://github.com/cleyton21/images/raw/master/criando_usuario.png?raw=true)


## Criando Endereço e relacionando com usuário

Agora que criamos o primeiro usuário com `id=1`, vamos criar um endereço e relacionar com o usuário deste id.

![App Screenshot](https://github.com/cleyton21/images/blob/master/criacao_address.png?raw=true)

Agora repita os passos acima para criar outro endereço e relacionar com o usuário de `id=1`


## Testando a relação One to One

Agora vamos realizar uma consulta no banco e testaremos a relação `on to many` criada.

Para isso, execute o seguinte comando no console do `Tinker`

```bash
App\Models\User::with('enderecos')->findOrFail(1);
```

O resultado será o mostrado abaixo:

![App Screenshot](https://github.com/cleyton21/images/blob/master/select_ontomany.png?raw=true)

Observe que os endereços trazidos agora fazem parte de uma collection e podemos acessá-los normalmente

Agora todos os dados são trazidos em conjunto com a relação criada.

Espero que tenha ajudado e aguardo sugestões de melhorias.


## Referência

 - [Relacionamentos Laravel](https://laravel.com/docs/10.x/eloquent-relationships#many-to-many-defining-the-inverse-of-the-relationship)



## 🚀 Sobre mim

### Olá, eu sou o Cleyton Fernando! 👋

- 🔭 Atualmente trabalho com Backend, sou dev, autodidata, apaixonado por software livre e amante de novas tecnologias. Atualmente estudando PHP, Laravel, vue.js.
- 🌱 Trabalho há 10 anos com tecnologia, desenvolvendo soluções para as mais diversas situações.
- 😄 Em busca de conhecimento e novos desafios.

## 🔗 Links
[![linkedin](https://img.shields.io/badge/linkedin-0A66C2?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/cleyton-fernando-08b64812b/)


## 🛠 Habilidades
PHP, Laravel, Rest, Mysql, Javascript, HTML, CSS, Ajax, Linux, Docker, Docker Swarm...


## Suporte

Para suporte, mande um email para cfernando_21@hotmail.com.


## Criação da migration Address

Esse comando irá criar a model e a respectiva migration, tudo de uma vez.

```bash
php artisan make:model Address -m
```



## Autores

- [@cleyton21](https://github.com/cleyton21)

