# ScheduledTransactionDetail

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | 
**dateFirst** | [**\DateTime**](\DateTime.md) | The first date for which the Scheduled Transaction was scheduled. | 
**dateNext** | [**\DateTime**](\DateTime.md) | The next date for which the Scheduled Transaction is scheduled. | 
**frequency** | **string** |  | 
**amount** | **float** | The scheduled transaction amount in milliunits format | 
**memo** | **string** |  | 
**flagColor** | **string** | The scheduled transaction flag | 
**accountId** | **string** |  | 
**payeeId** | **string** |  | 
**categoryId** | **string** |  | 
**transferAccountId** | **string** | If a transfer, the account_id which the scheduled transaction transfers to | 
**accountName** | **string** |  | 
**payeeName** | **string** |  | 
**categoryName** | **string** |  | 
**subtransactions** | [**\YNAB\Model\ScheduledSubTransaction[]**](ScheduledSubTransaction.md) | If a split scheduled transaction, the subtransactions. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


