<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class RefreshVodObjectCachesRequest extends Model
{
    /**
     * @description Specifies whether to refresh resources in a directory if the resources are different from the resources in the same directory in the origin server. Default value: false.
     *
     * - false:refresh the changed resources in the directory.
     * @example false
     *
     * @var bool
     */
    public $force;

    /**
     * @description The URL of the file to be prefetched. Separate multiple URLs with line breaks (\n or \r\n).
     *
     * @example abc.com/image/1.png
     *
     * @var string
     */
    public $objectPath;

    /**
     * @description The type of the object that you want to refresh. Valid values:
     *
     *   **File** (default): refreshes files.
     *   **Directory**: refreshes the files in specified directories.
     *   **Regex**: refreshes content based on regular expressions.
     *   **ExQuery**: omits parameters after the question mark in the URL and refreshes content.
     *
     * If you set the ObjectType parameter to Directory, the resources in the directory that you want to refresh are marked as expired. You cannot delete the directory. If clients request resources on POPs that are marked as expired, Alibaba Cloud CDN checks whether the resources on your origin server are updated. If resources are updated, Alibaba Cloud CDN retrieves the latest version of the resources and returns the resources to the clients. Otherwise, the origin server returns the 304 status code.
     * @example File
     *
     * @var string
     */
    public $objectType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'force'         => 'Force',
        'objectPath'    => 'ObjectPath',
        'objectType'    => 'ObjectType',
        'ownerId'       => 'OwnerId',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }
        if (null !== $this->objectPath) {
            $res['ObjectPath'] = $this->objectPath;
        }
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefreshVodObjectCachesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }
        if (isset($map['ObjectPath'])) {
            $model->objectPath = $map['ObjectPath'];
        }
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
