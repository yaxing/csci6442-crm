/**
 * This is a generated class and is not intended for modification.  To customize behavior
 * of this service wrapper you may modify the generated sub-class of this class - AccountpersonService.as.
 */
package services.accountpersonservice
{
import com.adobe.fiber.core.model_internal;
import com.adobe.fiber.services.wrapper.RemoteObjectServiceWrapper;
import com.adobe.fiber.valueobjects.IValueObject;
import com.adobe.serializers.utility.TypeUtility;
import mx.collections.ListCollectionView;
import mx.data.DataManager;
import mx.data.IManaged;
import mx.data.ItemReference;
import mx.data.ManagedAssociation;
import mx.data.ManagedOperation;
import mx.data.ManagedQuery;
import mx.data.RPCDataManager;
import mx.data.errors.DataServiceError;
import mx.rpc.AbstractOperation;
import mx.rpc.AsyncToken;
import mx.rpc.remoting.Operation;
import mx.rpc.remoting.RemoteObject;
import valueObjects.Account_person;

import mx.collections.ItemResponder;
import com.adobe.fiber.valueobjects.AvailablePropertyIterator;

[ExcludeClass]
internal class _Super_AccountpersonService extends com.adobe.fiber.services.wrapper.RemoteObjectServiceWrapper
{
    private var _account_personRPCDataManager : mx.data.RPCDataManager;
    private var managersArray : Array = new Array();

    public const DATA_MANAGER_ACCOUNT_PERSON : String = "Account_person";

    public function getDataManager(dataManagerName:String) : mx.data.RPCDataManager
    {
        switch (dataManagerName)
        {
             case (DATA_MANAGER_ACCOUNT_PERSON):
                return _account_personRPCDataManager;
            default:
                return null;
        }
    }

    /**
     * Commit all of the pending changes for this DataService, as well as all of the pending changes of all DataServices
     * sharing the same DataStore.  By default, a DataService shares the same DataStore with other DataServices if they have 
     * managed association properties and share the same set of channels. 
     *
     * @see mx.data.DataManager
     * @see mx.data.DataStore
     *
     * @param itemsOrCollections:Array This is an optional parameter which defaults to null when
     *  you want to commit all pending changes.  If you want to commit a subset of the pending
     *  changes use this argument to specify a list of managed ListCollectionView instances
     *  and/or managed items.  ListCollectionView objects are most typically ArrayCollections
     *  you have provided to your fill method.  The items appropriate for this method are
     *  any managed version of the item.  These are any items you retrieve from getItem, createItem
     *  or using the getItemAt method from a managed collection.  Only changes for the
     *  items defined by any of the values in this array will be committed.
     *
     * @param cascadeCommit if true, also commit changes made to any associated
     *  items supplied in this list.
     *
     *  @return AsyncToken that is returned in <code>call</code> property of
     *  either the <code>ResultEvent.RESULT</code> or in the
     *  <code>FaultEvent.FAULT</code>.
     *  Custom data can be attached to this object and inspected later
     *  during the event handling phase.  If no changes have been made
     *  to the relevant items, null is returned instead of an AsyncToken.
     */
    public function commit(itemsOrCollections:Array=null, cascadeCommit:Boolean=false):mx.rpc.AsyncToken
    {
        return _account_personRPCDataManager.dataStore.commit(itemsOrCollections, cascadeCommit);
    }

    /**
     * Reverts all pending (uncommitted) changes for this DataService, as well as all of the pending changes of all DataServics
     * sharing the same DataStore.  By default, a DataService shares the same DataStore with other DataServices if they have 
     * managed association properties and share the same set of channels. 
     *
     * In case you specify a value for itemsOrCollections:Array parameter, only pending (uncommitted) changes for the specified 
     * managed items or collections will be reverted.
     *
     * @see mx.data.DataManager
     * @see mx.data.DataStore
     * 
     * @param itemsOrCollections:Array This is an optional parameter which defaults to null 
     * when you want to revert all pending (uncommitted) changes for all DataServices
     * managed by this DataStore. If you want to revert a subset of the pending changes use 
     * this argument to specify a array of managed items or collections
     *
     * @return true if any changes were reverted.
     * @throws DataServiceError if the passed in array contains non-managed items or collections
     *  
     */
    public function revertChanges(itemsOrCollections:Array=null):Boolean
    {
        if (itemsOrCollections == null)
        {
            // Revert all changes
            return _account_personRPCDataManager.dataStore.revertChanges();
        }
        else
        {
            // Revert passed in items
            var anyChangeItemReverted:Boolean = false;

            // Iterate over array and revert managed item or collection as the case may be
            for each (var changeItem:Object in itemsOrCollections)
            {
                if (changeItem is com.adobe.fiber.valueobjects.IValueObject)
                {
                    var dataMgr:mx.data.DataManager = getDataManager(changeItem._model.getEntityName());
                    anyChangeItemReverted ||= dataMgr.revertChanges(mx.data.IManaged(changeItem))
                }
                else if (changeItem is mx.collections.ListCollectionView)
                {
                    anyChangeItemReverted ||= _account_personRPCDataManager.dataStore.revertChangesForCollection(mx.collections.ListCollectionView(changeItem));
                }
                else
                {
                    throw new mx.data.errors.DataServiceError("revertChanges called on array that contains non-managed items or collections");
                }
            }
            return anyChangeItemReverted;
        }
    }

    // Constructor
    public function _Super_AccountpersonService()
    {
        // initialize service control
        _serviceControl = new mx.rpc.remoting.RemoteObject();

        // initialize RemoteClass alias for all entities returned by functions of this service
        valueObjects.Account_person._initRemoteClassAlias();

        var operations:Object = new Object();
        var operation:mx.rpc.remoting.Operation;

        operation = new mx.rpc.remoting.Operation(null, "getAllAccount_person");
         operation.resultElementType = valueObjects.Account_person;
        operations["getAllAccount_person"] = operation;
        operation = new mx.rpc.remoting.Operation(null, "getAccount_personByID");
         operation.resultType = valueObjects.Account_person;
        operations["getAccount_personByID"] = operation;
        operation = new mx.rpc.remoting.Operation(null, "createAccount_person");
         operation.resultType = int;
        operations["createAccount_person"] = operation;
        operation = new mx.rpc.remoting.Operation(null, "updateAccount_person");
        operations["updateAccount_person"] = operation;
        operation = new mx.rpc.remoting.Operation(null, "deleteAccount_person");
        operations["deleteAccount_person"] = operation;
        operation = new mx.rpc.remoting.Operation(null, "count");
         operation.resultType = int;
        operations["count"] = operation;
        operation = new mx.rpc.remoting.Operation(null, "getAccount_person_paged");
         operation.resultElementType = valueObjects.Account_person;
        operations["getAccount_person_paged"] = operation;
        operation = new mx.rpc.remoting.Operation(null, "getAccount_personByParentAccountID");
         operation.resultElementType = valueObjects.Account_person;
        operations["getAccount_personByParentAccountID"] = operation;

        _serviceControl.operations = operations;
        _serviceControl.convertResultHandler = com.adobe.serializers.utility.TypeUtility.convertResultHandler;
        _serviceControl.source = "AccountpersonService";
        _serviceControl.endpoint = "gateway.php";
        destination = "AccountpersonService";

        var managedAssociation : mx.data.ManagedAssociation;
        var managedAssocsArray : Array;
        // initialize Account_person data manager
        _account_personRPCDataManager = new mx.data.RPCDataManager();
        managersArray.push(_account_personRPCDataManager);

        managedAssocsArray = new Array();

        _account_personRPCDataManager.destination = "account_personRPCDataManager";
        _account_personRPCDataManager.service = _serviceControl;        
        _account_personRPCDataManager.identities =  "account_person_id";      
        _account_personRPCDataManager.itemClass = valueObjects.Account_person; 



        var dmOperation : mx.data.ManagedOperation;
        var dmQuery : mx.data.ManagedQuery;

        dmQuery = new mx.data.ManagedQuery("getAccount_person_paged");
        dmQuery.propertySpecifier = "account_person_id,user_pwd,user_name,first_name,account_person_title,parent_account,last_name";
        dmQuery.countOperation = "count";
        dmQuery.pagingEnabled = true;
        dmQuery.positionalPagingParameters = true;
        dmQuery.parameters = "startIndex,numItems";
        _account_personRPCDataManager.addManagedOperation(dmQuery);

        dmQuery = new mx.data.ManagedQuery("getAllAccount_person");
        dmQuery.propertySpecifier = "account_person_id,user_pwd,user_name,first_name,account_person_title,parent_account,last_name";
        dmQuery.parameters = "";
        _account_personRPCDataManager.addManagedOperation(dmQuery);

        dmOperation = new mx.data.ManagedOperation("updateAccount_person", "update");
        dmOperation.parameters = "item";
        _account_personRPCDataManager.addManagedOperation(dmOperation);     

        dmOperation = new mx.data.ManagedOperation("createAccount_person", "create");
        dmOperation.parameters = "item";
        _account_personRPCDataManager.addManagedOperation(dmOperation);     

        dmOperation = new mx.data.ManagedOperation("getAccount_personByID", "get");
        dmOperation.parameters = "account_person_id";
        _account_personRPCDataManager.addManagedOperation(dmOperation);     

        dmQuery = new mx.data.ManagedQuery("getAccount_personByParentAccountID");
        dmQuery.propertySpecifier = "account_person_id,parent_account,account_person_title,first_name,last_name,user_name,user_pwd";
        dmQuery.parameters = "itemID";
        _account_personRPCDataManager.addManagedOperation(dmQuery);

        dmOperation = new mx.data.ManagedOperation("deleteAccount_person", "delete");
        dmOperation.parameters = "id";
        _account_personRPCDataManager.addManagedOperation(dmOperation);     

        _serviceControl.managers = managersArray;

         model_internal::initialize();
    }

    /**
      * This method is a generated wrapper used to call the 'getAllAccount_person' operation. It returns an mx.rpc.AsyncToken whose 
      * result property will be populated with the result of the operation when the server response is received. 
      * To use this result from MXML code, define a CallResponder component and assign its token property to this method's return value. 
      * You can then bind to CallResponder.lastResult or listen for the CallResponder.result or fault events.
      *
      * @see mx.rpc.AsyncToken
      * @see mx.rpc.CallResponder 
      *
      * @return an mx.rpc.AsyncToken whose result property will be populated with the result of the operation when the server response is received.
      */
    public function getAllAccount_person() : mx.rpc.AsyncToken
    {
        var _internal_operation:mx.rpc.AbstractOperation = _serviceControl.getOperation("getAllAccount_person");
        var _internal_token:mx.rpc.AsyncToken = _internal_operation.send() ;

        return _internal_token;
    }
     
    /**
      * This method is a generated wrapper used to call the 'getAccount_personByID' operation. It returns an mx.data.ItemReference whose 
      * result property will be populated with the result of the operation when the server response is received. 
      * To use this result from MXML code, define a CallResponder component and assign its token property to this method's return value. 
      * You can then bind to CallResponder.lastResult or listen for the CallResponder.result or fault events.
      *
      * @see mx.data.ItemReference
      * @see mx.rpc.CallResponder 
      *
      * @return an mx.data.ItemReference whose result property will be populated with the result of the operation when the server response is received.
      */
    public function getAccount_personByID(itemID:int) : mx.data.ItemReference
    {
        var _internal_operation:mx.rpc.AbstractOperation = _serviceControl.getOperation("getAccount_personByID");
        var _internal_token:mx.data.ItemReference = _internal_operation.send(itemID) as mx.data.ItemReference;

        return _internal_token;
    }
     
    /**
      * This method is a generated wrapper used to call the 'createAccount_person' operation. It returns an mx.data.ItemReference whose 
      * result property will be populated with the result of the operation when the server response is received. 
      * To use this result from MXML code, define a CallResponder component and assign its token property to this method's return value. 
      * You can then bind to CallResponder.lastResult or listen for the CallResponder.result or fault events.
      *
      * @see mx.data.ItemReference
      * @see mx.rpc.CallResponder 
      *
      * @return an mx.data.ItemReference whose result property will be populated with the result of the operation when the server response is received.
      */
    public function createAccount_person(item:valueObjects.Account_person) : mx.data.ItemReference
    {
        var _internal_operation:mx.rpc.AbstractOperation = _serviceControl.getOperation("createAccount_person");
        var _internal_token:mx.data.ItemReference = _internal_operation.send(item) as mx.data.ItemReference;

        return _internal_token;
    }
     
    /**
      * This method is a generated wrapper used to call the 'updateAccount_person' operation. It returns an mx.data.ItemReference whose 
      * result property will be populated with the result of the operation when the server response is received. 
      * To use this result from MXML code, define a CallResponder component and assign its token property to this method's return value. 
      * You can then bind to CallResponder.lastResult or listen for the CallResponder.result or fault events.
      *
      * @see mx.data.ItemReference
      * @see mx.rpc.CallResponder 
      *
      * @return an mx.data.ItemReference whose result property will be populated with the result of the operation when the server response is received.
      */
    public function updateAccount_person(item:valueObjects.Account_person) : mx.data.ItemReference
    {
        var _internal_operation:mx.rpc.AbstractOperation = _serviceControl.getOperation("updateAccount_person");
        var _internal_token:mx.data.ItemReference = _internal_operation.send(item) as mx.data.ItemReference;

        return _internal_token;
    }
     
    /**
      * This method is a generated wrapper used to call the 'deleteAccount_person' operation. It returns an mx.rpc.AsyncToken whose 
      * result property will be populated with the result of the operation when the server response is received. 
      * To use this result from MXML code, define a CallResponder component and assign its token property to this method's return value. 
      * You can then bind to CallResponder.lastResult or listen for the CallResponder.result or fault events.
      *
      * @see mx.rpc.AsyncToken
      * @see mx.rpc.CallResponder 
      *
      * @return an mx.rpc.AsyncToken whose result property will be populated with the result of the operation when the server response is received.
      */
    public function deleteAccount_person(itemID:int) : mx.rpc.AsyncToken
    {
        var _internal_operation:mx.rpc.AbstractOperation = _serviceControl.getOperation("deleteAccount_person");
        var _internal_token:mx.rpc.AsyncToken = _internal_operation.send(itemID) ;

        return _internal_token;
    }
     
    /**
      * This method is a generated wrapper used to call the 'count' operation. It returns an mx.rpc.AsyncToken whose 
      * result property will be populated with the result of the operation when the server response is received. 
      * To use this result from MXML code, define a CallResponder component and assign its token property to this method's return value. 
      * You can then bind to CallResponder.lastResult or listen for the CallResponder.result or fault events.
      *
      * @see mx.rpc.AsyncToken
      * @see mx.rpc.CallResponder 
      *
      * @return an mx.rpc.AsyncToken whose result property will be populated with the result of the operation when the server response is received.
      */
    public function count() : mx.rpc.AsyncToken
    {
        var _internal_operation:mx.rpc.AbstractOperation = _serviceControl.getOperation("count");
        var _internal_token:mx.rpc.AsyncToken = _internal_operation.send() ;

        return _internal_token;
    }
     
    /**
      * This method is a generated wrapper used to call the 'getAccount_person_paged' operation. It returns an mx.rpc.AsyncToken whose 
      * result property will be populated with the result of the operation when the server response is received. 
      * To use this result from MXML code, define a CallResponder component and assign its token property to this method's return value. 
      * You can then bind to CallResponder.lastResult or listen for the CallResponder.result or fault events.
      *
      * @see mx.rpc.AsyncToken
      * @see mx.rpc.CallResponder 
      *
      * @return an mx.rpc.AsyncToken whose result property will be populated with the result of the operation when the server response is received.
      */
    public function getAccount_person_paged() : mx.rpc.AsyncToken
    {
        var _internal_operation:mx.rpc.AbstractOperation = _serviceControl.getOperation("getAccount_person_paged");
        var _internal_token:mx.rpc.AsyncToken = _internal_operation.send() ;

        return _internal_token;
    }
     
    /**
      * This method is a generated wrapper used to call the 'getAccount_personByParentAccountID' operation. It returns an mx.rpc.AsyncToken whose 
      * result property will be populated with the result of the operation when the server response is received. 
      * To use this result from MXML code, define a CallResponder component and assign its token property to this method's return value. 
      * You can then bind to CallResponder.lastResult or listen for the CallResponder.result or fault events.
      *
      * @see mx.rpc.AsyncToken
      * @see mx.rpc.CallResponder 
      *
      * @return an mx.rpc.AsyncToken whose result property will be populated with the result of the operation when the server response is received.
      */
    public function getAccount_personByParentAccountID(itemID:int) : mx.rpc.AsyncToken
    {
        var _internal_operation:mx.rpc.AbstractOperation = _serviceControl.getOperation("getAccount_personByParentAccountID");
        var _internal_token:mx.rpc.AsyncToken = _internal_operation.send(itemID) ;

        return _internal_token;
    }
     
}

}
