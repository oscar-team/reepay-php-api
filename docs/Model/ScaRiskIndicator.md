# ScaRiskIndicator

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**delivery_email** | **string** | For Electronic delivery, the email address to which the merchandise was delivered. Must be RFC5322 compliant. | [optional] 
**delivery_timeframe** | **string** | Indicates the merchandise delivery timeframe: &#x60;electronic&#x60; - Electronic Delivery, &#x60;same_day_shipping&#x60; - Same day shipping, &#x60;overnight_shipping&#x60; - Overnight shipping, &#x60;two_day_or_more_shipping&#x60; - Two-day or more shipping | [optional] 
**gift_card_amount** | **int** | For prepaid or gift card purchase, the purchase amount total of prepaid or gift card(s) in major units (for example, USD 123.45 is 123). | [optional] 
**gift_card_count** | **int** | For prepaid or gift card purchase, total count of individual prepaid or gift cards/codes purchased. | [optional] 
**gift_card_currency** | **string** | For prepaid or gift card purchase, currency code of the gift card in [ISO 4217](http://da.wikipedia.org/wiki/ISO_4217) three letter alpha code. | [optional] 
**pre_order_date** | **string** | For a pre-ordered purchase, the expected local date that the merchandise will be available. Local date on the form &#x60;yyyy-MM-dd&#x60; | [optional] 
**pre_order_purchase_indicator** | **string** | Indicates whether cardholder is placing an order for merchandise with a future availability or release date. Either: &#x60;merchandise_available&#x60; or &#x60;future_availability&#x60; | [optional] 
**reorder_items_indicator** | **string** | Indicates whether the cardholder is reordering previously purchased merchandise. Either: &#x60;first_time_ordered&#x60; or &#x60;reordered&#x60; | [optional] 
**shipping_indicator** | **string** | Indicates shipping method chosen for the transaction. The Shipping Indicator code that most accurately describes the cardholder’s specific transaction must be used, not the general business. If one or more items are included in the sale, use the Shipping Indicator code for the physical goods, or if all digital goods, use the Shipping Indicator code that describes the most expensive item. Possible values: &#x60;billing_address&#x60; - Ship to cardholder’s billing address, &#x60;verified&#x60; - Ship to another verified address on file, &#x60;non_billing_address&#x60; - Ship to address that is different than the cardholder’s billing address, &#x60;ship_to_store&#x60; - Pick-up at local store (Store address shall be populated in shipping address fields), &#x60;digital_goods&#x60; - Digital goods (includes online services, electronic gift cards and redemption codes), &#x60;travel_and_event_tickets&#x60; - Travel and Event tickets, not shipped, &#x60;other&#x60; - Other (for example, Gaming, digital services not shipped, emedia subscriptions, etc.) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

