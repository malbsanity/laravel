<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Denied</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #dc3545; /* Bootstrap danger color */
            color: #fff;
            font-family: Arial, sans-serif;
        }
        .content-container {
            text-align: center;
            max-width: 400px;
            padding: 20px;
            background-color: #ffffff;
            color: #000000;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.5);
        }
        h1 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #dc3545; /* Danger color */
        }
        p {
            font-size: 1.2rem;
            margin-bottom: 25px;
        }
        .back-btn {
            background-color: #007bff; /* Bootstrap primary color */
            color: white; 
            padding: 10px;
            font-size: 1rem;
            border: none; 
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }
        .back-btn:hover {
            background-color: #0056b3; /* Darker primary color on hover */
        }
    </style>
</head>
<body>

    <div class="content-container">
        <h1>Access Denied</h1>
        <p>Sorry, you must be at least 18 years old to access this content.</p>
        <a href="{{ url('/') }}" class="back-btn">Go Back to Home</a>
    </div>

</body>
</html>
