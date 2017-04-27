<?php

namespace MetadataV4\edm;

/**
 * Class representing Schema
 */
class Schema
{

    /**
     * @property string $namespace
     */
    private $namespace = null;

    /**
     * @property string $alias
     */
    private $alias = null;

    /**
     * @property \MetadataV4\edm\TComplexTypeType[] $complexType
     */
    private $complexType = array(
        
    );

    /**
     * @property \MetadataV4\edm\TEntityTypeType[] $entityType
     */
    private $entityType = array(
        
    );

    /**
     * @property \MetadataV4\edm\TTypeDefinitionType[] $typeDefinition
     */
    private $typeDefinition = array(
        
    );

    /**
     * @property \MetadataV4\edm\TEnumTypeType[] $enumType
     */
    private $enumType = array(
        
    );

    /**
     * @property \MetadataV4\edm\TActionType[] $action
     */
    private $action = array(
        
    );

    /**
     * @property \MetadataV4\edm\TFunctionType[] $function
     */
    private $function = array(
        
    );

    /**
     * @property \MetadataV4\edm\TTermType[] $term
     */
    private $term = array(
        
    );

    /**
     * @property \MetadataV4\edm\TAnnotationsType[] $annotations
     */
    private $annotations = array(
        
    );

    /**
     * @property \MetadataV4\edm\TEntityContainerType[] $entityContainer
     */
    private $entityContainer = array(
        
    );

    /**
     * @property \MetadataV4\edm\Annotation[] $annotation
     */
    private $annotation = array(
        
    );

