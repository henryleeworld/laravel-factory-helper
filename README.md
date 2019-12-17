# Laravel 6 模型工廠假資料輔助方法

引入 mpociot 的 laravel-test-factory-helper 套件來擴增利用既有的 Eloquent 模型自動產生模型工廠假資料設定，以達到填充資料欄位。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移。
```sh
$ php artisan migrate
```
- 執行 __Artisan__ 指令的 __generate:model-factory__ 來執行既有的 Eloquent 模型自動產生模型工廠假資料設定。
```sh
$ php artisan generate:model-factory --force
```
- 編寫模型工廠假資料後，需要通過 __dump-autoload__ 命令重新生成 __Composer__ 的自動加載器。
```sh
$ composer dump-autoload
```
- 執行 __Artisan__ 指令的 __db:seed__ 來執行資料庫填充。
```sh
$ php artisan db:seed
```

----

## 畫面截圖
![](https://i.imgur.com/uIav8cP.png)
> 建立使用者並為每個用戶建立一個公司關聯

![](https://i.imgur.com/U2nIsAM.png)
> 確認對應公司模型資料建立
