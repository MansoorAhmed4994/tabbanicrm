<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account\Call;

use Twilio\Options;
use Twilio\Values;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 */
abstract class PaymentOptions {
    /**
     * @param string $bankAccountType Type of bank account if payment source is ACH.
     * @param string $chargeAmount A positive decimal value less than 1,000,000 to
     *                             charge against the credit card or bank account.
     * @param string $currency The currency of the `charge_amount`.
     * @param string $description The description can be used to provide more
     *                            details regarding the transaction.
     * @param string $input A list of inputs that should be accepted. Currently
     *                      only `dtmf` is supported.
     * @param int $minPostalCodeLength A positive integer that is used to validate
     *                                 the length of the `PostalCode` inputted by
     *                                 the user.
     * @param array $parameter A single level JSON string that is required when
     *                         accepting certain information specific only to ACH
     *                         payments.
     * @param string $paymentConnector This is the unique name corresponding to the
     *                                 Payment Gateway Connector installed in the
     *                                 Twilio Add-ons.
     * @param string $paymentMethod Type of payment being captured.
     * @param bool $postalCode Indicates whether the credit card PostalCode (zip
     *                         code) is a required piece of payment information
     *                         that must be provided by the caller.
     * @param bool $securityCode Indicates whether the credit card security code is
     *                           a required piece of payment information that must
     *                           be provided by the caller.
     * @param int $timeout The number of seconds that <Pay> should wait for the
     *                     caller to press a digit between each subsequent digit,
     *                     after the first one, before moving on to validate the
     *                     digits captured.
     * @param string $tokenType Indicates whether the payment method should be
     *                          tokenized as a `one-time` or `reusable` token.
     * @param string $validCardTypes Credit card types separated by space that Pay
     *                               should accept.
     * @return CreatePaymentOptions Options builder
     */
    public static function create(string $bankAccountType = Values::NONE, string $chargeAmount = Values::NONE, string $currency = Values::NONE, string $description = Values::NONE, string $input = Values::NONE, int $minPostalCodeLength = Values::NONE, array $parameter = Values::ARRAY_NONE, string $paymentConnector = Values::NONE, string $paymentMethod = Values::NONE, bool $postalCode = Values::NONE, bool $securityCode = Values::NONE, int $timeout = Values::NONE, string $tokenType = Values::NONE, string $validCardTypes = Values::NONE): CreatePaymentOptions {
        return new CreatePaymentOptions($bankAccountType, $chargeAmount, $currency, $description, $input, $minPostalCodeLength, $parameter, $paymentConnector, $paymentMethod, $postalCode, $securityCode, $timeout, $tokenType, $validCardTypes);
    }

    /**
     * @param string $capture The piece of payment information that you wish the
     *                        caller to enter.
     * @param string $status Indicates whether the current payment session should
     *                       be cancelled or completed.
     * @return UpdatePaymentOptions Options builder
     */
    public static function update(string $capture = Values::NONE, string $status = Values::NONE): UpdatePaymentOptions {
        return new UpdatePaymentOptions($capture, $status);
    }
}

class CreatePaymentOptions extends Options {
    /**
     * @param string $bankAccountType Type of bank account if payment source is ACH.
     * @param string $chargeAmount A positive decimal value less than 1,000,000 to
     *                             charge against the credit card or bank account.
     * @param string $currency The currency of the `charge_amount`.
     * @param string $description The description can be used to provide more
     *                            details regarding the transaction.
     * @param string $input A list of inputs that should be accepted. Currently
     *                      only `dtmf` is supported.
     * @param int $minPostalCodeLength A positive integer that is used to validate
     *                                 the length of the `PostalCode` inputted by
     *                                 the user.
     * @param array $parameter A single level JSON string that is required when
     *                         accepting certain information specific only to ACH
     *                         payments.
     * @param string $paymentConnector This is the unique name corresponding to the
     *                                 Payment Gateway Connector installed in the
     *                                 Twilio Add-ons.
     * @param string $paymentMethod Type of payment being captured.
     * @param bool $postalCode Indicates whether the credit card PostalCode (zip
     *                         code) is a required piece of payment information
     *                         that must be provided by the caller.
     * @param bool $securityCode Indicates whether the credit card security code is
     *                           a required piece of payment information that must
     *                           be provided by the caller.
     * @param int $timeout The number of seconds that <Pay> should wait for the
     *                     caller to press a digit between each subsequent digit,
     *                     after the first one, before moving on to validate the
     *                     digits captured.
     * @param string $tokenType Indicates whether the payment method should be
     *                          tokenized as a `one-time` or `reusable` token.
     * @param string $validCardTypes Credit card types separated by space that Pay
     *                               should accept.
     */
    public function __construct(string $bankAccountType = Values::NONE, string $chargeAmount = Values::NONE, string $currency = Values::NONE, string $description = Values::NONE, string $input = Values::NONE, int $minPostalCodeLength = Values::NONE, array $parameter = Values::ARRAY_NONE, string $paymentConnector = Values::NONE, string $paymentMethod = Values::NONE, bool $postalCode = Values::NONE, bool $securityCode = Values::NONE, int $timeout = Values::NONE, string $tokenType = Values::NONE, string $validCardTypes = Values::NONE) {
        $this->options['bankAccountType'] = $bankAccountType;
        $this->options['chargeAmount'] = $chargeAmount;
        $this->options['currency'] = $currency;
        $this->options['description'] = $description;
        $this->options['input'] = $input;
        $this->options['minPostalCodeLength'] = $minPostalCodeLength;
        $this->options['parameter'] = $parameter;
        $this->options['paymentConnector'] = $paymentConnector;
        $this->options['paymentMethod'] = $paymentMethod;
        $this->options['postalCode'] = $postalCode;
        $this->options['securityCode'] = $securityCode;
        $this->options['timeout'] = $timeout;
        $this->options['tokenType'] = $tokenType;
        $this->options['validCardTypes'] = $validCardTypes;
    }

