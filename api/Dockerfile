# versao mais leve do Node como imagem pai
FROM node:18
# Definindo o diretorio de trabalho para /client
WORKDIR /api
# copiando package.json para o container em /client
COPY package*.json /api/
# instalando as dependencias
RUN npm install
# Copiando o conteudo do diretorio atual para o container em /client
COPY . /api/
# Expondo a porta 3000 para acesso externo
EXPOSE 80
# Executando o aplicativo quando o container inciar
CMD ["npm", "run","startd"]