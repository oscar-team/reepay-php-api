# InvoiceCreditNoteListDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**size** | **int** | Page size used in paginated list | 
**count** | **int** | Number of elements in current page. If less than page size it is the last page. | 
**to** | **string** | Local date and time range used as to (exclusive) | 
**from** | **string** | Local date and time range used as from (inclusive) | 
**content** | [**\Reepay\Model\InvoiceCreditNoteV2[]**](InvoiceCreditNoteV2.md) | List of credit notes for current page | 
**range** | **string** | Time and date attribute used to time limit. Only &#x60;created&#x60; could be present. | 
**next_page_token** | **string** | Pagination token to use to get the next page. Notice that page size and range should be the same for all page requests. If not present the last page has been reached. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

