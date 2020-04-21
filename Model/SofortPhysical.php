<?php

namespace YaBandPay\Payment\Model;

/**
 * Class AliPay
 * @package YaBandPay\Payment\Model
 * @description
 * @version 1.0.0
 */
class SofortPhysical extends AbstractPayment
{
    const CODE = 'yabandpay_sofort_physical';

    protected $_code = self::CODE;
}
