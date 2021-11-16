<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\ListLetterSendJobResponseBody\letterJobList;
use AlibabaCloud\Tea\Model;

class ListLetterSendJobResponseBody extends Model
{
    /**
     * @var letterJobList[]
     */
    public $letterJobList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'letterJobList' => 'LetterJobList',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->letterJobList) {
            $res['LetterJobList'] = [];
            if (null !== $this->letterJobList && \is_array($this->letterJobList)) {
                $n = 0;
                foreach ($this->letterJobList as $item) {
                    $res['LetterJobList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLetterSendJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LetterJobList'])) {
            if (!empty($map['LetterJobList'])) {
                $model->letterJobList = [];
                $n                    = 0;
                foreach ($map['LetterJobList'] as $item) {
                    $model->letterJobList[$n++] = null !== $item ? letterJobList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}