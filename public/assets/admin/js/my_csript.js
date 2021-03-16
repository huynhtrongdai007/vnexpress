$(document).ready(function() {
    $(".action_delete").click(function (e) { 
        e.preventDefault();
        let urlRequest = $(this).data("url");
        let row = $(this);

        $.ajax({
            type: "GET",
            url: urlRequest,
            success: function (data) {
                if(data.code == 200) {
                   row.parent().parent().remove();
                }
            }
        });
    });
});
