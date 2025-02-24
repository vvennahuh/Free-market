## FleaMarcket(フリマアプリ)
<img width="1440" alt="スクリーンショット 2025-02-24 23 28 41" src="https://github.com/user-attachments/assets/59a42a26-00a8-45f2-ae57-68ab17260d0f" />

## 作成目的
Laravelのアウトプット学習の一環

## アプリケーションURL
http://localhost/

## 機能一覧
ログイン・ログアウト機能、新規会員登録機能、商品閲覧・カテゴリ検索、お気に入り追加・削除、出品された商品へのコメント機能、プロフィール編集、商品の出品・購入、商品画像アップロード、住所登録、支払い方法選択

## テーブル設計書/ER図

![スクリーンショット 2025-02-24 23 34 53](https://github.com/user-attachments/assets/83be120e-cdad-4fd6-8184-56075c7d8388)


## 環境構築
- Dockerビルド
1.git clone git@github.com:coachtech-material/laravel-docker-template.git
2.docker-compose up -d --build

- Laravel環境構築
1.docker-compose exec php bash
2.composer install
3. .env.exampleファイルから.env作成。環境変数の変更
（DB_DATABASE=laravel_db
DB_USERNAME=laravel_user
DB_PASSWORD=laravel_pass）
4.php artisan key:generate
5.php artisan migrate
6.composer require laravel/fortify
7.composer require laravel-lang/lang:~7.0 --dev
8.cp -r ./vendor/laravel-lang/src/ja ./resources/lang/

## 使用技術(実行環境)
- PHP 3.8
- Laravel 8.x
- Mysql 8.0.26

## ER図


## URL
- 開発環境
- http://localhost/
- phpMyadmin:
- http://localhost:8080/
