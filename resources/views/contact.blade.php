<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Leonard Bodhi Kumaro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #2c3e50;
            text-align: center;
        }
        .contact-list {
            list-style: none;
            padding: 0;
        }
        .contact-list li {
            margin: 20px 0;
        }
        .contact-list a {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: #3498db;
            font-size: 1.2em;
        }
        .contact-list a:hover {
            color: #2980b9;
        }
        .contact-list img {
            width: 40px;
            height: 40px;
            margin-right: 15px;
        }
        footer {
            text-align: center;
            margin-top: 40px;
            font-size: 0.9em;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Contact Me</h1>
        <ul class="contact-list">
            <!-- Instagram -->
            <li>
                <a href="https://www.instagram.com/leonardkumaro" target="_blank">
                    <img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" alt="Instagram Icon">
                    Instagram
                </a>
            </li>

            <!-- Facebook -->
            <li>
                <a href="https://www.facebook.com/leonard.kumaro.3" target="_blank">
                    <img src="https://cdn-icons-png.flaticon.com/512/124/124010.png" alt="Facebook Icon">
                    Facebook
                </a>
            </li>

            <!-- LinkedIn -->
            <li>
                <a href="https://www.linkedin.com/in/leonardkumaro" target="_blank">
                    <img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" alt="LinkedIn Icon">
                    LinkedIn
                </a>
            </li>

            <!-- GitHub -->
            <li>
                <a href="https://github.com/leonardaaro" target="_blank">
                    <img src="https://cdn-icons-png.flaticon.com/512/25/25231.png" alt="GitHub Icon">
                    GitHub
                </a>
            </li>

            <!-- YouTube -->
            <li>
                <a href="https:/www.youtube.com/@leonardkumaro7977/" target="_blank">
                    <img src="https://cdn-icons-png.flaticon.com/512/1384/1384060.png" alt="YouTube Icon">
                    YouTube
                </a>
            </li>
        </ul>
    </div>

    <footer>
        <p>© 2025 Leonard Bodhi Kumaro. All rights reserved.</p>
    </footer>
</body>
  </x-layout>