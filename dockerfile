FROM node:alpine

WORKDIR /usr/src/app

COPY package*.json ./

RUN npm install

COPY . .

RUN npm test

USER node

EXPOSE 3000

CMD ["node", "app.js"]
