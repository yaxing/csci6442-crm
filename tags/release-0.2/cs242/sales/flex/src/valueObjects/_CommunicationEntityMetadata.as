
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
internal class _CommunicationEntityMetadata extends com.adobe.fiber.valueobjects.AbstractEntityMetadata
{
    private static var emptyArray:Array = new Array();

    model_internal static var allProperties:Array = new Array("communication_id", "parent_account", "communicated_with", "communicated_by", "communication_title", "communication_description", "date");
    model_internal static var allAssociationProperties:Array = new Array();
    model_internal static var allRequiredProperties:Array = new Array("communication_id", "parent_account", "communicated_with", "communicated_by", "communication_title", "communication_description", "date");
    model_internal static var allAlwaysAvailableProperties:Array = new Array("communication_id", "parent_account", "communicated_with", "communicated_by", "communication_title", "communication_description", "date");
    model_internal static var guardedProperties:Array = new Array();
    model_internal static var dataProperties:Array = new Array("communication_id", "parent_account", "communicated_with", "communicated_by", "communication_title", "communication_description", "date");
    model_internal static var derivedProperties:Array = new Array();
    model_internal static var collectionProperties:Array = new Array();
    model_internal static var collectionBaseMap:Object;
    model_internal static var entityName:String = "Communication";
    model_internal static var dependentsOnMap:Object;
    model_internal static var dependedOnServices:Array = new Array();

    
    model_internal var _communication_titleIsValid:Boolean;
    model_internal var _communication_titleValidator:com.adobe.fiber.styles.StyleValidator;
    model_internal var _communication_titleIsValidCacheInitialized:Boolean = false;
    model_internal var _communication_titleValidationFailureMessages:Array;
    
    model_internal var _communication_descriptionIsValid:Boolean;
    model_internal var _communication_descriptionValidator:com.adobe.fiber.styles.StyleValidator;
    model_internal var _communication_descriptionIsValidCacheInitialized:Boolean = false;
    model_internal var _communication_descriptionValidationFailureMessages:Array;
    
    model_internal var _dateIsValid:Boolean;
    model_internal var _dateValidator:com.adobe.fiber.styles.StyleValidator;
    model_internal var _dateIsValidCacheInitialized:Boolean = false;
    model_internal var _dateValidationFailureMessages:Array;

    model_internal var _instance:_Super_Communication;
    model_internal static var _nullStyle:com.adobe.fiber.styles.Style = new com.adobe.fiber.styles.Style();

    public function _CommunicationEntityMetadata(value : _Super_Communication)
    {
        // initialize property maps
        if (model_internal::dependentsOnMap == null)
        {
            // depenents map
            model_internal::dependentsOnMap = new Object();
            model_internal::dependentsOnMap["communication_id"] = new Array();
            model_internal::dependentsOnMap["parent_account"] = new Array();
            model_internal::dependentsOnMap["communicated_with"] = new Array();
            model_internal::dependentsOnMap["communicated_by"] = new Array();
            model_internal::dependentsOnMap["communication_title"] = new Array();
            model_internal::dependentsOnMap["communication_description"] = new Array();
            model_internal::dependentsOnMap["date"] = new Array();

            // collection base map
            model_internal::collectionBaseMap = new Object()
        }

        model_internal::_instance = value;
        model_internal::_communication_titleValidator = new StyleValidator(model_internal::_instance.model_internal::_doValidationForCommunication_title);
        model_internal::_communication_titleValidator.required = true;
        model_internal::_communication_titleValidator.requiredFieldError = "communication_title is required";
        //model_internal::_communication_titleValidator.source = model_internal::_instance;
        //model_internal::_communication_titleValidator.property = "communication_title";
        model_internal::_communication_descriptionValidator = new StyleValidator(model_internal::_instance.model_internal::_doValidationForCommunication_description);
        model_internal::_communication_descriptionValidator.required = true;
        model_internal::_communication_descriptionValidator.requiredFieldError = "communication_description is required";
        //model_internal::_communication_descriptionValidator.source = model_internal::_instance;
        //model_internal::_communication_descriptionValidator.property = "communication_description";
        model_internal::_dateValidator = new StyleValidator(model_internal::_instance.model_internal::_doValidationForDate);
        model_internal::_dateValidator.required = true;
        model_internal::_dateValidator.requiredFieldError = "date is required";
        //model_internal::_dateValidator.source = model_internal::_instance;
        //model_internal::_dateValidator.property = "date";
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
            throw new Error(propertyName + " is not a data property of entity Communication");  
            
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
            throw new Error(propertyName + " is not a collection property of entity Communication");  

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
            throw new Error(propertyName + " does not exist for entity Communication");
        }

