# ChangedSubscription

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**handle** | **string** | Per account unique handle for subscription | 
**customer** | **string** | Customer handle | 
**plan** | **string** | Subscription plan handle | 
**state** | **string** | State of the subscription, one of the following: &#x60;active&#x60;, &#x60;expired&#x60;, &#x60;on_hold&#x60; or &#x60;pending&#x60;. Active subscriptions can be cancelled and will expire at the end of the current billing period, or later depending on optional notice and fixation periods, this can be checked using the &#x60;is_cancelled&#x60; parameter and &#x60;expires&#x60;. | 
**test** | **bool** | Test flag | 
**amount** | **int** | Optional custom plan price. If defined the plan price billed for each billing period will be overridden by this price. | [optional] 
**quantity** | **int** | Quantity of the plan product for this subscription. | 
**expires** | [**\DateTime**](\DateTime.md) | Fixed date when the subscription will expire because of cancellation. In [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional] 
**reactivated** | [**\DateTime**](\DateTime.md) | Date when the subscription was reactivated from on hold. [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional] 
**timezone** | **string** | Time zone for the subscription as standard time zone id. See [Wikipedia](http://en.wikipedia.org/wiki/List_of_tz_database_time_zones) | 
**created** | [**\DateTime**](\DateTime.md) | Date when the subscription was created. In [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | 
**activated** | [**\DateTime**](\DateTime.md) | Date when the subscription was activated. Will only differ from created in a two step prepared -&gt; activated subscription create scenario. In [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional] 
**renewing** | **bool** | If the subscription renews at current period end. Also true for subscriptions with manual scheduling. | 
**coupons** | **string[]** | List of coupon handles redeemed for the subscription | [optional] 
**currency** | **string** | Currency for the subscription in [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) three letter alpha code | 
**plan_version** | **int** | Subscription plan version | 
**amount_incl_vat** | **bool** | If optional custom plan price this parameter tells whether the amount is including VAT | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) | Date and time from which the subscription is eligible to schedule invoices. Either from create or from the latest reactivate or subscription change. In [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | 
**end_date** | [**\DateTime**](\DateTime.md) | Fixed end date and time. In [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional] 
**grace_duration** | **int** | Grace duration in seconds from the creation of a subscription where no dunning process is started for a failing invoice. This allows a certain amount of time for the customer to sign up with a payment method. | [optional] 
**current_period_start** | [**\DateTime**](\DateTime.md) | Start date and time for the current billing period. In [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional] 
**next_period_start** | [**\DateTime**](\DateTime.md) | Start date and time for the next billing period, and also end date and time for the current billing period. Is also the date and time for next invoice if the subscription is renewing. In ISO-8601 extended offset date-time format. | [optional] 
**first_period_start** | [**\DateTime**](\DateTime.md) | Start date and time for the first ever billing period. In ISO-8601 extended offset date-time format. | [optional] 
**last_period_start** | [**\DateTime**](\DateTime.md) | Start date and time for the previous billing period. In [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional] 
**trial_start** | [**\DateTime**](\DateTime.md) | Start date and time of free trial period. In ISO-8601 extended offset date-time format. | [optional] 
**trial_end** | [**\DateTime**](\DateTime.md) | End date and time of free trial period. In ISO-8601 extended offset date-time format. | [optional] 
**is_cancelled** | **bool** | Whether the subscription has been cancelled. Cancelled subscriptions will expire at the end of the current billing period. | 
**in_trial** | **bool** | Whether the subscription is in its trial period, or if the subscription will start a trial period at a start date in the future. See &#x60;has_started&#x60; to determine if the actual trial period has started or not. | 
**has_started** | **bool** | If subscription has a later start date, this parameter tells if the subscription has started. Use this in connection with state to determine if a subscription is active. | 
**renewal_count** | **int** | Number of renewals for the subscription (number of invoices) | 
**cancelled_date** | [**\DateTime**](\DateTime.md) | Date when the subscription was cancelled. In [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional] 
**expired_date** | [**\DateTime**](\DateTime.md) | Date when the subscription expired. [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional] 
**expire_reason** | **string** | Reason for expire. Can be &#x60;ondemand&#x60;, &#x60;cancelled&#x60;, &#x60;dunning&#x60; or &#x60;fixed&#x60; | [optional] 
**on_hold_date** | [**\DateTime**](\DateTime.md) | Date when the subscription was put on hold. [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional] 
**on_hold_reason** | **string** | Reason for on hold. Can be &#x60;ondemand&#x60; or &#x60;dunning&#x60; | [optional] 
**payment_method_added** | **bool** | Whether the customer at some point has added payment information to the subscription | 
**scheduled_plan_change** | **string** | Deprecated - see &#x60;pending_change&#x60;. If set, a subscription plan change has been scheduled to follow the next renewal. The value is the subscription plan handle to update to. | [optional] 
**reminder_email_sent** | [**\DateTime**](\DateTime.md) | If defined the date a reminder email was sent for the current billing period. In [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional] 
**failed_invoices** | **int** | Number of failed invoices for this subscription | 
**failed_amount** | **int** | Summed amount for failed invoices | 
**cancelled_invoices** | **int** | Number of cancelled invoices for this subscription | 
**cancelled_amount** | **int** | Summed amount for cancelled invoices | 
**pending_invoices** | **int** | Number of pending invoices for this subscription | 
**pending_amount** | **int** | Summed amount for pending invoices | 
**dunning_invoices** | **int** | Number of dunning invoices for this subscription | 
**dunning_amount** | **int** | Summed amount for dunning invoices | 
**settled_invoices** | **int** | Number of settled invoices for this subscription | 
**settled_amount** | **int** | Summed settled amount | 
**refunded_amount** | **int** | Summed refunded amount | 
**pending_additional_costs** | **int** | Number of pending additional costs | 
**pending_additional_cost_amount** | **int** | Summed amount of pending additional costs incl vat | 
**transferred_additional_costs** | **int** | Number of additional costs that have been applied to invoices | 
**transferred_additional_cost_amount** | **int** | Summed amount of additional costs that have been applied to invoices | 
**pending_credits** | **int** | Number of credits that have not fully been applied to invoices | 
**pending_credit_amount** | **int** | Summed credit amount not yet applied to invoices | 
**transferred_credits** | **int** | Number of credits that have fully been applied to invoices | 
**transferred_credit_amount** | **int** | Summed credit amount that have been applied to invoices | 
**hosted_page_links** | [**\Reepay\Model\SubscriptionLinks**](SubscriptionLinks.md) |  | 
**subscription_discounts** | **string[]** | List of subscription discounts handles attached to subscription | [optional] 
**pending_change** | [**\Reepay\Model\SubscriptionChange**](SubscriptionChange.md) |  | [optional] 
**subscription_changes** | [**\Reepay\Model\SubscriptionChange[]**](SubscriptionChange.md) | List of subscription changes both at most one pending and previously applied | [optional] 
**subscription_add_ons** | **string[]** | List of subscription add-on handles attached to subscription | [optional] 
**active_payment_methods** | **string[]** | A list of active payment method ids. This list will at most contain 1 item. | [optional] 
**change_journal** | [**\Reepay\Model\SubscriptionChangeJournal**](SubscriptionChangeJournal.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

