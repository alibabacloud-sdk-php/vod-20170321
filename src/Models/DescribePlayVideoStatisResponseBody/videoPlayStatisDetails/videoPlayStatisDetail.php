<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayVideoStatisResponseBody\videoPlayStatisDetails;

use AlibabaCloud\Tea\Model;

class videoPlayStatisDetail extends Model
{
    /**
     * @var string
     */
    public $playDuration;

    /**
     * @var string
     */
    public $date;

    /**
     * @var string
     */
    public $VV;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $UV;

    /**
     * @var string
     */
    public $playRange;
    protected $_name = [
        'playDuration' => 'PlayDuration',
        'date'         => 'Date',
        'VV'           => 'VV',
        'title'        => 'Title',
        'UV'           => 'UV',
        'playRange'    => 'PlayRange',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->playDuration) {
            $res['PlayDuration'] = $this->playDuration;
        }
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }
        if (null !== $this->VV) {
            $res['VV'] = $this->VV;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->UV) {
            $res['UV'] = $this->UV;
        }
        if (null !== $this->playRange) {
            $res['PlayRange'] = $this->playRange;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoPlayStatisDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PlayDuration'])) {
            $model->playDuration = $map['PlayDuration'];
        }
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }
        if (isset($map['VV'])) {
            $model->VV = $map['VV'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['UV'])) {
            $model->UV = $map['UV'];
        }
        if (isset($map['PlayRange'])) {
            $model->playRange = $map['PlayRange'];
        }

        return $model;
    }
}
