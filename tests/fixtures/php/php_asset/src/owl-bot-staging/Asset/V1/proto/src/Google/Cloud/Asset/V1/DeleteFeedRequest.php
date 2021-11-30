<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/asset_service.proto

namespace Google\Cloud\Asset\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.asset.v1.DeleteFeedRequest</code>
 */
class DeleteFeedRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the feed and it must be in the format of:
     * projects/project_number/feeds/feed_id
     * folders/folder_number/feeds/feed_id
     * organizations/organization_number/feeds/feed_id
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the feed and it must be in the format of:
     *           projects/project_number/feeds/feed_id
     *           folders/folder_number/feeds/feed_id
     *           organizations/organization_number/feeds/feed_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the feed and it must be in the format of:
     * projects/project_number/feeds/feed_id
     * folders/folder_number/feeds/feed_id
     * organizations/organization_number/feeds/feed_id
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the feed and it must be in the format of:
     * projects/project_number/feeds/feed_id
     * folders/folder_number/feeds/feed_id
     * organizations/organization_number/feeds/feed_id
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

