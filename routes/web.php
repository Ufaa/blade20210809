<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', [TestController::class, 'index']);


//1.以下の問題に答えてください。
//if文を使って、コントローラーで指定した数字が２の倍数のときは「２の倍数です。」、３の倍数のときは「３の倍数です。」、２の倍数でも３の倍数でもないときは「２の倍数でも３の倍数でもありません。」と表示させてください。

//2.以下の問題に答えてください。
//コントローラーから配列を配列をビューに渡して、画面に「cat dog pig」とforeach文を使用してリストで表示させてください。