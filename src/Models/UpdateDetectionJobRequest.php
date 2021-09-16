<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class UpdateDetectionJobRequest extends Model
{
    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $copyrightStatus;

    /**
     * @var string
     */
    public $copyrightBeginTime;

    /**
     * @var string
     */
    public $copyrightEndTime;

    /**
     * @var string
     */
    public $copyrightFile;

    /**
     * @var string
     */
    public $whiteListUrls;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $beginTime;

    /**
     * @var int
     */
    public $duration;
    protected $_name = [
        'jobId'              => 'JobId',
        'copyrightStatus'    => 'CopyrightStatus',
        'copyrightBeginTime' => 'CopyrightBeginTime',
        'copyrightEndTime'   => 'CopyrightEndTime',
        'copyrightFile'      => 'CopyrightFile',
        'whiteListUrls'      => 'WhiteListUrls',
        'templateId'         => 'TemplateId',
        'beginTime'          => 'BeginTime',
        'duration'           => 'Duration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->copyrightStatus) {
            $res['CopyrightStatus'] = $this->copyrightStatus;
        }
        if (null !== $this->copyrightBeginTime) {
            $res['CopyrightBeginTime'] = $this->copyrightBeginTime;
        }
        if (null !== $this->copyrightEndTime) {
            $res['CopyrightEndTime'] = $this->copyrightEndTime;
        }
        if (null !== $this->copyrightFile) {
            $res['CopyrightFile'] = $this->copyrightFile;
        }
        if (null !== $this->whiteListUrls) {
            $res['WhiteListUrls'] = $this->whiteListUrls;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDetectionJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['CopyrightStatus'])) {
            $model->copyrightStatus = $map['CopyrightStatus'];
        }
        if (isset($map['CopyrightBeginTime'])) {
            $model->copyrightBeginTime = $map['CopyrightBeginTime'];
        }
        if (isset($map['CopyrightEndTime'])) {
            $model->copyrightEndTime = $map['CopyrightEndTime'];
        }
        if (isset($map['CopyrightFile'])) {
            $model->copyrightFile = $map['CopyrightFile'];
        }
        if (isset($map['WhiteListUrls'])) {
            $model->whiteListUrls = $map['WhiteListUrls'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        return $model;
    }
}
