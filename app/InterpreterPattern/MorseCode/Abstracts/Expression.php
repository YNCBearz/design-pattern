<?php

namespace App\InterpreterPattern\MorseCode\Abstracts;

use App\InterpreterPattern\MorseCode\Context;

abstract class Expression
{
    /**
     * 找出要解析的字串執行，並回傳剩餘字串
     *
     * @param Context $context
     * @return Context
     */
    public function interpret(Context $context): Context
    {
        $firstSpacePos = strrpos($context->text, ' ');

        $head = substr($context->text, 0, $firstSpacePos);
        $this->execute($head);

        $context->text = substr($context->text, $firstSpacePos + 1);
        return $context;
    }

    /**
     * 解析字串後，印在控制台
     *
     * @param string $key
     * @return string
     */
    abstract function execute(string $key);
}
