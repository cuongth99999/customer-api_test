<?php
namespace Magenest\CustomApi\Model\Api;
use Magenest\CustomApi\Api\DeleteCustomerInterface;

class DeleteCustomer implements DeleteCustomerInterface
{

    /**
     * {@inheritdoc}
     */
    public function __construct(
        \Magenest\CustomApi\Model\CustomerAPIFactory $customerAPIFactory,
        array $data = []
    )
    {
        $this->customerAPIFactory = $customerAPIFactory;
    }


    public function deleteDataById(int $id)
    {
        try {
            if ($id) {
                $data = $this->customerAPIFactory->create()->load($id);
                $data->delete();
                return "success";
            }
        } catch (\Exception $e) {
            $response = ['success' => false, 'message' => $e->getMessage()];
        }
        return "false";
    }
}
