/**
 * This is a generated class and is not intended for modification.  To customize behavior
 * of this value object you may modify the generated sub-class of this class - CustomDatatype4.as.
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
public class _Super_CustomDatatype4 extends flash.events.EventDispatcher implements com.adobe.fiber.valueobjects.IValueObject
{
    model_internal static function initRemoteClassAliasSingle(cz:Class) : void
    {
    }

    model_internal static function initRemoteClassAliasAllRelated() : void
    {
    }

    model_internal var _dminternal_model : _CustomDatatype4EntityMetadata;

    /**
     * properties
     */
    private var _internal_account_person_id : int;
    private var _internal_user_pwd : String;
    private var _internal_user_name : String;
    private var _internal_first_name : String;
    private var _internal_account_person_title : String;
    private var _internal_parent_account : int;
    private var _internal_last_name : String;

    private static var emptyArray:Array = new Array();


    /**
     * derived property cache initialization
     */
    model_internal var _cacheInitialized_isValid:Boolean = false;

    model_internal var _changeWatcherArray:Array = new Array();

    public function _Super_CustomDatatype4()
    {
        _model = new _CustomDatatype4EntityMetadata(this);

        // Bind to own data properties for cache invalidation triggering
        model_internal::_changeWatcherArray.push(mx.binding.utils.ChangeWatcher.watch(this, "user_pwd", model_internal::setterListenerUser_pwd));
        model_internal::_changeWatcherArray.push(mx.binding.utils.ChangeWatcher.watch(this, "user_name", model_internal::setterListenerUser_name));
        model_internal::_changeWatcherArray.push(mx.binding.utils.ChangeWatcher.watch(this, "first_name", model_internal::setterListenerFirst_name));
        model_internal::_changeWatcherArray.push(mx.binding.utils.ChangeWatcher.watch(this, "account_person_title", model_internal::setterListenerAccount_person_title));
        model_internal::_changeWatcherArray.push(mx.binding.utils.ChangeWatcher.watch(this, "last_name", model_internal::setterListenerLast_name));

    }

    /**
     * data property getters
     */

    [Bindable(event="propertyChange")]
    public function get account_person_id() : int
    {
        return _internal_account_person_id;
    }

    [Bindable(event="propertyChange")]
    public function get user_pwd() : String
    {
        return _internal_user_pwd;
    }

    [Bindable(event="propertyChange")]
    public function get user_name() : String
    {
        return _internal_user_name;
    }

    [Bindable(event="propertyChange")]
    public function get first_name() : String
    {
        return _internal_first_name;
    }

    [Bindable(event="propertyChange")]
    public function get account_person_title() : String
    {
        return _internal_account_person_title;
    }

    [Bindable(event="propertyChange")]
    public function get parent_account() : int
    {
        return _internal_parent_account;
    }

    [Bindable(event="propertyChange")]
    public function get last_name() : String
    {
        return _internal_last_name;
    }

    /**
     * data property setters
     */

    public function set account_person_id(value:int) : void
    {
        var oldValue:int = _internal_account_person_id;
        if (oldValue !== value)
        {
            _internal_account_person_id = value;
            this.dispatchEvent(mx.events.PropertyChangeEvent.createUpdateEvent(this, "account_person_id", oldValue, _internal_account_person_id));
        }
    }

    public function set user_pwd(value:String) : void
    {
        var oldValue:String = _internal_user_pwd;
        if (oldValue !== value)
        {
            _internal_user_pwd = value;
            this.dispatchEvent(mx.events.PropertyChangeEvent.createUpdateEvent(this, "user_pwd", oldValue, _internal_user_pwd));
        }
    }

    public function set user_name(value:String) : void
    {
        var oldValue:String = _internal_user_name;
        if (oldValue !== value)
        {
            _internal_user_name = value;
            this.dispatchEvent(mx.events.PropertyChangeEvent.createUpdateEvent(this, "user_name", oldValue, _internal_user_name));
        }
    }

    public function set first_name(value:String) : void
    {
        var oldValue:String = _internal_first_name;
        if (oldValue !== value)
        {
            _internal_first_name = value;
            this.dispatchEvent(mx.events.PropertyChangeEvent.createUpdateEvent(this, "first_name", oldValue, _internal_first_name));
        }
    }

    public function set account_person_title(value:String) : void
    {
        var oldValue:String = _internal_account_person_title;
        if (oldValue !== value)
        {
            _internal_account_person_title = value;
            this.dispatchEvent(mx.events.PropertyChangeEvent.createUpdateEvent(this, "account_person_title", oldValue, _internal_account_person_title));
        }
    }

    public function set parent_account(value:int) : void
    {
        var oldValue:int = _internal_parent_account;
        if (oldValue !== value)
        {
            _internal_parent_account = value;
            this.dispatchEvent(mx.events.PropertyChangeEvent.createUpdateEvent(this, "parent_account", oldValue, _internal_parent_account));
        }
    }

    public function set last_name(value:String) : void
    {
        var oldValue:String = _internal_last_name;
        if (oldValue !== value)
        {
            _internal_last_name = value;
            this.dispatchEvent(mx.events.PropertyChangeEvent.createUpdateEvent(this, "last_name", oldValue, _internal_last_name));
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

    model_internal function setterListenerUser_pwd(value:flash.events.Event):void
    {
        _model.invalidateDependentOnUser_pwd();
    }

    model_internal function setterListenerUser_name(value:flash.events.Event):void
    {
        _model.invalidateDependentOnUser_name();
    }

    model_internal function setterListenerFirst_name(value:flash.events.Event):void
    {
        _model.invalidateDependentOnFirst_name();
    }

    model_internal function setterListenerAccount_person_title(value:flash.events.Event):void
    {
        _model.invalidateDependentOnAccount_person_title();
    }

    model_internal function setterListenerLast_name(value:flash.events.Event):void
    {
        _model.invalidateDependentOnLast_name();
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
        if (!_model.user_pwdIsValid)
        {
            propertyValidity = false;
            com.adobe.fiber.util.FiberUtils.arrayAdd(validationFailureMessages, _model.model_internal::_user_pwdValidationFailureMessages);
        }
        if (!_model.user_nameIsValid)
        {
            propertyValidity = false;
            com.adobe.fiber.util.FiberUtils.arrayAdd(validationFailureMessages, _model.model_internal::_user_nameValidationFailureMessages);
        }
        if (!_model.first_nameIsValid)
        {
            propertyValidity = false;
            com.adobe.fiber.util.FiberUtils.arrayAdd(validationFailureMessages, _model.model_internal::_first_nameValidationFailureMessages);
        }
        if (!_model.account_person_titleIsValid)
        {
            propertyValidity = false;
            com.adobe.fiber.util.FiberUtils.arrayAdd(validationFailureMessages, _model.model_internal::_account_person_titleValidationFailureMessages);
        }
        if (!_model.last_nameIsValid)
        {
            propertyValidity = false;
            com.adobe.fiber.util.FiberUtils.arrayAdd(validationFailureMessages, _model.model_internal::_last_nameValidationFailureMessages);
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
    public function get _model() : _CustomDatatype4EntityMetadata
    {
        return model_internal::_dminternal_model;
    }

    public function set _model(value : _CustomDatatype4EntityMetadata) : void
    {
        var oldValue : _CustomDatatype4EntityMetadata = model_internal::_dminternal_model;
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

    model_internal var _doValidationCacheOfUser_pwd : Array = null;
    model_internal var _doValidationLastValOfUser_pwd : String;

    model_internal function _doValidationForUser_pwd(valueIn:Object):Array
    {
        var value : String = valueIn as String;

        if (model_internal::_doValidationCacheOfUser_pwd != null && model_internal::_doValidationLastValOfUser_pwd == value)
           return model_internal::_doValidationCacheOfUser_pwd ;

        _model.model_internal::_user_pwdIsValidCacheInitialized = true;
        var validationFailures:Array = new Array();
        var errorMessage:String;
        var failure:Boolean;

        var valRes:ValidationResult;
        if (_model.isUser_pwdAvailable && _internal_user_pwd == null)
        {
            validationFailures.push(new ValidationResult(true, "", "", "user_pwd is required"));
        }

        model_internal::_doValidationCacheOfUser_pwd = validationFailures;
        model_internal::_doValidationLastValOfUser_pwd = value;

        return validationFailures;
    }
    
    model_internal var _doValidationCacheOfUser_name : Array = null;
    model_internal var _doValidationLastValOfUser_name : String;

    model_internal function _doValidationForUser_name(valueIn:Object):Array
    {
        var value : String = valueIn as String;

        if (model_internal::_doValidationCacheOfUser_name != null && model_internal::_doValidationLastValOfUser_name == value)
           return model_internal::_doValidationCacheOfUser_name ;

        _model.model_internal::_user_nameIsValidCacheInitialized = true;
        var validationFailures:Array = new Array();
        var errorMessage:String;
        var failure:Boolean;

        var valRes:ValidationResult;
        if (_model.isUser_nameAvailable && _internal_user_name == null)
        {
            validationFailures.push(new ValidationResult(true, "", "", "user_name is required"));
        }

        model_internal::_doValidationCacheOfUser_name = validationFailures;
        model_internal::_doValidationLastValOfUser_name = value;

        return validationFailures;
    }
    
    model_internal var _doValidationCacheOfFirst_name : Array = null;
    model_internal var _doValidationLastValOfFirst_name : String;

    model_internal function _doValidationForFirst_name(valueIn:Object):Array
    {
        var value : String = valueIn as String;

        if (model_internal::_doValidationCacheOfFirst_name != null && model_internal::_doValidationLastValOfFirst_name == value)
           return model_internal::_doValidationCacheOfFirst_name ;

        _model.model_internal::_first_nameIsValidCacheInitialized = true;
        var validationFailures:Array = new Array();
        var errorMessage:String;
        var failure:Boolean;

        var valRes:ValidationResult;
        if (_model.isFirst_nameAvailable && _internal_first_name == null)
        {
            validationFailures.push(new ValidationResult(true, "", "", "first_name is required"));
        }

        model_internal::_doValidationCacheOfFirst_name = validationFailures;
        model_internal::_doValidationLastValOfFirst_name = value;

        return validationFailures;
    }
    
    model_internal var _doValidationCacheOfAccount_person_title : Array = null;
    model_internal var _doValidationLastValOfAccount_person_title : String;

    model_internal function _doValidationForAccount_person_title(valueIn:Object):Array
    {
        var value : String = valueIn as String;

        if (model_internal::_doValidationCacheOfAccount_person_title != null && model_internal::_doValidationLastValOfAccount_person_title == value)
           return model_internal::_doValidationCacheOfAccount_person_title ;

        _model.model_internal::_account_person_titleIsValidCacheInitialized = true;
        var validationFailures:Array = new Array();
        var errorMessage:String;
        var failure:Boolean;

        var valRes:ValidationResult;
        if (_model.isAccount_person_titleAvailable && _internal_account_person_title == null)
        {
            validationFailures.push(new ValidationResult(true, "", "", "account_person_title is required"));
        }

        model_internal::_doValidationCacheOfAccount_person_title = validationFailures;
        model_internal::_doValidationLastValOfAccount_person_title = value;

        return validationFailures;
    }
    
    model_internal var _doValidationCacheOfLast_name : Array = null;
    model_internal var _doValidationLastValOfLast_name : String;

    model_internal function _doValidationForLast_name(valueIn:Object):Array
    {
        var value : String = valueIn as String;

        if (model_internal::_doValidationCacheOfLast_name != null && model_internal::_doValidationLastValOfLast_name == value)
           return model_internal::_doValidationCacheOfLast_name ;

        _model.model_internal::_last_nameIsValidCacheInitialized = true;
        var validationFailures:Array = new Array();
        var errorMessage:String;
        var failure:Boolean;

        var valRes:ValidationResult;
        if (_model.isLast_nameAvailable && _internal_last_name == null)
        {
            validationFailures.push(new ValidationResult(true, "", "", "last_name is required"));
        }

        model_internal::_doValidationCacheOfLast_name = validationFailures;
        model_internal::_doValidationLastValOfLast_name = value;

        return validationFailures;
    }
    

}

}
