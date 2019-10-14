fetch("./header_menus")
    .then(response => {
        return response.text()
    })
    .then(data => {
        document.querySelector("header_menus").innerHTML = data;
    });