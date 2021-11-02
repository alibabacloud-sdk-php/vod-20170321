<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponseBody\mediaList;

use AlibabaCloud\Tea\Model;

class audio extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $audioId;

    /**
     * @var int
     */
    public $cateId;

    /**
     * @var string
     */
    public $cateName;

    /**
     * @var string
     */
    public $coverURL;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $downloadSwitch;

    /**
     * @var float
     */
    public $duration;

    /**
     * @var string
     */
    public $mediaSource;

    /**
     * @var string
     */
    public $modificationTime;

    /**
     * @var string
     */
    public $preprocessStatus;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string[]
     */
    public $snapshots;

    /**
     * @var string[]
     */
    public $spriteSnapshots;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $storageLocation;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $transcodeMode;
    protected $_name = [
        'appId'            => 'AppId',
        'audioId'          => 'AudioId',
        'cateId'           => 'CateId',
        'cateName'         => 'CateName',
        'coverURL'         => 'CoverURL',
        'creationTime'     => 'CreationTime',
        'description'      => 'Description',
        'downloadSwitch'   => 'DownloadSwitch',
        'duration'         => 'Duration',
        'mediaSource'      => 'MediaSource',
        'modificationTime' => 'ModificationTime',
        'preprocessStatus' => 'PreprocessStatus',
        'size'             => 'Size',
        'snapshots'        => 'Snapshots',
        'spriteSnapshots'  => 'SpriteSnapshots',
        'status'           => 'Status',
        'storageLocation'  => 'StorageLocation',
        'tags'             => 'Tags',
        'title'            => 'Title',
        'transcodeMode'    => 'TranscodeMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->audioId) {
            $res['AudioId'] = $this->audioId;
        }
        if (null !== $this->cateId) {
            $res['CateId'] = $this->cateId;
        }
        if (null !== $this->cateName) {
            $res['CateName'] = $this->cateName;
        }
        if (null !== $this->coverURL) {
            $res['CoverURL'] = $this->coverURL;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->downloadSwitch) {
            $res['DownloadSwitch'] = $this->downloadSwitch;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->mediaSource) {
            $res['MediaSource'] = $this->mediaSource;
        }
        if (null !== $this->modificationTime) {
            $res['ModificationTime'] = $this->modificationTime;
        }
        if (null !== $this->preprocessStatus) {
            $res['PreprocessStatus'] = $this->preprocessStatus;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->snapshots) {
            $res['Snapshots'] = $this->snapshots;
        }
        if (null !== $this->spriteSnapshots) {
            $res['SpriteSnapshots'] = $this->spriteSnapshots;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->storageLocation) {
            $res['StorageLocation'] = $this->storageLocation;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->transcodeMode) {
            $res['TranscodeMode'] = $this->transcodeMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return audio
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AudioId'])) {
            $model->audioId = $map['AudioId'];
        }
        if (isset($map['CateId'])) {
            $model->cateId = $map['CateId'];
        }
        if (isset($map['CateName'])) {
            $model->cateName = $map['CateName'];
        }
        if (isset($map['CoverURL'])) {
            $model->coverURL = $map['CoverURL'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DownloadSwitch'])) {
            $model->downloadSwitch = $map['DownloadSwitch'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['MediaSource'])) {
            $model->mediaSource = $map['MediaSource'];
        }
        if (isset($map['ModificationTime'])) {
            $model->modificationTime = $map['ModificationTime'];
        }
        if (isset($map['PreprocessStatus'])) {
            $model->preprocessStatus = $map['PreprocessStatus'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Snapshots'])) {
            if (!empty($map['Snapshots'])) {
                $model->snapshots = $map['Snapshots'];
            }
        }
        if (isset($map['SpriteSnapshots'])) {
            if (!empty($map['SpriteSnapshots'])) {
                $model->spriteSnapshots = $map['SpriteSnapshots'];
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StorageLocation'])) {
            $model->storageLocation = $map['StorageLocation'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['TranscodeMode'])) {
            $model->transcodeMode = $map['TranscodeMode'];
        }

        return $model;
    }
}