    /**
     * Gets as namespace
     *
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * Sets a new namespace
     *
     * @param string $namespace
     * @return self
     */
    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;
        return $this;
    }

    /**
     * Gets as alias
     *
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Sets a new alias
     *
     * @param string $alias
     * @return self
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
        return $this;
    }

    /**
     * Adds as complexType
     *
     * @return self
     * @param \MetadataV4\edm\TComplexTypeType $complexType
     */
    public function addToComplexType(\MetadataV4\edm\TComplexTypeType $complexType)
    {
        $this->complexType[] = $complexType;
        return $this;
    }

    /**
     * isset complexType
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetComplexType($index)
    {
        return isset($this->complexType[$index]);
    }

    /**
     * unset complexType
     *
     * @param scalar $index
     * @return void
     */
    public function unsetComplexType($index)
    {
        unset($this->complexType[$index]);
    }

    /**
     * Gets as complexType
     *
     * @return \MetadataV4\edm\TComplexTypeType[]
     */
    public function getComplexType()
    {
        return $this->complexType;
    }

    /**
     * Sets a new complexType
     *
     * @param \MetadataV4\edm\TComplexTypeType[] $complexType
     * @return self
     */
    public function setComplexType(array $complexType)
    {
        $this->complexType = $complexType;
        return $this;
    }

    /**
     * Adds as entityType
     *
     * @return self
     * @param \MetadataV4\edm\TEntityTypeType $entityType
     */
    public function addToEntityType(\MetadataV4\edm\TEntityTypeType $entityType)
    {
        $this->entityType[] = $entityType;
        return $this;
    }

    /**
     * isset entityType
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEntityType($index)
    {
        return isset($this->entityType[$index]);
    }

    /**
     * unset entityType
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEntityType($index)
    {
        unset($this->entityType[$index]);
    }

    /**
     * Gets as entityType
     *
     * @return \MetadataV4\edm\TEntityTypeType[]
     */
    public function getEntityType()
    {
        return $this->entityType;
    }

    /**
     * Sets a new entityType
     *
     * @param \MetadataV4\edm\TEntityTypeType[] $entityType
     * @return self
     */
    public function setEntityType(array $entityType)
    {
        $this->entityType = $entityType;
        return $this;
    }

    /**
     * Adds as typeDefinition
     *
     * @return self
     * @param \MetadataV4\edm\TTypeDefinitionType $typeDefinition
     */
    public function addToTypeDefinition(\MetadataV4\edm\TTypeDefinitionType $typeDefinition)
    {
        $this->typeDefinition[] = $typeDefinition;
        return $this;
    }

    /**
     * isset typeDefinition
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTypeDefinition($index)
    {
        return isset($this->typeDefinition[$index]);
    }

    /**
     * unset typeDefinition
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTypeDefinition($index)
    {
        unset($this->typeDefinition[$index]);
    }

    /**
     * Gets as typeDefinition
     *
     * @return \MetadataV4\edm\TTypeDefinitionType[]
     */
    public function getTypeDefinition()
    {
        return $this->typeDefinition;
    }

    /**
     * Sets a new typeDefinition
     *
     * @param \MetadataV4\edm\TTypeDefinitionType[] $typeDefinition
     * @return self
     */
    public function setTypeDefinition(array $typeDefinition)
    {
        $this->typeDefinition = $typeDefinition;
        return $this;
    }

    /**
     * Adds as enumType
     *
     * @return self
     * @param \MetadataV4\edm\TEnumTypeType $enumType
     */
    public function addToEnumType(\MetadataV4\edm\TEnumTypeType $enumType)
    {
        $this->enumType[] = $enumType;
        return $this;
    }

    /**
     * isset enumType
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEnumType($index)
    {
        return isset($this->enumType[$index]);
    }

    /**
     * unset enumType
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEnumType($index)
    {
        unset($this->enumType[$index]);
    }

    /**
     * Gets as enumType
     *
     * @return \MetadataV4\edm\TEnumTypeType[]
     */
    public function getEnumType()
    {
        return $this->enumType;
    }

    /**
     * Sets a new enumType
     *
     * @param \MetadataV4\edm\TEnumTypeType[] $enumType
     * @return self
     */
    public function setEnumType(array $enumType)
    {
        $this->enumType = $enumType;
        return $this;
    }

    /**
     * Adds as action
     *
     * @return self
     * @param \MetadataV4\edm\TActionType $action
     */
    public function addToAction(\MetadataV4\edm\TActionType $action)
    {
        $this->action[] = $action;
        return $this;
    }

    /**
     * isset action
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAction($index)
    {
        return isset($this->action[$index]);
    }

    /**
     * unset action
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAction($index)
    {
        unset($this->action[$index]);
    }

    /**
     * Gets as action
     *
     * @return \MetadataV4\edm\TActionType[]
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Sets a new action
     *
     * @param \MetadataV4\edm\TActionType[] $action
     * @return self
     */
    public function setAction(array $action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * Adds as function
     *
     * @return self
     * @param \MetadataV4\edm\TFunctionType $function
     */
    public function addToFunction(\MetadataV4\edm\TFunctionType $function)
    {
        $this->function[] = $function;
        return $this;
    }

    /**
     * isset function
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFunction($index)
    {
        return isset($this->function[$index]);
    }

    /**
     * unset function
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFunction($index)
    {
        unset($this->function[$index]);
    }

    /**
     * Gets as function
     *
     * @return \MetadataV4\edm\TFunctionType[]
     */
    public function getFunction()
    {
        return $this->function;
    }

    /**
     * Sets a new function
     *
     * @param \MetadataV4\edm\TFunctionType[] $function
     * @return self
     */
    public function setFunction(array $function)
    {
        $this->function = $function;
        return $this;
    }

    /**
     * Adds as term
     *
     * @return self
     * @param \MetadataV4\edm\TTermType $term
     */
    public function addToTerm(\MetadataV4\edm\TTermType $term)
    {
        $this->term[] = $term;
        return $this;
    }

    /**
     * isset term
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTerm($index)
    {
        return isset($this->term[$index]);
    }

    /**
     * unset term
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTerm($index)
    {
        unset($this->term[$index]);
    }

    /**
     * Gets as term
     *
     * @return \MetadataV4\edm\TTermType[]
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * Sets a new term
     *
     * @param \MetadataV4\edm\TTermType[] $term
     * @return self
     */
    public function setTerm(array $term)
    {
        $this->term = $term;
        return $this;
    }

    /**
     * Adds as annotations
     *
     * @return self
     * @param \MetadataV4\edm\TAnnotationsType $annotations
     */
    public function addToAnnotations(\MetadataV4\edm\TAnnotationsType $annotations)
    {
        $this->annotations[] = $annotations;
        return $this;
    }

    /**
     * isset annotations
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAnnotations($index)
    {
        return isset($this->annotations[$index]);
    }

    /**
     * unset annotations
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAnnotations($index)
    {
        unset($this->annotations[$index]);
    }

    /**
     * Gets as annotations
     *
     * @return \MetadataV4\edm\TAnnotationsType[]
     */
    public function getAnnotations()
    {
        return $this->annotations;
    }

    /**
     * Sets a new annotations
     *
     * @param \MetadataV4\edm\TAnnotationsType[] $annotations
     * @return self
     */
    public function setAnnotations(array $annotations)
    {
        $this->annotations = $annotations;
        return $this;
    }

    /**
     * Adds as entityContainer
     *
     * @return self
     * @param \MetadataV4\edm\TEntityContainerType $entityContainer
     */
    public function addToEntityContainer(\MetadataV4\edm\TEntityContainerType $entityContainer)
    {
        $this->entityContainer[] = $entityContainer;
        return $this;
    }

    /**
     * isset entityContainer
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEntityContainer($index)
    {
        return isset($this->entityContainer[$index]);
    }

    /**
     * unset entityContainer
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEntityContainer($index)
    {
        unset($this->entityContainer[$index]);
    }

    /**
     * Gets as entityContainer
     *
     * @return \MetadataV4\edm\TEntityContainerType[]
     */
    public function getEntityContainer()
    {
        return $this->entityContainer;
    }

    /**
     * Sets a new entityContainer
     *
     * @param \MetadataV4\edm\TEntityContainerType[] $entityContainer
     * @return self
     */
    public function setEntityContainer(array $entityContainer)
    {
        $this->entityContainer = $entityContainer;
        return $this;
    }

    /**
     * Adds as annotation
     *
     * @return self
     * @param \MetadataV4\edm\Annotation $annotation
     */
    public function addToAnnotation(\MetadataV4\edm\Annotation $annotation)
    {
        $this->annotation[] = $annotation;
        return $this;
    }

    /**
     * isset annotation
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAnnotation($index)
    {
        return isset($this->annotation[$index]);
    }

    /**
     * unset annotation
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAnnotation($index)
    {
        unset($this->annotation[$index]);
    }

    /**
     * Gets as annotation
     *
     * @return \MetadataV4\edm\Annotation[]
     */
    public function getAnnotation()
    {
        return $this->annotation;
    }

    /**
     * Sets a new annotation
     *
     * @param \MetadataV4\edm\Annotation[] $annotation
     * @return self
     */
    public function setAnnotation(array $annotation)
    {
        $this->annotation = $annotation;
        return $this;
    }


}

