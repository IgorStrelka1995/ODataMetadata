<?php

namespace MetadataV1\edm\EntityContainer;

/**
 * Class representing FunctionImportAnonymousType
 */
class FunctionImportAnonymousType
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $returnType
     */
    private $returnType = null;

    /**
     * @property string $entitySet
     */
    private $entitySet = null;

    /**
     * @property string $methodAccess
     */
    private $methodAccess = null;

    /**
     * @property \MetadataV1\edm\TDocumentationType $documentation
     */
    private $documentation = null;

    /**
     * @property \MetadataV1\edm\TFunctionImportParameterType[] $parameter
     */
    private $parameter = array(
        
    );

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as returnType
     *
     * @return string
     */
    public function getReturnType()
    {
        return $this->returnType;
    }

    /**
     * Sets a new returnType
     *
     * @param string $returnType
     * @return self
     */
    public function setReturnType($returnType)
    {
        $this->returnType = $returnType;
        return $this;
    }

    /**
     * Gets as entitySet
     *
     * @return string
     */
    public function getEntitySet()
    {
        return $this->entitySet;
    }

    /**
     * Sets a new entitySet
     *
     * @param string $entitySet
     * @return self
     */
    public function setEntitySet($entitySet)
    {
        $this->entitySet = $entitySet;
        return $this;
    }

    /**
     * Gets as methodAccess
     *
     * @return string
     */
    public function getMethodAccess()
    {
        return $this->methodAccess;
    }

    /**
     * Sets a new methodAccess
     *
     * @param string $methodAccess
     * @return self
     */
    public function setMethodAccess($methodAccess)
    {
        $this->methodAccess = $methodAccess;
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

    /**
     * Adds as parameter
     *
     * @return self
     * @param \MetadataV1\edm\TFunctionImportParameterType $parameter
     */
    public function addToParameter(\MetadataV1\edm\TFunctionImportParameterType $parameter)
    {
        $this->parameter[] = $parameter;
        return $this;
    }

    /**
     * isset parameter
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetParameter($index)
    {
        return isset($this->parameter[$index]);
    }

    /**
     * unset parameter
     *
     * @param scalar $index
     * @return void
     */
    public function unsetParameter($index)
    {
        unset($this->parameter[$index]);
    }

    /**
     * Gets as parameter
     *
     * @return \MetadataV1\edm\TFunctionImportParameterType[]
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Sets a new parameter
     *
     * @param \MetadataV1\edm\TFunctionImportParameterType[] $parameter
     * @return self
     */
    public function setParameter(array $parameter)
    {
        $this->parameter = $parameter;
        return $this;
    }


}

