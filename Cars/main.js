window.onsubmit=updateData;

function updateMSRPout() {
    var msrp = document.getElementById("msrp").value;
    document.getElementById("MSRPout").innerHTML = "$" + msrp;
}

function updateMPGout() {
    var mpg = document.getElementById("mpg").value;
    document.getElementById("MPGout").innerHTML = "" + mpg + " MPG";
}

function updateData() {
    //TODO
}