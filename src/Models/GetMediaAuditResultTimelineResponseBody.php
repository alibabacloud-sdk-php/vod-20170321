<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultTimelineResponseBody\mediaAuditResultTimeline;

class GetMediaAuditResultTimelineResponseBody extends Model
{
    /**
     * @var mediaAuditResultTimeline
     */
    public $mediaAuditResultTimeline;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mediaAuditResultTimeline' => 'MediaAuditResultTimeline',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->mediaAuditResultTimeline) {
            $this->mediaAuditResultTimeline->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mediaAuditResultTimeline) {
            $res['MediaAuditResultTimeline'] = null !== $this->mediaAuditResultTimeline ? $this->mediaAuditResultTimeline->toArray($noStream) : $this->mediaAuditResultTimeline;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['MediaAuditResultTimeline'])) {
            $model->mediaAuditResultTimeline = mediaAuditResultTimeline::fromMap($map['MediaAuditResultTimeline']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
