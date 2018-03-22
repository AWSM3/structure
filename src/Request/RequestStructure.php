<?php
/**
 * @filename: RequestStructure.php
 */
declare(strict_types=1);

/** @namespace */
namespace Awsm3\Structure\Request;

/** @uses */
use Awsm3\Structure\AbstractStructure;
use Awsm3\Structure\Exception\RequestAttributeNotDefined;

/**
 * Class RequestStructure
 * @package Awsm3\Structure\Request
 */
class RequestStructure extends AbstractStructure implements RequestStructureInterface
{
    /**
     * @throws RequestAttributeNotDefined
     * @return string
     */
    public function requestUri(): string {
        throw new RequestAttributeNotDefined(sprintf('Аттрибут запроса `%s` не определён', __METHOD__));
    }

    /**
     * @throws RequestAttributeNotDefined
     * @return string
     */
    public function method(): string {
        throw new RequestAttributeNotDefined(sprintf('Аттрибут запроса `%s` не определён', __METHOD__));
    }

    /**
     * @throws RequestAttributeNotDefined
     * @return array
     */
    public function params(): array {
        throw new RequestAttributeNotDefined(sprintf('Аттрибут запроса `%s` не определён', __METHOD__));
    }
}