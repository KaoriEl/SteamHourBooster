FROM node:12

WORKDIR /usr/src/app

COPY package*.json ./

COPY . .

EXPOSE 8888

CMD ["sh", "-c", "npm install && node ./build/app.js"]
