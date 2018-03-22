<?php
/**
 * @filename: RequestStructureInterface.php
 */
declare(strict_types=1);

/** @namespace */
namespace Awsm3\Structure\Request;

/** @uses */
use Awsm3\Structure\Exception\RequestAttributeNotDefined;

/**
 * Interface RequestStructureInterface
 * @package Awsm3\Structure\\Request
 */
interface RequestStructureInterface
{
    const
        METHOD_GET = 'GET',
        METHOD_POST = 'POST',
        METHOD_PUT = 'PUT',
        METHOD_PATCH = 'PATCH';

    /**
     * @throws RequestAttributeNotDefined
     * @return string
     */
    public function requestUri(): string;

    /**
     * @throws RequestAttributeNotDefined
     * @return string
     */
    public function method(): string;

    /**
     * @throws RequestAttributeNotDefined
     * @return array
     */
    public function params(): array;
}