    /**
     * Type of bank account if payment source is ACH. One of `consumer-checking`, `consumer-savings`, or `commercial-checking`. The default value is `consumer-checking`.
     *
     * @param string $bankAccountType Type of bank account if payment source is ACH.
     * @return $this Fluent Builder
     */
    public function setBankAccountType(string $bankAccountType): self {
        $this->options['bankAccountType'] = $bankAccountType;
        return $this;
    }

    /**
     * A positive decimal value less than 1,000,000 to charge against the credit card or bank account. Default currency can be overwritten with `currency` field. Leave blank or set to 0 to tokenize.
     *
     * @param string $chargeAmount A positive decimal value less than 1,000,000 to
     *                             charge against the credit card or bank account.
     * @return $this Fluent Builder
     */
    public function setChargeAmount(string $chargeAmount): self {
        $this->options['chargeAmount'] = $chargeAmount;
        return $this;
    }

    /**
     * The currency of the `charge_amount`, formatted as [ISO 4127](http://www.iso.org/iso/home/standards/currency_codes.htm) format. The default value is `USD` and all values allowed from the <Pay> Connector are accepted.
     *
     * @param string $currency The currency of the `charge_amount`.
     * @return $this Fluent Builder
     */
    public function setCurrency(string $currency): self {
        $this->options['currency'] = $currency;
        return $this;
    }

    /**
     * The description can be used to provide more details regarding the transaction. This information is submitted along with the payment details to the Payment Connector which are then posted on the transactions.
     *
     * @param string $description The description can be used to provide more
     *                            details regarding the transaction.
     * @return $this Fluent Builder
     */
    public function setDescription(string $description): self {
        $this->options['description'] = $description;
        return $this;
    }

    /**
     * A list of inputs that should be accepted. Currently only `dtmf` is supported. All digits captured during a pay session are redacted from the logs.
     *
     * @param string $input A list of inputs that should be accepted. Currently
     *                      only `dtmf` is supported.
     * @return $this Fluent Builder
     */
    public function setInput(string $input): self {
        $this->options['input'] = $input;
        return $this;
    }

    /**
     * A positive integer that is used to validate the length of the `PostalCode` inputted by the user. User must enter this many digits.
     *
     * @param int $minPostalCodeLength A positive integer that is used to validate
     *                                 the length of the `PostalCode` inputted by
     *                                 the user.
     * @return $this Fluent Builder
     */
    public function setMinPostalCodeLength(int $minPostalCodeLength): self {
        $this->options['minPostalCodeLength'] = $minPostalCodeLength;
        return $this;
    }

    /**
     * A single level JSON string that is required when accepting certain information specific only to ACH payments. The information that has to be included here depends on the <Pay> Connector. [Read more](https://www.twilio.com/console/voice/pay-connectors).
     *
     * @param array $parameter A single level JSON string that is required when
     *                         accepting certain information specific only to ACH
     *                         payments.
     * @return $this Fluent Builder
     */
    public function setParameter(array $parameter): self {
        $this->options['parameter'] = $parameter;
        return $this;
    }

