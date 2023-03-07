FROM python:3.11-bullseye AS i-doit-kb-build

RUN apt-get update && \
    apt-get full-upgrade -y && \
    apt-get install -y --no-install-recommends \
        gcc \
        git \
    && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

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

WORKDIR /usr/share/nginx/html
