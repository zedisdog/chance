<?php
/**
 * Created by PhpStorm.
 * User: dezsidog
 * Date: 17-1-24
 * Time: 下午12:40
 */

namespace zedisdog\ChanceLib;

/**
 * Class Chance
 * @package zedisdog\ChanceLib
 */
class Chance
{
    public function getRand($proArr) {
        $result = '';

        //概率数组的总概率精度
        $proSum = array_sum($proArr);

        //概率数组循环
        foreach ($proArr as $key => $proCur) {
            $randNum = mt_rand(1, $proSum);
            if ($randNum <= $proCur) {
                $result = $key;
                break;
            } else {
                $proSum -= $proCur;
            }
        }
        unset ($proArr);

        return $result;
    }
}