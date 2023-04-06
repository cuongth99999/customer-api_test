<?php

namespace Magenest\CustomApi\Model;

use Magenest\CustomApi\Model\ResourceModel\CustomerAPI as ResourceModel;
use Magento\Framework\Model\AbstractModel;

class CustomerAPI extends AbstractModel
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'magenest_custom_api';

    /**
     * Initialize magento model.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}
