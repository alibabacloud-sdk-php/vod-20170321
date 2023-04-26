<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DetachAppPolicyFromIdentityResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $failedPolicyNames;

    /**
     * @var string[]
     */
    public $nonExistPolicyNames;

    /**
     * @description Revokes application permissions from the specified identity. The identity may a RAM user or RAM role.
     *
     * @example 25818875-5F78-4A13-****-D7393642C
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'failedPolicyNames'   => 'FailedPolicyNames',
        'nonExistPolicyNames' => 'NonExistPolicyNames',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failedPolicyNames) {
            $res['FailedPolicyNames'] = $this->failedPolicyNames;
        }
        if (null !== $this->nonExistPolicyNames) {
            $res['NonExistPolicyNames'] = $this->nonExistPolicyNames;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetachAppPolicyFromIdentityResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailedPolicyNames'])) {
            if (!empty($map['FailedPolicyNames'])) {
                $model->failedPolicyNames = $map['FailedPolicyNames'];
            }
        }
        if (isset($map['NonExistPolicyNames'])) {
            if (!empty($map['NonExistPolicyNames'])) {
                $model->nonExistPolicyNames = $map['NonExistPolicyNames'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
