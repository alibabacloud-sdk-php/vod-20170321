<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMessageCallbackResponseBody;

use AlibabaCloud\Tea\Model;

class messageCallback extends Model
{
    /**
     * @var string
     */
    public $callbackType;

    /**
     * @var string
     */
    public $callbackURL;

    /**
     * @var string
     */
    public $eventTypeList;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $mnsQueueName;

    /**
     * @var string
     */
    public $authKey;

    /**
     * @var string
     */
    public $authSwitch;

    /**
     * @var string
     */
    public $mnsEndpoint;
    protected $_name = [
        'callbackType'  => 'CallbackType',
        'callbackURL'   => 'CallbackURL',
        'eventTypeList' => 'EventTypeList',
        'appId'         => 'AppId',
        'mnsQueueName'  => 'MnsQueueName',
        'authKey'       => 'AuthKey',
        'authSwitch'    => 'AuthSwitch',
        'mnsEndpoint'   => 'MnsEndpoint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callbackType) {
            $res['CallbackType'] = $this->callbackType;
        }
        if (null !== $this->callbackURL) {
            $res['CallbackURL'] = $this->callbackURL;
        }
        if (null !== $this->eventTypeList) {
            $res['EventTypeList'] = $this->eventTypeList;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->mnsQueueName) {
            $res['MnsQueueName'] = $this->mnsQueueName;
        }
        if (null !== $this->authKey) {
            $res['AuthKey'] = $this->authKey;
        }
        if (null !== $this->authSwitch) {
            $res['AuthSwitch'] = $this->authSwitch;
        }
        if (null !== $this->mnsEndpoint) {
            $res['MnsEndpoint'] = $this->mnsEndpoint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return messageCallback
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallbackType'])) {
            $model->callbackType = $map['CallbackType'];
        }
        if (isset($map['CallbackURL'])) {
            $model->callbackURL = $map['CallbackURL'];
        }
        if (isset($map['EventTypeList'])) {
            $model->eventTypeList = $map['EventTypeList'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['MnsQueueName'])) {
            $model->mnsQueueName = $map['MnsQueueName'];
        }
        if (isset($map['AuthKey'])) {
            $model->authKey = $map['AuthKey'];
        }
        if (isset($map['AuthSwitch'])) {
            $model->authSwitch = $map['AuthSwitch'];
        }
        if (isset($map['MnsEndpoint'])) {
            $model->mnsEndpoint = $map['MnsEndpoint'];
        }

        return $model;
    }
}
