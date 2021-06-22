<?php
/**
 * CategorySuggestion
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Swagger\EbayTaxonomyClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Taxonomy API
 *
 * Use the Taxonomy API to discover the most appropriate eBay categories under which sellers can offer inventory items for sale, and the most likely categories under which buyers can browse or search for items to purchase. In addition, the Taxonomy API provides metadata about the required and recommended category aspects to include in listings, and also has two operations to retrieve parts compatibility information.
 *
 * The version of the OpenAPI document: v1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Swagger\EbayTaxonomyClient\Model;

use \ArrayAccess;
use \Swagger\EbayTaxonomyClient\ObjectSerializer;

/**
 * CategorySuggestion Class Doc Comment
 *
 * @category Class
 * @description This type contains information about a suggested category tree leaf node that corresponds to keywords provided in the request. It includes details about each of the category&#39;s ancestor nodes extending up to the root of the category tree.
 * @package  Swagger\EbayTaxonomyClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CategorySuggestion implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CategorySuggestion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'category' => '\Swagger\EbayTaxonomyClient\Model\Category',
        'category_tree_node_ancestors' => '\Swagger\EbayTaxonomyClient\Model\AncestorReference[]',
        'category_tree_node_level' => 'int',
        'relevancy' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'category' => null,
        'category_tree_node_ancestors' => null,
        'category_tree_node_level' => 'int32',
        'relevancy' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'category' => 'category',
        'category_tree_node_ancestors' => 'categoryTreeNodeAncestors',
        'category_tree_node_level' => 'categoryTreeNodeLevel',
        'relevancy' => 'relevancy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'category' => 'setCategory',
        'category_tree_node_ancestors' => 'setCategoryTreeNodeAncestors',
        'category_tree_node_level' => 'setCategoryTreeNodeLevel',
        'relevancy' => 'setRelevancy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'category' => 'getCategory',
        'category_tree_node_ancestors' => 'getCategoryTreeNodeAncestors',
        'category_tree_node_level' => 'getCategoryTreeNodeLevel',
        'relevancy' => 'getRelevancy'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['category'] = $data['category'] ?? null;
        $this->container['category_tree_node_ancestors'] = $data['category_tree_node_ancestors'] ?? null;
        $this->container['category_tree_node_level'] = $data['category_tree_node_level'] ?? null;
        $this->container['relevancy'] = $data['relevancy'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets category
     *
     * @return \Swagger\EbayTaxonomyClient\Model\Category|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param \Swagger\EbayTaxonomyClient\Model\Category|null $category category
     *
     * @return self
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets category_tree_node_ancestors
     *
     * @return \Swagger\EbayTaxonomyClient\Model\AncestorReference[]|null
     */
    public function getCategoryTreeNodeAncestors()
    {
        return $this->container['category_tree_node_ancestors'];
    }

    /**
     * Sets category_tree_node_ancestors
     *
     * @param \Swagger\EbayTaxonomyClient\Model\AncestorReference[]|null $category_tree_node_ancestors An ordered list of category references that describes the location of the suggested category in the specified category tree. The list identifies the category's ancestry as a sequence of parent nodes, from the current node's immediate parent to the root node of the category tree. Note: The root node of a full default category tree includes categoryId and categoryName fields, but their values should not be relied upon. They provide no useful information for application development.
     *
     * @return self
     */
    public function setCategoryTreeNodeAncestors($category_tree_node_ancestors)
    {
        $this->container['category_tree_node_ancestors'] = $category_tree_node_ancestors;

        return $this;
    }

    /**
     * Gets category_tree_node_level
     *
     * @return int|null
     */
    public function getCategoryTreeNodeLevel()
    {
        return $this->container['category_tree_node_level'];
    }

    /**
     * Sets category_tree_node_level
     *
     * @param int|null $category_tree_node_level The absolute level of the category tree node in the hierarchy of its category tree. Note: The root node of any full category tree is always at level 0.
     *
     * @return self
     */
    public function setCategoryTreeNodeLevel($category_tree_node_level)
    {
        $this->container['category_tree_node_level'] = $category_tree_node_level;

        return $this;
    }

    /**
     * Gets relevancy
     *
     * @return string|null
     */
    public function getRelevancy()
    {
        return $this->container['relevancy'];
    }

    /**
     * Sets relevancy
     *
     * @param string|null $relevancy This field is reserved for internal or future use.
     *
     * @return self
     */
    public function setRelevancy($relevancy)
    {
        $this->container['relevancy'] = $relevancy;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


