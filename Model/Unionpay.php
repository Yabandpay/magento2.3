<?php

namespace YaBandPay\Payment\Model;

/**
 * Class UnionPay
 * @package YaBandPay\Payment\Model
 * @description
 * @version 1.0.0
 */
class UnionPay extends AbstractPayment
{
    const CODE = 'yabandpay_unionpay';

    protected $_code = self::CODE;
}
