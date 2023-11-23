<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request To</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <input type="text" id="user" placeholder="Enter user email">
    <button id="submit">Submit</button>

    <script>
        $(document).ready(function() {
            $('#submit').click(function() {
                var user = $('#user').val();

                $.get('/user', { user: user }, function(response) {
                    console.log(response);
                });
            });
        });
    </script>
</body>
</html>
