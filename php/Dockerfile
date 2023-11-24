# Use a versão oficial do PHP com o Apache
FROM php:8.0-apache

# Instale as dependências do sistema necessárias
RUN apt-get update && \
    apt-get install -y \
        libpq-dev \
        libzip-dev \
        unzip \
    && rm -rf /var/lib/apt/lists/*

# Instale as extensões do PHP necessárias (exemplo com PDO, PDO MySQL e Composer)
RUN docker-php-ext-install pdo pdo_mysql zip

# Instale o Node.js e npm diretamente do repositório de pacotes
RUN apt-get update && \
    apt-get install -y nodejs npm

# Configure o Apache para usar o diretório /var/www/html como DocumentRoot
WORKDIR /var/www/html

# Copie os arquivos do seu aplicativo para o contêiner
COPY . /var/www/html/

# Install npm dependencies and build assets
RUN npm install

# Exponha a porta 80 para acessar o Apache
EXPOSE 80

# Execute o Apache no modo foreground quando o contêiner for iniciado
CMD ["apache2-foreground"]
