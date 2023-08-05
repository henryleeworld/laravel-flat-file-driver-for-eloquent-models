# Laravel 10 Eloquent 模型平坦檔案驅動

引入 ryangjchandler 的 orbit 套件來擴增 Eloquent 模型平坦檔案驅動，允許使用熟悉的方法操作的實際檔案替換您的一般資料庫。

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
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/post` 來進行貼文操作。

----

## 畫面截圖
![](https://i.imgur.com/ojebQkV.png)
> 預設情況下，所有內容都儲存在根目錄的 `content` 資料夾中
