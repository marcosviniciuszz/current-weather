<p align="center">Current Weather</p>

Esta aplicação tem como objetivo consumir a API do [WeatherStack](https://weatherstack.com/documentation) e mostrar o clima atual.

A aplicação está em inglês pois o Free Tier do WeatherStack não permite buscar os dados em português.

GIF de demonstração:

![current-weather](https://github.com/user-attachments/assets/f19272f5-153a-45d5-804e-66bb3682d7b6)

Comparação de clima:

![compare-weather](https://github.com/user-attachments/assets/481ee7d5-ebbb-4a44-adda-4dd242e3c8b4)


Guia para rodar o projeto: [Instalação](https://weatherstack.com/documentation)

## Funcionalidades

- Buscar cidade através do campo CEP.
- Consultar Histórico.
- Salvar favoritos.
- Comparar clima atual de duas localidades diferentes.

## Tecnologias utilizadas

- Laravel (Com Blade).
- MySQL.
- HTML + CSS + JavaScript. 
- BootStrap.

## Decisões tomadas

Arquitetei as rotas com o objetivo de não limitar a API apenas para o projeto, deixando o Back-End mais flexível para acesso externo ou até mesmo trocar o Front-End.
 
Rotas externas:

 <img src="https://github.com/user-attachments/assets/2d563aa7-a5a9-4b44-9b53-b85ac041ae3f" width="700"/>

Rotas para as Views:

<img src="https://github.com/user-attachments/assets/d007620a-9bdf-4d7d-9326-cc8b9e7eb875" width="700"/>

## Front-End faz requisições AJAX para a API

Não utilizei a forma de apenas devolver o arquivo já processado com todos os dados, preferi a requisição AJAX justamente para manter a API acessível de outros locais e melhorar a navegabilidade do usuário.

Centralizei todas as chamadas de API no arquivo **js/api/api.js** (Caso a aplicação cresça mais, bastaria separar as chamadas com nomes para cada tela por exemplo).

![code](https://github.com/user-attachments/assets/2ec338f4-878c-4ebe-96a7-53d64f850cdf)

## Service para requisição externa no WeatherStack

Garante a separação de responsabilidades.

![image](https://github.com/user-attachments/assets/1526ccf9-9cfc-49d7-bad8-232cfc892cc1)

## O banco de dados foi modelado para utilizar duas tabelas separadas (Histórico e Favoritos) 

O histórico não registra cada detalhe do clima, já a tabela de favoritos armazena as informações de forma mais detalhada.

![image](https://github.com/user-attachments/assets/51f963d2-b6d4-4d8b-afa7-13995f30d8d6)

Também garante escalabilidade caso fosse disponibilizado para muitos usuários, se tudo ficasse em uma tabela só poderia ficar mais lento com um grande volume de dados se fosse ter que filtrar uma flag "favorite" para cada registro por exemplo.

## Organizei os resources de uma forma que facilita a legibilidade

Dessa forma deixa margem para caso o Front-End cresça, pode ser estruturado em pastas para separar mais ainda os arquivos (pastas de cada tela em projetos maiores por exemplo).

![image](https://github.com/user-attachments/assets/28b318ed-029e-4c8c-844c-0b226fc30cf3)

## Componentizei alguns trechos usando o Blade para facilitar a reutilização de código e manutenção
  
Exemplo importando os componentes Header e Footer.

![code](https://github.com/user-attachments/assets/7f03b7f7-d67b-455d-aefd-135ff2093f5f)


