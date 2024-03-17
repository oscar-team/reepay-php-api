# VippsRecurringMerchantOnboarding

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**orgno** | **string** | Organisation number of the merchant for whom the partner is submitting the product order. Only Norwegian organization numbers are allowed (for now). | 
**sales_unit_name** | **string** | The name of the point of sale that will be shown to the users in the Vipps app and on the Vipps landing page. The sales unit name can be edited later on portal.vipps.no. | [optional] 
**sales_unit_logo_url** | **string** | Merchant logo url. The logo will be displayed in the Vipps app, both when paying and on receipts and also in Vipps landing page. The logo must be in PNG (Portable Network Graphics) format. Square images are recommended. The longest side can not be more than 1000 pixels. The minimum size is 100 x 100 pixels. Images not matching the above criteria will not be shown to the merchant in the merchant portal. The logo can be edited later on portal.vipps.no. | [optional] 
**settlement_account_number** | **string** | The bank account number belonging to the organisation that will be used for settlement. The bank account must be owned by the merchant. BBAN (not IBAN) format. | [optional] 
**price_package_id** | **string** | Only for productType: VIPPS_PA_NETT and VIPPS_I_KASSA. The id for one of the price packages that are registered for the partner in the Vipps system. Please note: This is a UUID, not the 3-digit key. If this field is not provided, the merchant must select the price manually. | [optional] 
**product_type** | **string** | The type of product ordered for the merchant. | 
**product_use_case** | **string** | Where will sales take place? A website? A website that is not yet launched, so a test website must be used? A native app? Something else? | [optional] 
**annual_turnover** | **int** | Annual turnover for the merchant in NOK (without øre). | [optional] 
**intended_purpose** | **string** | Description of the product or products that will be sold. Please include all information relevant to processing the product order, such as including \&quot;POS integration\&quot; to indicate that the sales unit needs skipLandingPage. | [optional] 
**website_url** | **string** | For &#x27;WebsiteWithTest&#x27; or &#x27;Website&#x27;. The URL to the merchant&#x27;s website. | [optional] 
**website_terms_url** | **string** | The URL that points to the merchants sales terms. | [optional] 
**test_website_url** | **string** | For &#x27;WebsiteWithTest&#x27;. The URL to the merchants test website | [optional] 
**test_website_username** | **string** | For &#x27;WebsiteWithTest&#x27;. Username to log in on the test website | [optional] 
**test_website_password** | **string** | For &#x27;WebsiteWithTest&#x27;. Password to log in on the test website | [optional] 
**gift_card_is_sales_percentage_less_than_ten** | **bool** | The percentage the giftcard sales consists of. Either &#x27;Less than 10%&#x27; or &#x27;10% and more&#x27; | [optional] 
**gift_card_validity_duration** | **string** | If &#x27;giftCardIsSalesPercentageLessThanTen&#x27; is true: For how long is the gift card valid after purchase? | [optional] 
**gift_card_turnover_share** | **string** | If &#x27;giftCardIsSalesPercentageLessThanTen&#x27; is true: What percentage of total sales are giftcards? | [optional] 
**membership_turnover_share** | **string** | Estimated turnover share of membership sales in percentage | [optional] 
**membership_validity** | **string** | Is the membership valid from the current calendar year or 1 year from payment? | [optional] 
**membership_period_distribution** | **string** | Distribution of memberships in different periods that is being sold | [optional] 
**subscription_turnover_share** | **string** | Estimated turnover share of subscription sales in percentage | [optional] 
**subscription_period_distribution** | **string** | Distribution of subscriptions in different periods that is being sold | [optional] 
**course_turnover_share** | **string** | Estimated turnover share of course sales in percentage | [optional] 
**course_time_before_order** | **string** | How long in advance it is common to order and pay for a course | [optional] 
**course_period** | **string** | How long the duration of a course usually is | [optional] 
**course_is_online_course_offered** | **bool** | True if there are online courses offered | [optional] 
**course_online_accessible_time** | **string** | How long after purchase does a user have access to the course | [optional] 
**ticket_turnover_share** | **string** | Estimated turnover share of ticket sales in percentage | [optional] 
**ticket_prepurchase_time** | **string** | How long in advance of an event it is common to order and pay for a ticket | [optional] 
**rent_turnover_share** | **string** | Estimated turnover share of rent sales in percentage | [optional] 
**rent_prepurchase_time** | **string** | How long in advance of the rental period it is common to order and pay | [optional] 
**rent_average_rental_duration** | **string** | How long the average rental period is | [optional] 
**prepaid_turnover_share** | **string** | Estimated turnover share of prepaid services sales in percentage | [optional] 
**prepaid_prepurchase_time** | **string** | How long in advance of a service it is common to order and pay | [optional] 
**accepts_donation** | **bool** | true if merchant will receive donation through Vipps | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

