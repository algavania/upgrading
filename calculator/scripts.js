$(document).ready(function() {
    $(".btn").click(function() {
        if (!$(this).hasClass("not")) {
            if ($("#calculation").val() == 0) $("#calculation").val($(this).text());
            else $("#calculation").val($("#calculation").val() + $(this).text());
        }
    })

    $("#clear").click(function() {
        $("#calculation").val("0");
    })

    $("#delete").click(function() {
        var value = $("#calculation").val();
        if (!(parseInt(parseFloat(value)) == 0 && value.length == 1))
            $("#calculation").val(value.slice(0, value.length - 1));
        if (value.length == 1)
            $("#calculation").val("0");
    })

    $("#equals").click(function() {
        try {
            var result = eval($("#calculation").val());
            $("#calculation").val(result);
        } catch (e) {
            alert("Wrong input");
        }
    })
})