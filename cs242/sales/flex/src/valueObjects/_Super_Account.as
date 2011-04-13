/**
 * This is a generated class and is not intended for modification.  To customize behavior
 * of this value object you may modify the generated sub-class of this class - Account.as.
 */

package valueObjects
{
import com.adobe.fiber.services.IFiberManagingService;
import com.adobe.fiber.util.FiberUtils;
import com.adobe.fiber.valueobjects.IValueObject;
import flash.events.Event;
import flash.events.EventDispatcher;
import mx.binding.utils.ChangeWatcher;
import mx.events.PropertyChangeEvent;
import mx.validators.ValidationResult;

import flash.net.registerClassAlias;
import flash.net.getClassByAlias;
import com.adobe.fiber.core.model_internal;
import com.adobe.fiber.valueobjects.IPropertyIterator;
import com.adobe.fiber.valueobjects.AvailablePropertyIterator;

use namespace model_internal;

[Managed]
[ExcludeClass]
public class _Super_Account extends flash.events.EventDispatcher implements com.adobe.fiber.valueobjects.IValueObject
{
    model_internal static function initRemoteClassAliasSingle(cz:Class) : void
    {
    }

    model_internal static function initRemoteClassAliasAllRelated() : void
    {
    }

    model_internal var _dminternal_model : _AccountEntityMetadata;

    /**
     * properties
     */
    private var _internal_account_id : int;
    private var _internal_account_name : String;
    private var _internal_website : String;
    private var _internal_date_entered : Date;
    private var _internal_date_as_customer : Date;
    private var _internal_customer_type : String;

    private static var emptyArray:Array = new Array();


    /**
     * derived property cache initialization
     */
    model_internal var _cacheInitialized_isValid:Boolean = false;

    model_internal var _changeWatcherArray:Array = new Array();

    public function _Super_Account()
    {
        _model = new _AccountEntityMetadata(this);

        // Bind to own data properties for cache invalidation triggering
        model_internal::_changeWatcherArray.push(mx.binding.utils.ChangeWatcher.watch(this, "account_name", model_internal::setterListenerAccount_name));
        model_internal::_changeWatcherArray.push(mx.binding.utils.ChangeWatcher.watch(this, "website", model_internal::setterListenerWebsite));
        model_internal::_changeWatcherArray.push(mx.binding.utils.ChangeWatcher.watch(this, "date_entered", model_internal::setterListenerDate_entered));
        model_internal::_changeWatcherArray.push(mx.binding.utils.ChangeWatcher.watch(this, "date_as_customer", model_internal::setterListenerDate_as_customer));
        model_internal::_changeWatcherArray.push(mx.binding.utils.ChangeWatcher.watch(this, "customer_type", model_internal::setterListenerCustomer_type));

    }

    /**
     * data property getters
     */

    [Bindable(event="propertyChange")]
    public function get account_id() : int
    {
        return _internal_account_id;
    }

    [Bindable(event="propertyChange")]
    public function get account_name() : String
    {
        return _internal_account_name;
    }

    [Bindable(event="propertyChange")]
    public function get website() : String
    {
        return _internal_website;
    }

    [Bindable(event="propertyChange")]
    public function get date_entered() : Date
    {
        return _internal_date_entered;
    }

    [Bindable(event="propertyChange")]
    public function get date_as_customer() : Date
    {
        return _internal_date_as_customer;
    }

    [Bindable(event="propertyChange")]
    public function get customer_type() : String
    {
        return _internal_customer_type;
    }

    /**
     * data property setters
     */

    public function set account_id(value:int) : void
    {
        var oldValue:int = _internal_account_id;
        if (oldValue !== value)
        {
            _internal_account_id = value;
        }
    }

    public function set account_name(value:String) : void
    {
        var oldValue:String = _internal_account_name;
        if (oldValue !== value)
        {
            _internal_account_name = value;
        }
    }

    public function set website(value:String) : void
    {
        var oldValue:String = _internal_website;
        if (oldValue !== value)
        {
            _internal_website = value;
        }
    }

    public function set date_entered(value:Date) : void
    {
        var oldValue:Date = _internal_date_entered;
        if (oldValue !== value)
        {
            _internal_date_entered = value;
        }
    }

    public function set date_as_customer(value:Date) : void
    {
        var oldValue:Date = _internal_date_as_customer;
        if (oldValue !== value)
        {
            _internal_date_as_customer = value;
        }
    }

    public function set customer_type(value:String) : void
    {
        var oldValue:String = _internal_customer_type;
        if (oldValue !== value)
        {
            _internal_customer_type = value;
        }
    }

    /**
     * Data property setter listeners
     *
     * Each data property whose value affects other properties or the validity of the entity
     * needs to invalidate all previously calculated artifacts. These include:
     *  - any derived properties or constraints that reference the given data property.
     *  - any availability guards (variant expressions) that reference the given data property.
     *  - any style validations, message tokens or guards that reference the given data property.
     *  - the validity of the property (and the containing entity) if the given data property has a length restriction.
     *  - the validity of the property (and the containing entity) if the given data property is required.
     */

    model_internal function setterListenerAccount_name(value:flash.events.Event):void
    {
        _model.invalidateDependentOnAccount_name();
    }

    model_internal function setterListenerWebsite(value:flash.events.Event):void
    {
        _model.invalidateDependentOnWebsite();
    }

    model_internal function setterListenerDate_entered(value:flash.events.Event):void
    {
        _model.invalidateDependentOnDate_entered();
    }

    model_internal function setterListenerDate_as_customer(value:flash.events.Event):void
    {
        _model.invalidateDependentOnDate_as_customer();
    }

    model_internal function setterListenerCustomer_type(value:flash.events.Event):void
    {
        _model.invalidateDependentOnCustomer_type();
    }


    /**
     * valid related derived properties
     */
    model_internal var _isValid : Boolean;
    model_internal var _invalidConstraints:Array = new Array();
    model_internal var _validationFailureMessages:Array = new Array();

    /**
     * derived property calculators
     */

    /**
     * isValid calculator
     */
    model_internal function calculateIsValid():Boolean
    {
        var violatedConsts:Array = new Array();
        var validationFailureMessages:Array = new Array();

        var propertyValidity:Boolean = true;
        if (!_model.account_nameIsValid)
        {
            propertyValidity = false;
            com.adobe.fiber.util.FiberUtils.arrayAdd(validationFailureMessages, _model.model_internal::_account_nameValidationFailureMessages);
        }
        if (!_model.websiteIsValid)
        {
            propertyValidity = false;
            com.adobe.fiber.util.FiberUtils.arrayAdd(validationFailureMessages, _model.model_internal::_websiteValidationFailureMessages);
        }
        if (!_model.date_enteredIsValid)
        {
            propertyValidity = false;
            com.adobe.fiber.util.FiberUtils.arrayAdd(validationFailureMessages, _model.model_internal::_date_enteredValidationFailureMessages);
        }
        if (!_model.date_as_customerIsValid)
        {
            propertyValidity = false;
            com.adobe.fiber.util.FiberUtils.arrayAdd(validationFailureMessages, _model.model_internal::_date_as_customerValidationFailureMessages);
        }
        if (!_model.customer_typeIsValid)
        {
            propertyValidity = false;
            com.adobe.fiber.util.FiberUtils.arrayAdd(validationFailureMessages, _model.model_internal::_customer_typeValidationFailureMessages);
        }

        model_internal::_cacheInitialized_isValid = true;
        model_internal::invalidConstraints_der = violatedConsts;
        model_internal::validationFailureMessages_der = validationFailureMessages;
        return violatedConsts.length == 0 && propertyValidity;
    }

    /**
     * derived property setters
     */

    model_internal function set isValid_der(value:Boolean) : void
    {
        var oldValue:Boolean = model_internal::_isValid;
        if (oldValue !== value)
        {
            model_internal::_isValid = value;
            _model.model_internal::fireChangeEvent("isValid", oldValue, model_internal::_isValid);
        }
    }

    /**
     * derived property getters
     */

    [Transient]
    [Bindable(event="propertyChange")]
    public function get _model() : _AccountEntityMetadata
    {
        return model_internal::_dminternal_model;
    }

    public function set _model(value : _AccountEntityMetadata) : void
    {
        var oldValue : _AccountEntityMetadata = model_internal::_dminternal_model;
        if (oldValue !== value)
        {
            model_internal::_dminternal_model = value;
            this.dispatchEvent(mx.events.PropertyChangeEvent.createUpdateEvent(this, "_model", oldValue, model_internal::_dminternal_model));
        }
    }

    /**
     * methods
     */


    /**
     *  services
     */
    private var _managingService:com.adobe.fiber.services.IFiberManagingService;

    public function set managingService(managingService:com.adobe.fiber.services.IFiberManagingService):void
    {
        _managingService = managingService;
    }

    model_internal function set invalidConstraints_der(value:Array) : void
    {
        var oldValue:Array = model_internal::_invalidConstraints;
        // avoid firing the event when old and new value are different empty arrays
        if (oldValue !== value && (oldValue.length > 0 || value.length > 0))
        {
            model_internal::_invalidConstraints = value;
            _model.model_internal::fireChangeEvent("invalidConstraints", oldValue, model_internal::_invalidConstraints);
        }
    }

    model_internal function set validationFailureMessages_der(value:Array) : void
    {
        var oldValue:Array = model_internal::_validationFailureMessages;
        // avoid firing the event when old and new value are different empty arrays
        if (oldValue !== value && (oldValue.length > 0 || value.length > 0))
        {
            model_internal::_validationFailureMessages = value;
            _model.model_internal::fireChangeEvent("validationFailureMessages", oldValue, model_internal::_validationFailureMessages);
        }
    }

    model_internal var _doValidationCacheOfAccount_name : Array = null;
    model_internal var _doValidationLastValOfAccount_name : String;

    model_internal function _doValidationForAccount_name(valueIn:Object):Array
    {
        var value : String = valueIn as String;

        if (model_internal::_doValidationCacheOfAccount_name != null && model_internal::_doValidationLastValOfAccount_name == value)
           return model_internal::_doValidationCacheOfAccount_name ;

        _model.model_internal::_account_nameIsValidCacheInitialized = true;
        var validationFailures:Array = new Array();
        var errorMessage:String;
        var failure:Boolean;

        var valRes:ValidationResult;
        if (_model.isAccount_nameAvailable && _internal_account_name == null)
        {
            validationFailures.push(new ValidationResult(true, "", "", "account_name is required"));
        }

        model_internal::_doValidationCacheOfAccount_name = validationFailures;
        model_internal::_doValidationLastValOfAccount_name = value;

        return validationFailures;
    }
    
    model_internal var _doValidationCacheOfWebsite : Array = null;
    model_internal var _doValidationLastValOfWebsite : String;

    model_internal function _doValidationForWebsite(valueIn:Object):Array
    {
        var value : String = valueIn as String;

        if (model_internal::_doValidationCacheOfWebsite != null && model_internal::_doValidationLastValOfWebsite == value)
           return model_internal::_doValidationCacheOfWebsite ;

        _model.model_internal::_websiteIsValidCacheInitialized = true;
        var validationFailures:Array = new Array();
        var errorMessage:String;
        var failure:Boolean;

        var valRes:ValidationResult;
        if (_model.isWebsiteAvailable && _internal_website == null)
        {
            validationFailures.push(new ValidationResult(true, "", "", "website is required"));
        }

        model_internal::_doValidationCacheOfWebsite = validationFailures;
        model_internal::_doValidationLastValOfWebsite = value;

        return validationFailures;
    }
    
    model_internal var _doValidationCacheOfDate_entered : Array = null;
    model_internal var _doValidationLastValOfDate_entered : Date;

    model_internal function _doValidationForDate_entered(valueIn:Object):Array
    {
        var value : Date = valueIn as Date;

        if (model_internal::_doValidationCacheOfDate_entered != null && model_internal::_doValidationLastValOfDate_entered == value)
           return model_internal::_doValidationCacheOfDate_entered ;

        _model.model_internal::_date_enteredIsValidCacheInitialized = true;
        var validationFailures:Array = new Array();
        var errorMessage:String;
        var failure:Boolean;

        var valRes:ValidationResult;
        if (_model.isDate_enteredAvailable && _internal_date_entered == null)
        {
            validationFailures.push(new ValidationResult(true, "", "", "date_entered is required"));
        }

        model_internal::_doValidationCacheOfDate_entered = validationFailures;
        model_internal::_doValidationLastValOfDate_entered = value;

        return validationFailures;
    }
    
    model_internal var _doValidationCacheOfDate_as_customer : Array = null;
    model_internal var _doValidationLastValOfDate_as_customer : Date;

    model_internal function _doValidationForDate_as_customer(valueIn:Object):Array
    {
        var value : Date = valueIn as Date;

        if (model_internal::_doValidationCacheOfDate_as_customer != null && model_internal::_doValidationLastValOfDate_as_customer == value)
           return model_internal::_doValidationCacheOfDate_as_customer ;

        _model.model_internal::_date_as_customerIsValidCacheInitialized = true;
        var validationFailures:Array = new Array();
        var errorMessage:String;
        var failure:Boolean;

        var valRes:ValidationResult;
        if (_model.isDate_as_customerAvailable && _internal_date_as_customer == null)
        {
            validationFailures.push(new ValidationResult(true, "", "", "date_as_customer is required"));
        }

        model_internal::_doValidationCacheOfDate_as_customer = validationFailures;
        model_internal::_doValidationLastValOfDate_as_customer = value;

        return validationFailures;
    }
    
    model_internal var _doValidationCacheOfCustomer_type : Array = null;
    model_internal var _doValidationLastValOfCustomer_type : String;

    model_internal function _doValidationForCustomer_type(valueIn:Object):Array
    {
        var value : String = valueIn as String;

        if (model_internal::_doValidationCacheOfCustomer_type != null && model_internal::_doValidationLastValOfCustomer_type == value)
           return model_internal::_doValidationCacheOfCustomer_type ;

        _model.model_internal::_customer_typeIsValidCacheInitialized = true;
        var validationFailures:Array = new Array();
        var errorMessage:String;
        var failure:Boolean;

        var valRes:ValidationResult;
        if (_model.isCustomer_typeAvailable && _internal_customer_type == null)
        {
            validationFailures.push(new ValidationResult(true, "", "", "customer_type is required"));
        }

        model_internal::_doValidationCacheOfCustomer_type = validationFailures;
        model_internal::_doValidationLastValOfCustomer_type = value;

        return validationFailures;
    }
    

}

}
