<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DescribeVodMediaPlayDataRequest extends Model
{
    /**
     * @description The ID of the media file (VideoId). You can specify this parameter to query all playback data of a media file. You can specify only one media ID. You can use one of the following methods to obtain the ID:
     *
     *   Log on to the [ApsaraVideo VOD console](https://vod.console.aliyun.com). In the left-side navigation pane, choose **Media Files** > **Audio/Video**. On the page that appears, view the media ID.
     *   Obtain the value of the VideoId parameter in the response to the [CreateUploadVideo](~~CreateUploadVideo~~) operation that you called to upload the audio or video file.
     *   Obtain the value of VideoId by calling the [SearchMedia](~~SearchMedia~~) operation. This method is applicable to files that have been uploaded.
     *
     * @example 9ae2af636ca6c10412f44891fc****
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description The name of the metric. This parameter must be specified together with the `OrderType` parameter. You can specify this parameter to sort the returned data in ascending or descending order based on specific metrics. Valid values:
     *
     *   **PlaySuccessVv**: the total number of views.
     *   **PlayPerVv**: the average views per viewer.
     *   **PlayDuration**: the total playback duration.
     *   **PlayDurationPerUv**: the average playback duration per viewer.
     *
     * @example PlaySuccessVv
     *
     * @var string
     */
    public $orderName;

    /**
     * @description The sort type. This parameter must be specified together with the `OrderName` parameter. You can specify this parameter to sort the returned data in ascending or descending order based on specific metrics. Valid values:
     *
     *   **ASC**: The returned data is sorted in ascending order.
     *   **DESC**: The returned data is sorted in descending order.
     *
     * @example ASC
     *
     * @var string
     */
    public $orderType;

    /**
     * @description The operating system of the player. You can specify this parameter to query all playback data generated on a specific operating system. Valid values:
     *
     *   **Android**
     *   **iOS**
     *   **Windows**
     *   **macOS**
     *   **Linux**
     *
     * @example Android
     *
     * @var string
     */
    public $os;

    /**
     * @description The number of the page. You can specify a page number to return data from the specified page.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries per page. Maximum value: 100.
     *
     * This parameter is required.
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The playback time. Specify the value in the yyyyMMdd format.
     *
     * > *   You can query data only by day.
     * > *   You can query only data within the last 30 days.
     * @example 20240322
     *
     * @var string
     */
    public $playDate;

    /**
     * @description The region in which ApsaraVideo VOD is activated. You can specify this parameter to query all playback data generated only in a specific region. Valid values:
     *
     *   **cn-beijing**: China (Beijing)
     *   **cn-shanghai**: China (Shanghai)
     *   **cn-shenzhen**: China (Shenzhen)
     *   **ap-northeast-1**: Japan (Tokyo)
     *   **ap-southeast-1**: Singapore
     *   **ap-southeast-5**: Indonesia (Jakarta)
     *   **eu-central-1**: Germany (Frankfurt)
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $region;

    /**
     * @description The type of the player SDK. You can specify this parameter to query all playback data generated by using a specific type of player SDK. Valid values:
     *
     *   **Native**: ApsaraVideo Player SDK for Android or ApsaraVideo Player SDK for iOS
     *   **Web**: ApsaraVideo Player SDK for Web
     *
     * @example Native
     *
     * @var string
     */
    public $terminalType;
    protected $_name = [
        'mediaId'      => 'MediaId',
        'orderName'    => 'OrderName',
        'orderType'    => 'OrderType',
        'os'           => 'Os',
        'pageNo'       => 'PageNo',
        'pageSize'     => 'PageSize',
        'playDate'     => 'PlayDate',
        'region'       => 'Region',
        'terminalType' => 'TerminalType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->orderName) {
            $res['OrderName'] = $this->orderName;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->playDate) {
            $res['PlayDate'] = $this->playDate;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->terminalType) {
            $res['TerminalType'] = $this->terminalType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVodMediaPlayDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['OrderName'])) {
            $model->orderName = $map['OrderName'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PlayDate'])) {
            $model->playDate = $map['PlayDate'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['TerminalType'])) {
            $model->terminalType = $map['TerminalType'];
        }

        return $model;
    }
}
