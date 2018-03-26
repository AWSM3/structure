<?php
/**
 * @filename: StructureInterface.php
 */
declare(strict_types=1);

/** @namespace */
namespace Awsm3\Structure;

/**
 * Interface StructureInterface
 * @package Awsm3\Structure
 */
interface StructureInterface
{
    /**
     * @param array $data
     *
     * @return StructureInterface
     */
    public function fillFromArray(array $data): StructureInterface;

    /**
     * @param callable|null $callback
     *
     * @throws Exception\StructureHashIsNotStringType Если callback вернул не строку
     * @return string
     */
    public function makeHash(callable $callback = null): string;
}