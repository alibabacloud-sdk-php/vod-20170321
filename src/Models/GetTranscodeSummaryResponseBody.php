<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeSummaryResponseBody\transcodeSummaryList;
use AlibabaCloud\Tea\Model;

class GetTranscodeSummaryResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $nonExistVideoIds;

    /**
     * @var transcodeSummaryList[]
     */
    public $transcodeSummaryList;
    protected $_name = [
        'requestId'            => 'RequestId',
        'nonExistVideoIds'     => 'NonExistVideoIds',
        'transcodeSummaryList' => 'TranscodeSummaryList',
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
        if (null !== $this->nonExistVideoIds) {
            $res['NonExistVideoIds'] = $this->nonExistVideoIds;
        }
        if (null !== $this->transcodeSummaryList) {
            $res['TranscodeSummaryList'] = [];
            if (null !== $this->transcodeSummaryList && \is_array($this->transcodeSummaryList)) {
                $n = 0;
                foreach ($this->transcodeSummaryList as $item) {
                    $res['TranscodeSummaryList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTranscodeSummaryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['NonExistVideoIds'])) {
            if (!empty($map['NonExistVideoIds'])) {
                $model->nonExistVideoIds = $map['NonExistVideoIds'];
            }
        }
        if (isset($map['TranscodeSummaryList'])) {
            if (!empty($map['TranscodeSummaryList'])) {
                $model->transcodeSummaryList = [];
                $n                           = 0;
                foreach ($map['TranscodeSummaryList'] as $item) {
                    $model->transcodeSummaryList[$n++] = null !== $item ? transcodeSummaryList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
