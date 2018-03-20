<?php
/**
 * @filename: ArrayableResponseTrait.php
 */
declare(strict_types=1);

/** @namespace */
namespace Awsm3\Structure\Response\Traits;

/**
 * Trait ArrayableResponseTrait
 * @package Awsm3\Structure\Response\Traits
 */
trait ArrayableResponseTrait
{
    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            self::STATUS_KEY   => $this->getStatus(),
            self::MESSAGES_KEY => $this->getMessages(),
            self::DATA_KEY     => $this->getData(),
        ];
    }
}