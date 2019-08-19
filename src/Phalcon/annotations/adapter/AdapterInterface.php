<?php

namespace Phalcon\Annotations\Adapter;

/**
 * This interface must be implemented by adapters in Phalcon\Annotations
 */
interface AdapterInterface
{

    /**
     * Parses or retrieves all the annotations found in a class
     *
     * @param string $className
     * @return \Phalcon\Annotations\Reflection
     */
    public function get(string $className): Reflection;

    /**
     * Returns the annotations found in a specific method
     *
     * @param string $className
     * @param string $methodName
     * @return \Phalcon\Annotations\Collection
     */
    public function getMethod(string $className, string $methodName): Collection;

    /**
     * Returns the annotations found in all the class' methods
     *
     * @param string $className
     * @return array
     */
    public function getMethods(string $className): array;

    /**
     * Returns the annotations found in a specific property
     *
     * @param string $className
     * @param string $propertyName
     * @return \Phalcon\Annotations\Collection
     */
    public function getProperty(string $className, string $propertyName): Collection;

    /**
     * Returns the annotations found in all the class' methods
     *
     * @param string $className
     * @return array
     */
    public function getProperties(string $className): array;

    /**
     * Returns the annotation reader
     *
     * @return \Phalcon\Annotations\ReaderInterface
     */
    public function getReader(): ReaderInterface;

    /**
     * Sets the annotations parser
     *
     * @param \Phalcon\Annotations\ReaderInterface $reader
     */
    public function setReader(\Phalcon\Annotations\ReaderInterface $reader);

}