        return model_internal::_instance[propertyName];
    }

    override public function setValue(propertyName:String, value:*):void
    {
        if (model_internal::dataProperties.indexOf(propertyName) == -1)
        {
            throw new Error(propertyName + " is not a data property of entity Communication");
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
            throw new Error(propertyName + " does not exist for entity Communication");
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
        returnMap["communication_id"] = model_internal::_instance.communication_id;

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
    public function get isCommunication_idAvailable():Boolean
    {
        return true;
    }

    [Bindable(event="propertyChange")]
    public function get isParent_accountAvailable():Boolean
    {
        return true;
    }

    [Bindable(event="propertyChange")]
    public function get isCommunicated_withAvailable():Boolean
    {
        return true;
    }

    [Bindable(event="propertyChange")]
    public function get isCommunicated_byAvailable():Boolean
    {
        return true;
    }

    [Bindable(event="propertyChange")]
    public function get isCommunication_titleAvailable():Boolean
    {
        return true;
    }

    [Bindable(event="propertyChange")]
    public function get isCommunication_descriptionAvailable():Boolean
    {
        return true;
    }

    [Bindable(event="propertyChange")]
    public function get isDateAvailable():Boolean
    {
        return true;
    }


    /**
     * derived property recalculation
     */
    public function invalidateDependentOnCommunication_title():void
    {
        if (model_internal::_communication_titleIsValidCacheInitialized )
        {
            model_internal::_instance.model_internal::_doValidationCacheOfCommunication_title = null;
            model_internal::calculateCommunication_titleIsValid();
        }
    }
    public function invalidateDependentOnCommunication_description():void
    {
        if (model_internal::_communication_descriptionIsValidCacheInitialized )
        {
            model_internal::_instance.model_internal::_doValidationCacheOfCommunication_description = null;
            model_internal::calculateCommunication_descriptionIsValid();
        }
    }
    public function invalidateDependentOnDate():void
    {
        if (model_internal::_dateIsValidCacheInitialized )
        {
            model_internal::_instance.model_internal::_doValidationCacheOfDate = null;
            model_internal::calculateDateIsValid();
        }
    }

    model_internal function fireChangeEvent(propertyName:String, oldValue:Object, newValue:Object):void
    {
        this.dispatchEvent(mx.events.PropertyChangeEvent.createUpdateEvent(this, propertyName, oldValue, newValue));
    }

    [Bindable(event="propertyChange")]   
    public function get communication_idStyle():com.adobe.fiber.styles.Style
    {
        return model_internal::_nullStyle;
    }

    [Bindable(event="propertyChange")]   
    public function get parent_accountStyle():com.adobe.fiber.styles.Style
    {
        return model_internal::_nullStyle;
    }

    [Bindable(event="propertyChange")]   
    public function get communicated_withStyle():com.adobe.fiber.styles.Style
    {
        return model_internal::_nullStyle;
    }

    [Bindable(event="propertyChange")]   
    public function get communicated_byStyle():com.adobe.fiber.styles.Style
    {
        return model_internal::_nullStyle;
    }

    [Bindable(event="propertyChange")]   
    public function get communication_titleStyle():com.adobe.fiber.styles.Style
    {
        return model_internal::_nullStyle;
    }

    public function get communication_titleValidator() : StyleValidator
    {
        return model_internal::_communication_titleValidator;
    }

    model_internal function set _communication_titleIsValid_der(value:Boolean):void 
    {
        var oldValue:Boolean = model_internal::_communication_titleIsValid;         
        if (oldValue !== value)
        {
            model_internal::_communication_titleIsValid = value;
            this.dispatchEvent(mx.events.PropertyChangeEvent.createUpdateEvent(this, "communication_titleIsValid", oldValue, value));
        }                             
    }

    [Bindable(event="propertyChange")]
    public function get communication_titleIsValid():Boolean
    {
        if (!model_internal::_communication_titleIsValidCacheInitialized)
        {
            model_internal::calculateCommunication_titleIsValid();
        }

        return model_internal::_communication_titleIsValid;
    }

    model_internal function calculateCommunication_titleIsValid():void
    {
        var valRes:ValidationResultEvent = model_internal::_communication_titleValidator.validate(model_internal::_instance.communication_title)
        model_internal::_communication_titleIsValid_der = (valRes.results == null);
        model_internal::_communication_titleIsValidCacheInitialized = true;
        if (valRes.results == null)
             model_internal::communication_titleValidationFailureMessages_der = emptyArray;
        else
        {
            var _valFailures:Array = new Array();
            for (var a:int = 0 ; a<valRes.results.length ; a++)
            {
                _valFailures.push(valRes.results[a].errorMessage);
            }
            model_internal::communication_titleValidationFailureMessages_der = _valFailures;
        }
    }

    [Bindable(event="propertyChange")]
    public function get communication_titleValidationFailureMessages():Array
    {
        if (model_internal::_communication_titleValidationFailureMessages == null)
            model_internal::calculateCommunication_titleIsValid();

        return _communication_titleValidationFailureMessages;
    }

    model_internal function set communication_titleValidationFailureMessages_der(value:Array) : void
    {
        var oldValue:Array = model_internal::_communication_titleValidationFailureMessages;

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
            model_internal::_communication_titleValidationFailureMessages = value;   
            this.dispatchEvent(mx.events.PropertyChangeEvent.createUpdateEvent(this, "communication_titleValidationFailureMessages", oldValue, value));
            // Only execute calculateIsValid if it has been called before, to update the validationFailureMessages for
            // the entire entity.
            if (model_internal::_instance.model_internal::_cacheInitialized_isValid)
            {
                model_internal::_instance.model_internal::isValid_der = model_internal::_instance.model_internal::calculateIsValid();
            }
        }
    }

    [Bindable(event="propertyChange")]   
    public function get communication_descriptionStyle():com.adobe.fiber.styles.Style
    {
        return model_internal::_nullStyle;
    }

    public function get communication_descriptionValidator() : StyleValidator
    {
        return model_internal::_communication_descriptionValidator;
    }

    model_internal function set _communication_descriptionIsValid_der(value:Boolean):void 
    {
        var oldValue:Boolean = model_internal::_communication_descriptionIsValid;         
        if (oldValue !== value)
        {
            model_internal::_communication_descriptionIsValid = value;
            this.dispatchEvent(mx.events.PropertyChangeEvent.createUpdateEvent(this, "communication_descriptionIsValid", oldValue, value));
        }                             
    }

    [Bindable(event="propertyChange")]
    public function get communication_descriptionIsValid():Boolean
    {
        if (!model_internal::_communication_descriptionIsValidCacheInitialized)
        {
            model_internal::calculateCommunication_descriptionIsValid();
        }

        return model_internal::_communication_descriptionIsValid;
    }

    model_internal function calculateCommunication_descriptionIsValid():void
    {
        var valRes:ValidationResultEvent = model_internal::_communication_descriptionValidator.validate(model_internal::_instance.communication_description)
        model_internal::_communication_descriptionIsValid_der = (valRes.results == null);
        model_internal::_communication_descriptionIsValidCacheInitialized = true;
        if (valRes.results == null)
             model_internal::communication_descriptionValidationFailureMessages_der = emptyArray;
        else
        {
            var _valFailures:Array = new Array();
            for (var a:int = 0 ; a<valRes.results.length ; a++)
            {
                _valFailures.push(valRes.results[a].errorMessage);
            }
            model_internal::communication_descriptionValidationFailureMessages_der = _valFailures;
        }
    }

    [Bindable(event="propertyChange")]
    public function get communication_descriptionValidationFailureMessages():Array
    {
        if (model_internal::_communication_descriptionValidationFailureMessages == null)
            model_internal::calculateCommunication_descriptionIsValid();

        return _communication_descriptionValidationFailureMessages;
    }

    model_internal function set communication_descriptionValidationFailureMessages_der(value:Array) : void
    {
        var oldValue:Array = model_internal::_communication_descriptionValidationFailureMessages;

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
            model_internal::_communication_descriptionValidationFailureMessages = value;   
            this.dispatchEvent(mx.events.PropertyChangeEvent.createUpdateEvent(this, "communication_descriptionValidationFailureMessages", oldValue, value));
            // Only execute calculateIsValid if it has been called before, to update the validationFailureMessages for
            // the entire entity.
            if (model_internal::_instance.model_internal::_cacheInitialized_isValid)
            {
                model_internal::_instance.model_internal::isValid_der = model_internal::_instance.model_internal::calculateIsValid();
            }
        }
    }

    [Bindable(event="propertyChange")]   
    public function get dateStyle():com.adobe.fiber.styles.Style
    {
        return model_internal::_nullStyle;
    }

    public function get dateValidator() : StyleValidator
    {
        return model_internal::_dateValidator;
    }

    model_internal function set _dateIsValid_der(value:Boolean):void 
    {
        var oldValue:Boolean = model_internal::_dateIsValid;         
        if (oldValue !== value)
        {
            model_internal::_dateIsValid = value;
            this.dispatchEvent(mx.events.PropertyChangeEvent.createUpdateEvent(this, "dateIsValid", oldValue, value));
        }                             
    }

    [Bindable(event="propertyChange")]
    public function get dateIsValid():Boolean
    {
        if (!model_internal::_dateIsValidCacheInitialized)
        {
            model_internal::calculateDateIsValid();
        }

        return model_internal::_dateIsValid;
    }

    model_internal function calculateDateIsValid():void
    {
        var valRes:ValidationResultEvent = model_internal::_dateValidator.validate(model_internal::_instance.date)
        model_internal::_dateIsValid_der = (valRes.results == null);
        model_internal::_dateIsValidCacheInitialized = true;
        if (valRes.results == null)
             model_internal::dateValidationFailureMessages_der = emptyArray;
        else
        {
            var _valFailures:Array = new Array();
            for (var a:int = 0 ; a<valRes.results.length ; a++)
            {
                _valFailures.push(valRes.results[a].errorMessage);
            }
            model_internal::dateValidationFailureMessages_der = _valFailures;
        }
    }

    [Bindable(event="propertyChange")]
    public function get dateValidationFailureMessages():Array
    {
        if (model_internal::_dateValidationFailureMessages == null)
            model_internal::calculateDateIsValid();

        return _dateValidationFailureMessages;
    }

    model_internal function set dateValidationFailureMessages_der(value:Array) : void
    {
        var oldValue:Array = model_internal::_dateValidationFailureMessages;

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
            model_internal::_dateValidationFailureMessages = value;   
            this.dispatchEvent(mx.events.PropertyChangeEvent.createUpdateEvent(this, "dateValidationFailureMessages", oldValue, value));
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
            case("communication_title"):
            {
                return communication_titleValidationFailureMessages;
            }
            case("communication_description"):
            {
                return communication_descriptionValidationFailureMessages;
            }
            case("date"):
            {
                return dateValidationFailureMessages;
            }
            default:
            {
                return emptyArray;
            }
         }
     }

}

}
