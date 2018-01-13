<?php
if (!function_exists('p')) {
    /**
     * 快速格式化打印数据
     * @param  mixed $data
     * @return void
     */
    function p($data)
    {
        echo '<pre>';
        print_r($data);
    }
}