$(document).ready(function() {
    $('#txtCapture').on('change', function() {
        read_file();
    });

    const read_file = () => {
        const file = $('#txtCapture').get(0).files[0];
        let rec_con = $('#rec_con');
        if (file) {
            const reader = new FileReader();
            rec_con.empty();
            reader.onload = function(event) {
                let image = `<img src="${event.target.result}" alt="Liquidation Receipt" width="150" height="200">`;
                rec_con.append(image);
            };
            reader.readAsDataURL(file);
            let formData = new FormData();
            formData.append('file', file);

            $.ajax({
                type: 'POST',
                url: 'assets/php_code/google_cloud_api.php',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    alert('data has been sent succesfully');
                    location.reload();
                    rec_con.append(response);
                },
                error: function(xhr, status, error) {
                    console.log('error', error);
                }
            });
        }
    };
});