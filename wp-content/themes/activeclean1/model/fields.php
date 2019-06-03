<?php
class Field {
    private $name;
    private $message = '';
    private $state = '';
    private $hasError = false;

    public function __construct($name, $message = '') {
        $this->name = $name;
        $this->message = $message;
    }
    
    public function getName()    { return $this->name; }
    public function getMessage() { return $this->message; }
    public function hasError()    { return $this->hasError; }

    public function setErrorMessage($message) {
        $this->message = $message;
        $this->hasError = true;
        $this->state = "error";
    }
    
    public function clearErrorMessage() {
        $this->message = '';
        $this->hasError = false;
        $this->state = "";
    }
    
    public function setSuccess() {
        $state = htmlspecialchars($this->state);
        if ($this->hasError()) {
            return $state;
        } else {
            return "";
        }
    }
    
    public function setSuccessIcon() {
        if ($this->hasError()) {
            return '<i class="fas fa-exclamation-triangle"></i>';
        } else {
            return "";
        }
    }

    public function getHTML() {
        //$message = htmlspecialchars($this->message);
        $message = htmlspecialchars($this->message);
        if ($this->hasError()) {
            return '<span class="error">' . $message . '</span>';
            
        } else {
            return '<span>' . $message . '</span>';
        }
    }
    
}

class Fields {
    private $fields = array();
    // its' important to remember this is an array
    // when we add a field it registers as 
    // $fields['first_name'] = new Field;
    // $fields['last_name'] = new Field;
    // $fields['address'] = new Field;
    // $fields['phone_number'] = new Field;
    // $fields['zipcode'] = new Field;
    
    // Fields is actually an array of new Field's
    
    // $fields['first_name']->
    
    

    // this is a function of the class Fields
    // it adds a field to our array by its' name
    // addField($name, $message)
    
    // looks simple, but is complex
    
    // the function takes the $name parameter
    // new Field also has a name parameter
    // so $name is being added to the Fields array
    
    // we're assigning the variable ** $field ** in order
    // in the next line
    // to assign its' contents into its' own array
    // we access the $field->getName()
    // and then assign its' contents to Fields array
    
    public function addField($name, $message = '') {
        $field = new Field($name, $message);
        $this->fields[$field->getName()] = $field;
        
        // addField to this->fields with new Field (and it's functionality)
        // $this->fields['firstname'] = $field;
        // so it's an array with validation properties (adding message, clearing message, displaying message)
    }

    public function getField($name) {
        return $this->fields[$name];
        // we get the fields name -> that field is a Field that can getHTML
    }

    public function hasErrors() {
        foreach ($this->fields as $field) {
            if ($field->hasError()) { return true; }
        }
        return false;
    }
}
?>