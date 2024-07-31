function sendmail(){
    let params = {
        name : document.getElementById("name").value,
        email : document.getElementById("email").value,
        phone : document.getElementById("phone").value,
        topic : document.getElementById("topic").value,
        message : document.getElementById("message").value
    }
    emailjs.send("service_slfjlkx","template_79ttgkm",params).then(alert("Email sent!"))
    
}