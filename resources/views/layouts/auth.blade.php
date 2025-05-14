<!DOCTYPE html>
<html lang="pt-BR">
    <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">


                <title>CRUD</title>
                <style>
                    body {
                    height: 100%;
                    }

                    .form-signin {
                    max-width: 330px;
                    padding: 1rem;
                    }

                    .form-signin .form-floating:focus-within {
                    z-index: 2;
                    }
                </style>
    </head>
        <body class="d-flex align-items-center py-4 bg-body-tertiary">
        
        


    
        <div class="container">
        @yield('content')

        <script>
            function togglePassword(inputId, icon) {
                const input = document.getElementById(inputId);
                const iconElement = icon.querySelector('i');
                if (input.type === 'password') {
                    input.type = 'text';
                    iconElement.classList.remove('bi-eye-slash');
                    iconElement.classList.add('bi-eye');
                } else {
                    input.type = 'password';
                    iconElement.classList.remove('bi-eye');
                    iconElement.classList.add('bi-eye-slash');
                }
            }
        </script>
        

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> 

        </body>
</html>