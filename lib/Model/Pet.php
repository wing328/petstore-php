<?php
/**
 * Pet
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
<<<<<<< HEAD

=======
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
/**
 * Pet Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Pet implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    static $swaggerModelName = 'Pet';

    /**
<<<<<<< HEAD
      * Array of property to type mappings. Used for (de)serialization
=======
      * Array of property to type mappings. Used for (de)serialization 
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'int',
        'category' => '\Swagger\Client\Model\Category',
        'name' => 'string',
        'photo_urls' => 'string[]',
        'tags' => '\Swagger\Client\Model\Tag[]',
        'status' => 'string'
    );
<<<<<<< HEAD

=======
  
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

<<<<<<< HEAD
    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
=======
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
    static $attributeMap = array(
        'id' => 'id',
        'category' => 'category',
        'name' => 'name',
        'photo_urls' => 'photoUrls',
        'tags' => 'tags',
        'status' => 'status'
    );
<<<<<<< HEAD

=======
  
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
<<<<<<< HEAD
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
=======
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
    static $setters = array(
        'id' => 'setId',
        'category' => 'setCategory',
        'name' => 'setName',
        'photo_urls' => 'setPhotoUrls',
        'tags' => 'setTags',
        'status' => 'setStatus'
    );
<<<<<<< HEAD

=======
  
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
    static function setters() {
        return self::$setters;
    }

    /**
<<<<<<< HEAD
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
=======
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
    static $getters = array(
        'id' => 'getId',
        'category' => 'getCategory',
        'name' => 'getName',
        'photo_urls' => 'getPhotoUrls',
        'tags' => 'getTags',
        'status' => 'getStatus'
    );
<<<<<<< HEAD

    static function getters()
    {
        return self::$getters;
    }

    const STATUS_AVAILABLE = 'available';
    const STATUS_PENDING = 'pending';
    const STATUS_SOLD = 'sold';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_AVAILABLE,
            self::STATUS_PENDING,
            self::STATUS_SOLD,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();
=======
  
    static function getters() {
        return self::$getters;
    }

    /**
      * $id 
      * @var int
      */
    protected $id;
    /**
      * $category 
      * @var \Swagger\Client\Model\Category
      */
    protected $category;
    /**
      * $name 
      * @var string
      */
    protected $name;
    /**
      * $photo_urls 
      * @var string[]
      */
    protected $photo_urls;
    /**
      * $tags 
      * @var \Swagger\Client\Model\Tag[]
      */
    protected $tags;
    /**
      * $status pet status in the store
      * @var string
      */
    protected $status;
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
<<<<<<< HEAD
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['photo_urls'] = isset($data['photo_urls']) ? $data['photo_urls'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['photo_urls'] === null) {
            $invalid_properties[] = "'photo_urls' can't be null";
        }
        $allowed_values = array("available", "pending", "sold");
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status', must be one of #{allowed_values}.";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['photo_urls'] === null) {
            return false;
        }
        $allowed_values = array("available", "pending", "sold");
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        return true;
    }


=======
        
        
        if ($data != null) {
            $this->id = $data["id"];
            $this->category = $data["category"];
            $this->name = $data["name"];
            $this->photo_urls = $data["photo_urls"];
            $this->tags = $data["tags"];
            $this->status = $data["status"];
        }
    }
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
<<<<<<< HEAD
        return $this->container['id'];
    }

=======
        return $this->id;
    }
  
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
    /**
     * Sets id
     * @param int $id 
     * @return $this
     */
    public function setId($id)
    {
<<<<<<< HEAD
        $this->container['id'] = $id;

        return $this;
    }

=======
        
        $this->id = $id;
        return $this;
    }
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
    /**
     * Gets category
     * @return \Swagger\Client\Model\Category
     */
    public function getCategory()
    {
<<<<<<< HEAD
        return $this->container['category'];
    }

=======
        return $this->category;
    }
  
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
    /**
     * Sets category
     * @param \Swagger\Client\Model\Category $category 
     * @return $this
     */
    public function setCategory($category)
    {
<<<<<<< HEAD
        $this->container['category'] = $category;

        return $this;
    }

=======
        
        $this->category = $category;
        return $this;
    }
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
<<<<<<< HEAD
        return $this->container['name'];
    }

=======
        return $this->name;
    }
  
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
    /**
     * Sets name
     * @param string $name 
     * @return $this
     */
    public function setName($name)
    {
<<<<<<< HEAD
        $this->container['name'] = $name;

        return $this;
    }

=======
        
        $this->name = $name;
        return $this;
    }
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
    /**
     * Gets photo_urls
     * @return string[]
     */
    public function getPhotoUrls()
    {
<<<<<<< HEAD
        return $this->container['photo_urls'];
    }

=======
        return $this->photo_urls;
    }
  
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
    /**
     * Sets photo_urls
     * @param string[] $photo_urls 
     * @return $this
     */
    public function setPhotoUrls($photo_urls)
    {
<<<<<<< HEAD
        $this->container['photo_urls'] = $photo_urls;

        return $this;
    }

=======
        
        $this->photo_urls = $photo_urls;
        return $this;
    }
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
    /**
     * Gets tags
     * @return \Swagger\Client\Model\Tag[]
     */
    public function getTags()
    {
<<<<<<< HEAD
        return $this->container['tags'];
    }

=======
        return $this->tags;
    }
  
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
    /**
     * Sets tags
     * @param \Swagger\Client\Model\Tag[] $tags 
     * @return $this
     */
    public function setTags($tags)
    {
<<<<<<< HEAD
        $this->container['tags'] = $tags;

        return $this;
    }

=======
        
        $this->tags = $tags;
        return $this;
    }
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
<<<<<<< HEAD
        return $this->container['status'];
    }

=======
        return $this->status;
    }
  
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
    /**
     * Sets status
     * @param string $status pet status in the store
     * @return $this
     */
    public function setStatus($status)
    {
<<<<<<< HEAD
        $allowed_values = array('available', 'pending', 'sold');
        if (!in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'available', 'pending', 'sold'");
        }
        $this->container['status'] = $status;

=======
        $allowed_values = array("available", "pending", "sold");
        if (!in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'available', 'pending', 'sold'");
        }
        $this->status = $status;
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
<<<<<<< HEAD
     * @param  integer $offset Offset
=======
     * @param  integer $offset Offset 
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
     * @return boolean
     */
    public function offsetExists($offset)
    {
<<<<<<< HEAD
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
=======
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
<<<<<<< HEAD
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
=======
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
     * @return void
     */
    public function offsetUnset($offset)
    {
<<<<<<< HEAD
        unset($this->container[$offset]);
    }

=======
        unset($this->$offset);
    }
  
>>>>>>> aeceb658d4ba69e49d60a9d57c324b11c1d4cd9b
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}
