<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class MoveAppResourceRequest extends Model
{
    /**
     * @description The operation that you want to perform. Set the value to **MoveAppResource**.
     *
     * @example 9afb4****06de180880e,f7bba****caa546cfe2ba
     *
     * @var string
     */
    public $resourceIds;

    /**
     * @description The ID of the request.
     *
     * @example video
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The ID of the resource. You can specify a maximum of 20 IDs at a time. Separate them with commas (,).
     *
     * @example app-****
     *
     * @var string
     */
    public $targetAppId;
    protected $_name = [
        'resourceIds'  => 'ResourceIds',
        'resourceType' => 'ResourceType',
        'targetAppId'  => 'TargetAppId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceIds) {
            $res['ResourceIds'] = $this->resourceIds;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->targetAppId) {
            $res['TargetAppId'] = $this->targetAppId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MoveAppResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceIds'])) {
            $model->resourceIds = $map['ResourceIds'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['TargetAppId'])) {
            $model->targetAppId = $map['TargetAppId'];
        }

        return $model;
    }
}
