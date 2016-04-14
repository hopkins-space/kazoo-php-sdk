<?php

namespace Kazoo\Api\Resource;
use Kazoo\Api\AbstractResource;

/**
 * 
 */
class Lists extends AbstractResource {
    
    protected static $_entity_class = "Kazoo\\Api\\Data\\Entity\\Lists";
    protected static $_entity_collection_class = "Kazoo\\Api\\Data\\Collection\\ListCollection";
    
}