<?php

namespace Odiseo\Bundle\MotorOptimoBundle\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;


class Resource
{
    private $id;
 	protected $file;
	protected $fileName;
    protected $resourceType;
 	protected $created;
 	protected $updated;
    
    public function getId()
    {
        return $this->id;
    }


    public function setFileName($fileName)
    {
    	$this->fileName = $fileName;
    }
    
    public function getFileName()
    {
    	return $this->fileName;
    }
    /* vichuploader*/
    public function setFile(File $file = null)
    {
    	$this->file = $file;
    
    	if ($file) {
    		// It is required that at least one field changes if you are using doctrine
    		// otherwise the event listeners won't be called and the file is lost
    		$this->updated = new \DateTime('now');
    	}
    }
    
    /**
     * @return File
     */
    public function getFile()
    {
    	return $this->file;
    }
    
    public function setResourceType($resourceType)
    {
        $this->resourceType = $resourceType;

        return $this;
    }
    
    public function getResourceType()
    {
        return $this->resourceType;
    }

    public function getCreated()
    {
        return $this->created;
    }

    public function getUpdated()
    {
        return $this->updated;
    }

    public function setCreated($created)
    {
        $this->created = $created;
    }

    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }
}
