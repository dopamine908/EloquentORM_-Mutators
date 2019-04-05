<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class MutatorsController extends Controller
{
    /**
     * 存取器
     */
    public function getXXXXXXAttribute() {
        $posts = Post::find(1);
        /**
         * 欄位的原始值被傳到存取器
         * 取得存取在存取器中的值
         */
        dump($posts->UserId);
        dump($posts->user_iid);
        dump($posts->UserIid);
        dump($posts->FullData);
        dump($posts->full_data);
    }

    /**
     * 修改器 - 定義修改器
     */
    public function setXXXXXXAttribute() {
        $posts = Post::find(1);
        /**
         * 指定資料後觸發修改器
         * dump($posts->Post) 會變成小寫的abcde
         */
        $posts->Post = 'ABCDE';
        dump($posts->Post);

        /**
         * 指定資料後觸發修改器
         * 但dump($posts->UserId)時會觸發getUserIdAttribute
         * 所以dump()出來值會是User2-edit
         * （UserId = 1+1 = 2 之後再被getUserIdAttribute處理 後面加上‘-edit’）
         * 但不影響儲存的值
         * 因為getUserIdAttribute 只是用來顯示
         */
        $posts->UserId = 1;
        dump($posts->UserId);

        /**
         * 儲存的時候就是修改過後的值
         */
        dump($posts->save());
    }
}
