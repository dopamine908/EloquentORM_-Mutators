<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Flight';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'FlightId';

    /**
     * 在模型上的 $casts 屬性提供一個可方便地將屬性轉換成常用資料型別的方法
     * 目前支援轉換的類型的有：integer、real、float、double、string、boolean、
     * object、array、collection、date、datetime 和 timestamp。
     *
     * 當處理以序列化 JSON 形式儲存的欄位時
     * array 型別轉換將會特別的有用
     * 如果你的資料庫有被序列化成 JSON 的 JSON 或 TEXT 欄位類型
     * 當你在 Eloquent 模型上存取屬性時
     * 將 array 新增到該屬性將自動反序列化為一個 PHP 陣列
     * https://docs.laravel-dojo.com/laravel/5.5/eloquent-mutators#array-and-json-casting
     *
     * 轉換 Active 屬性
     * 該屬性（0 或 1）被儲存在我們資料庫中
     * 並以整數（0 或 1）來代表布林值 ( 0 => false, 1 =>true )
     *
     * @var array
     */
    protected $casts = [
        'Active' => 'boolean',
    ];
}
