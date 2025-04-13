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
- Dockerビルド(ターミナル・cmd内)
- 1.git clone https://github.com/vvennahuh/Free-market.git
- 2.docker-compose up -d --build
- 3.docker-compose exec php bash（ターミナル・cmd→PHPコンテナにログイン）

- Laravel環境構築
- 1.composer install(PHPコンテナ内)
- 2.Free-market/src内で.env.exampleファイルから.env作成後、環境変数を以下のように編集
- （DB_DATABASE=laravel_db/DB_USERNAME=laravel_user/DB_PASSWORD=laravel_pass）
- 3.php artisan key:generate(PHPコンテナ内・アプリケーションキー作成)
- 4.php artisan migrate --seed（PHPコンテナ内・データベースの作成）
- 5.composer require laravel/fortify(PHPコンテナ内・Fortifyのインストール)
- 6.composer require laravel-lang/lang:~7.0 --dev（PHPコンテナ内・Laravelのインストール）
- 7.cp -r ./vendor/laravel-lang/src/ja ./resources/lang/（PHPコンテナ内・会員登録および認証用の日本語ファイルの追加）

## 使用技術(実行環境)
- PHP 3.8
- Laravel 8.x
- Mysql 8.0.26


## URL
- 開発環境
- http://localhost/
- phpMyadmin:
- http://localhost:8080/
