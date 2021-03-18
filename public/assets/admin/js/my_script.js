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


$(document).ready(function(){
    $("#search-input").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#dataTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
});

$(document).ready(function() {
    //update status brand 
    $('.status_on').on('change',function() {
      let urlRequest = $(this).data("url");
      $.ajax({
        url:urlRequest, 
        type:'GET',
      }); 
    });
  
    $('.status_off').on('change',function() {
      let urlRequest = $(this).data("url");
      $.ajax({
        url:urlRequest, 
        type:'GET',
      }); 
    });
  
  });
