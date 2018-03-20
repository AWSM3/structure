<?php
/**
 * @filename: StructureFactory.php
 */
declare(strict_types=1);

/** @namespace */
namespace Awsm3\Structure;

/**
 * Class StructureFactory
 * @package Awsm3\Structure
 */
class StructureFactory
{
    /**
     * @param string $className
     *
     * @param array $data
     *
     * @throws \ReflectionException
     * @return StructureInterface
     */
    public function make(string $className, array $data): StructureInterface
    {
        /** @var StructureInterface $structure */
        $structure = (new \ReflectionClass($className))->newInstanceWithoutConstructor();
        if (!$structure instanceof StructureInterface) {
            throw new \LogicException("{$className} must be implements " . StructureInterface::class);
        }

        return $structure->fillFromArray($data);
    }
}