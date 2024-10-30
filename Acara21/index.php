<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register</title>
    <!-- Bootstrap CSS from CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fc;
        }

        .container {
            margin-top: 100px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card shadow-lg border-0 rounded-lg">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">Login</h3>
                    </div>
                    <div class="card-body">
                        <form id="loginForm">
                            <div class="form-group">
                                <label for="inputUsername">Username</label>
                                <input type="text" class="form-control" id="txt_username" name="txt_username" placeholder="Enter your Username" required>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Password</label>
                                <input type="password" class="form-control" id="inputPassword" name="txt_pass" placeholder="Enter your password" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                            </div>
                        </form>
                        <div id="responseMessage" class="mt-3"></div>
                        <div class="form-group text-center">
                            <a href="#registerModal" data-toggle="modal">Don't have an account? Register here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Register Modal -->
    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerModalLabel">Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="registerForm">
                        <div class="form-group">
                            <label for="regInputUsername">Username</label>
                            <input type="text" class="form-control" id="reg_txt_username" name="txt_username" placeholder="Enter your Username" required>
                        </div>
                        <div class="form-group">
                            <label for="regInputPassword">Password</label>
                            <input type="password" class="form-control" id="txt_pass" name="txt_pass" placeholder="Enter your password" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                    </form>
                    <div id="registerResponseMessage" class="mt-3"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery and Bootstrap JS from CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            // Login form submission
            $('#loginForm').on('submit', function(event) {
                event.preventDefault(); // Mencegah form dari pengiriman default

                $.ajax({
                    url: '/Acara21/BackEnd/login.php', // URL untuk mengirim data login
                    type: 'POST',
                    data: $(this).serialize(), // Mengambil semua data dari form
                    success: function(response) {
                        console.log('Login response:', response); // Tambahkan ini untuk debugging
                        const data = JSON.parse(response);
                        $('#responseMessage').html('<div class="alert alert-' + (data.status === 'success' ? 'success' : 'danger') + '">' + data.message + '</div>');
                    },
                    error: function(xhr, status, error) {
                        console.error('AJAX error:', status, error); // Tambahkan ini untuk debugging
                        $('#responseMessage').html('<div class="alert alert-danger">An error occurred: ' + xhr.status + ' ' + xhr.statusText + '</div>');
                    }
                });
            });

            // Register form submission
            $('#registerForm').on('submit', function(event) {
                event.preventDefault(); // Mencegah form dari pengiriman default

                $.ajax({
                    url: '/Acara21/BackEnd/register.php', // URL untuk mengirim data registrasi
                    type: 'POST',
                    data: $(this).serialize(), // Mengambil semua data dari form
                    success: function(response) {
                        console.log('Register response:', response); // Tambahkan ini untuk debugging
                        const data = JSON.parse(response);
                        if (data.status === 'success') {
                            $('#registerResponseMessage').html('<div class="alert alert-success">' + data.message + '</div>');
                            $('#registerModal').modal('hide');
                            $('#registerForm')[0].reset();
                        } else {
                            $('#registerResponseMessage').html('<div class="alert alert-danger">' + data.message + '</div>');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('AJAX error:', status, error); // Tambahkan ini untuk debugging
                        $('#registerResponseMessage').html('<div class="alert alert-danger">An error occurred: ' + xhr.status + ' ' + xhr.statusText + '</div>');
                    }
                });
            });
        });
    </script>
</body>

</html>
