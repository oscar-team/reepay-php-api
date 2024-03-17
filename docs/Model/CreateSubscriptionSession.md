# CreateSubscriptionSession

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**configuration** | **string** | Optional handle for a checkout configuration defined in the admin app to be used for this session | [optional] 
**locale** | **string** | Optional locale for session. E.g. &#x60;en_GB&#x60;, &#x60;da_DK&#x60;, &#x60;es_ES&#x60;. Defaults to configuration locale or account locale. | [optional] 
**ttl** | **string** | Optional time-to-live duration. The session will expire after the duration from creation, meaning that payment attempts cannot be initiated after this duration. Notice though, that payments initiated within the time-to-live duration might finish after the TTL E.g. MobilePay Online flows. The duration must be given in the following notation: &#x60;PTxS&#x60; - x seconds, &#x60;PTxM&#x60; - x minutes, &#x60;PTxH&#x60; - x hours or &#x60;PxD&#x60; - x days. E.g. PT3H (three hours). The default time-to-live is three months. | [optional] 
**phone** | **string** | Phone number to use for payment methods able to use a prefilled phone number. E.g. MobilePay, Vipps and Swish. If no explicit phone number is defined, the phone number for the customer entity will be used. | [optional] 
**subscription** | **string** | Handle for existing subscription to activate, add payment method to or change payment method for. Either this argument must be provided or &#x60;prepare_subscription&#x60;. | [optional] 
**accept_url** | **string** | If checkout is opened in separate window the customer will be directed to this page after success | [optional] 
**cancel_url** | **string** | If checkout is opened in separate window the customer will be directed to this page if the customer cancels | [optional] 
**payment_methods** | **string[]** | Optional list of payment methods to use for the checkout session. Format: &#x60;&lt;payment_methods&gt; &#x3D; list of &lt;payment_method&gt;&#x60; &#x60;&lt;payment_method&gt;  &#x3D; [sca-|nosca-]&lt;payment_name&gt;&#x60; &#x60;&lt;payment_name&gt;    &#x3D; The id of payment method, e.g. dankort&#x60; See https://docs.reepay.com/reference/checkout-payment-methods for full documentation | [optional] 
**card_on_file** | **string** | Reference to existing card payment method (&#x60;ca_xxx&#x60;) to use instead of having cardholder enter card data. CVV may still be required from cardholder. | [optional] 
**card_on_file_require_cvv** | **bool** | Require cvv from cardholder for card-on-file | [optional] 
**card_on_file_require_exp_date** | **bool** | Require expiration date for card-on-file | [optional] 
**button_text** | **string** | Optional alternative button text. Maximum length 32 characters. | [optional] 
**recurring_average_amount** | **int** | For cost based acquirer agreement selection this argument can be used to define the amount used in calculating the least expensive agreement for future recurring payments. Can only be used for sessions saving a payment method for later use. Must be given in minor unit for currency. | [optional] 
**sca_data** | [**\Reepay\Model\ScaData**](ScaData.md) |  | [optional] 
**session_data** | [**\Reepay\Model\SessionData**](SessionData.md) |  | [optional] 
**payment_method_reference** | **string** | Optional reference given to the created payment method in case a recurring payment method is created by the session. Session id will be used by default if not defined. Max length 64 with allowable characters [a-zA-Z0-9_.-@]. | [optional] 
**account_funding** | **bool** | Indicates that Account Funding Transaction (AFT) is requested. It only can be used for instant settle (i.e. &#x27;settle&#x27; &#x3D; true) | [optional] 
**account_funding_information** | [**\Reepay\Model\AccountFundingInformation**](AccountFundingInformation.md) |  | [optional] 
**agreement_filter** | **string[]** | Optional list of agreement ids to filter which agreements will be used for card payments. | [optional] 
**offline_agreement_filter** | **string[]** | Optional list of offline agreement handles to filter which options are shown to the consumer. | [optional] 
**allowed_ip** | **string** | Optional IP address to restrict the use of the session to | [optional] 
**prepare_subscription** | [**\Reepay\Model\CreatePreparedSubscription**](CreatePreparedSubscription.md) |  | [optional] 
**show_terms** | **bool** | Toggle whether terms should be shown and acceptance required. If not defined the default is to show terms if no payment method has previously been added. Set this option to false if terms have already been showed in own system. | [optional] 
**show_subscription_details** | **bool** | Toggle whether to show subscription details. Default is to show details. Set this option to false if subscription details have already been shown in own system. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

