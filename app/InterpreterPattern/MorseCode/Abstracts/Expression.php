<?php

namespace App\InterpreterPattern\MorseCode\Abstracts;

abstract class Expression
{
    /**
     * 找出要解析的字串執行，並回傳剩餘字串
     *
     * @param string $context
     * @return string
     */
    public function interpret($context): string
    {

        $firstSpacePos = strrpos($context, ' ');

        $head = substr($context, 0, $firstSpacePos);
        $this->execute($head);

        $tail = substr($context, $firstSpacePos + 1);
        return $tail;
    }

    /**
     * 解析字串後，印在控制台
     *
     * @param string $key
     * @return string
     */
    abstract function execute(string $key);
}
