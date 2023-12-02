FROM node:12

WORKDIR /usr/src/app

COPY package*.json ./

RUN yarn

RUN npm i
RUN npm install crypto-js

COPY . .

EXPOSE 8080

CMD [ "node", "./build/app.js" ]

