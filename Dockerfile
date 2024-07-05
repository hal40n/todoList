FROM node:20.5.1-alpine

WORKDIR /app

RUN apk update && \
    npm install -g npm@10.8.1

COPY todo/ ./
RUN apk update

CMD ["sh", "-c", "npm run dev -- --host"]