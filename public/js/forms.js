function logSubmit(event) {
    var formData = new FormData(document.getElementById('filter-warehouses'));

    var obj = {};

    for (var pair of formData.entries()) {
        var name = pair[0];
        var value = pair[1];

        obj[name] = value;
    }

    var url = '/warehouses?like=name,' + obj['name'] + "&between=priority,"
        + obj['priority-down'] + "," + obj['priority-up'];

    window.location.replace(url);

    event.preventDefault();
}

const form = document.getElementById('filter-warehouses');

form.addEventListener('submit', logSubmit);