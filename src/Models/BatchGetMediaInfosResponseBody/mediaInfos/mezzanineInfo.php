<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\BatchGetMediaInfosResponseBody\mediaInfos;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\BatchGetMediaInfosResponseBody\mediaInfos\mezzanineInfo\audioStreamList;
use AlibabaCloud\SDK\Vod\V20170321\Models\BatchGetMediaInfosResponseBody\mediaInfos\mezzanineInfo\videoStreamList;

class mezzanineInfo extends Model
{
    /**
     * @var audioStreamList[]
     */
    public $audioStreamList;

    /**
     * @var string
     */
    public $bitrate;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $fileURL;

    /**
     * @var string
     */
    public $fps;

    /**
     * @var int
     */
    public $height;

    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $status;

    /**
     * @var videoStreamList[]
     */
    public $videoStreamList;

    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'audioStreamList' => 'AudioStreamList',
        'bitrate' => 'Bitrate',
        'creationTime' => 'CreationTime',
        'duration' => 'Duration',
        'fileName' => 'FileName',
        'fileURL' => 'FileURL',
        'fps' => 'Fps',
        'height' => 'Height',
        'mediaId' => 'MediaId',
        'size' => 'Size',
        'status' => 'Status',
        'videoStreamList' => 'VideoStreamList',
        'width' => 'Width',
    ];

    public function validate()
    {
        if (\is_array($this->audioStreamList)) {
            Model::validateArray($this->audioStreamList);
        }
        if (\is_array($this->videoStreamList)) {
            Model::validateArray($this->videoStreamList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioStreamList) {
            if (\is_array($this->audioStreamList)) {
                $res['AudioStreamList'] = [];
                $n1 = 0;
                foreach ($this->audioStreamList as $item1) {
                    $res['AudioStreamList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->fileURL) {
            $res['FileURL'] = $this->fileURL;
        }

        if (null !== $this->fps) {
            $res['Fps'] = $this->fps;
        }

        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }

        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->videoStreamList) {
            if (\is_array($this->videoStreamList)) {
                $res['VideoStreamList'] = [];
                $n1 = 0;
                foreach ($this->videoStreamList as $item1) {
                    $res['VideoStreamList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->width) {
            $res['Width'] = $this->width;
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
        if (isset($map['AudioStreamList'])) {
            if (!empty($map['AudioStreamList'])) {
                $model->audioStreamList = [];
                $n1 = 0;
                foreach ($map['AudioStreamList'] as $item1) {
                    $model->audioStreamList[$n1++] = audioStreamList::fromMap($item1);
                }
            }
        }

        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['FileURL'])) {
            $model->fileURL = $map['FileURL'];
        }

        if (isset($map['Fps'])) {
            $model->fps = $map['Fps'];
        }

        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }

        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['VideoStreamList'])) {
            if (!empty($map['VideoStreamList'])) {
                $model->videoStreamList = [];
                $n1 = 0;
                foreach ($map['VideoStreamList'] as $item1) {
                    $model->videoStreamList[$n1++] = videoStreamList::fromMap($item1);
                }
            }
        }

        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
