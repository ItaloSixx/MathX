# Gerador de Exercícios Matemáticos

Este é um software web desenvolvido em Laravel com o principal intuito de práticar minhas habilidades no framework. O sistema gera exercícios aleatórios de matemática, com todas as operações básicas: **adição, subtração, multiplicação e divisão**. O usuário pode selecionar quais operações incluir, definir o intervalo de números, a quantidade de exercícios desejada e imprimir a lista de exercícios com os resultados.

## Funcionalidades

- **Operações Básicas**: Adição, Subtração, Multiplicação e Divisão.
- **Seleção de Operações**: Escolha quais operações incluir nos exercícios.
- **Intervalo Personalizado**: Defina o valor mínimo e máximo dos números usados nas operações.
- **Quantidade de Exercícios**: Escolha quantos exercícios deseja gerar.
- **Impressão de Exercícios e Resultados**: Opção para imprimir a lista de exercícios com os resultados.

## Tecnologias Utilizadas

- **PHP** (Laravel Framework) - Backend
- **HTML/CSS** - Frontend
- **Bootstrap** - Estilo e Layout Responsivo

## Como Utilizar

1. **Clone o repositório**:
```bash
git clone https://github.com/ItaloSixx/MathX.git
```

2. **Instale as Dependências**

Certifique-se de que o Composer esteja instalado e execute o comando:

```bash
composer install
```
3. Configuração do Ambiente: Renomeie o arquivo .env.example para .env. Configure o arquivo .env com as informações do seu ambiente. Gere uma chave para a aplicação:
```bash
php artisan key:generate
```
Inicie o Servidor:
```bash
php artisan serve
```
Acesse 

