fetch("./mobile_menu.html")
    .then(response => {
        return response.text()
    })
    .then(data => {
        document.querySelector("mobile_menu").innerHTML = data;
    });