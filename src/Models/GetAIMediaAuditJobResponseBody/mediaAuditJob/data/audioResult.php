<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponseBody\mediaAuditJob\data;

use AlibabaCloud\Tea\Model;

class audioResult extends Model
{
    /**
     * @description The category of the review result. Valid values:
     *
     *   **normal**
     *   **spam**
     *   **ad**
     *   **politics**
     *   **terrorism**
     *   **abuse**
     *   **porn**
     *   **flood**: spam posts
     *   **contraband**
     *   **meaningless**
     *
     * @example normal
     *
     * @var string
     */
    public $label;

    /**
     * @description The review scenario. Valid value: **antispam**.
     *
     * @example antispam
     *
     * @var string
     */
    public $scene;

    /**
     * @description The score.
     *
     * @example 99.91
     *
     * @var string
     */
    public $score;

    /**
     * @description The recommendation for review results. Valid values:
     *
     *   **block**: The content violates the regulations.
     *   **review**: The content may violate the regulations.
     *   **pass**: The content passes the review.
     *
     * @example pass
     *
     * @var string
     */
    public $suggestion;
    protected $_name = [
        'label'      => 'Label',
        'scene'      => 'Scene',
        'score'      => 'Score',
        'suggestion' => 'Suggestion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return audioResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }

        return $model;
    }
}
