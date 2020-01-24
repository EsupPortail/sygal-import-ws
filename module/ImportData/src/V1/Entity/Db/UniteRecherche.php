<?php

namespace ImportData\V1\Entity\Db;

/**
 * Structure
 *
 * @codeCoverageIgnore
 */
class UniteRecherche
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $sourceId;

    /**
     * @var string
     */
    private $structureId;

    private $sourceInsertDate;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getSourceId(): string
    {
        return $this->sourceId;
    }

    /**
     * @return string
     */
    public function getStructureId(): string
    {
        return $this->structureId;
    }

    /**
     * @return mixed
     */
    public function getSourceInsertDate()
    {
        return $this->sourceInsertDate;
    }
}
