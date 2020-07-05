# 第一部 Chapter 3 / アプリケーションアーキテクチャ

## 対応表
 
 - [リスト3.1.1.6：トランザクションスクリプト例](app/Service/BookService.php)
 - [リスト3.1.2.3：依存関係が増えるコントローラ例](app/Http/Controllers/UserController.php)
 - [リスト3.1.2.4：アクションへ独立させた例](app/Http/Actions/UserIndexAction.php)
 - [リスト3.1.2.6：レスポンダの実装](app/Http/Responder/UserResponder.php)
 - [リスト3.2.3.3：コントローラクラスからデータベース操作を分離](app/Http/Controllers/Layered/UserController.php)
 - [リスト3.2.3.4：リポジトリのインターフェースを定義](app/Repository/UserRepositoryInterface.php)
 - [リスト3.2.3.5：リポジトリの実装例](app/Repository/UserRepository.php)
 - [リスト3.2.3.6：サービスクラスとリポジトリ利用例 | リスト3.2.3.2：データベース操作を伴う実装をサービスクラスとして分離](app/Service/UserPurchaseService.php)
 
 
## For Docker

### setup 

```bash
$ docker-compose up -d
$ docker-compose run composer install --prefer-dist --no-interaction && composer app-setup
$ docker-compose exec php-fpm php artisan migrate
$ docker-compose exec php-fpm php artisan db:seed
```

### down

```bash
$ docker-compose down
```

### コンテナのキャッシュが残っている場合

```bash
$ docker-compose build --no-cache
```
