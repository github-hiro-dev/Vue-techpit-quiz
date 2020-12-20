<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    /**
   *
   * 4択回答セレクトボックス取得メソッド
   * 管理画面用に4択回答セレクトボックス用の配列を返却する
   * @return array
   */
    public function find4AnswersSelectBoxInAdmin(): array
    {
        $correctAnswerNoArray = [];
        // 4択問題なので、1-4のセレクトボックスを生成
        for ($i = 1; $i <= 4; $i++) {
        $correctAnswerNoArray[$i] = $i;
        }
        return $correctAnswerNoArray;
    }
}
