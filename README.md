## アプリケーション名
お問い合わせフォーム

## 環境構築
```
リポジトリからダウンロード
git clone git@github.com:pao590/tao-kadai.git

srcディレクトリにある「.env.example」をコピーして 「.env」を作成し DBの設定を変更
$ cp .env.example .env
---
DB_HOST=mysql
DB_DATABASE=laravel_db
DB_USERNAME=laravel_user
DB_PASSWORD=laravel_pass
---

dockerコンテナを構築
$ docker-compose up -d --build

Laravelをインストール
$ docker-compose exec php bash
> composer install

アプリケーションキーを作成
> php artisan key:generate

DBのテーブルを作成
> php artisan migrate

DBのテーブルにダミーデータを投入
> php artisan db:seed

"The stream or file could not be opened"エラーが発生した場合
srcディレクトリにあるstorageディレクトリ以下の権限を変更
$ chmod -R 777 storage
```
## 使用技術
---
・PHP　7.4.9
・Laravel　8.38.8
・MySQL　8.0
---

## URL
・問合せフォーム：http://localhost/
・管理画面：http://localhost/admin


## ER図
![ER図](ER.drawio.png)
