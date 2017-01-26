$('.selectsensors').change(function() {
    var id = $(this).val(); //get the current value's option
    $.ajax({
        type:'POST',
        url:'<path>/getCountries',
        data:{'id':id},
        success:function(data){
            //in here, for simplicity, you can substitue the HTML for a brand new select box for countries
            //1.
            $(".countries_container").html(data);

           //2.
           // iterate through objects and build HTML here
        }
    });
});

