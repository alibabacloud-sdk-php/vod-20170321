<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTemplateGroupResponseBody;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTemplateGroupResponseBody\transcodeTemplateGroup\transcodeTemplateList;
use AlibabaCloud\Tea\Model;

class transcodeTemplateGroup extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $isDefault;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var transcodeTemplateList[]
     */
    public $transcodeTemplateList;

    /**
     * @var string
     */
    public $transcodeTemplateGroupId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $locked;
    protected $_name = [
        'creationTime'             => 'CreationTime',
        'isDefault'                => 'IsDefault',
        'appId'                    => 'AppId',
        'transcodeTemplateList'    => 'TranscodeTemplateList',
        'transcodeTemplateGroupId' => 'TranscodeTemplateGroupId',
        'name'                     => 'Name',
        'modifyTime'               => 'ModifyTime',
        'locked'                   => 'Locked',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->transcodeTemplateList) {
            $res['TranscodeTemplateList'] = [];
            if (null !== $this->transcodeTemplateList && \is_array($this->transcodeTemplateList)) {
                $n = 0;
                foreach ($this->transcodeTemplateList as $item) {
                    $res['TranscodeTemplateList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->transcodeTemplateGroupId) {
            $res['TranscodeTemplateGroupId'] = $this->transcodeTemplateGroupId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->locked) {
            $res['Locked'] = $this->locked;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transcodeTemplateGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['TranscodeTemplateList'])) {
            if (!empty($map['TranscodeTemplateList'])) {
                $model->transcodeTemplateList = [];
                $n                            = 0;
                foreach ($map['TranscodeTemplateList'] as $item) {
                    $model->transcodeTemplateList[$n++] = null !== $item ? transcodeTemplateList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TranscodeTemplateGroupId'])) {
            $model->transcodeTemplateGroupId = $map['TranscodeTemplateGroupId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['Locked'])) {
            $model->locked = $map['Locked'];
        }

        return $model;
    }
}
