<?php

namespace MetadataV1\edm;

/**
 * Class representing TOnActionType
 *
 *
 * XSD Type: TOnAction
 */
class TOnActionType
{

    /**
     * @property string $action
     */
    private $action = null;

    /**
     * @property \MetadataV1\edm\TDocumentationType $documentation
     */
    private $documentation = null;

    /**
     * Gets as action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Sets a new action
     *
     * @param string $action
     * @return self
     */
    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * Gets as documentation
     *
     * @return \MetadataV1\edm\TDocumentationType
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Sets a new documentation
     *
     * @param \MetadataV1\edm\TDocumentationType $documentation
     * @return self
     */
    public function setDocumentation(\MetadataV1\edm\TDocumentationType $documentation)
    {
        $this->documentation = $documentation;
        return $this;
    }


}

