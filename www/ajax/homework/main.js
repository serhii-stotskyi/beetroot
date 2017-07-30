/**
 * Created by Admin on 22.06.2017.
 */
JotForm.setCalculations([{
    "resultField": "10",
    "operands": "4",
    "readOnly": false,
    "showBeforeInput": false,
    "equation": "[{4}]",
    "decimalPlaces": "2",
    "newCalculationType": true,
    "insertAsText": false,
    "showEmptyDecimals": false,
    "ignoreHiddenFields": false,
    "conditionId": "1408945627066",
    "conditionTrue": false
}]);
JotForm.setConditions([{
    "action": [{"fields": ["11", "12", "19", "10"], "visibility": "ShowMultiple"}],
    "id": "1408945597909",
    "index": "0",
    "link": "Any",
    "priority": "0",
    "terms": [{"field": "15", "operator": "equals", "value": "Yes"}],
    "type": "field"
}, {
    "action": [{
        "resultField": "10",
        "operands": "4",
        "readOnly": false,
        "showBeforeInput": false,
        "equation": "[{4}]",
        "decimalPlaces": "2",
        "newCalculationType": true,
        "insertAsText": false,
        "showEmptyDecimals": false,
        "ignoreHiddenFields": false,
        "conditionId": "1408945627066",
        "conditionTrue": false
    }],
    "id": "1408945627066",
    "index": "1",
    "link": "Any",
    "priority": "1",
    "terms": [{"field": "19", "operator": "equals", "value": "Yes"}],
    "type": "calculation"
}]);
JotForm.init(function () {
    setTimeout(function () {
        $('input_3').hint('ex: myname@example.com');
    }, 20);
    productID = {"0": "input_7_1001", "1": "input_7_1002", "2": "input_7_1003"};
    paymentType = "product";
    JotForm.setCurrencyFormat('USD', true, 'point');
    JotForm.totalCounter({
        "input_7_1001": {"price": "100", "quantityField": "input_7_quantity_1001_0"},
        "input_7_1002": {"price": "100", "quantityField": "input_7_quantity_1002_0"},
        "input_7_1003": {"price": "100", "quantityField": "input_7_quantity_1003_0"}
    });
    $$('.form-product-custom_quantity').each(function (el, i) {
        el.observe('blur', function () {
            isNaN(this.value) || this.value < 1 ? this.value = '0' : this.value
        })
    });
    $$('.form-product-custom_quantity').each(function (el, i) {
        el.observe('focus', function () {
            this.value == 0 ? this.value = '' : this.value
        })
    });
});

JotForm.prepareCalculationsOnTheFly([null, {
    "name": "clickTo",
    "qid": "1",
    "text": "Product Order Form",
    "type": "control_head"
}, {"name": "fullName", "qid": "2", "text": "Full Name", "type": "control_fullname"}, {
    "name": "email3",
    "qid": "3",
    "text": "E-mail",
    "type": "control_email"
}, {
    "name": "billingAddress",
    "qid": "4",
    "text": "Billing Address",
    "type": "control_address"
}, {
    "name": "contactNumber",
    "qid": "5",
    "text": "Contact Number",
    "type": "control_phone"
}, null, {
    "name": "products",
    "qid": "7",
    "text": "Products",
    "type": "control_paypal"
}, null, null, {
    "name": "shippingAdress",
    "qid": "10",
    "text": "Shipping Adress",
    "type": "control_address"
}, {
    "name": "fullName11",
    "qid": "11",
    "text": "Full Name",
    "type": "control_fullname"
}, {"name": "phoneNumber12", "qid": "12", "text": "Phone Number", "type": "control_phone"}, {
    "name": "submit",
    "qid": "13",
    "text": "SUBMIT",
    "type": "control_button"
}, {
    "name": "additionalRequests",
    "qid": "14",
    "text": "Additional Requests",
    "type": "control_textarea"
}, {"name": "sendGift", "qid": "15", "text": "Send Gift", "type": "control_radio"}, {
    "name": "clickTo16",
    "qid": "16",
    "text": "section separator for the form style - do not remove",
    "type": "control_collapse"
}, null, {
    "name": "clickTo18",
    "qid": "18",
    "text": "section separator for the form style - do not remove",
    "type": "control_collapse"
}, {
    "name": "sameAs19",
    "qid": "19",
    "text": "Same as the Billing Address?",
    "type": "control_checkbox"
}]);