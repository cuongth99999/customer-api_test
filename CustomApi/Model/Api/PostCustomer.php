<?php
namespace Magenest\CustomApi\Model\Api;
use Magenest\CustomApi\Api\PostCustomerInterface;

class PostCustomer implements PostCustomerInterface
{


    /**
     * {@inheritdoc}
     */
    public function setData($dataStr)
    {
        $dataStr = trim($dataStr, '[');
        $dataStr = trim($dataStr, ']');
        $data = explode(',', $dataStr);

        $name =$data[0];
        $email =$data[1];
        $number =$data[2];
        //Customize the code as per your requirement.

        $objectManager = \Magento\Framework\App\ObjectManager::getInstance(); // Instance of object manager
        $resource = $objectManager->get('Magento\Framework\App\ResourceConnection');
        $connection = $resource->getConnection();
        $tableName = $resource->getTableName('magenest_custom_api');

        $sql = "Insert Into " . $tableName . " (customer_name, email, number) Values ('{$name}','{$email}','{$number}')";
        $connection->query($sql);
        return 'successfully saved customer';
    }
}
