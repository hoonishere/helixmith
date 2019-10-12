fetch("./header_menus.html")
    .then(response => {
        return response.text()
    })
    .then(data => {
        document.querySelector("header_menus").innerHTML = data;
    });