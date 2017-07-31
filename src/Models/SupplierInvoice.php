<?php
/**
 * SageOne Library
 *
 * @category Library
 * @package  SageOne
 * @author   Vitaliy Likhachev <make.it.git@gmail.com>
 * @license  MIT <https://github.com/darrynten/sage-one-php/blob/master/LICENSE>
 * @link     https://github.com/darrynten/sage-one-php
 */

namespace DarrynTen\SageOne\Models;

use DarrynTen\SageOne\BaseModel;

/**
 * Supplier Invoice model
 *
 * Details on writable properties for Supplier Invoice
 * https://accounting.sageone.co.za/api/1.1.2/Help/ResourceModel?modelName=SupplierInvoice
 */
class SupplierInvoice extends BaseModel
{
    /**
     * @var string $endpoint
     */
    protected $endpoint = 'SupplierInvoice';

    /**
     * @var array $fields
     */
    protected $fields = [
        'dueDate' => [
            'type' => 'DateTime',
            'nullable' => false,
            'readonly' => false,
            'required' => true,
        ],
        'paid' => [
            'type' => 'boolean',
            'nullable' => true,
            'readonly' => true,
        ],
        'status' => [
            'type' => 'string',
            'nullable' => false,
            'readonly' => true,
        ],
        'fromDocument' => [
            'type' => 'string',
            'nullable' => false,
            'readonly' => false,
        ],
        'locked' => [
            'type' => 'boolean',
            'nullable' => false,
            'readonly' => true,
        ],
        'hasAdditionalCost' => [
            'type' => 'boolean',
            'nullable' => false,
            'readonly' => true,
        ],
        'supplierId' => [
            'type' => 'integer',
            'nullable' => false,
            'readonly' => false,
        ],
        'supplierName' => [
            'type' => 'string',
            'nullable' => false,
            'readonly' => false,
        ],
        'supplier' => [
            'type' => 'Supplier',
            'nullable' => false,
            'readonly' => false,
        ],
        'modified' => [
            'type' => 'DateTime',
            'nullable' => true,
            'readonly' => true,
        ],
        'created' => [
            'type' => 'DateTime',
            'nullable' => true,
            'readonly' => true,
        ],
        'statusId' => [
            'type' => 'integer',
            'nullable' => true,
            'readonly' => false,
        ],
        'supplier_CurrencyId' => [
            'type' => 'integer',
            'nullable' => true,
            'readonly' => false,
        ],
        'supplier_ExchangeRate' => [
            'type' => 'double',
            'nullable' => true,
            'readonly' => false,
        ],
        'id' => [
            'type' => 'integer',
            'nullable' => false,
            'readonly' => false,
        ],
        'date' => [
            'type' => 'DateTime',
            'nullable' => false,
            'readonly' => false,
            'required' => true,
        ],
        'inclusive' => [
            'type' => 'boolean',
            'nullable' => false,
            'readonly' => false,
        ],
        'discountPercentage' => [
            'type' => 'double',
            'nullable' => false,
            'readonly' => false,
        ],
        'taxReference' => [
            'type' => 'string',
            'nullable' => false,
            'readonly' => false,
            'min' => 0,
            'max' => 30
        ],
        'documentNumber' => [
            'type' => 'string',
            'nullable' => false,
            'readonly' => false,
            'min' => 0,
            'max' => 100
        ],
        'reference' => [
            'type' => 'string',
            'nullable' => false,
            'readonly' => false,
            'min' => 0,
            'max' => 100
        ],
        'message' => [
            'type' => 'string',
            'nullable' => false,
            'readonly' => false,
            'min' => 0,
            'max' => 8000
        ],
        'discount' => [
            'type' => 'double',
            'nullable' => false,
            'readonly' => false,
        ],
        'exclusive' => [
            'type' => 'double',
            'nullable' => false,
            'readonly' => false,
        ],
        'tax' => [
            'type' => 'double',
            'nullable' => false,
            'readonly' => false,
        ],
        'rounding' => [
            'type' => 'double',
            'nullable' => false,
            'readonly' => false,
        ],
        'total' => [
            'type' => 'double',
            'nullable' => false,
            'readonly' => false,
        ],
        'amountDue' => [
            'type' => 'double',
            'nullable' => false,
            'readonly' => false,
        ],
        'postalAddress01' => [
            'type' => 'string',
            'nullable' => false,
            'readonly' => false,
            'min' => 0,
            'max' => 100
        ],
        'postalAddress02' => [
            'type' => 'string',
            'nullable' => false,
            'readonly' => false,
            'min' => 0,
            'max' => 100
        ],
        'postalAddress03' => [
            'type' => 'string',
            'nullable' => false,
            'readonly' => false,
            'min' => 0,
            'max' => 100
        ],
        'postalAddress04' => [
            'type' => 'string',
            'nullable' => false,
            'readonly' => false,
            'min' => 0,
            'max' => 100
        ],
        'postalAddress05' => [
            'type' => 'string',
            'nullable' => false,
            'readonly' => false,
            'min' => 0,
            'max' => 100
        ],
        'deliveryAddress01' => [
            'type' => 'string',
            'nullable' => false,
            'readonly' => false,
            'min' => 0,
            'max' => 100
        ],
        'deliveryAddress02' => [
            'type' => 'string',
            'nullable' => false,
            'readonly' => false,
            'min' => 0,
            'max' => 100
        ],
        'deliveryAddress03' => [
            'type' => 'string',
            'nullable' => false,
            'readonly' => false,
            'min' => 0,
            'max' => 100
        ],
        'deliveryAddress04' => [
            'type' => 'string',
            'nullable' => false,
            'readonly' => false,
            'min' => 0,
            'max' => 100
        ],
        'deliveryAddress05' => [
            'type' => 'string',
            'nullable' => false,
            'readonly' => false,
            'min' => 0,
            'max' => 100,
        ],
        /**
         * TODO Find out what is 'printed',
         * see https://accounting.sageone.co.za/api/1.1.2/Help/Api/GET-SupplierInvoice-Get_includeDetail_includeSupplierDetails
         * Response has it, but SupplierInvoice does not
         */
        'printed' => [
            'type' => 'boolean',
            'nullable' => true,
            'readonly' => true,
        ],
        'taxPeriodId' => [
            'type' => 'integer',
            'nullable' => true,
            'readonly' => true,
        ],
        'editable' => [
            'type' => 'boolean',
            'nullable' => false,
            'readonly' => true,
        ],
        'hasAttachments' => [
            'type' => 'boolean',
            'nullable' => false,
            'readonly' => true,
        ],
        'hasNotes' => [
            'type' => 'boolean',
            'nullable' => true,
            'readonly' => true,
        ],
        'hasAnticipatedDate' => [
            'type' => 'boolean',
            'nullable' => true,
            'readonly' => true,
        ],
        'anticipatedDate' => [
            'type' => 'DateTime',
            'nullable' => true,
            'readonly' => true,
        ],
        'externalReference' => [
            'type' => 'string',
            'nullable' => false,
            'readonly' => false,
            'min' => 0,
            'max' => 100,
        ],
        'lines' => [
            'type' => 'CommercialDocumentLine',
            'collection' => true,
            'nullable' => false,
            'readonly' => false,
        ]
    ];

