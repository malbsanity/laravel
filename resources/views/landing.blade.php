<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #4169E1;
            color: #fff;
            font-family: Arial, sans-serif;
        }
        .content-container {
            text-align: center;
            max-width: 400px;
            padding: 20px;
            background-color: #FFFFFF;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.5);
        }
        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: #FF0000;
            margin-bottom: 20px;
        }
        
        h2 {
            font-size: 1.2rem;
            color: #000000;
            margin-bottom: 15px;
        }
        p {
            font-size: 0.9rem;
            color: #000000;
            margin-bottom: 25px;
        }
        .form-control {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            font-size: 1rem;
        }
        a {
            color: #FF0000;
            font-size: 0.85rem;
        }

        .submit-btn {
            background-color: #4169E1; 
            color: white; 
            padding: 10px;
            font-size: 1rem;
            border: none; 
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        .submit-btn:hover {
            background-color: #FF4500;
        }
    </style>
</head>
<body>

    <div class="content-container">
        <div class="logo">PORTFOLIO</span></div>
        <h2>WEBDEV PROJECT</h2>
        <p>This website contains materials that can only be accessed if you meet the required minimum age or if you're above it. Please enter your age below:</p>
        <form action="{{ route('validate-age') }}" method="POST">
            @csrf <!-- Laravel CSRF token for form security -->
            <input type="number" name="age" class="form-control" placeholder="Enter your age" required>
            <button type="submit" class="submit-btn mt-3 w-100">Submit</button>
        </form>

        <p class="mt-3">Our <a href="#">parental controls page</a> explains how you can easily block access to this site.</p>
    </div>

</body>
</html>
