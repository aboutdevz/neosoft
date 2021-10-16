function itterateForm(selector, func) {

    $(`#${selector} input,select,textarea`).each(func);
}

function populateForm(selector,data) {
    itterateForm(selector, (index, element) => {
        
        element.value = data[index-1];
    })
}


