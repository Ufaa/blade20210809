<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
  public function index()
  {
    $number = [
      if ($number % 2 === 0){
        echo '２の倍数です。';
      }elseif ($number % 3 === 0){
        echo '3の倍数です。';
      }else { echo '2の倍数でも3の倍数でもありません。';
      @endif
    return view('index', $number);
  }
}

  if($calls[0] ==='pc'){
    echo "<input id="tab01" type="radio" name="tab_item" checked>";
      echo "<label class="tab_item" for="tab01">モール接続で使うパスワード</label>";
  }else{
    echo "<input id="tab01" type="radio" name="tab_item" checked>";
      echo "<label class="tab_item" for="tab01">MallPass</label>";
  }


//$company = htmlspecialchars($_POST['number'], ENT_QUOTES);
//print "会社名は" . $number . "ですね";

//コントローラーで指定した数字が２の倍数のときは「２の倍数です。」
//コントローラーで指定した数字が3の倍数のときは「3の倍数です。」
//コントローラーで指定した数字が２の倍数でも３の倍数でもないときは「２の倍数でも３の倍数でもありません。」
//if,elseif,else

//@if (条件1)
  //条件1が真のときの出力
//@elseif (条件2)
  //条件1が偽かつ条件2が真のときの出力
//@else
  //条件1が偽かつ条件2が偽のときの出力
//@endif

//2の倍数($i % 2 === 0) 2で割ってあまりが0という考え方 
//3の倍数($i % 3 === 0) 3で割ってあまりが0という考え方

//@if ($i % 2 === 0) '２の倍数です。'
//@elseif ($i % 3 === 0) '3の倍数です。'
//@else '2の倍数でも3の倍数でもありません。'
//@endif