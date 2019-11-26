FROM php:7.2.10-fpm-alpine

MAINTAINER sample_user@sample.com

WORKDIR /var/www

WORKDIR /tmp

# Laravel 必須ライブラリのインストール
RUN apk add --no-cache \
    unzip \
    libxml2-dev \
    mysql-client \
    tzdata \
    # php 拡張パッケージインストール
    && /usr/local/bin/docker-php-ext-install \
    mbstring \
    pdo_mysql \
    xml \
    exif \
    # exif のコンパイルオプション設定
    && docker-php-ext-enable exif 

## 環境変数を定義
#
# PROJECT_FOLDER_ADMIN: admin 用ディレクトリ
##

ENV PROJECT_FOLDER_ADMIN application

# ドキュメントルートの作成
RUN mkdir -p $PROJECT_FOLDER_ADMIN

WORKDIR /var/www/$PROJECT_FOLDER_ADMIN

# ドキュメントルートの転送
COPY ./application/ ./

VOLUME /var/www/application

EXPOSE 9000