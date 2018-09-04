<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     MarketplaceWebService
 *  @copyright   Copyright 2009 Amazon Technologies, Inc.
 *  @link        http://aws.amazon.com
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *  @version     2009-01-01
 */
/******************************************************************************* 

 *  Marketplace Web Service PHP5 Library
 *  Generated: Thu May 07 13:07:36 PDT 2009
 * 
 */

/**
 *  @see MarketplaceWebService_Model
 */
require_once ('MarketplaceWebService/Model.php');  

    

/**
 * MarketplaceWebService_Model_GetOrderListRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>Marketplace: string</li>
 * <li>Merchant: string</li>
 * <li>MWSAuthToken: string</li>
 * <li>CreatedAfter: string</li>
 * <li>CreatedBefore: string</li>
 * <li>LastUpdatedAfter: string</li>
 * <li>LastUpdatedBefore: string</li>
 * <li>OrderStatusList: MarketplaceWebService_Model_TypeList</li>
 * <li>FulfillmentChannelList: MarketplaceWebService_Model_IdList</li>
 * <li>SellerOrderId: string</li>
 * <li>BuyerEmail: string</li>
 * <li>PaymentMethod: MarketplaceWebService_Model_TypeList</li>
 * <li>TFMShipmentStatus: MarketplaceWebService_Model_TypeList</li>
 * <li>MaxResultsPerPage: int</li>
 *
 * </ul>
 */ 
class MarketplaceWebService_Model_GetOrderListRequest extends MarketplaceWebService_Model
{


