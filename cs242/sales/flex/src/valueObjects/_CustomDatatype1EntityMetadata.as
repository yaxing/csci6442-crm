
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
internal class _CustomDatatype1EntityMetadata extends com.adobe.fiber.valueobjects.AbstractEntityMetadata
{
    private static var emptyArray:Array = new Array();

    model_internal static var allProperties:Array = new Array("date_as_customer", "date_entered", "account_id", "website", "customer_type", "account_name");
    model_internal static var allAssociationProperties:Array = new Array();
    model_internal static var allRequiredProperties:Array = new Array("date_as_customer", "date_entered", "account_id", "website", "customer_type", "account_name");
    model_internal static var allAlwaysAvailableProperties:Array = new Array("date_as_customer", "date_entered", "account_id", "website", "customer_type", "account_name");
    model_internal static var guardedProperties:Array = new Array();
    model_internal static var dataProperties:Array = new Array("date_as_customer", "date_entered", "account_id", "website", "customer_type", "account_name");
    model_internal static var derivedProperties:Array = new Array();
    model_internal static var collectionProperties:Array = new Array();
    model_internal static var collectionBaseMap:Object;
    model_internal static var entityName:String = "CustomDatatype1";
    model_internal static var dependentsOnMap:Object;
    model_internal static var dependedOnServices:Array = new Array();

    
    model_internal var _date_as_customerIsValid:Boolean;
    model_internal var _date_as_customerValidator:com.adobe.fiber.styles.StyleValidator;
    model_internal var _date_as_customerIsValidCacheInitialized:Boolean = false;
    model_internal var _date_as_customerValidationFailureMessages:Array;
    
    model_internal var _date_enteredIsValid:Boolean;
    model_internal var _date_enteredValidator:com.adobe.fiber.styles.StyleValidator;
    model_internal var _date_enteredIsValidCacheInitialized:Boolean = false;
    model_internal var _date_enteredValidationFailureMessages:Array;
    
    model_internal var _websiteIsValid:Boolean;
    model_internal var _websiteValidator:com.adobe.fiber.styles.StyleValidator;
    model_internal var _websiteIsValidCacheInitialized:Boolean = false;
    model_internal var _websiteValidationFailureMessages:Array;
    
    model_internal var _customer_typeIsValid:Boolean;
    model_internal var _customer_typeValidator:com.adobe.fiber.styles.StyleValidator;
    model_internal var _customer_typeIsValidCacheInitialized:Boolean = false;
    model_internal var _customer_typeValidationFailureMessages:Array;
    
    model_internal var _account_nameIsValid:Boolean;
    model_internal var _account_nameValidator:com.adobe.fiber.styles.StyleValidator;
    model_internal var _account_nameIsValidCacheInitialized:Boolean = false;
    model_internal var _account_nameValidationFailureMessages:Array;

    model_internal var _instance:_Super_CustomDatatype1;
    model_internal static var _nullStyle:com.adobe.fiber.styles.Style = new com.adobe.fiber.styles.Style();

    public function _CustomDatatype1EntityMetadata(value : _Super_CustomDatatype1)
    {
        // initialize property maps
        if (model_internal::dependentsOnMap == null)
        {
            // depenents map
            model_internal::dependentsOnMap = new Object();
            model_internal::dependentsOnMap["date_as_customer"] = new Array();
            model_internal::dependentsOnMap["date_entered"] = new Array();
            model_internal::dependentsOnMap["account_id"] = new Array();
            model_internal::dependentsOnMap["website"] = new Array();
            model_internal::dependentsOnMap["customer_type"] = new Array();
            model_internal::dependentsOnMap["account_name"] = new Array();

            // collection base map
            model_internal::collectionBaseMap = new Object()
        }

        model_internal::_instance = value;
        model_internal::_date_as_customerValidator = new StyleValidator(model_internal::_instance.model_internal::_doValidationForDate_as_customer);
        model_internal::_date_as_customerValidator.required = true;
        model_internal::_date_as_customerValidator.requiredFieldError = "date_as_customer is required";
        //model_internal::_date_as_customerValidator.source = model_internal::_instance;
        //model_internal::_date_as_customerValidator.property = "date_as_customer";
        model_internal::_date_enteredValidator = new StyleValidator(model_internal::_instance.model_internal::_doValidationForDate_entered);
        model_internal::_date_enteredValidator.required = true;
        model_internal::_date_enteredValidator.requiredFieldError = "date_entered is required";
        //model_internal::_date_enteredValidator.source = model_internal::_instance;
        //model_internal::_date_enteredValidator.property = "date_entered";
        model_internal::_websiteValidator = new StyleValidator(model_internal::_instance.model_internal::_doValidationForWebsite);
        model_internal::_websiteValidator.required = true;
        model_internal::_websiteValidator.requiredFieldError = "website is required";
        //model_internal::_websiteValidator.source = model_internal::_instance;
        //model_internal::_websiteValidator.property = "website";
        model_internal::_customer_typeValidator = new StyleValidator(model_internal::_instance.model_internal::_doValidationForCustomer_type);
        model_internal::_customer_typeValidator.required = true;
        model_internal::_customer_typeValidator.requiredFieldError = "customer_type is required";
        //model_internal::_customer_typeValidator.source = model_internal::_instance;
        //model_internal::_customer_typeValidator.property = "customer_type";
        model_internal::_account_nameValidator = new StyleValidator(model_internal::_instance.model_internal::_doValidationForAccount_name);
        model_internal::_account_nameValidator.required = true;
        model_internal::_account_nameValidator.requiredFieldError = "account_name is required";
        //model_internal::_account_nameValidator.source = model_internal::_instance;
        //model_internal::_account_nameValidator.property = "account_name";
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
            throw new Error(propertyName + " is not a data property of entity CustomDatatype1");  
            
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
            throw new Error(propertyName + " is not a collection property of entity CustomDatatype1");  

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
            throw new Error(propertyName + " does not exist for entity CustomDatatype1");
        }

