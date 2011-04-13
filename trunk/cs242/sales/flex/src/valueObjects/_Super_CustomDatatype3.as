/**
 * This is a generated class and is not intended for modification.  To customize behavior
 * of this value object you may modify the generated sub-class of this class - CustomDatatype3.as.
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

[ExcludeClass]
public class _Super_CustomDatatype3 extends flash.events.EventDispatcher implements com.adobe.fiber.valueobjects.IValueObject
{
    model_internal static function initRemoteClassAliasSingle(cz:Class) : void
    {
    }

    model_internal static function initRemoteClassAliasAllRelated() : void
    {
    }

    model_internal var _dminternal_model : _CustomDatatype3EntityMetadata;

    /**
     * properties
     */
    private var _internal_location_type : String;
    private var _internal_zipcode : String;
    private var _internal_state : String;
    private var _internal_address1 : String;
    private var _internal_address2 : String;
    private var _internal_account_location_id : int;
    private var _internal_city : String;

    private static var emptyArray:Array = new Array();


    /**
     * derived property cache initialization
     */
    model_internal var _cacheInitialized_isValid:Boolean = false;

    model_internal var _changeWatcherArray:Array = new Array();

    public function _Super_CustomDatatype3()
    {
        _model = new _CustomDatatype3EntityMetadata(this);

        // Bind to own data properties for cache invalidation triggering
        model_internal::_changeWatcherArray.push(mx.binding.utils.ChangeWatcher.watch(this, "location_type", model_internal::setterListenerLocation_type));
        model_internal::_changeWatcherArray.push(mx.binding.utils.ChangeWatcher.watch(this, "zipcode", model_internal::setterListenerZipcode));
        model_internal::_changeWatcherArray.push(mx.binding.utils.ChangeWatcher.watch(this, "state", model_internal::setterListenerState));
        model_internal::_changeWatcherArray.push(mx.binding.utils.ChangeWatcher.watch(this, "address1", model_internal::setterListenerAddress1));
        model_internal::_changeWatcherArray.push(mx.binding.utils.ChangeWatcher.watch(this, "address2", model_internal::setterListenerAddress2));
        model_internal::_changeWatcherArray.push(mx.binding.utils.ChangeWatcher.watch(this, "city", model_internal::setterListenerCity));

    }

    /**
     * data property getters
     */

    [Bindable(event="propertyChange")]
    public function get location_type() : String
    {
        return _internal_location_type;
    }

    [Bindable(event="propertyChange")]
    public function get zipcode() : String
    {
        return _internal_zipcode;
    }

    [Bindable(event="propertyChange")]
    public function get state() : String
    {
        return _internal_state;
    }

    [Bindable(event="propertyChange")]
    public function get address1() : String
    {
        return _internal_address1;
    }

    [Bindable(event="propertyChange")]
    public function get address2() : String
    {
        return _internal_address2;
    }

    [Bindable(event="propertyChange")]
    public function get account_location_id() : int
    {
        return _internal_account_location_id;
    }

    [Bindable(event="propertyChange")]
    public function get city() : String
    {
        return _internal_city;
    }

    /**
     * data property setters
     */

    public function set location_type(value:String) : void
    {
        var oldValue:String = _internal_location_type;
        if (oldValue !== value)
        {
            _internal_location_type = value;
            this.dispatchEvent(mx.events.PropertyChangeEvent.createUpdateEvent(this, "location_type", oldValue, _internal_location_type));
        }
    }

    public function set zipcode(value:String) : void
    {
        var oldValue:String = _internal_zipcode;
        if (oldValue !== value)
        {
            _internal_zipcode = value;
            this.dispatchEvent(mx.events.PropertyChangeEvent.createUpdateEvent(this, "zipcode", oldValue, _internal_zipcode));
        }
    }

    public function set state(value:String) : void
    {
        var oldValue:String = _internal_state;
        if (oldValue !== value)
        {
            _internal_state = value;
            this.dispatchEvent(mx.events.PropertyChangeEvent.createUpdateEvent(this, "state", oldValue, _internal_state));
        }
    }

    public function set address1(value:String) : void
    {
        var oldValue:String = _internal_address1;
        if (oldValue !== value)
        {
            _internal_address1 = value;
            this.dispatchEvent(mx.events.PropertyChangeEvent.createUpdateEvent(this, "address1", oldValue, _internal_address1));
        }
    }

    public function set address2(value:String) : void
    {
        var oldValue:String = _internal_address2;
        if (oldValue !== value)
        {
            _internal_address2 = value;
            this.dispatchEvent(mx.events.PropertyChangeEvent.createUpdateEvent(this, "address2", oldValue, _internal_address2));
        }
    }

    public function set account_location_id(value:int) : void
    {
        var oldValue:int = _internal_account_location_id;
        if (oldValue !== value)
        {
            _internal_account_location_id = value;
            this.dispatchEvent(mx.events.PropertyChangeEvent.createUpdateEvent(this, "account_location_id", oldValue, _internal_account_location_id));
        }
    }

    public function set city(value:String) : void
    {
        var oldValue:String = _internal_city;
        if (oldValue !== value)
        {
            _internal_city = value;
            this.dispatchEvent(mx.events.PropertyChangeEvent.createUpdateEvent(this, "city", oldValue, _internal_city));
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

    model_internal function setterListenerLocation_type(value:flash.events.Event):void
    {
        _model.invalidateDependentOnLocation_type();
    }

    model_internal function setterListenerZipcode(value:flash.events.Event):void
    {
        _model.invalidateDependentOnZipcode();
    }

    model_internal function setterListenerState(value:flash.events.Event):void
    {
        _model.invalidateDependentOnState();
    }

    model_internal function setterListenerAddress1(value:flash.events.Event):void
    {
        _model.invalidateDependentOnAddress1();
    }

    model_internal function setterListenerAddress2(value:flash.events.Event):void
    {
        _model.invalidateDependentOnAddress2();
    }

    model_internal function setterListenerCity(value:flash.events.Event):void
    {
        _model.invalidateDependentOnCity();
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
        if (!_model.location_typeIsValid)
        {
            propertyValidity = false;
            com.adobe.fiber.util.FiberUtils.arrayAdd(validationFailureMessages, _model.model_internal::_location_typeValidationFailureMessages);
        }
        if (!_model.zipcodeIsValid)
        {
            propertyValidity = false;
            com.adobe.fiber.util.FiberUtils.arrayAdd(validationFailureMessages, _model.model_internal::_zipcodeValidationFailureMessages);
        }
        if (!_model.stateIsValid)
        {
            propertyValidity = false;
            com.adobe.fiber.util.FiberUtils.arrayAdd(validationFailureMessages, _model.model_internal::_stateValidationFailureMessages);
        }
        if (!_model.address1IsValid)
        {
            propertyValidity = false;
            com.adobe.fiber.util.FiberUtils.arrayAdd(validationFailureMessages, _model.model_internal::_address1ValidationFailureMessages);
        }
        if (!_model.address2IsValid)
        {
            propertyValidity = false;
            com.adobe.fiber.util.FiberUtils.arrayAdd(validationFailureMessages, _model.model_internal::_address2ValidationFailureMessages);
        }
        if (!_model.cityIsValid)
        {
            propertyValidity = false;
            com.adobe.fiber.util.FiberUtils.arrayAdd(validationFailureMessages, _model.model_internal::_cityValidationFailureMessages);
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
    public function get _model() : _CustomDatatype3EntityMetadata
    {
        return model_internal::_dminternal_model;
    }

    public function set _model(value : _CustomDatatype3EntityMetadata) : void
    {
        var oldValue : _CustomDatatype3EntityMetadata = model_internal::_dminternal_model;
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

    model_internal var _doValidationCacheOfLocation_type : Array = null;
    model_internal var _doValidationLastValOfLocation_type : String;

    model_internal function _doValidationForLocation_type(valueIn:Object):Array
    {
        var value : String = valueIn as String;

        if (model_internal::_doValidationCacheOfLocation_type != null && model_internal::_doValidationLastValOfLocation_type == value)
           return model_internal::_doValidationCacheOfLocation_type ;

        _model.model_internal::_location_typeIsValidCacheInitialized = true;
        var validationFailures:Array = new Array();
        var errorMessage:String;
        var failure:Boolean;

        var valRes:ValidationResult;
        if (_model.isLocation_typeAvailable && _internal_location_type == null)
        {
            validationFailures.push(new ValidationResult(true, "", "", "location_type is required"));
        }

        model_internal::_doValidationCacheOfLocation_type = validationFailures;
        model_internal::_doValidationLastValOfLocation_type = value;

        return validationFailures;
    }
    
    model_internal var _doValidationCacheOfZipcode : Array = null;
    model_internal var _doValidationLastValOfZipcode : String;

    model_internal function _doValidationForZipcode(valueIn:Object):Array
    {
        var value : String = valueIn as String;

        if (model_internal::_doValidationCacheOfZipcode != null && model_internal::_doValidationLastValOfZipcode == value)
           return model_internal::_doValidationCacheOfZipcode ;

        _model.model_internal::_zipcodeIsValidCacheInitialized = true;
        var validationFailures:Array = new Array();
        var errorMessage:String;
        var failure:Boolean;

        var valRes:ValidationResult;
        if (_model.isZipcodeAvailable && _internal_zipcode == null)
        {
            validationFailures.push(new ValidationResult(true, "", "", "zipcode is required"));
        }

        model_internal::_doValidationCacheOfZipcode = validationFailures;
        model_internal::_doValidationLastValOfZipcode = value;

        return validationFailures;
    }
    
    model_internal var _doValidationCacheOfState : Array = null;
    model_internal var _doValidationLastValOfState : String;

    model_internal function _doValidationForState(valueIn:Object):Array
    {
        var value : String = valueIn as String;

        if (model_internal::_doValidationCacheOfState != null && model_internal::_doValidationLastValOfState == value)
           return model_internal::_doValidationCacheOfState ;

        _model.model_internal::_stateIsValidCacheInitialized = true;
        var validationFailures:Array = new Array();
        var errorMessage:String;
        var failure:Boolean;

        var valRes:ValidationResult;
        if (_model.isStateAvailable && _internal_state == null)
        {
            validationFailures.push(new ValidationResult(true, "", "", "state is required"));
        }

        model_internal::_doValidationCacheOfState = validationFailures;
        model_internal::_doValidationLastValOfState = value;

        return validationFailures;
    }
    
    model_internal var _doValidationCacheOfAddress1 : Array = null;
    model_internal var _doValidationLastValOfAddress1 : String;

    model_internal function _doValidationForAddress1(valueIn:Object):Array
    {
        var value : String = valueIn as String;

        if (model_internal::_doValidationCacheOfAddress1 != null && model_internal::_doValidationLastValOfAddress1 == value)
           return model_internal::_doValidationCacheOfAddress1 ;

        _model.model_internal::_address1IsValidCacheInitialized = true;
        var validationFailures:Array = new Array();
        var errorMessage:String;
        var failure:Boolean;

        var valRes:ValidationResult;
        if (_model.isAddress1Available && _internal_address1 == null)
        {
            validationFailures.push(new ValidationResult(true, "", "", "address1 is required"));
        }

        model_internal::_doValidationCacheOfAddress1 = validationFailures;
        model_internal::_doValidationLastValOfAddress1 = value;

        return validationFailures;
    }
    
    model_internal var _doValidationCacheOfAddress2 : Array = null;
    model_internal var _doValidationLastValOfAddress2 : String;

    model_internal function _doValidationForAddress2(valueIn:Object):Array
    {
        var value : String = valueIn as String;

        if (model_internal::_doValidationCacheOfAddress2 != null && model_internal::_doValidationLastValOfAddress2 == value)
           return model_internal::_doValidationCacheOfAddress2 ;

        _model.model_internal::_address2IsValidCacheInitialized = true;
        var validationFailures:Array = new Array();
        var errorMessage:String;
        var failure:Boolean;

        var valRes:ValidationResult;
        if (_model.isAddress2Available && _internal_address2 == null)
        {
            validationFailures.push(new ValidationResult(true, "", "", "address2 is required"));
        }

        model_internal::_doValidationCacheOfAddress2 = validationFailures;
        model_internal::_doValidationLastValOfAddress2 = value;

        return validationFailures;
    }
    
    model_internal var _doValidationCacheOfCity : Array = null;
    model_internal var _doValidationLastValOfCity : String;

    model_internal function _doValidationForCity(valueIn:Object):Array
    {
        var value : String = valueIn as String;

        if (model_internal::_doValidationCacheOfCity != null && model_internal::_doValidationLastValOfCity == value)
           return model_internal::_doValidationCacheOfCity ;

        _model.model_internal::_cityIsValidCacheInitialized = true;
        var validationFailures:Array = new Array();
        var errorMessage:String;
        var failure:Boolean;

        var valRes:ValidationResult;
        if (_model.isCityAvailable && _internal_city == null)
        {
            validationFailures.push(new ValidationResult(true, "", "", "city is required"));
        }

        model_internal::_doValidationCacheOfCity = validationFailures;
        model_internal::_doValidationLastValOfCity = value;

        return validationFailures;
    }
    

}

}
