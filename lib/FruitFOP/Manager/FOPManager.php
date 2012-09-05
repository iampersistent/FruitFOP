<?php

namespace FruitFOP\Manager;

use FruitFOP\Entity\SourceInterface;

class FOPManager
{
    protected $sourceClass;

    public function __construct($sourceClass)
    {
        $this->sourceClass = $sourceClass;
    }
    /**
     * Create a new Source class from some data. The data can be an array or an object. If there is a map passed in
     * only properties in the object that are specifically defined in the map are loaded into the new Source.
     *
     * @param $data
     * @param null $map
     *
     * @return \FruitFOP\Entity\SourceInterface
     */
    public function createSource($data, $map = null)
    {
        if (!$map) {

        }

        return new $this->sourceClass($mappedData);
    }

    public function generateDocument(SourceInterface $source, $type = 'pdf', $targetLocation = null)
    {

    }

    protected function convertSourceToXML(SourceInterface $source)
    {

    }
}
