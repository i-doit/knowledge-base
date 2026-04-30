FROM python:3.14.4-alpine3.23 AS i-doit-kb-build

RUN apk update && \
    apk add \
    --no-cache \
        gcc \
        git 

WORKDIR /usr/src/app

COPY . .

RUN pip install -U --no-cache-dir -r requirements.txt \
    && \
    mkdocs build -f config/de/mkdocs.yml \
    && \
    mkdocs build -f config/en/mkdocs.yml

FROM nginx:alpine AS i-doit-kb-web

COPY --from=i-doit-kb-build /usr/src/app/generated /usr/share/nginx/html
COPY nginx.conf /etc/nginx/conf.d/default.conf
COPY robots.txt /usr/share/nginx/html/robots.txt
RUN rm /usr/share/nginx/html/index.html

WORKDIR /usr/share/nginx/html
