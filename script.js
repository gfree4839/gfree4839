let displayValue = "";
let pendingOperation = null;
let storedValue = 0;

function appendValue(value) {
    if (value === '%') {
        pendingOperation = "%";
        storedValue = parseFloat(document.getElementById('display').value);
        displayValue = "";
    } else {
        displayValue += value;
        document.getElementById('display').value = displayValue;
    }
}

function clearDisplay() {
    displayValue = "";
    document.getElementById('display').value = "";
}

function calculate() {
    try {
        if (pendingOperation === "%") {
            displayValue = storedValue * parseFloat(displayValue) / 100;
            pendingOperation = null;
        } else {
            displayValue = eval(displayValue);
        }
        document.getElementById('display').value = displayValue;
    } catch (error) {
        document.getElementById('display').value = "Error";
    }
}
