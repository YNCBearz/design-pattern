<?php

namespace App\InterpreterPattern\MorseCode\Contracts;

use App\InterpreterPattern\MorseCode\Context;

interface Expression
{
    /**
     * 找出要解析的字串執行，並回傳剩餘字串
     *
     * @param Context $context
     * @return Context
     */
    public function interpret(Context $context): Context;

    /**
     * 解析字串後，印在控制台
     *
     * @param string $message
     */
    public function execute(string $message);
}
