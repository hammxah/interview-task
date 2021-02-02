$(document).ready(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#search').keyup(function () {

        var searchterm = $("#search").val();
        console.log(searchterm);
        $.ajax({
            url: 'http://127.0.0.1:8000' + '/search',
            type: 'POST',
            data: {
                'search': searchterm,
            },
            success: function (success) {
                console.log(success);
                if ($('#search').val() == '') {
                    $('#search_result_table').attr('hidden', true);
                    $('tbody').html('');
                }

                if (success.status == 200) {
                    $('tbody').html('');
                    $('#search_result_table').attr('hidden', false);
                    for (var i = 0; i < success.data.length; i++) {
                        $("tbody").append("<tr><td>" + success.data[i].title + "</td>" +
                            "<td>" + success.data[i].author + "</td>" +
                            "<td>" + success.data[i].iban + "</td></tr>");
                    }
                } else if (success.status == 404) {
                    $('tbody').html('');
                    $('#search_result_table').attr('hidden', true);
                }


            },
            error: function (error) {
                console.log(error);
            }
        });
    });


});
