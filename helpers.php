<?php

function dd($data) {
    array_map(function ($x) {
        echo (new \yii\helpers\VarDumper())->dumpAsString($x, 10, true);
    }, func_get_args());
    die(1);
}
