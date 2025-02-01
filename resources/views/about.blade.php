<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Leonard Bodhi Kumaro</title>
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
        h2 {
            color: #34495e;
            border-bottom: 2px solid #34495e;
            padding-bottom: 5px;
        }
        p {
            margin: 10px 0;
        }
        a {
            color: #3498db;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .profile-picture {
            text-align: center;
            margin: 20px 0;
        }
        .profile-picture img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            border: 3px solid #3498db;
        }
        .contact-info {
            margin-top: 20px;
        }
        .contact-info p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="profile-picture">
            <!-- Ganti "leonard.jpg" dengan nama file foto Anda atau URL foto -->
            <img src="data:image/jpeg;base64,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" alt="Leonard Bodhi Kumaro">
        </div>
        <h1>Hello, I'm Leonard Bodhi Kumaro</h1>
        
        <h2>About Me</h2>
        <p>
            I am a 6th-semester student at Udayana University, majoring in Mathematics. 
            I have a strong interest in pursuing a career as a <strong>Data Analyst</strong> or in related fields 
            that involve data analysis, statistics, and information processing.
        </p>

        <h2>Education</h2>
        <p>
            <strong>Udayana University</strong><br>
            Majoring in Mathematics (6th Semester)
        </p>

        <h2>Career Interests</h2>
        <p>
            I am passionate about becoming a <strong>Data Analyst</strong>, where I can apply my mathematical 
            and statistical skills to analyze data, identify patterns, and provide actionable insights 
            for decision-making.
        </p>

        <h2>Skills</h2>
        <ul>
            <li>Statistics and Mathematics</li>
            <li>Python (Pandas, NumPy, Matplotlib)</li>
            <li>SQL</li>
            <li>Data Visualization (Tableau, Power BI)</li>
        </ul>

        <h2>Contact</h2>
        <div class="contact-info">
            <p><strong>Email:</strong> <a href="bkleonard174@gmail.com">leonard.bodhi@example.com</a></p>
            <p><strong>LinkedIn:</strong> <a href="https://www.linkedin.com/in/leonardkumaro" target="_blank">Leonard Bodhi Kumaro</a></p>
            <p><strong>GitHub:</strong> <a href="https://github.com/leonardaaro" target="_blank">Leonard Kumaro</a></p>
        </div>
    </div>
</body>
  </x-layout>