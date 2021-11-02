<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetPlayInfoResponseBody\playInfoList;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetPlayInfoResponseBody\videoBase;
use AlibabaCloud\Tea\Model;

class GetPlayInfoResponseBody extends Model
{
    /**
     * @var playInfoList
     */
    public $playInfoList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var videoBase
     */
    public $videoBase;
    protected $_name = [
        'playInfoList' => 'PlayInfoList',
        'requestId'    => 'RequestId',
        'videoBase'    => 'VideoBase',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->playInfoList) {
            $res['PlayInfoList'] = null !== $this->playInfoList ? $this->playInfoList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->videoBase) {
            $res['VideoBase'] = null !== $this->videoBase ? $this->videoBase->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPlayInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PlayInfoList'])) {
            $model->playInfoList = playInfoList::fromMap($map['PlayInfoList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VideoBase'])) {
            $model->videoBase = videoBase::fromMap($map['VideoBase']);
        }

        return $model;
    }
}
