<?php
/**
 * PaymentMethodType
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
 * OpenAPI spec version: 6.10.1.20200226.002
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
 * PaymentMethodType Class Doc Comment
 *
 * @category Class
 * @description Type of payment method.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentMethodType
{
    /**
     * Possible values of this enum
     */
    const ALIPAY = 'ALIPAY';
    const ALIPAY_PAYSECURE_US = 'ALIPAY_PAYSECURE_US';
    const ALIPAY_DOMESTIC = 'ALIPAY_DOMESTIC';
    const APM = 'APM';
    const CUP_DOMESTIC = 'CUP_DOMESTIC';
    const DEBITDE = 'DEBITDE';
    const EMI = 'EMI';
    const GIROPAY = 'GIROPAY';
    const IDEAL = 'IDEAL';
    const INDIAWALLET = 'INDIAWALLET';
    const KLARNA = 'KLARNA';
    const KPS = 'KPS';
    const NETBANKING = 'NETBANKING';
    const PAYMENT_CARD = 'PAYMENT_CARD';
    const PAYMENT_TOKEN = 'PAYMENT_TOKEN';
    const PAYPAL = 'PAYPAL';
    const SEPA = 'SEPA';
    const SOFORT = 'SOFORT';
    const WALLET = 'WALLET';
    const WECHAT_DOMESTIC = 'WECHAT_DOMESTIC';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ALIPAY,
            self::ALIPAY_PAYSECURE_US,
            self::ALIPAY_DOMESTIC,
            self::APM,
            self::CUP_DOMESTIC,
            self::DEBITDE,
            self::EMI,
            self::GIROPAY,
            self::IDEAL,
            self::INDIAWALLET,
            self::KLARNA,
            self::KPS,
            self::NETBANKING,
            self::PAYMENT_CARD,
            self::PAYMENT_TOKEN,
            self::PAYPAL,
            self::SEPA,
            self::SOFORT,
            self::WALLET,
            self::WECHAT_DOMESTIC,
        ];
    }
}


