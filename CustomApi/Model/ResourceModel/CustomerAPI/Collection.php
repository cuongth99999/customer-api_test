<?php

namespace Magenest\CustomApi\Model\ResourceModel\CustomerAPI;

use Magenest\CustomApi\Model\CustomerAPI as Model;
use Magenest\CustomApi\Model\ResourceModel\CustomerAPI as ResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'magenest_custom_api_collection';

    /**
     * Initialize collection model.
     */
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}
