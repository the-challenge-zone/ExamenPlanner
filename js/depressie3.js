const tbody = document.getElementById("tableBody");
let curr_page = 1;

for (var i = 0; i < 20; i++) {
    var num = i + 1;
    tbody.innerHTML += '' +
        '<tr>' +
        '<th scope="row">' + num + '</th>' +
        '<td>' + people[i].Name + '</td>' +
        '<td>' + people[i].Diamond + '</td>' +
        '<td>' + people[i].Gold + '</td>' +
        '<td>' + people[i].Silver + '</td>' +
        '<td>' + people[i].Bronze + '</td>' +
        '<td>' + people[i].Total() + '</td>' +
        '</tr>';
}

function sortTable() {
    var tbl = document.getElementById("sex").tBodies[0];
    var store = [];
    for (var i = 0, len = tbl.rows.length; i < len; i++) {
        var row = tbl.rows[i];
        var sortnr = parseFloat(row.cells[6].textContent || row.cells[6].innerText);
        if (!isNaN(sortnr)) store.push([sortnr, row]);
    }
    store.sort(function (x, y) {
        return y[0] - x[0];
    });
    for (var i = 0, len = store.length; i < len; i++) {
        tbl.appendChild(store[i][1]);
    }
    store = null;

    for (var i = 0; i < 20; i++) {
        tbl.rows[i].cells[0].innerText = i + 1;
    }
}

function next() {
    if (curr_page != 3) {
        if (curr_page == 1) {
            curr_page++;
            tbody.innerHTML = "";
            for (var i = 20; i < 40; i++) {
                var num = i + 1;
                tbody.innerHTML += '' +
                    '<tr>' +
                    '<th scope="row">' + num + '</th>' +
                    '<td>' + people[i].Name + '</td>' +
                    '<td>' + people[i].Diamond + '</td>' +
                    '<td>' + people[i].Gold + '</td>' +
                    '<td>' + people[i].Silver + '</td>' +
                    '<td>' + people[i].Bronze + '</td>' +
                    '<td>' + people[i].Total() + '</td>' +
                    '</tr>';
            }
        } else if (curr_page == 2) {
            curr_page++;
            tbody.innerHTML = "";
            for (var i = 40; i < 60; i++) {
                var num = i + 1;
                tbody.innerHTML += '' +
                    '<tr>' +
                    '<th scope="row">' + num + '</th>' +
                    '<td>' + people[i].Name + '</td>' +
                    '<td>' + people[i].Diamond + '</td>' +
                    '<td>' + people[i].Gold + '</td>' +
                    '<td>' + people[i].Silver + '</td>' +
                    '<td>' + people[i].Bronze + '</td>' +
                    '<td>' + people[i].Total() + '</td>' +
                    '</tr>';
            }
        }
    }
}

function prev() {
    if (curr_page != 1) {
        if (curr_page == 3) {
            curr_page--;
            tbody.innerHTML = "";
            for (var i = 20; i < 40; i++) {
                var num = i + 1;
                tbody.innerHTML += '' +
                    '<tr>' +
                    '<th scope="row">' + num + '</th>' +
                    '<td>' + people[i].Name + '</td>' +
                    '<td>' + people[i].Diamond + '</td>' +
                    '<td>' + people[i].Gold + '</td>' +
                    '<td>' + people[i].Silver + '</td>' +
                    '<td>' + people[i].Bronze + '</td>' +
                    '<td>' + people[i].Total() + '</td>' +
                    '</tr>';
            }
        } else if (curr_page == 2) {
            curr_page--;
            tbody.innerHTML = "";
            for (var i = 0; i < 20; i++) {
                var num = i + 1;
                tbody.innerHTML += '' +
                    '<tr>' +
                    '<th scope="row">' + num + '</th>' +
                    '<td>' + people[i].Name + '</td>' +
                    '<td>' + people[i].Diamond + '</td>' +
                    '<td>' + people[i].Gold + '</td>' +
                    '<td>' + people[i].Silver + '</td>' +
                    '<td>' + people[i].Bronze + '</td>' +
                    '<td>' + people[i].Total() + '</td>' +
                    '</tr>';
            }
        }
    }
}


$("#search").on("keyup", function () {
    var value = $(this).val().toLowerCase();
    if (value == "") {
        if (curr_page == 1) {
            tbody.innerHTML = "";
            for (var i = 0; i < 20; i++) {
                var num = i + 1;
                tbody.innerHTML += '' +
                    '<tr>' +
                    '<th scope="row">' + num + '</th>' +
                    '<td>' + people[i].Name + '</td>' +
                    '<td>' + people[i].Diamond + '</td>' +
                    '<td>' + people[i].Gold + '</td>' +
                    '<td>' + people[i].Silver + '</td>' +
                    '<td>' + people[i].Bronze + '</td>' +
                    '<td>' + people[i].Total() + '</td>' +
                    '</tr>';
            }
        } else if (curr_page == 2) {
            tbody.innerHTML = "";
            for (var i = 20; i < 40; i++) {
                var num = i + 1;
                tbody.innerHTML += '' +
                    '<tr>' +
                    '<th scope="row">' + num + '</th>' +
                    '<td>' + people[i].Name + '</td>' +
                    '<td>' + people[i].Diamond + '</td>' +
                    '<td>' + people[i].Gold + '</td>' +
                    '<td>' + people[i].Silver + '</td>' +
                    '<td>' + people[i].Bronze + '</td>' +
                    '<td>' + people[i].Total() + '</td>' +
                    '</tr>';
            }
        } else if (curr_page == 3) {
            tbody.innerHTML = "";
            for (var i = 40; i < 60; i++) {
                var num = i + 1;
                tbody.innerHTML += '' +
                    '<tr>' +
                    '<th scope="row">' + num + '</th>' +
                    '<td>' + people[i].Name + '</td>' +
                    '<td>' + people[i].Diamond + '</td>' +
                    '<td>' + people[i].Gold + '</td>' +
                    '<td>' + people[i].Silver + '</td>' +
                    '<td>' + people[i].Bronze + '</td>' +
                    '<td>' + people[i].Total() + '</td>' +
                    '</tr>';
            }
        }
    } else {
        showAll();
        $("#sex tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    }

});

function showAll() {
    tbody.innerHTML = "";
    for (var i = 0; i < 60; i++) {
        var num = i + 1;
        tbody.innerHTML += '' +
            '<tr>' +
            '<th scope="row">' + num + '</th>' +
            '<td>' + people[i].Name + '</td>' +
            '<td>' + people[i].Diamond + '</td>' +
            '<td>' + people[i].Gold + '</td>' +
            '<td>' + people[i].Silver + '</td>' +
            '<td>' + people[i].Bronze + '</td>' +
            '<td>' + people[i].Total() + '</td>' +
            '</tr>';
    }
}

sortTable();