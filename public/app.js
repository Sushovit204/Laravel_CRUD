$("a.btn btn-danger btn-sm").live("click", function (event) {
    event.stopPropagation();
    if (confirm("Do you want to delete?")) {
        this.click;
        alert("Ok");
    } else {
        alert("Cancel");
    }
    event.preventDefault();
});
