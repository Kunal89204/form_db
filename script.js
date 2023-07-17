const not = document.getElementsByClassName('data-added')[0];


if(not.style.display === "inline"){
    setTimeout(function(){
        not.style.display = "none"
    }, 2000)
}




function hideMessage() {
    var messageElement = document.getElementById("message");
    setTimeout(function() {
        messageElement.style.display = "none";
    }, 3000); // Adjust the time in milliseconds (e.g., 3000 = 3 seconds)
}