    /**
     * This is the unique name corresponding to the Payment Gateway Connector installed in the Twilio Add-ons. Learn more about [<Pay> Connectors](https://www.twilio.com/console/voice/pay-connectors). The default value is `Default`.
     *
     * @param string $paymentConnector This is the unique name corresponding to the
     *                                 Payment Gateway Connector installed in the
     *                                 Twilio Add-ons.
     * @return $this Fluent Builder
     */
    public function setPaymentConnector(string $paymentConnector): self {
        $this->options['paymentConnector'] = $paymentConnector;
        return $this;
    }

    /**
     * Type of payment being captured. One of `credit-card` or `ach-debit`. The default value is `credit-card`.
     *
     * @param string $paymentMethod Type of payment being captured.
     * @return $this Fluent Builder
     */
    public function setPaymentMethod(string $paymentMethod): self {
        $this->options['paymentMethod'] = $paymentMethod;
        return $this;
    }

    /**
     * Indicates whether the credit card postal code (zip code) is a required piece of payment information that must be provided by the caller. The default is `true`.
     *
     * @param bool $postalCode Indicates whether the credit card PostalCode (zip
     *                         code) is a required piece of payment information
     *                         that must be provided by the caller.
     * @return $this Fluent Builder
     */
    public function setPostalCode(bool $postalCode): self {
        $this->options['postalCode'] = $postalCode;
        return $this;
    }

    /**
     * Indicates whether the credit card security code is a required piece of payment information that must be provided by the caller. The default is `true`.
     *
     * @param bool $securityCode Indicates whether the credit card security code is
     *                           a required piece of payment information that must
     *                           be provided by the caller.
     * @return $this Fluent Builder
     */
    public function setSecurityCode(bool $securityCode): self {
        $this->options['securityCode'] = $securityCode;
        return $this;
    }

    /**
     * The number of seconds that <Pay> should wait for the caller to press a digit between each subsequent digit, after the first one, before moving on to validate the digits captured. The default is `5`, maximum is `600`.
     *
     * @param int $timeout The number of seconds that <Pay> should wait for the
     *                     caller to press a digit between each subsequent digit,
     *                     after the first one, before moving on to validate the
     *                     digits captured.
     * @return $this Fluent Builder
     */
    public function setTimeout(int $timeout): self {
        $this->options['timeout'] = $timeout;
        return $this;
    }

    /**
     * Indicates whether the payment method should be tokenized as a `one-time` or `reusable` token. The default value is `reusable`. Do not enter a charge amount when tokenizing. If a charge amount is entered, the payment method will be charged and not tokenized.
     *
     * @param string $tokenType Indicates whether the payment method should be
     *                          tokenized as a `one-time` or `reusable` token.
     * @return $this Fluent Builder
     */
    public function setTokenType(string $tokenType): self {
        $this->options['tokenType'] = $tokenType;
        return $this;
    }

    /**
     * Credit card types separated by space that Pay should accept. The default value is `visa mastercard amex`
     *
     * @param string $validCardTypes Credit card types separated by space that Pay
     *                               should accept.
     * @return $this Fluent Builder
     */
    public function setValidCardTypes(string $validCardTypes): self {
        $this->options['validCardTypes'] = $validCardTypes;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Api.V2010.CreatePaymentOptions ' . $options . ']';
    }
}

class UpdatePaymentOptions extends Options {
    /**
     * @param string $capture The piece of payment information that you wish the
     *                        caller to enter.
     * @param string $status Indicates whether the current payment session should
     *                       be cancelled or completed.
     */
    public function __construct(string $capture = Values::NONE, string $status = Values::NONE) {
        $this->options['capture'] = $capture;
        $this->options['status'] = $status;
    }

    /**
     * The piece of payment information that you wish the caller to enter. Must be one of `payment-card-number`, `expiration-date`, `security-code`, `postal-code`, `bank-routing-number`, or `bank-account-number`.
     *
     * @param string $capture The piece of payment information that you wish the
     *                        caller to enter.
     * @return $this Fluent Builder
     */
    public function setCapture(string $capture): self {
        $this->options['capture'] = $capture;
        return $this;
    }

    /**
     * Indicates whether the current payment session should be cancelled or completed. When `cancel` the payment session is cancelled. When `complete`, Twilio sends the payment information to the selected <Pay> connector for processing.
     *
     * @param string $status Indicates whether the current payment session should
     *                       be cancelled or completed.
     * @return $this Fluent Builder
     */
    public function setStatus(string $status): self {
        $this->options['status'] = $status;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Api.V2010.UpdatePaymentOptions ' . $options . ']';
    }
}