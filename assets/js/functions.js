function setFormValue(key, formId) {
    /*
    Used with applications, specifically storing data on browser refresh.
    Sets the input of the form with the formId to the value at key.
    */
    $(formId).val(sessionStorage.getItem(key));
}