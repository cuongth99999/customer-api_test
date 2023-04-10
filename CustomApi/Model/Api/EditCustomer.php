<?php
namespace Magenest\CustomApi\Model\Api;
use Magenest\CustomApi\Api\EditCustomerInterface;

class EditCustomer implements EditCustomerInterface
{


    /**
     * {@inheritdoc}
     */
    public function editDataById($id, $dataStr)
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

        $sql = "Update " . $tableName . " SET customer_name = '{$name}', email = '{$email}', number = '{$number}' WHERE customer_id={$id}";
        $connection->query($sql);
        return 'successfully edit customer';
    }
}
