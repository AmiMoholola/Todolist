<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/web_detection.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Relevant information for the image from the Internet.
 *
 * Generated from protobuf message <code>google.cloud.vision.v1.WebDetection</code>
 */
class WebDetection extends \Google\Protobuf\Internal\Message
{
    /**
     * Deduced entities from similar images on the Internet.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.WebDetection.WebEntity web_entities = 1;</code>
     */
    private $web_entities;
    /**
     * Fully matching images from the Internet.
     * They're definite neardups and most often a copy of the query image with
     * merely a size change.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.WebDetection.WebImage full_matching_images = 2;</code>
     */
    private $full_matching_images;
    /**
     * Partial matching images from the Internet.
     * Those images are similar enough to share some key-point features. For
     * example an original image will likely have partial matching for its crops.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.WebDetection.WebImage partial_matching_images = 3;</code>
     */
    private $partial_matching_images;
    /**
     * Web pages containing the matching images from the Internet.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.WebDetection.WebPage pages_with_matching_images = 4;</code>
     */
    private $pages_with_matching_images;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Vision\V1\WebDetection::initOnce();
        parent::__construct();
    }

    /**
     * Deduced entities from similar images on the Internet.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.WebDetection.WebEntity web_entities = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWebEntities()
    {
        return $this->web_entities;
    }

    /**
     * Deduced entities from similar images on the Internet.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.WebDetection.WebEntity web_entities = 1;</code>
     * @param \Google\Cloud\Vision\V1\WebDetection_WebEntity[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWebEntities($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1\WebDetection_WebEntity::class);
        $this->web_entities = $arr;

        return $this;
    }

    /**
     * Fully matching images from the Internet.
     * They're definite neardups and most often a copy of the query image with
     * merely a size change.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.WebDetection.WebImage full_matching_images = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFullMatchingImages()
    {
        return $this->full_matching_images;
    }

    /**
     * Fully matching images from the Internet.
     * They're definite neardups and most often a copy of the query image with
     * merely a size change.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.WebDetection.WebImage full_matching_images = 2;</code>
     * @param \Google\Cloud\Vision\V1\WebDetection_WebImage[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFullMatchingImages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1\WebDetection_WebImage::class);
        $this->full_matching_images = $arr;

        return $this;
    }

    /**
     * Partial matching images from the Internet.
     * Those images are similar enough to share some key-point features. For
     * example an original image will likely have partial matching for its crops.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.WebDetection.WebImage partial_matching_images = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPartialMatchingImages()
    {
        return $this->partial_matching_images;
    }

    /**
     * Partial matching images from the Internet.
     * Those images are similar enough to share some key-point features. For
     * example an original image will likely have partial matching for its crops.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.WebDetection.WebImage partial_matching_images = 3;</code>
     * @param \Google\Cloud\Vision\V1\WebDetection_WebImage[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPartialMatchingImages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1\WebDetection_WebImage::class);
        $this->partial_matching_images = $arr;

        return $this;
    }

    /**
     * Web pages containing the matching images from the Internet.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.WebDetection.WebPage pages_with_matching_images = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPagesWithMatchingImages()
    {
        return $this->pages_with_matching_images;
    }

    /**
     * Web pages containing the matching images from the Internet.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.WebDetection.WebPage pages_with_matching_images = 4;</code>
     * @param \Google\Cloud\Vision\V1\WebDetection_WebPage[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPagesWithMatchingImages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1\WebDetection_WebPage::class);
        $this->pages_with_matching_images = $arr;

        return $this;
    }

}

