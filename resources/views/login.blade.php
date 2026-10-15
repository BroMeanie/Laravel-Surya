<!DOCTYPE html>
<html>
<head>
    <title>Form Login AJAX</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>

    <h2>Login dengan AJAX</h2>

    <button id="submit">Submit</button>

    <script>
        $('#submit').click(function() {
            $.ajax({
                url: '/auth/login',
                method: 'POST',
                data: {
                    username: 'john',
                    password: '12345',
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    console.log('Data submitted successfully');
                },
                error: function(xhr, status, error) {
                    console.log('Error occurred: ' + error);
                }
            });
        });
    </script>

</body>
</html>
