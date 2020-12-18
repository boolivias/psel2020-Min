# Case do processo seletivo 2020 da MIND

Projeto desenvolvido para o processo seletivo 2020 da MindConsulting.
O case trouxe um cenário parcial de um sistema, o cenário trata-se de tratar o nível de acesso dos usuários.

### Requisitos
1. Servidor web local com PHP
2. Servidor local MySQL
Obs.: Durante o desenvolvimento foi utilizado o pacote XAMPP, que conteḿ os dois requisitos. Pode ser baixado [aqui](https://www.apachefriends.org/pt_br/index.html).

### Uso
A rota de acesso do sistema é definida por: [localhost/psel2020-Min/](localhost/psel2020-Min/)

### Ferramentas utilizadas
1. [Jquery](https://api.jquery.com/category/version/3.5/)
2. [jquery-mask](https://igorescobar.github.io/jQuery-Mask-Plugin/)
3. [Bootstrap v.4.5](https://getbootstrap.com/docs/4.5/getting-started/introduction/)


### Features
O projeto foi desenvolvido pensando na reutilização de código, assim as view são montadas como "componentes" para poderem ser reutilizadas.

#### Helper view
Para realizar a "renderização parcial", foi criado um helper com a função *loadView()*, nele é definido os arquivos a serem carregados na página(css e js) e define se a navbar vai ser renderizada.

#### Views/structure
Toda a "carcaça" da renderização está em *app/views/structure/*, nos arquivos desta pasta estão as estruturas básicas do html, e são alimentadas pelos arquivos que contém toda a especificação do "componente", tais como classes, attr, entre outros.
![estrutura](https://i.ibb.co/gT39zzz/image.png)

#### Views/
Os arquivos que especificam os elementos estão separados por pastas dentro de *app/Views/*, a estrutura possui um padrão. Cada componente é utilizado dois arquivos:
![padrão](https://i.ibb.co/7vLtm6V/image.png)

##### 1. form.php
Determina as especificações do form e as estruturas html exclusivas que ficam acima do form no DOM.

##### 2. input.php
Composta somente por um array, nele é especificado cada input e suas particularidades, é também determinado o layout. Os elementos que estão juntos no indice *elementos* serão renderizados lado a lado.
![inputs num mesmo indice elementos](https://i.ibb.co/6NLhLV6/image.png)
![inputs renderizados](https://i.ibb.co/NT63r2w/image.png)

### Bugs
#### 1. input.php
Mesmo não utilizando alguma das propriedades, é recomendado deixá-la declarada e atribuir um valor vazio. Quando não declarado, algumas vezes, por algum motivo, é atribuido o valor do elemento renderizado anteriormente.

#### 2. Responsividade
Ainda não foi testado exaustivamente em diversas resoluções de telas, por isso, pode ser apresentado um comportamento anormal dos elementos em algumas telas.

---
### Autor
* Jean Wylmer ([@boolivias](https://github.com/boolivias))