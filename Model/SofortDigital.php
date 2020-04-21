<?php

namespace YaBandPay\Payment\Model;

/**
 * Class AliPay
 * @package YaBandPay\Payment\Model
 * @description
 * @version 1.0.0
 */
class SofortDigital extends AbstractPayment
{
    const CODE = 'yabandpay_sofort_digital';

    protected $_code = self::CODE;
}
