
/**
 * This is a generated class and is not intended for modification.  
 */
package valueObjects
{
import com.adobe.fiber.styles.IStyle;
import com.adobe.fiber.styles.Style;
import com.adobe.fiber.styles.StyleValidator;
import com.adobe.fiber.valueobjects.AbstractEntityMetadata;
import com.adobe.fiber.valueobjects.AvailablePropertyIterator;
import com.adobe.fiber.valueobjects.IPropertyIterator;
import mx.events.ValidationResultEvent;
import com.adobe.fiber.core.model_internal;
import com.adobe.fiber.valueobjects.IModelType;
import mx.events.PropertyChangeEvent;

use namespace model_internal;

[ExcludeClass]
internal class _CustomDatatype4EntityMetadata extends com.adobe.fiber.valueobjects.AbstractEntityMetadata
{
    private static var emptyArray:Array = new Array();

    model_internal static var allProperties:Array = new Array("account_person_id", "user_pwd", "user_name", "first_name", "account_person_title", "parent_account", "last_name");
    model_internal static var allAssociationProperties:Array = new Array();
    model_internal static var allRequiredProperties:Array = new Array("account_person_id", "user_pwd", "user_name", "first_name", "account_person_title", "parent_account", "last_name");
    model_internal static var allAlwaysAvailableProperties:Array = new Array("account_person_id", "user_pwd", "user_name", "first_name", "account_person_title", "parent_account", "last_name");
    model_internal static var guardedProperties:Array = new Array();
    model_internal static var dataProperties:Array = new Array("account_person_id", "user_pwd", "user_name", "first_name", "account_person_title", "parent_account", "last_name");
    model_internal static var derivedProperties:Array = new Array();
    model_internal static var collectionProperties:Array = new Array();
    model_internal static var collectionBaseMap:Object;
    model_internal static var entityName:String = "CustomDatatype4";
    model_internal static var dependentsOnMap:Object;
    model_internal static var dependedOnServices:Array = new Array();

    
    model_internal var _user_pwdIsValid:Boolean;
    model_internal var _user_pwdValidator:com.adobe.fiber.styles.StyleValidator;
    model_internal var _user_pwdIsValidCacheInitialized:Boolean = false;
    model_internal var _user_pwdValidationFailureMessages:Array;
    
    model_internal var _user_nameIsValid:Boolean;
    model_internal var _user_nameValidator:com.adobe.fiber.styles.StyleValidator;
    model_internal var _user_nameIsValidCacheInitialized:Boolean = false;
    model_internal var _user_nameValidationFailureMessages:Array;
    
    model_internal var _first_nameIsValid:Boolean;
    model_internal var _first_nameValidator:com.adobe.fiber.styles.StyleValidator;
    model_internal var _first_nameIsValidCacheInitialized:Boolean = false;
    model_internal var _first_nameValidationFailureMessages:Array;
    
    model_internal var _account_person_titleIsValid:Boolean;
    model_internal var _account_person_titleValidator:com.adobe.fiber.styles.StyleValidator;
    model_internal var _account_person_titleIsValidCacheInitialized:Boolean = false;
    model_internal var _account_person_titleValidationFailureMessages:Array;
    
    model_internal var _last_nameIsValid:Boolean;
    model_internal var _last_nameValidator:com.adobe.fiber.styles.StyleValidator;
    model_internal var _last_nameIsValidCacheInitialized:Boolean = false;
    model_internal var _last_nameValidationFailureMessages:Array;

    model_internal var _instance:_Super_CustomDatatype4;
    model_internal static var _nullStyle:com.adobe.fiber.styles.Style = new com.adobe.fiber.styles.Style();

    public function _CustomDatatype4EntityMetadata(value : _Super_CustomDatatype4)
    {
        // initialize property maps
        if (model_internal::dependentsOnMap == null)
        {
            // depenents map
            model_internal::dependentsOnMap = new Object();
            model_internal::dependentsOnMap["account_person_id"] = new Array();
            model_internal::dependentsOnMap["user_pwd"] = new Array();
            model_internal::dependentsOnMap["user_name"] = new Array();
            model_internal::dependentsOnMap["first_name"] = new Array();
            model_internal::dependentsOnMap["account_person_title"] = new Array();
            model_internal::dependentsOnMap["parent_account"] = new Array();
            model_internal::dependentsOnMap["last_name"] = new Array();

            // collection base map
            model_internal::collectionBaseMap = new Object()
        }

        model_internal::_instance = value;
        model_internal::_user_pwdValidator = new StyleValidator(model_internal::_instance.model_internal::_doValidationForUser_pwd);
        model_internal::_user_pwdValidator.required = true;
        model_internal::_user_pwdValidator.requiredFieldError = "user_pwd is required";
        //model_internal::_user_pwdValidator.source = model_internal::_instance;
        //model_internal::_user_pwdValidator.property = "user_pwd";
        model_internal::_user_nameValidator = new StyleValidator(model_internal::_instance.model_internal::_doValidationForUser_name);
        model_internal::_user_nameValidator.required = true;
        model_internal::_user_nameValidator.requiredFieldError = "user_name is required";
        //model_internal::_user_nameValidator.source = model_internal::_instance;
        //model_internal::_user_nameValidator.property = "user_name";
        model_internal::_first_nameValidator = new StyleValidator(model_internal::_instance.model_internal::_doValidationForFirst_name);
        model_internal::_first_nameValidator.required = true;
        model_internal::_first_nameValidator.requiredFieldError = "first_name is required";
        //model_internal::_first_nameValidator.source = model_internal::_instance;
        //model_internal::_first_nameValidator.property = "first_name";
        model_internal::_account_person_titleValidator = new StyleValidator(model_internal::_instance.model_internal::_doValidationForAccount_person_title);
        model_internal::_account_person_titleValidator.required = true;
        model_internal::_account_person_titleValidator.requiredFieldError = "account_person_title is required";
        //model_internal::_account_person_titleValidator.source = model_internal::_instance;
        //model_internal::_account_person_titleValidator.property = "account_person_title";
        model_internal::_last_nameValidator = new StyleValidator(model_internal::_instance.model_internal::_doValidationForLast_name);
        model_internal::_last_nameValidator.required = true;
        model_internal::_last_nameValidator.requiredFieldError = "last_name is required";
        //model_internal::_last_nameValidator.source = model_internal::_instance;
        //model_internal::_last_nameValidator.property = "last_name";
    }

    override public function getEntityName():String
    {
        return model_internal::entityName;
    }

    override public function getProperties():Array
    {
        return model_internal::allProperties;
    }

    override public function getAssociationProperties():Array
    {
        return model_internal::allAssociationProperties;
    }

    override public function getRequiredProperties():Array
    {
         return model_internal::allRequiredProperties;   
    }

    override public function getDataProperties():Array
    {
        return model_internal::dataProperties;
    }

    override public function getGuardedProperties():Array
    {
        return model_internal::guardedProperties;
    }

    override public function getUnguardedProperties():Array
    {
        return model_internal::allAlwaysAvailableProperties;
    }

    override public function getDependants(propertyName:String):Array
    {
       if (model_internal::dataProperties.indexOf(propertyName) == -1)
            throw new Error(propertyName + " is not a data property of entity CustomDatatype4");  
            
       return model_internal::dependentsOnMap[propertyName] as Array;  
    }

    override public function getDependedOnServices():Array
    {
        return model_internal::dependedOnServices;
    }

    override public function getCollectionProperties():Array
    {
        return model_internal::collectionProperties;
    }

    override public function getCollectionBase(propertyName:String):String
    {
        if (model_internal::collectionProperties.indexOf(propertyName) == -1)
            throw new Error(propertyName + " is not a collection property of entity CustomDatatype4");  

        return model_internal::collectionBaseMap[propertyName];
    }

    override public function getAvailableProperties():com.adobe.fiber.valueobjects.IPropertyIterator
    {
        return new com.adobe.fiber.valueobjects.AvailablePropertyIterator(this);
    }

    override public function getValue(propertyName:String):*
    {
        if (model_internal::allProperties.indexOf(propertyName) == -1)
        {
            throw new Error(propertyName + " does not exist for entity CustomDatatype4");
        }

        return model_internal::_instance[propertyName];
    }

    override public function setValue(propertyName:String, value:*):void
    {
        if (model_internal::dataProperties.indexOf(propertyName) == -1)
        {
            throw new Error(propertyName + " is not a data property of entity CustomDatatype4");
        }

        model_internal::_instance[propertyName] = value;
    }

    override public function getMappedByProperty(associationProperty:String):String
    {
        switch(associationProperty)
        {
            default:
            {
                return null;
            }
        }
    }

    override public function getPropertyLength(propertyName:String):int
    {
        switch(propertyName)
        {
            default:
            {
                return 0;
            }
        }
    }

    override public function isAvailable(propertyName:String):Boolean
    {
        if (model_internal::allProperties.indexOf(propertyName) == -1)
        {
            throw new Error(propertyName + " does not exist for entity CustomDatatype4");
        }

        if (model_internal::allAlwaysAvailableProperties.indexOf(propertyName) != -1)
        {
            return true;
        }

        switch(propertyName)
        {
            default:
            {
                return true;
            }
        }
    }

    override public function getIdentityMap():Object
    {
        var returnMap:Object = new Object();

        return returnMap;
    }

    [Bindable(event="propertyChange")]
    override public function get invalidConstraints():Array
    {
        if (model_internal::_instance.model_internal::_cacheInitialized_isValid)
        {
            return model_internal::_instance.model_internal::_invalidConstraints;
        }
        else
        {
            // recalculate isValid
            model_internal::_instance.model_internal::_isValid = model_internal::_instance.model_internal::calculateIsValid();
            return model_internal::_instance.model_internal::_invalidConstraints;        
        }
    }

    [Bindable(event="propertyChange")]
    override public function get validationFailureMessages():Array
    {
        if (model_internal::_instance.model_internal::_cacheInitialized_isValid)
        {
            return model_internal::_instance.model_internal::_validationFailureMessages;
        }
        else
        {
            // recalculate isValid
            model_internal::_instance.model_internal::_isValid = model_internal::_instance.model_internal::calculateIsValid();
            return model_internal::_instance.model_internal::_validationFailureMessages;
        }
    }

    override public function getDependantInvalidConstraints(propertyName:String):Array
    {
        var dependants:Array = getDependants(propertyName);
        if (dependants.length == 0)
        {
            return emptyArray;
        }

        var currentlyInvalid:Array = invalidConstraints;
        if (currentlyInvalid.length == 0)
        {
            return emptyArray;
        }

        var filterFunc:Function = function(element:*, index:int, arr:Array):Boolean
        {
            return dependants.indexOf(element) > -1;
        }

        return currentlyInvalid.filter(filterFunc);
    }

    /**
     * isValid
     */
    [Bindable(event="propertyChange")] 
    public function get isValid() : Boolean
    {
        if (model_internal::_instance.model_internal::_cacheInitialized_isValid)
        {
            return model_internal::_instance.model_internal::_isValid;
        }
        else
        {
            // recalculate isValid
            model_internal::_instance.model_internal::_isValid = model_internal::_instance.model_internal::calculateIsValid();
            return model_internal::_instance.model_internal::_isValid;
        }
    }

    [Bindable(event="propertyChange")]
    public function get isAccount_person_idAvailable():Boolean
    {
        return true;
    }

    [Bindable(event="propertyChange")]
    public function get isUser_pwdAvailable():Boolean
    {
        return true;
    }

    [Bindable(event="propertyChange")]
    public function get isUser_nameAvailable():Boolean
    {
        return true;
    }

    [Bindable(event="propertyChange")]
    public function get isFirst_nameAvailable():Boolean
    {
        return true;
    }

    [Bindable(event="propertyChange")]
    public function get isAccount_person_titleAvailable():Boolean
    {
        return true;
    }

    [Bindable(event="propertyChange")]
    public function get isParent_accountAvailable():Boolean
    {
        return true;
    }

    [Bindable(event="propertyChange")]
    public function get isLast_nameAvailable():Boolean
    {
        return true;
    }


    /**
     * derived property recalculation
     */
    public function invalidateDependentOnUser_pwd():void
    {
        if (model_internal::_user_pwdIsValidCacheInitialized )
        {
            model_internal::_instance.model_internal::_doValidationCacheOfUser_pwd = null;
            model_internal::calculateUser_pwdIsValid();
        }
    }
    public function invalidateDependentOnUser_name():void
    {
        if (model_internal::_user_nameIsValidCacheInitialized )
        {
            model_internal::_instance.model_internal::_doValidationCacheOfUser_name = null;
            model_internal::calculateUser_nameIsValid();
        }
    }
    public function invalidateDependentOnFirst_name():void
    {
        if (model_internal::_first_nameIsValidCacheInitialized )
        {
            model_internal::_instance.model_internal::_doValidationCacheOfFirst_name = null;
            model_internal::calculateFirst_nameIsValid();
        }
    }
    public function invalidateDependentOnAccount_person_title():void
    {
        if (model_internal::_account_person_titleIsValidCacheInitialized )
        {
            model_internal::_instance.model_internal::_doValidationCacheOfAccount_person_title = null;
            model_internal::calculateAccount_person_titleIsValid();
        }
    }
    public function invalidateDependentOnLast_name():void
    {
        if (model_internal::_last_nameIsValidCacheInitialized )
        {
            model_internal::_instance.model_internal::_doValidationCacheOfLast_name = null;
            model_internal::calculateLast_nameIsValid();
        }
    }

    model_internal function fireChangeEvent(propertyName:String, oldValue:Object, newValue:Object):void
    {
        this.dispatchEvent(mx.events.PropertyChangeEvent.createUpdateEvent(this, propertyName, oldValue, newValue));
    }

    [Bindable(event="propertyChange")]   
    public function get account_person_idStyle():com.adobe.fiber.styles.Style
    {
        return model_internal::_nullStyle;
    }

    [Bindable(event="propertyChange")]   
    public function get user_pwdStyle():com.adobe.fiber.styles.Style
    {
        return model_internal::_nullStyle;
    }

    public function get user_pwdValidator() : StyleValidator
    {
        return model_internal::_user_pwdValidator;
    }

    model_internal function set _user_pwdIsValid_der(value:Boolean):void 
    {
        var oldValue:Boolean = model_internal::_user_pwdIsValid;         
        if (oldValue !== value)
        {
            model_internal::_user_pwdIsValid = value;
            this.dispatchEvent(mx.events.PropertyChangeEvent.createUpdateEvent(this, "user_pwdIsValid", oldValue, value));
        }                             
    }

    [Bindable(event="propertyChange")]
    public function get user_pwdIsValid():Boolean
    {
        if (!model_internal::_user_pwdIsValidCacheInitialized)
        {
            model_internal::calculateUser_pwdIsValid();
        }

        return model_internal::_user_pwdIsValid;
    }

    model_internal function calculateUser_pwdIsValid():void
    {
        var valRes:ValidationResultEvent = model_internal::_user_pwdValidator.validate(model_internal::_instance.user_pwd)
        model_internal::_user_pwdIsValid_der = (valRes.results == null);
        model_internal::_user_pwdIsValidCacheInitialized = true;
        if (valRes.results == null)
             model_internal::user_pwdValidationFailureMessages_der = emptyArray;
        else
        {
            var _valFailures:Array = new Array();
            for (var a:int = 0 ; a<valRes.results.length ; a++)
            {
                _valFailures.push(valRes.results[a].errorMessage);
            }
            model_internal::user_pwdValidationFailureMessages_der = _valFailures;
        }
    }

    [Bindable(event="propertyChange")]
    public function get user_pwdValidationFailureMessages():Array
    {
        if (model_internal::_user_pwdValidationFailureMessages == null)
            model_internal::calculateUser_pwdIsValid();

        return _user_pwdValidationFailureMessages;
    }

    model_internal function set user_pwdValidationFailureMessages_der(value:Array) : void
    {
        var oldValue:Array = model_internal::_user_pwdValidationFailureMessages;

        var needUpdate : Boolean = false;
        if (oldValue == null)
            needUpdate = true;
    
        // avoid firing the event when old and new value are different empty arrays
        if (!needUpdate && (oldValue !== value && (oldValue.length > 0 || value.length > 0)))
        {
            if (oldValue.length == value.length)
            {
                for (var a:int=0; a < oldValue.length; a++)
                {
                    if (oldValue[a] !== value[a])
                    {
                        needUpdate = true;
                        break;
                    }
                }
            }
            else
            {
                needUpdate = true;
            }
        }

        if (needUpdate)
        {
            model_internal::_user_pwdValidationFailureMessages = value;   
            this.dispatchEvent(mx.events.PropertyChangeEvent.createUpdateEvent(this, "user_pwdValidationFailureMessages", oldValue, value));
            // Only execute calculateIsValid if it has been called before, to update the validationFailureMessages for
            // the entire entity.
            if (model_internal::_instance.model_internal::_cacheInitialized_isValid)
            {
                model_internal::_instance.model_internal::isValid_der = model_internal::_instance.model_internal::calculateIsValid();
            }
        }
    }

    [Bindable(event="propertyChange")]   
    public function get user_nameStyle():com.adobe.fiber.styles.Style
    {
        return model_internal::_nullStyle;
    }

    public function get user_nameValidator() : StyleValidator
    {
        return model_internal::_user_nameValidator;
    }

    model_internal function set _user_nameIsValid_der(value:Boolean):void 
    {
        var oldValue:Boolean = model_internal::_user_nameIsValid;         
        if (oldValue !== value)
        {
            model_internal::_user_nameIsValid = value;
            this.dispatchEvent(mx.events.PropertyChangeEvent.createUpdateEvent(this, "user_nameIsValid", oldValue, value));
        }                             
    }

    [Bindable(event="propertyChange")]
    public function get user_nameIsValid():Boolean
    {
        if (!model_internal::_user_nameIsValidCacheInitialized)
        {
            model_internal::calculateUser_nameIsValid();
        }

        return model_internal::_user_nameIsValid;
    }

    model_internal function calculateUser_nameIsValid():void
    {
        var valRes:ValidationResultEvent = model_internal::_user_nameValidator.validate(model_internal::_instance.user_name)
        model_internal::_user_nameIsValid_der = (valRes.results == null);
        model_internal::_user_nameIsValidCacheInitialized = true;
        if (valRes.results == null)
             model_internal::user_nameValidationFailureMessages_der = emptyArray;
        else
        {
            var _valFailures:Array = new Array();
            for (var a:int = 0 ; a<valRes.results.length ; a++)
            {
                _valFailures.push(valRes.results[a].errorMessage);
            }
            model_internal::user_nameValidationFailureMessages_der = _valFailures;
        }
    }

    [Bindable(event="propertyChange")]
    public function get user_nameValidationFailureMessages():Array
    {
        if (model_internal::_user_nameValidationFailureMessages == null)
            model_internal::calculateUser_nameIsValid();

        return _user_nameValidationFailureMessages;
    }

    model_internal function set user_nameValidationFailureMessages_der(value:Array) : void
    {
        var oldValue:Array = model_internal::_user_nameValidationFailureMessages;

        var needUpdate : Boolean = false;
        if (oldValue == null)
            needUpdate = true;
    
        // avoid firing the event when old and new value are different empty arrays
        if (!needUpdate && (oldValue !== value && (oldValue.length > 0 || value.length > 0)))
        {
            if (oldValue.length == value.length)
            {
                for (var a:int=0; a < oldValue.length; a++)
                {
                    if (oldValue[a] !== value[a])
                    {
                        needUpdate = true;
                        break;
                    }
                }
            }
            else
            {
                needUpdate = true;
            }
        }

        if (needUpdate)
        {
            model_internal::_user_nameValidationFailureMessages = value;   
            this.dispatchEvent(mx.events.PropertyChangeEvent.createUpdateEvent(this, "user_nameValidationFailureMessages", oldValue, value));
            // Only execute calculateIsValid if it has been called before, to update the validationFailureMessages for
            // the entire entity.
            if (model_internal::_instance.model_internal::_cacheInitialized_isValid)
            {
                model_internal::_instance.model_internal::isValid_der = model_internal::_instance.model_internal::calculateIsValid();
            }
        }
    }

    [Bindable(event="propertyChange")]   
    public function get first_nameStyle():com.adobe.fiber.styles.Style
    {
        return model_internal::_nullStyle;
    }

    public function get first_nameValidator() : StyleValidator
    {
        return model_internal::_first_nameValidator;
    }

    model_internal function set _first_nameIsValid_der(value:Boolean):void 
    {
        var oldValue:Boolean = model_internal::_first_nameIsValid;         
        if (oldValue !== value)
        {
            model_internal::_first_nameIsValid = value;
            this.dispatchEvent(mx.events.PropertyChangeEvent.createUpdateEvent(this, "first_nameIsValid", oldValue, value));
        }                             
    }

    [Bindable(event="propertyChange")]
    public function get first_nameIsValid():Boolean
    {
        if (!model_internal::_first_nameIsValidCacheInitialized)
        {
            model_internal::calculateFirst_nameIsValid();
        }

        return model_internal::_first_nameIsValid;
    }

    model_internal function calculateFirst_nameIsValid():void
    {
        var valRes:ValidationResultEvent = model_internal::_first_nameValidator.validate(model_internal::_instance.first_name)
        model_internal::_first_nameIsValid_der = (valRes.results == null);
        model_internal::_first_nameIsValidCacheInitialized = true;
        if (valRes.results == null)
             model_internal::first_nameValidationFailureMessages_der = emptyArray;
        else
        {
            var _valFailures:Array = new Array();
            for (var a:int = 0 ; a<valRes.results.length ; a++)
            {
                _valFailures.push(valRes.results[a].errorMessage);
            }
            model_internal::first_nameValidationFailureMessages_der = _valFailures;
        }
    }

    [Bindable(event="propertyChange")]
    public function get first_nameValidationFailureMessages():Array
    {
        if (model_internal::_first_nameValidationFailureMessages == null)
            model_internal::calculateFirst_nameIsValid();

        return _first_nameValidationFailureMessages;
    }

    model_internal function set first_nameValidationFailureMessages_der(value:Array) : void
    {
        var oldValue:Array = model_internal::_first_nameValidationFailureMessages;

        var needUpdate : Boolean = false;
        if (oldValue == null)
            needUpdate = true;
    
        // avoid firing the event when old and new value are different empty arrays
        if (!needUpdate && (oldValue !== value && (oldValue.length > 0 || value.length > 0)))
        {
            if (oldValue.length == value.length)
            {
                for (var a:int=0; a < oldValue.length; a++)
                {
                    if (oldValue[a] !== value[a])
                    {
                        needUpdate = true;
                        break;
                    }
                }
            }
            else
            {
                needUpdate = true;
            }
        }

        if (needUpdate)
        {
            model_internal::_first_nameValidationFailureMessages = value;   
            this.dispatchEvent(mx.events.PropertyChangeEvent.createUpdateEvent(this, "first_nameValidationFailureMessages", oldValue, value));
            // Only execute calculateIsValid if it has been called before, to update the validationFailureMessages for
            // the entire entity.
            if (model_internal::_instance.model_internal::_cacheInitialized_isValid)
            {
                model_internal::_instance.model_internal::isValid_der = model_internal::_instance.model_internal::calculateIsValid();
            }
        }
    }

    [Bindable(event="propertyChange")]   
    public function get account_person_titleStyle():com.adobe.fiber.styles.Style
    {
        return model_internal::_nullStyle;
    }

    public function get account_person_titleValidator() : StyleValidator
    {
        return model_internal::_account_person_titleValidator;
    }

    model_internal function set _account_person_titleIsValid_der(value:Boolean):void 
    {
        var oldValue:Boolean = model_internal::_account_person_titleIsValid;         
        if (oldValue !== value)
        {
            model_internal::_account_person_titleIsValid = value;
            this.dispatchEvent(mx.events.PropertyChangeEvent.createUpdateEvent(this, "account_person_titleIsValid", oldValue, value));
        }                             
    }

    [Bindable(event="propertyChange")]
    public function get account_person_titleIsValid():Boolean
    {
        if (!model_internal::_account_person_titleIsValidCacheInitialized)
        {
            model_internal::calculateAccount_person_titleIsValid();
        }

        return model_internal::_account_person_titleIsValid;
    }

    model_internal function calculateAccount_person_titleIsValid():void
    {
        var valRes:ValidationResultEvent = model_internal::_account_person_titleValidator.validate(model_internal::_instance.account_person_title)
        model_internal::_account_person_titleIsValid_der = (valRes.results == null);
        model_internal::_account_person_titleIsValidCacheInitialized = true;
        if (valRes.results == null)
             model_internal::account_person_titleValidationFailureMessages_der = emptyArray;
        else
        {
            var _valFailures:Array = new Array();
            for (var a:int = 0 ; a<valRes.results.length ; a++)
            {
                _valFailures.push(valRes.results[a].errorMessage);
            }
            model_internal::account_person_titleValidationFailureMessages_der = _valFailures;
        }
    }

    [Bindable(event="propertyChange")]
    public function get account_person_titleValidationFailureMessages():Array
    {
        if (model_internal::_account_person_titleValidationFailureMessages == null)
            model_internal::calculateAccount_person_titleIsValid();

        return _account_person_titleValidationFailureMessages;
    }

    model_internal function set account_person_titleValidationFailureMessages_der(value:Array) : void
    {
        var oldValue:Array = model_internal::_account_person_titleValidationFailureMessages;

        var needUpdate : Boolean = false;
        if (oldValue == null)
            needUpdate = true;
    
        // avoid firing the event when old and new value are different empty arrays
        if (!needUpdate && (oldValue !== value && (oldValue.length > 0 || value.length > 0)))
        {
            if (oldValue.length == value.length)
            {
                for (var a:int=0; a < oldValue.length; a++)
                {
                    if (oldValue[a] !== value[a])
                    {
                        needUpdate = true;
                        break;
                    }
                }
            }
            else
            {
                needUpdate = true;
            }
        }

        if (needUpdate)
        {
            model_internal::_account_person_titleValidationFailureMessages = value;   
            this.dispatchEvent(mx.events.PropertyChangeEvent.createUpdateEvent(this, "account_person_titleValidationFailureMessages", oldValue, value));
            // Only execute calculateIsValid if it has been called before, to update the validationFailureMessages for
            // the entire entity.
            if (model_internal::_instance.model_internal::_cacheInitialized_isValid)
            {
                model_internal::_instance.model_internal::isValid_der = model_internal::_instance.model_internal::calculateIsValid();
            }
        }
    }

    [Bindable(event="propertyChange")]   
    public function get parent_accountStyle():com.adobe.fiber.styles.Style
    {
        return model_internal::_nullStyle;
    }

    [Bindable(event="propertyChange")]   
    public function get last_nameStyle():com.adobe.fiber.styles.Style
    {
        return model_internal::_nullStyle;
    }

    public function get last_nameValidator() : StyleValidator
    {
        return model_internal::_last_nameValidator;
    }

    model_internal function set _last_nameIsValid_der(value:Boolean):void 
    {
        var oldValue:Boolean = model_internal::_last_nameIsValid;         
        if (oldValue !== value)
        {
            model_internal::_last_nameIsValid = value;
            this.dispatchEvent(mx.events.PropertyChangeEvent.createUpdateEvent(this, "last_nameIsValid", oldValue, value));
        }                             
    }

    [Bindable(event="propertyChange")]
    public function get last_nameIsValid():Boolean
    {
        if (!model_internal::_last_nameIsValidCacheInitialized)
        {
            model_internal::calculateLast_nameIsValid();
        }

        return model_internal::_last_nameIsValid;
    }

    model_internal function calculateLast_nameIsValid():void
    {
        var valRes:ValidationResultEvent = model_internal::_last_nameValidator.validate(model_internal::_instance.last_name)
        model_internal::_last_nameIsValid_der = (valRes.results == null);
        model_internal::_last_nameIsValidCacheInitialized = true;
        if (valRes.results == null)
             model_internal::last_nameValidationFailureMessages_der = emptyArray;
        else
        {
            var _valFailures:Array = new Array();
            for (var a:int = 0 ; a<valRes.results.length ; a++)
            {
                _valFailures.push(valRes.results[a].errorMessage);
            }
            model_internal::last_nameValidationFailureMessages_der = _valFailures;
        }
    }

    [Bindable(event="propertyChange")]
    public function get last_nameValidationFailureMessages():Array
    {
        if (model_internal::_last_nameValidationFailureMessages == null)
            model_internal::calculateLast_nameIsValid();

        return _last_nameValidationFailureMessages;
    }

    model_internal function set last_nameValidationFailureMessages_der(value:Array) : void
    {
        var oldValue:Array = model_internal::_last_nameValidationFailureMessages;

        var needUpdate : Boolean = false;
        if (oldValue == null)
            needUpdate = true;
    
        // avoid firing the event when old and new value are different empty arrays
        if (!needUpdate && (oldValue !== value && (oldValue.length > 0 || value.length > 0)))
        {
            if (oldValue.length == value.length)
            {
                for (var a:int=0; a < oldValue.length; a++)
                {
                    if (oldValue[a] !== value[a])
                    {
                        needUpdate = true;
                        break;
                    }
                }
            }
            else
            {
                needUpdate = true;
            }
        }

        if (needUpdate)
        {
            model_internal::_last_nameValidationFailureMessages = value;   
            this.dispatchEvent(mx.events.PropertyChangeEvent.createUpdateEvent(this, "last_nameValidationFailureMessages", oldValue, value));
            // Only execute calculateIsValid if it has been called before, to update the validationFailureMessages for
            // the entire entity.
            if (model_internal::_instance.model_internal::_cacheInitialized_isValid)
            {
                model_internal::_instance.model_internal::isValid_der = model_internal::_instance.model_internal::calculateIsValid();
            }
        }
    }


     /**
     * 
     * @inheritDoc 
     */ 
     override public function getStyle(propertyName:String):com.adobe.fiber.styles.IStyle
     {
         switch(propertyName)
         {
            default:
            {
                return null;
            }
         }
     }
     
     /**
     * 
     * @inheritDoc 
     *  
     */  
     override public function getPropertyValidationFailureMessages(propertyName:String):Array
     {
         switch(propertyName)
         {
            case("user_pwd"):
            {
                return user_pwdValidationFailureMessages;
            }
            case("user_name"):
            {
                return user_nameValidationFailureMessages;
            }
            case("first_name"):
            {
                return first_nameValidationFailureMessages;
            }
            case("account_person_title"):
            {
                return account_person_titleValidationFailureMessages;
            }
            case("last_name"):
            {
                return last_nameValidationFailureMessages;
            }
            default:
            {
                return emptyArray;
            }
         }
     }

}

}
