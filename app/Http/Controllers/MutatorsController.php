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
}
