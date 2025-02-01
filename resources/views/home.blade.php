<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Home - Leonard Bodhi Kumaro</title>
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
              max-width: 1200px;
              margin: 0 auto;
              padding: 20px;
          }
          header {
              background-color: #2c3e50;
              color: #fff;
              padding: 20px 0;
              text-align: center;
          }
          header h1 {
              margin: 0;
              font-size: 2.5em;
          }
          section {
              margin: 40px 0;
          }
          .section-title {
              color: #34495e;
              font-size: 2em;
              margin-bottom: 20px;
              text-align: center;
          }
          .content {
              display: flex;
              align-items: center;
              gap: 20px;
              margin-bottom: 40px;
          }
          .content img {
              max-width: 50%;
              border-radius: 10px;
              box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
          }
          .content p {
              flex: 1;
              font-size: 1.1em;
              line-height: 1.8;
          }
          footer {
              background-color: #2c3e50;
              color: #fff;
              text-align: center;
              padding: 10px 0;
              margin-top: 40px;
          }
          footer a {
              color: #3498db;
              text-decoration: none;
          }
          footer a:hover {
              text-decoration: underline;
          }
      </style>
  </head>
  <body>
      <header>
          <h1>Welcome to My Portfolio</h1>
          <p>Data Analyst | Mathematics Enthusiast | Problem Solver</p>
      </header>
  
      <div class="container">
          <!-- Section 1: The Power of Data -->
          <section>
              <h2 class="section-title">The Power of Data in the Digital Age</h2>
              <div class="content">
                  <img src="data:image/jpeg;base64,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" alt="Big Data">
                  <p>
                      Data is the new oil. In today's digital world, every click, swipe, and interaction generates valuable information. 
                      As a Data Analyst, I am passionate about transforming raw data into meaningful insights that drive decision-making and innovation.
                  </p>
              </div>
          </section>
  
          <!-- Section 2: From Numbers to Insights -->
          <section>
              <h2 class="section-title">From Numbers to Insights</h2>
              <div class="content">
                  <p>
                      Using tools like Python, SQL, and Tableau, I analyze complex datasets to uncover trends, patterns, and correlations. 
                      Whether it's predicting customer behavior or optimizing business processes, data analysis is the key to unlocking potential.
                  </p>
                  <img src="https://www.kyubit.com/Images/Analytical-Dashboard/Analytical-Dashboard.webp" alt="Data Dashboard">
              </div>
          </section>
  
          <!-- Section 3: Visualizing the Future -->
          <section>
              <h2 class="section-title">Visualizing the Future</h2>
              <div class="content">
                  <img src="https://builtin.com/sites/www.builtin.com/files/2023-01/Data%20Visualization.png" alt="Data Visualization">
                  <p>
                      Data visualization is more than just charts and graphs—it's about telling a story. Through tools like Power BI and Matplotlib, 
                      I create visualizations that make data accessible and actionable for everyone.
                  </p>
              </div>
          </section>
  
          <!-- Section 4: Machine Learning and Beyond -->
          <section>
              <h2 class="section-title">Machine Learning and Beyond</h2>
              <div class="content">
                  <p>
                      With a foundation in mathematics and statistics, I am exploring the world of machine learning. 
                      From predictive modeling to natural language processing, the possibilities are endless.
                  </p>
                  <img src="https://orsys-lemag.com/wp-content/uploads/2023/11/MachineLearning_DeepLearnind_IA-e1701257201101.jpg" alt="Machine Learning">
              </div>
          </section>
      </div>
  
      <footer>
          <p>© 2025 Leonard Bodhi Kumaro | <a href="mailto:bkleonard174@gmail.com">Email Me</a> | 
          <a href="https://www.linkedin.com/in/leonardkumaro" target="_blank">LinkedIn</a> | 
          <a href="https://github.com/leonardaaaro" target="_blank">GitHub</a></p>
      </footer>
  </body>
</x-layout>