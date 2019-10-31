<?php

namespace Kaylyu\Wechatpay\ApiV3\Kernel\Decorators;

/**
 * Class FinallyResult.
 */
class FinallyResult
{
    /**
     * @var mixed
     */
    public $content;

    /**
     * FinallyResult constructor.
     *
     * @param mixed $content
     */
    public function __construct($content)
    {
        $this->content = $content;
    }
}
