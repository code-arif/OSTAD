// $(document).ready(function () {
//     // alert('hello');
//     //ajax request for category model
//     $(document).on('click', '.create_category', function (e) {
//         e.preventDefault();
//         let categoryName = $('#categoryName').val();

//         $.ajax({
//             url: categoryUrl,
//             method: 'POST',
//             data: 'categoryName:categoryName',
//             success: function (res) {
//                 if (res.status == 'success') {
//                     $('#categoryCreateForm')[0].reset();
//                 }
//             },
//             error: function (err) {
//                 let error = err.responseJSON;
//                 if (error && error.errors) {
//                     $('#categoryError').html('');
//                     $.each(error.errors, function (index, value) {
//                         $('#categoryError').append(
//                             '<span class="text-danger">' + value +
//                             '</span><br>'
//                         );
//                     });
//                 }
//             }
//         });
//     });
// });


$(document).ready(function () {
    // Retrieve CSRF token from meta tag
    let csrfToken = $('meta[name="csrf-token"]').attr('content');

    //ajax request for category model
    $(document).on('click', '.create_category', function (e) {
        e.preventDefault();
        let categoryName = $('#categoryName').val();

        $.ajax({
            url: categoryUrl,
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': csrfToken // Include CSRF token in the headers
            },
            data: {
                categoryName: categoryName // Send data as an object
            },
            success: function (res) {
                if (res.status == 'success') {
                    $('#categoryCreateForm')[0].reset();
                }
            },
            error: function (err) {
                let error = err.responseJSON;
                if (error && error.errors) {
                    $('#categoryError').html('');
                    $.each(error.errors, function (index, value) {
                        $('#categoryError').append(
                            '<span class="text-danger">' + value + '</span><br>'
                        );
                    });
                }
            }
        });
    });
});
