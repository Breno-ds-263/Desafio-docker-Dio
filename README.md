## 🚀 Desafio DIO: Infraestrutura como Código & Load Balancing
Este repositório contém a solução desenvolvida para o desafio de infraestrutura da DIO (Digital Innovation One). O objetivo principal é criar um ambiente escalável utilizando Nginx como balanceador de carga, distribuindo o tráfego para múltiplos servidores backend PHP conectados a um banco de dados.

🛠️ Tecnologias e Ferramentas
Servidor de Borda: Nginx (configurado como Load Balancer na porta 4500)

Linguagem Backend: PHP (exibindo versão e conexão com banco)


Banco de Dados: MySQL / MariaDB 

Containerização: Docker

🏗️ Arquitetura do Projeto
A solução foi estruturada para garantir que a aplicação não fique sobrecarregada, dividindo as requisições entre três nós de processamento:

Load Balancer (Nginx): Atua como o ponto de entrada único. Ele utiliza a estratégia de Round Robin para repassar as conexões aos IPs 172.31.0.37, 172.31.0.151 e 172.31.0.149 na porta 80.

Camada de Aplicação (PHP): Containers rodando scripts PHP que processam a lógica e validam a conexão com o banco de dados.


Camada de Dados (SQL): Um banco de dados centralizado com uma tabela dados para armazenar informações de alunos (ID, Nome, Sobrenome, Endereço, Cidade e Host).

📂 Estrutura de Arquivos Principais
dockerfile: Define a imagem base do Nginx e injeta a configuração customizada.

nginx.conf: Define o bloco upstream para o balanceamento de carga.

index.php: Página principal que realiza o teste de conexão e exibe a versão do PHP instalada.


banco.sql: Script de criação da estrutura da tabela no banco de dados.

Bash
docker build -t meu-nginx-loadbalancer .
Executar o Container:

Bash
