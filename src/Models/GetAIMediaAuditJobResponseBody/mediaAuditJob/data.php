<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponseBody\mediaAuditJob;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponseBody\mediaAuditJob\data\audioResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponseBody\mediaAuditJob\data\imageResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponseBody\mediaAuditJob\data\textResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponseBody\mediaAuditJob\data\videoResult;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $abnormalModules;

    /**
     * @var audioResult[]
     */
    public $audioResult;

    /**
     * @var imageResult[]
     */
    public $imageResult;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $suggestion;

    /**
     * @var textResult[]
     */
    public $textResult;

    /**
     * @var videoResult
     */
    public $videoResult;
    protected $_name = [
        'abnormalModules' => 'AbnormalModules',
        'audioResult'     => 'AudioResult',
        'imageResult'     => 'ImageResult',
        'label'           => 'Label',
        'suggestion'      => 'Suggestion',
        'textResult'      => 'TextResult',
        'videoResult'     => 'VideoResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->abnormalModules) {
            $res['AbnormalModules'] = $this->abnormalModules;
        }
        if (null !== $this->audioResult) {
            $res['AudioResult'] = [];
            if (null !== $this->audioResult && \is_array($this->audioResult)) {
                $n = 0;
                foreach ($this->audioResult as $item) {
                    $res['AudioResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->imageResult) {
            $res['ImageResult'] = [];
            if (null !== $this->imageResult && \is_array($this->imageResult)) {
                $n = 0;
                foreach ($this->imageResult as $item) {
                    $res['ImageResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }
        if (null !== $this->textResult) {
            $res['TextResult'] = [];
            if (null !== $this->textResult && \is_array($this->textResult)) {
                $n = 0;
                foreach ($this->textResult as $item) {
                    $res['TextResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->videoResult) {
            $res['VideoResult'] = null !== $this->videoResult ? $this->videoResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbnormalModules'])) {
            $model->abnormalModules = $map['AbnormalModules'];
        }
        if (isset($map['AudioResult'])) {
            if (!empty($map['AudioResult'])) {
                $model->audioResult = [];
                $n                  = 0;
                foreach ($map['AudioResult'] as $item) {
                    $model->audioResult[$n++] = null !== $item ? audioResult::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ImageResult'])) {
            if (!empty($map['ImageResult'])) {
                $model->imageResult = [];
                $n                  = 0;
                foreach ($map['ImageResult'] as $item) {
                    $model->imageResult[$n++] = null !== $item ? imageResult::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }
        if (isset($map['TextResult'])) {
            if (!empty($map['TextResult'])) {
                $model->textResult = [];
                $n                 = 0;
                foreach ($map['TextResult'] as $item) {
                    $model->textResult[$n++] = null !== $item ? textResult::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VideoResult'])) {
            $model->videoResult = videoResult::fromMap($map['VideoResult']);
        }

        return $model;
    }
}
