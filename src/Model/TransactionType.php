<?php
/**
 * TransactionType
 *
 * PHP version 5
 *
 * @category Class
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Payment Gateway API Specification.
 *
 * The documentation here is designed to provide all of the technical guidance required to consume and integrate with our APIs for payment processing. To learn more about our APIs please visit https://docs.firstdata.com/org/gateway.
 *
 * OpenAPI spec version: 6.8.0.20190731.002
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace FirstData\FirstApi\Client\Model;
use \FirstData\FirstApi\Client\ObjectSerializer;

/**
 * TransactionType Class Doc Comment
 *
 * @category Class
 * @description Type of transaction to perform. Primary transaction types in requests include &#39;SALE&#39;, &#39;PREAUTH&#39;, &#39;CREDIT&#39; and &#39;FORCED_TICKET&#39;.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TransactionType
{
    /**
     * Possible values of this enum
     */
    const SALE = 'SALE';
    const PREAUTH = 'PREAUTH';
    const CREDIT = 'CREDIT';
    const FORCED_TICKET = 'FORCED_TICKET';
    const VOID = 'VOID';
    const _RETURN = 'RETURN';
    const POSTAUTH = 'POSTAUTH';
    const PAYER_AUTH = 'PAYER_AUTH';
    const DISBURSEMENT = 'DISBURSEMENT';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SALE,
            self::PREAUTH,
            self::CREDIT,
            self::FORCED_TICKET,
            self::VOID,
            self::_RETURN,
            self::POSTAUTH,
            self::PAYER_AUTH,
            self::DISBURSEMENT,
        ];
    }
}


