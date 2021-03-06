<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetAppInfosResponseBody\appInfoList;
use AlibabaCloud\Tea\Model;

class GetAppInfosResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var appInfoList[]
     */
    public $appInfoList;

    /**
     * @var string[]
     */
    public $nonExistAppIds;
    protected $_name = [
        'requestId'      => 'RequestId',
        'appInfoList'    => 'AppInfoList',
        'nonExistAppIds' => 'NonExistAppIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->appInfoList) {
            $res['AppInfoList'] = [];
            if (null !== $this->appInfoList && \is_array($this->appInfoList)) {
                $n = 0;
                foreach ($this->appInfoList as $item) {
                    $res['AppInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nonExistAppIds) {
            $res['NonExistAppIds'] = $this->nonExistAppIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAppInfosResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AppInfoList'])) {
            if (!empty($map['AppInfoList'])) {
                $model->appInfoList = [];
                $n                  = 0;
                foreach ($map['AppInfoList'] as $item) {
                    $model->appInfoList[$n++] = null !== $item ? appInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NonExistAppIds'])) {
            if (!empty($map['NonExistAppIds'])) {
                $model->nonExistAppIds = $map['NonExistAppIds'];
            }
        }

        return $model;
    }
}