        return model_internal::_instance[propertyName];
    }

    override public function setValue(propertyName:String, value:*):void
    {
        if (model_internal::dataProperties.indexOf(propertyName) == -1)
        {
            throw new Error(propertyName + " is not a data property of entity CustomDatatype1");
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
            throw new Error(propertyName + " does not exist for entity CustomDatatype1");
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
    public function get isDate_as_customerAvailable():Boolean
    {
        return true;
    }

    [Bindable(event="propertyChange")]
    public function get isDate_enteredAvailable():Boolean
    {
        return true;
    }

    [Bindable(event="propertyChange")]
    public function get isAccount_idAvailable():Boolean
    {
        return true;
    }

    [Bindable(event="propertyChange")]
    public function get isWebsiteAvailable():Boolean
    {
        return true;
    }

    [Bindable(event="propertyChange")]
    public function get isCustomer_typeAvailable():Boolean
    {
        return true;
    }

    [Bindable(event="propertyChange")]
    public function get isAccount_nameAvailable():Boolean
    {
        return true;
    }


    /**
     * derived property recalculation
     */
    public function invalidateDependentOnDate_as_customer():void
    {
        if (model_internal::_date_as_customerIsValidCacheInitialized )
        {
            model_internal::_instance.model_internal::_doValidationCacheOfDate_as_customer = null;
            model_internal::calculateDate_as_customerIsValid();
        }
    }
    public function invalidateDependentOnDate_entered():void
    {
        if (model_internal::_date_enteredIsValidCacheInitialized )
        {
            model_internal::_instance.model_internal::_doValidationCacheOfDate_entered = null;
            model_internal::calculateDate_enteredIsValid();
        }
    }
    public function invalidateDependentOnWebsite():void
    {
        if (model_internal::_websiteIsValidCacheInitialized )
        {
            model_internal::_instance.model_internal::_doValidationCacheOfWebsite = null;
            model_internal::calculateWebsiteIsValid();
        }
    }
    public function invalidateDependentOnCustomer_type():void
    {
        if (model_internal::_customer_typeIsValidCacheInitialized )
        {
            model_internal::_instance.model_internal::_doValidationCacheOfCustomer_type = null;
            model_internal::calculateCustomer_typeIsValid();
        }
    }
    public function invalidateDependentOnAccount_name():void
    {
        if (model_internal::_account_nameIsValidCacheInitialized )
        {
            model_internal::_instance.model_internal::_doValidationCacheOfAccount_name = null;
            model_internal::calculateAccount_nameIsValid();
        }
    }

    model_internal function fireChangeEvent(propertyName:String, oldValue:Object, newValue:Object):void
    {
        this.dispatchEvent(mx.events.PropertyChangeEvent.createUpdateEvent(this, propertyName, oldValue, newValue));
    }

    [Bindable(event="propertyChange")]   
    public function get date_as_customerStyle():com.adobe.fiber.styles.Style
    {
        return model_internal::_nullStyle;
    }

    public function get date_as_customerValidator() : StyleValidator
    {
        return model_internal::_date_as_customerValidator;
    }

    model_internal function set _date_as_customerIsValid_der(value:Boolean):void 
    {
        var oldValue:Boolean = model_internal::_date_as_customerIsValid;         
        if (oldValue !== value)
        {
            model_internal::_date_as_customerIsValid = value;
            this.dispatchEvent(mx.events.PropertyChangeEvent.createUpdateEvent(this, "date_as_customerIsValid", oldValue, value));
        }                             
    }

    [Bindable(event="propertyChange")]
    public function get date_as_customerIsValid():Boolean
    {
        if (!model_internal::_date_as_customerIsValidCacheInitialized)
        {
            model_internal::calculateDate_as_customerIsValid();
        }

        return model_internal::_date_as_customerIsValid;
    }

    model_internal function calculateDate_as_customerIsValid():void
    {
        var valRes:ValidationResultEvent = model_internal::_date_as_customerValidator.validate(model_internal::_instance.date_as_customer)
        model_internal::_date_as_customerIsValid_der = (valRes.results == null);
        model_internal::_date_as_customerIsValidCacheInitialized = true;
        if (valRes.results == null)
             model_internal::date_as_customerValidationFailureMessages_der = emptyArray;
        else
        {
            var _valFailures:Array = new Array();
            for (var a:int = 0 ; a<valRes.results.length ; a++)
            {
                _valFailures.push(valRes.results[a].errorMessage);
            }
            model_internal::date_as_customerValidationFailureMessages_der = _valFailures;
        }
    }

    [Bindable(event="propertyChange")]
    public function get date_as_customerValidationFailureMessages():Array
    {
        if (model_internal::_date_as_customerValidationFailureMessages == null)
            model_internal::calculateDate_as_customerIsValid();

        return _date_as_customerValidationFailureMessages;
    }

    model_internal function set date_as_customerValidationFailureMessages_der(value:Array) : void
    {
        var oldValue:Array = model_internal::_date_as_customerValidationFailureMessages;

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
            model_internal::_date_as_customerValidationFailureMessages = value;   
            this.dispatchEvent(mx.events.PropertyChangeEvent.createUpdateEvent(this, "date_as_customerValidationFailureMessages", oldValue, value));
            // Only execute calculateIsValid if it has been called before, to update the validationFailureMessages for
            // the entire entity.
            if (model_internal::_instance.model_internal::_cacheInitialized_isValid)
            {
                model_internal::_instance.model_internal::isValid_der = model_internal::_instance.model_internal::calculateIsValid();
            }
        }
    }

    [Bindable(event="propertyChange")]   
    public function get date_enteredStyle():com.adobe.fiber.styles.Style
    {
        return model_internal::_nullStyle;
    }

    public function get date_enteredValidator() : StyleValidator
    {
        return model_internal::_date_enteredValidator;
    }

    model_internal function set _date_enteredIsValid_der(value:Boolean):void 
    {
        var oldValue:Boolean = model_internal::_date_enteredIsValid;         
        if (oldValue !== value)
        {
            model_internal::_date_enteredIsValid = value;
            this.dispatchEvent(mx.events.PropertyChangeEvent.createUpdateEvent(this, "date_enteredIsValid", oldValue, value));
        }                             
    }

    [Bindable(event="propertyChange")]
    public function get date_enteredIsValid():Boolean
    {
        if (!model_internal::_date_enteredIsValidCacheInitialized)
        {
            model_internal::calculateDate_enteredIsValid();
        }

        return model_internal::_date_enteredIsValid;
    }

    model_internal function calculateDate_enteredIsValid():void
    {
        var valRes:ValidationResultEvent = model_internal::_date_enteredValidator.validate(model_internal::_instance.date_entered)
        model_internal::_date_enteredIsValid_der = (valRes.results == null);
        model_internal::_date_enteredIsValidCacheInitialized = true;
        if (valRes.results == null)
             model_internal::date_enteredValidationFailureMessages_der = emptyArray;
        else
        {
            var _valFailures:Array = new Array();
            for (var a:int = 0 ; a<valRes.results.length ; a++)
            {
                _valFailures.push(valRes.results[a].errorMessage);
            }
            model_internal::date_enteredValidationFailureMessages_der = _valFailures;
        }
    }

    [Bindable(event="propertyChange")]
    public function get date_enteredValidationFailureMessages():Array
    {
        if (model_internal::_date_enteredValidationFailureMessages == null)
            model_internal::calculateDate_enteredIsValid();

        return _date_enteredValidationFailureMessages;
    }

    model_internal function set date_enteredValidationFailureMessages_der(value:Array) : void
    {
        var oldValue:Array = model_internal::_date_enteredValidationFailureMessages;

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
            model_internal::_date_enteredValidationFailureMessages = value;   
            this.dispatchEvent(mx.events.PropertyChangeEvent.createUpdateEvent(this, "date_enteredValidationFailureMessages", oldValue, value));
            // Only execute calculateIsValid if it has been called before, to update the validationFailureMessages for
            // the entire entity.
            if (model_internal::_instance.model_internal::_cacheInitialized_isValid)
            {
                model_internal::_instance.model_internal::isValid_der = model_internal::_instance.model_internal::calculateIsValid();
            }
        }
    }

    [Bindable(event="propertyChange")]   
    public function get account_idStyle():com.adobe.fiber.styles.Style
    {
        return model_internal::_nullStyle;
    }

    [Bindable(event="propertyChange")]   
    public function get websiteStyle():com.adobe.fiber.styles.Style
    {
        return model_internal::_nullStyle;
    }

    public function get websiteValidator() : StyleValidator
    {
        return model_internal::_websiteValidator;
    }

    model_internal function set _websiteIsValid_der(value:Boolean):void 
    {
        var oldValue:Boolean = model_internal::_websiteIsValid;         
        if (oldValue !== value)
        {
            model_internal::_websiteIsValid = value;
            this.dispatchEvent(mx.events.PropertyChangeEvent.createUpdateEvent(this, "websiteIsValid", oldValue, value));
        }                             
    }

    [Bindable(event="propertyChange")]
    public function get websiteIsValid():Boolean
    {
        if (!model_internal::_websiteIsValidCacheInitialized)
        {
            model_internal::calculateWebsiteIsValid();
        }

        return model_internal::_websiteIsValid;
    }

    model_internal function calculateWebsiteIsValid():void
    {
        var valRes:ValidationResultEvent = model_internal::_websiteValidator.validate(model_internal::_instance.website)
        model_internal::_websiteIsValid_der = (valRes.results == null);
        model_internal::_websiteIsValidCacheInitialized = true;
        if (valRes.results == null)
             model_internal::websiteValidationFailureMessages_der = emptyArray;
        else
        {
            var _valFailures:Array = new Array();
            for (var a:int = 0 ; a<valRes.results.length ; a++)
            {
                _valFailures.push(valRes.results[a].errorMessage);
            }
            model_internal::websiteValidationFailureMessages_der = _valFailures;
        }
    }

    [Bindable(event="propertyChange")]
    public function get websiteValidationFailureMessages():Array
    {
        if (model_internal::_websiteValidationFailureMessages == null)
            model_internal::calculateWebsiteIsValid();

        return _websiteValidationFailureMessages;
    }

    model_internal function set websiteValidationFailureMessages_der(value:Array) : void
    {
        var oldValue:Array = model_internal::_websiteValidationFailureMessages;

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
            model_internal::_websiteValidationFailureMessages = value;   
            this.dispatchEvent(mx.events.PropertyChangeEvent.createUpdateEvent(this, "websiteValidationFailureMessages", oldValue, value));
            // Only execute calculateIsValid if it has been called before, to update the validationFailureMessages for
            // the entire entity.
            if (model_internal::_instance.model_internal::_cacheInitialized_isValid)
            {
                model_internal::_instance.model_internal::isValid_der = model_internal::_instance.model_internal::calculateIsValid();
            }
        }
    }

    [Bindable(event="propertyChange")]   
    public function get customer_typeStyle():com.adobe.fiber.styles.Style
    {
        return model_internal::_nullStyle;
    }

    public function get customer_typeValidator() : StyleValidator
    {
        return model_internal::_customer_typeValidator;
    }

    model_internal function set _customer_typeIsValid_der(value:Boolean):void 
    {
        var oldValue:Boolean = model_internal::_customer_typeIsValid;         
        if (oldValue !== value)
        {
            model_internal::_customer_typeIsValid = value;
            this.dispatchEvent(mx.events.PropertyChangeEvent.createUpdateEvent(this, "customer_typeIsValid", oldValue, value));
        }                             
    }

    [Bindable(event="propertyChange")]
    public function get customer_typeIsValid():Boolean
    {
        if (!model_internal::_customer_typeIsValidCacheInitialized)
        {
            model_internal::calculateCustomer_typeIsValid();
        }

        return model_internal::_customer_typeIsValid;
    }

    model_internal function calculateCustomer_typeIsValid():void
    {
        var valRes:ValidationResultEvent = model_internal::_customer_typeValidator.validate(model_internal::_instance.customer_type)
        model_internal::_customer_typeIsValid_der = (valRes.results == null);
        model_internal::_customer_typeIsValidCacheInitialized = true;
        if (valRes.results == null)
             model_internal::customer_typeValidationFailureMessages_der = emptyArray;
        else
        {
            var _valFailures:Array = new Array();
            for (var a:int = 0 ; a<valRes.results.length ; a++)
            {
                _valFailures.push(valRes.results[a].errorMessage);
            }
            model_internal::customer_typeValidationFailureMessages_der = _valFailures;
        }
    }

    [Bindable(event="propertyChange")]
    public function get customer_typeValidationFailureMessages():Array
    {
        if (model_internal::_customer_typeValidationFailureMessages == null)
            model_internal::calculateCustomer_typeIsValid();

        return _customer_typeValidationFailureMessages;
    }

    model_internal function set customer_typeValidationFailureMessages_der(value:Array) : void
    {
        var oldValue:Array = model_internal::_customer_typeValidationFailureMessages;

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
            model_internal::_customer_typeValidationFailureMessages = value;   
            this.dispatchEvent(mx.events.PropertyChangeEvent.createUpdateEvent(this, "customer_typeValidationFailureMessages", oldValue, value));
            // Only execute calculateIsValid if it has been called before, to update the validationFailureMessages for
            // the entire entity.
            if (model_internal::_instance.model_internal::_cacheInitialized_isValid)
            {
                model_internal::_instance.model_internal::isValid_der = model_internal::_instance.model_internal::calculateIsValid();
            }
        }
    }

    [Bindable(event="propertyChange")]   
    public function get account_nameStyle():com.adobe.fiber.styles.Style
    {
        return model_internal::_nullStyle;
    }

    public function get account_nameValidator() : StyleValidator
    {
        return model_internal::_account_nameValidator;
    }

    model_internal function set _account_nameIsValid_der(value:Boolean):void 
    {
        var oldValue:Boolean = model_internal::_account_nameIsValid;         
        if (oldValue !== value)
        {
            model_internal::_account_nameIsValid = value;
            this.dispatchEvent(mx.events.PropertyChangeEvent.createUpdateEvent(this, "account_nameIsValid", oldValue, value));
        }                             
    }

    [Bindable(event="propertyChange")]
    public function get account_nameIsValid():Boolean
    {
        if (!model_internal::_account_nameIsValidCacheInitialized)
        {
            model_internal::calculateAccount_nameIsValid();
        }

        return model_internal::_account_nameIsValid;
    }

    model_internal function calculateAccount_nameIsValid():void
    {
        var valRes:ValidationResultEvent = model_internal::_account_nameValidator.validate(model_internal::_instance.account_name)
        model_internal::_account_nameIsValid_der = (valRes.results == null);
        model_internal::_account_nameIsValidCacheInitialized = true;
        if (valRes.results == null)
             model_internal::account_nameValidationFailureMessages_der = emptyArray;
        else
        {
            var _valFailures:Array = new Array();
            for (var a:int = 0 ; a<valRes.results.length ; a++)
            {
                _valFailures.push(valRes.results[a].errorMessage);
            }
            model_internal::account_nameValidationFailureMessages_der = _valFailures;
        }
    }

    [Bindable(event="propertyChange")]
    public function get account_nameValidationFailureMessages():Array
    {
        if (model_internal::_account_nameValidationFailureMessages == null)
            model_internal::calculateAccount_nameIsValid();

        return _account_nameValidationFailureMessages;
    }

    model_internal function set account_nameValidationFailureMessages_der(value:Array) : void
    {
        var oldValue:Array = model_internal::_account_nameValidationFailureMessages;

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
            model_internal::_account_nameValidationFailureMessages = value;   
            this.dispatchEvent(mx.events.PropertyChangeEvent.createUpdateEvent(this, "account_nameValidationFailureMessages", oldValue, value));
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
            case("date_as_customer"):
            {
                return date_as_customerValidationFailureMessages;
            }
            case("date_entered"):
            {
                return date_enteredValidationFailureMessages;
            }
            case("website"):
            {
                return websiteValidationFailureMessages;
            }
            case("customer_type"):
            {
                return customer_typeValidationFailureMessages;
            }
            case("account_name"):
            {
                return account_nameValidationFailureMessages;
            }
            default:
            {
                return emptyArray;
            }
         }
     }

}

}
