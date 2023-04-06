<?php

namespace Magenest\CustomApi\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class CustomerAPI extends AbstractDb
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'magenest_custom_api_resource_model';

    /**
     * Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init('magenest_custom_api', 'customer_id');
        $this->_useIsObjectNew = true;
    }
}
