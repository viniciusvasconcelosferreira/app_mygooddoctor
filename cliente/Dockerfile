# versao mais leve do Node como imagem pai
FROM node:18
# Definindo o diretorio de trabalho para /cliente
WORKDIR /cliente
# copiando package.json para o container em /cliente
COPY package*.json /cliente/
# instalando as dependencias
RUN npm install
# Copiando o conteudo do diretorio atual para o container em /cliente
COPY . /cliente/
# Expondo a porta 3000 para acesso externo
EXPOSE 3000
# Executando o aplicativo quando o container inciar
CMD ["npm", "start"]