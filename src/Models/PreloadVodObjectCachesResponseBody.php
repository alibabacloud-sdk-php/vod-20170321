<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class PreloadVodObjectCachesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $preloadTaskId;
    protected $_name = [
        'requestId'     => 'RequestId',
        'preloadTaskId' => 'PreloadTaskId',
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
        if (null !== $this->preloadTaskId) {
            $res['PreloadTaskId'] = $this->preloadTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PreloadVodObjectCachesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PreloadTaskId'])) {
            $model->preloadTaskId = $map['PreloadTaskId'];
        }

        return $model;
    }
}
