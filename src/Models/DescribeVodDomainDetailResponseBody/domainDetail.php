<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainDetailResponseBody\domainDetail\sources;

class domainDetail extends Model
{
    /**
     * @var string
     */
    public $certName;

    /**
     * @var string
     */
    public $cname;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $domainStatus;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $SSLProtocol;

    /**
     * @var string
     */
    public $SSLPub;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var sources
     */
    public $sources;

    /**
     * @var string
     */
    public $weight;
    protected $_name = [
        'certName' => 'CertName',
        'cname' => 'Cname',
        'description' => 'Description',
        'domainName' => 'DomainName',
        'domainStatus' => 'DomainStatus',
        'gmtCreated' => 'GmtCreated',
        'gmtModified' => 'GmtModified',
        'SSLProtocol' => 'SSLProtocol',
        'SSLPub' => 'SSLPub',
        'scope' => 'Scope',
        'sources' => 'Sources',
        'weight' => 'Weight',
    ];

    public function validate()
    {
        if (null !== $this->sources) {
            $this->sources->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }

        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->domainStatus) {
            $res['DomainStatus'] = $this->domainStatus;
        }

        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->SSLProtocol) {
            $res['SSLProtocol'] = $this->SSLProtocol;
        }

        if (null !== $this->SSLPub) {
            $res['SSLPub'] = $this->SSLPub;
        }

        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }

        if (null !== $this->sources) {
            $res['Sources'] = null !== $this->sources ? $this->sources->toArray($noStream) : $this->sources;
        }

        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
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
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }

        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['DomainStatus'])) {
            $model->domainStatus = $map['DomainStatus'];
        }

        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['SSLProtocol'])) {
            $model->SSLProtocol = $map['SSLProtocol'];
        }

        if (isset($map['SSLPub'])) {
            $model->SSLPub = $map['SSLPub'];
        }

        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        if (isset($map['Sources'])) {
            $model->sources = sources::fromMap($map['Sources']);
        }

        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
