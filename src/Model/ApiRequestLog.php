<?php
/**
 * ApiRequestLog
 *
 * PHP version 5
 *
 * @category Class
 * @package  DocuSign\eSign
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

namespace DocuSign\eSign\Model;

use \ArrayAccess;
/**
 * ApiRequestLog Class Doc Comment
 *
 * @category    Class
 * @description Contains API request log information.
 * @package     DocuSign\eSign
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ApiRequestLog implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'status' => 'string',
        'description' => 'string',
        'created_date_time' => 'string',
        'request_log_id' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'status' => 'status',
        'description' => 'description',
        'created_date_time' => 'createdDateTime',
        'request_log_id' => 'requestLogId'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'status' => 'setStatus',
        'description' => 'setDescription',
        'created_date_time' => 'setCreatedDateTime',
        'request_log_id' => 'setRequestLogId'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'status' => 'getStatus',
        'description' => 'getDescription',
        'created_date_time' => 'getCreatedDateTime',
        'request_log_id' => 'getRequestLogId'
    );
  
    
    /**
      * $status Indicates the envelope status. Valid values are:\n\n* sent - The envelope is sent to the recipients. \n* created - The envelope is saved as a draft and can be modified and sent later.
      * @var string
      */
    protected $status;
    
    /**
      * $description 
      * @var string
      */
    protected $description;
    
    /**
      * $created_date_time Indicates the date and time the item was created.
      * @var string
      */
    protected $created_date_time;
    
    /**
      * $request_log_id 
      * @var string
      */
    protected $request_log_id;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->status = $data["status"];
            $this->description = $data["description"];
            $this->created_date_time = $data["created_date_time"];
            $this->request_log_id = $data["request_log_id"];
        }
    }
    
    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
  
    /**
     * Sets status
     * @param string $status Indicates the envelope status. Valid values are:\n\n* sent - The envelope is sent to the recipients. \n* created - The envelope is saved as a draft and can be modified and sent later.
     * @return $this
     */
    public function setStatus($status)
    {
        
        $this->status = $status;
        return $this;
    }
    
    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
  
    /**
     * Sets description
     * @param string $description 
     * @return $this
     */
    public function setDescription($description)
    {
        
        $this->description = $description;
        return $this;
    }
    
    /**
     * Gets created_date_time
     * @return string
     */
    public function getCreatedDateTime()
    {
        return $this->created_date_time;
    }
  
    /**
     * Sets created_date_time
     * @param string $created_date_time Indicates the date and time the item was created.
     * @return $this
     */
    public function setCreatedDateTime($created_date_time)
    {
        
        $this->created_date_time = $created_date_time;
        return $this;
    }
    
    /**
     * Gets request_log_id
     * @return string
     */
    public function getRequestLogId()
    {
        return $this->request_log_id;
    }
  
    /**
     * Sets request_log_id
     * @param string $request_log_id 
     * @return $this
     */
    public function setRequestLogId($request_log_id)
    {
        
        $this->request_log_id = $request_log_id;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
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
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\DocuSign\eSign\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\DocuSign\eSign\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}