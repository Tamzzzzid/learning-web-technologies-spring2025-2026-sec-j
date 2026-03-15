let body = document.body;
let div = document.createElement("div");
div.id = "mainBox";

// Unit Price Text
let p1 = document.createElement("p");
p1.innerHTML = "Unit Price: 1000";
div.append(p1);

// Quantity Label
let label1 = document.createElement("b");
label1.innerHTML = "Quantity: ";
div.append(label1);

let br1 = document.createElement("br");
div.append(br1);

// Quantity Input Box
let qtyBox = document.createElement("input");
qtyBox.type = "number";
qtyBox.id = "qty";
qtyBox.value = "0";
div.append(qtyBox);

let br2 = document.createElement("br");
div.append(br2);

// Total Price Label
let label2 = document.createElement("b");
label2.innerHTML = "Total Price: ";
div.append(label2);

let br3 = document.createElement("br");
div.append(br3);

// Total Price Readonly Box
let totalBox = document.createElement("input");
totalBox.type = "text";
totalBox.id = "totalTxt";
totalBox.value = "0";
totalBox.readOnly = true; 
div.append(totalBox);

body.append(div);

// Variables for math
let unitPrice = 1000;
let flag = 0; 

// Action when user changes the quantity
qtyBox.addEventListener("input", function() {
    let q = Number(qtyBox.value);

    // Validation: Prevent negative numbers
    if (q < 0) {
        alert("Quantity cannot be less than 0!");
        qtyBox.value = "0";
        q = 0; 
    }

    // Math
    let result = unitPrice * q;
    totalBox.value = result;

    // Gift Coupon Notification
    if (result > 1000) {
        if (flag == 0) {
            alert("Congratulations! You are now eligible for a gift coupon!");
            flag = 1; 
        }
    } else {
        flag = 0; 
    }
});