    /**
     * Construct new MarketplaceWebService_Model_GetOrderListRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
 * <li>Marketplace: string</li>
 * <li>Merchant: string</li>
 * <li>MWSAuthToken: string</li>
 * <li>CreatedAfter: string</li>
 * <li>CreatedBefore: string</li>
 * <li>LastUpdatedAfter: string</li>
 * <li>LastUpdatedBefore: string</li>
 * <li>OrderStatusList: MarketplaceWebService_Model_TypeList</li>
 * <li>FulfillmentChannelList: MarketplaceWebService_Model_IdList</li>
 * <li>SellerOrderId: string</li>
 * <li>BuyerEmail: string</li>
 * <li>PaymentMethod: MarketplaceWebService_Model_TypeList</li>
 * <li>TFMShipmentStatus: MarketplaceWebService_Model_TypeList</li>
 * <li>MaxResultsPerPage: int</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array (
		'Marketplace' => array('FieldValue' => null, 'FieldType' => 'string'),
		'Merchant' => array('FieldValue' => null, 'FieldType' => 'string'),
		'MWSAuthToken' => array('FieldValue' => null, 'FieldType' => 'string'),
		'CreatedAfter' => array('FieldValue' => null, 'FieldType' => 'string'),
		'CreatedBefore' => array('FieldValue' => null, 'FieldType' => 'string'),
		'LastUpdatedAfter' => array('FieldValue' => null, 'FieldType' => 'string'),
		'LastUpdatedBefore' => array('FieldValue' => null, 'FieldType' => 'string'),
		'OrderStatusList' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebService_Model_TypeList'),
		'FulfillmentChannelList' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebService_Model_IdList'),
		'SellerOrderId' => array('FieldValue' => null, 'FieldType' => 'string'),
		'BuyerEmail' => array('FieldValue' => null, 'FieldType' => 'string'),
		'PaymentMethod' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebService_Model_TypeList'),
		'TFMShipmentStatus' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebService_Model_TypeList'),
		'MaxResultsPerPage' => array('FieldValue' => null, 'FieldType' => 'int'),
        );
        parent::__construct($data);
    }


public function getMarketplace() { return $this->fields['Marketplace']['FieldValue']; }
public function setMarketplace($value) { $this->fields['Marketplace']['FieldValue'] = $value; return $this; }
public function isSetMarketplace() { return !is_null($this->fields['Marketplace']['FieldValue']); }
public function withMarketplace($value) { $this->setMarketplace($value); return $this; }

public function getMerchant() { return $this->fields['Merchant']['FieldValue']; }
public function setMerchant($value) { $this->fields['Merchant']['FieldValue'] = $value; return $this; }
public function isSetMerchant() { return !is_null($this->fields['Merchant']['FieldValue']); }
public function withMerchant($value) { $this->setMerchant($value); return $this; }

public function getCreatedAfter() { return $this->fields['CreatedAfter']['FieldValue']; }
public function setCreatedAfter($value) { $this->fields['CreatedAfter']['FieldValue'] = $value; return $this; }
public function isSetCreatedAfter() { return !is_null($this->fields['CreatedAfter']['FieldValue']); }
public function withCreatedAfter($value) { $this->setCreatedAfter($value); return $this; }

public function getCreatedBefore() { return $this->fields['CreatedBefore']['FieldValue']; }
public function setCreatedBefore($value) { $this->fields['CreatedBefore']['FieldValue'] = $value; return $this; }
public function isSetCreatedBefore() { return !is_null($this->fields['CreatedBefore']['FieldValue']); }
public function withCreatedBefore($value) { $this->setCreatedBefore($value); return $this; }

public function getLastUpdatedAfter() { return $this->fields['LastUpdatedAfter']['FieldValue']; }
public function setLastUpdatedAfter($value) { $this->fields['LastUpdatedAfter']['FieldValue'] = $value; return $this; }
public function isSetLastUpdatedAfter() { return !is_null($this->fields['LastUpdatedAfter']['FieldValue']); }
public function withLastUpdatedAfter($value) { $this->setLastUpdatedAfter($value); return $this; }

public function getLastUpdatedBefore() { return $this->fields['LastUpdatedBefore']['FieldValue']; }
public function setLastUpdatedBefore($value) { $this->fields['LastUpdatedBefore']['FieldValue'] = $value; return $this; }
public function isSetLastUpdatedBefore() { return !is_null($this->fields['LastUpdatedBefore']['FieldValue']); }
public function withLastUpdatedBefore($value) { $this->setLastUpdatedBefore($value); return $this; }

public function getOrderStatusList() { return $this->fields['OrderStatusList']['FieldValue']; }
public function setOrderStatusList($value) { $this->fields['OrderStatusList']['FieldValue'] = $value; return $this; }
public function isSetOrderStatusList() { return !is_null($this->fields['OrderStatusList']['FieldValue']); }
public function withOrderStatusList($value) { $this->setOrderStatusList($value); return $this; }

public function getFulfillmentChannelList() { return $this->fields['FulfillmentChannelList']['FieldValue']; }
public function setFulfillmentChannelList($value) { $this->fields['FulfillmentChannelList']['FieldValue'] = $value; return $this; }
public function isSetFulfillmentChannelList() { return !is_null($this->fields['FulfillmentChannelList']['FieldValue']); }
public function withFulfillmentChannelList($value) { $this->setFulfillmentChannelList($value); return $this; }

public function getSellerOrderId() { return $this->fields['SellerOrderId']['FieldValue']; }
public function setSellerOrderId($value) { $this->fields['SellerOrderId']['FieldValue'] = $value; return $this; }
public function isSetSellerOrderId() { return !is_null($this->fields['SellerOrderId']['FieldValue']); }
public function withSellerOrderId($value) { $this->setSellerOrderId($value); return $this; }

public function getBuyerEmail() { return $this->fields['BuyerEmail']['FieldValue']; }
public function setBuyerEmail($value) { $this->fields['BuyerEmail']['FieldValue'] = $value; return $this; }
public function isSetBuyerEmail() { return !is_null($this->fields['BuyerEmail']['FieldValue']); }
public function withBuyerEmail($value) { $this->setBuyerEmail($value); return $this; }

public function getPaymentMethod() { return $this->fields['PaymentMethod']['FieldValue']; }
public function setPaymentMethod($value) { $this->fields['PaymentMethod']['FieldValue'] = $value; return $this; }
public function isSetPaymentMethod() { return !is_null($this->fields['PaymentMethod']['FieldValue']); }
public function withPaymentMethod($value) { $this->setPaymentMethod($value); return $this; }

public function getTFMShipmentStatus() { return $this->fields['TFMShipmentStatus']['FieldValue']; }
public function setTFMShipmentStatus($value) { $this->fields['TFMShipmentStatus']['FieldValue'] = $value; return $this; }
public function isSetTFMShipmentStatus() { return !is_null($this->fields['TFMShipmentStatus']['FieldValue']); }
public function withTFMShipmentStatus($value) { $this->setTFMShipmentStatus($value); return $this; }

public function getMaxResultsPerPage() { return $this->fields['MaxResultsPerPage']['FieldValue']; }
public function setMaxResultsPerPage($value) { $this->fields['MaxResultsPerPage']['FieldValue'] = $value; return $this; }
public function isSetMaxResultsPerPage() { return !is_null($this->fields['MaxResultsPerPage']['FieldValue']); }
public function withMaxResultsPerPage($value) { $this->setMaxResultsPerPage($value); return $this; }

}
