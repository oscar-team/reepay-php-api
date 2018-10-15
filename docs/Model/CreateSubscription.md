# CreateSubscription

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer** | **string** | Customer handle of existing customer. Customer can also be provided in same operation by supplying the parameter `create_customer`. | [optional]
**plan** | **string** | Plan handle |
**amount** | **int** | Optional custom per quantity plan price. If provided the plan price billed for each billing period will be overridden by this price. | [optional]
**quantity** | **int** | Optional quantity of the plan product for this subscription. If not provided the default is the default plan quantity defined for the plan. | [optional]
**test** | **bool** | Test flag. If given it will be verified that the account state matches the intended create state. | [optional]
**handle** | **string** | Per account unique handle for the subscription. Max length 255 with allowable characters [a-zA-Z0-9_.-@]. Must be provided if generate_handle not defined. | [optional]
**source** | **string** | The payment method source if signup method `source`. Either an existing payment method for the customer, e.g. existing card id `ca_...` or a card token `ct_...` generated with [Reepay Token](https://docs.reepay.com/token/) or [Reepay JS Library](https://docs.reepay.com/js/). | [optional]
**signup_method** | **string** | The signup method, how to get payment information from customer, one of the following: `source`, `email`, `link`. The `source` method takes a token (e.g. card token `ct_..`) or a reference to an existing customer payment method (e.g. card `ca_..`). The method `email` will send an email to customer requesting payment information with a link to a hosted page. The method `link` does not do anything but the hosted page link in the subscription object can be provided to the customer as a link to enter payment information. |
**conditional_create** | **bool** | If the subscription is eligible to bill for the first period right away, this option will make the creation conditional on a successful payment of the first invoice. Will require a signup method of `source`. Default is false. | [optional]
**create_customer** | [**\Reepay\Model\CreateCustomer**](CreateCustomer.md) | Create customer and subscription in an atomic operation | [optional]
**plan_version** | **int** | Optional plan version, default is to use newest version of plan | [optional]
**amount_incl_vat** | **bool** | Whether the optional amount is including VAT. Defaults to true. | [optional]
**generate_handle** | **bool** | Auto generate handle on the form sub-[sequence_number] | [optional]
**start_date** | **string** | Date and time on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm` and `yyyy-MM-ddTHH:mm:ss` from which the subscription is eligible to schedule first invoice. If no time part is given start of day will be used. A start date in the past can be used, but no more than one period length in the past. A start date in the past can result in an instant invoice for a past billing period start. Default value is current date and time. | [optional]
**end_date** | **string** | Fixed date and time on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm` and `yyyy-MM-ddTHH:mm:ss` where the subscription will automatically cancel. The subscription will expire at the end of the billing period containing the end date. Default is no fixed end date. | [optional]
**grace_duration** | **int** | A grace duration in seconds from the creation of a subscription where no dunning process is started for a failing invoice. This allows a certain amount of time for the customer to sign up with a payment method. | [optional]
**no_trial** | **bool** | Override plan trial settings and disable trial | [optional]
**no_setup_fee** | **bool** | Override plan setup fee settings and disable fee | [optional]
**subscription_discounts** | [**\Reepay\Model\CreateSubscriptionDiscount[]**](CreateSubscriptionDiscount.md) | Discounts to attach to subscription | [optional]
**coupon_codes** | **string[]** | Coupon codes to redeem for subscription | [optional]
**add_ons** | [**\Reepay\Model\CreateSubscriptionAddOn[]**](CreateSubscriptionAddOn.md) | Add-ons to attach to subscription. The same add-on can only be attached to subscription once unless unique handles are supplied for the subscription add-on. | [optional]
**additional_costs** | [**\Reepay\Model\CreateSubscriptionAdditionalCost[]**](CreateSubscriptionAdditionalCost.md) | Additional costs to add to subscription at creation time | [optional]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


