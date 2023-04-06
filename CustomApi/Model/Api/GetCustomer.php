<?php
namespace Magenest\CustomApi\Model\Api;
use Magenest\CustomApi\Api\GetCustomerInterface;

class GetCustomer implements GetCustomerInterface
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

    public function getData()
    {

//        $objectManager = \Magento\Framework\App\ObjectManager::getInstance(); // Instance of object manager
//        $resource = $objectManager->get('Magento\Framework\App\ResourceConnection');
//        $connection = $resource->getConnection();
//        $tableName = $resource->getTableName('magenest_custom_api');
//
//        $select = $connection->select()
//            ->from(
//                ['p' => $tableName]);
//
//        $data = $connection->fetchAll($select);

        return $this->customerapi->create()->getData();

//        return $data;
    }
}
