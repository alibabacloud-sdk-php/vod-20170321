<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainDetailResponseBody\domainDetail\sources;

use AlibabaCloud\Tea\Model;

class source extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $enabled;

    /**
     * @var string
     */
    public $priority;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $content;
    protected $_name = [
        'type'     => 'Type',
        'enabled'  => 'Enabled',
        'priority' => 'Priority',
        'port'     => 'Port',
        'content'  => 'Content',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return source
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        return $model;
    }
}