    /**
     * @var array $features
     */
    protected $features = [
        'all' => true,
        'get' => true,
        'save' => true,
        'delete' => false,
    ];

    /**
     * Calculates the specified Supplier Invoice
     *
     * @return SupplierInvoice
     */
    public function calculate()
    {
        $response = $this->request->request(
            'POST',
            $this->endpoint,
            'Calculate',
            $this->toArray()
        );
        $model = new SupplierInvoice($this->config);
        $model->loadResult($response);
        return $model;
    }

    /**
     * Emails the specified Supplier Invoice
     * @param array $parameters
     *   Example of request
     *   {
     *       "ID": 1,
     *       "EmailAddress": "example@example.com",
     *       "CCAddress": "sample string 3",
     *       "BCCAddress": "sample string 4",
     *       "Subject": "sample string 5",
     *       "Message": "sample string 6",
     *       "Attachments": [
     *           {
     *           "Key": "sample string 1",
     *           "Value": "sample string 2"
     *           },
     *           {
     *           "Key": "sample string 1",
     *           "Value": "sample string 2"
     *           }
     *       ]
     *   }
     */
    public function email(array $parameters)
    {
        $this->request->request('POST', $this->endpoint, 'Email', $parameters);
    }

    /**
     * Downloads a copy of a Supplier Invoice as a PDF file.
     *
     * @param string $id
     * @return binary string
     */
    public function export($id)
    {
        $response = $this->request->requestRaw(
            'GET',
            $this->endpoint,
            sprintf('Export/%s', $id)
        );
        return $response->getBody()->getContents();
    }
}
