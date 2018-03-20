<?php
/**
 * @filename: AbstractStructure.php
 */
declare(strict_types=1);

/** @namespace */
namespace Awsm3\Structure;

/** @uses */
use Awsm3\Structure\Exception\ArrayIsNotAssociative;

/**
 * Class AbstractStructure
 * @package Awsm3\Structure
 */
abstract class AbstractStructure implements StructureInterface
{
    /**
     * @param array $data
     *
     * @throws \ReflectionException
     * @throws ArrayIsNotAssociative
     * @return StructureInterface
     */
    public function fillFromArray(array $data): StructureInterface {
        /** Check, if array is a indexed, not associative */
        if ($data === array_values($data)) {
            throw new ArrayIsNotAssociative(
                sprintf('The %s implemented class can be filled only with an associative array.', StructureInterface::class)
            );
        }

        /** Set attributes to structure */
        foreach ($data as $attribute => $value) {
            $reflection = new \ReflectionClass($this);
            $method = 'set'.ucfirst($attribute);
            if ($reflection->hasMethod($method)) {
                /** Format value */
                $value = $this->formatValue($value);
                /** Set value to attribute */
                $this->$method($value);
            }
        }

        return $this;
    }

    /**
     * @param $value
     *
     * @return mixed
     */
    private function formatValue($value) {
        if (is_array($value)) {
            return (array) $value;
        }

        if (is_string($value)) {
            return (string) $value;
        }

        if (is_bool($value)) {
            return (bool) $value;
        }

        if (is_int($value)) {
            return (int) $value;
        }

        if (is_float($value)) {
            return (float) $value;
        }

        return $value;
    }
}