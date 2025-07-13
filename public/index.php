<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Modern Resume - Krishna Style</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <img src="profile.jpg" alt="Profile Image" class="profile-image" />
    <div class="tabs">
      <button class="tab active" onclick="showTab('about', event)">About Me</button>
      <button class="tab" onclick="showTab('skills', event)">Skills</button>
      <button class="tab" onclick="showTab('experience', event)">Experience</button>
      <button class="tab" onclick="showTab('education', event)">Education</button>
      <button class="tab" onclick="showTab('awards', event)">Awards</button>
    </div>

    <div id="about" class="tab-content" style="display:block;">
      <h2>About Me</h2>
      <p>
        I’m a Senior Analyst at Empower with strong skills in IT, automation, and AWS. My background includes experience in TCS, Python-based automations, and SaaS platforms. I’ve deployed NLP models, automated registry and reporting systems, and reduced manual efforts through tech innovation.
      </p>
      <ul>
        <li><strong>Phone:</strong> (+91) 9094952806</li>
        <li><strong>Email:</strong> krrish1606@gmail.com</li>
        <li><strong>LinkedIn:</strong> mrvkrishnakumar</li>
      </ul>
    </div>

    <div id="skills" class="tab-content" style="display:none;">
      <h2>Skills</h2>
      <ul>
        <li>Python</li>
        <li>AWS Lambda</li>
        <li>Step Functions</li>
        <li>Amazon Event Bridge</li>
        <li>Amazon Textract</li>
        <li>S3 Bucket</li>
        <li>DynamoDB</li>
        <li>SAS</li>
        <li>Basic SQL</li>
        <li>SAP Web Intelligence</li>
      </ul>
    </div>

    <div id="experience" class="tab-content" style="display:none;">
      <h2>Professional Experience</h2>
      <h3>Empower, Bangalore, IN</h3>
      <h4>Senior Analyst (Aug 2023–Present)</h4>
      <ul>
        <li>Automated payment registry systems, saving 30 mins of manual effort daily and increasing overall efficiency.</li>
        <li>Automated email extraction using Graph API, generating reports and saving 2 hours daily.</li>
        <li>Automated document processing using Amazon Textract, AWS Lambda, Step Functions, SQS, DynamoDB.</li>
        <li>Worked on deploying processes in 2 regions as part of disaster recovery.</li>
        <li>Deployed multiple Python jobs in AWS Lambda, enhancing automation.</li>
      </ul>
      <h4>Analyst (Jul 2021–Aug 2023)</h4>
      <ul>
        <li>Led automation of tax reporting process using SAS and Python, saving 45 minutes daily and $30,000 annually.</li>
        <li>Automated email deletion from team mailbox with Python, reducing admin overhead by 30 minutes monthly.</li>
        <li>Automated Salesforce service request creation with Python, saving 5 minutes per request.</li>
        <li>Automated email attachment downloads and Excel formatting, saving 2 hours daily.</li>
        <li>Created and implemented multiple SAS reports, improving data accessibility.</li>
      </ul>
      <h4>Intern (May 2020–Sep 2020)</h4>
      <ul>
        <li>Leveraged Topic Modeling and built a logistic regression model (80% accuracy) for classifying unstructured text.</li>
        <li>Developed Tableau dashboard to visualize findings for NIGO forms.</li>
        <li>Provided actionable recommendations, reducing form rejection rates.</li>
      </ul>
      <h3>TCS, Chennai, IN</h3>
      <h4>IT Analyst (Nov 2014–Aug 2019)</h4>
      <ul>
        <li>Liaised with clients to gather and update requirements.</li>
        <li>Developed and customized reports per client specifications.</li>
        <li>Analyzed and presented data, reporting discrepancies for resolution.</li>
        <li>Supervised a team of 2 associates, boosting efficiency by 20%.</li>
        <li>Automated Time-Sheet report generation, saving 15 minutes daily.</li>
        <li>Developed incident data dashboard for management and clients.</li>
      </ul>
    </div>

    <div id="education" class="tab-content" style="display:none;">
      <h2>Education</h2>
      <ul>
        <li>
          <strong>Goa Institute of Management, Goa, IN</strong><br>
          PGDM (Big Data Analytics) (CGPA: 6.33/8), 2019 - 2021
        </li>
        <li>
          <strong>SRM University, Chennai, IN</strong><br>
          B.Tech (Mechanical) (CGPA: 9.066/10), 2010 - 2014
        </li>
      </ul>
    </div>

    <div id="awards" class="tab-content" style="display:none;">
      <h2>Awards</h2>
      <ul>
        <li>Received multiple recognitions for work at Empower</li>
        <li>Won "VIP" award for automating the tax reporting process</li>
        <li>Won "Best Team" award for customer satisfaction at TCS</li>
        <li>Won "On the Spot" award for dedication and sincerity at TCS</li>
      </ul>
    </div>
  </div>

  <script>
    function showTab(tabName, event) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tab-content");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tab");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(tabName).style.display = "block";
      event.currentTarget.className += " active";
    }
  </script>
</body>
</html>
