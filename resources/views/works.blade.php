<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Works/Projects</title>
    <style>
       html,     body {
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to bottom, #000000, #0000FF); 
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .section {
            background: #fff;
            color: #000;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .section h2 {
            font-size: 24px;
            margin-bottom: 15px;
        }

        .projects-list {
            list-style: none;
            padding: 0;
        }

        .projects-list li {
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }

        .projects-list li:last-child {
            border-bottom: none;
        }

        .project-title {
            font-size: 18px;
            font-weight: bold;
        }

        .project-description {
            margin: 5px 0;
            font-size: 16px;
        }

        .project-status {
            font-size: 14px;
            color: #666;
        }

        footer {
            background: transparent;
            padding: 10px;
            text-align: center;
            width: 100%;
            position: fixed;
            bottom: 0;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        
        <div class="section">
            <h2>Completed Projects</h2>
            <ul class="projects-list">
                <li>
                    <div class="project-title">Linux informative website</div>
                    <div class="project-description">A website that features linux and its services, why you should use linux and other informations about it.</div>
                    <div class="project-status">Status: Completed</div>
                </li>
                <li>
                    <div class="project-title">WeBytes Animal Care</div>
                    <div class="project-description">A website built for animal cares.</div>
                    <div class="project-status">Status: Completed</div>
                </li>
                
            </ul>
        </div>

        
        <div class="section">
            <h2>Ongoing Projects</h2>
            <ul class="projects-list">
                <li>
                    <div class="project-title">LARAVEL PROJECT</div>
                    <div class="project-description">A new web framework that is use to create PHP-based websites.</div>
                    <div class="project-status">Status: Ongoing</div>
                </li>
                <li>
                    <div class="project-title">Information Management Project</div>
                    <div class="project-description">Creting different data and studying datawarehouse</div>
                    <div class="project-status">Status: Ongoing</div>
                </li>
              
            </ul>
        </div>
    </div>
    

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Malbert Colarina. All rights reserved.</p>
    </footer>
</body>
</html>
