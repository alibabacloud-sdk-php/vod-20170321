<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\UploadMediaByURLResponseBody;

use AlibabaCloud\Dara\Model;

class uploadJobs extends Model
{
    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $sourceURL;
    protected $_name = [
        'jobId' => 'JobId',
        'sourceURL' => 'SourceURL',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->sourceURL) {
            $res['SourceURL'] = $this->sourceURL;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['SourceURL'])) {
            $model->sourceURL = $map['SourceURL'];
        }

        return $model;
    }
}
