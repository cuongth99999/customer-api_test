<?php
namespace Magenest\CustomApi\Model\Api;
use Magenest\CustomApi\Api\GetCustomerByIdInterface;
use Magenest\CustomApi\Api\GetCustomerInterface;

class GetCustomerById implements GetCustomerByIdInterface
{

    /**
     * {@inheritdoc}
     */
    public function __construct(
        \Magenest\CustomApi\Model\ResourceModel\CustomerAPI\CollectionFactory $customerAPIFactory,
        array $data = []
    )
    {
        $this->customerapi = $customerAPIFactory;
    }


    public function getDataById(int $id)
    {
        return $this->customerapi->create()->addFieldToFilter('customer_id', ['eq'=>$id])->getData();
    }
}
