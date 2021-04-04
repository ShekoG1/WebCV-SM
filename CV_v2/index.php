<!DOCTYPE html>
<html>
    <head>
        <title>CV of Shekhar Maharaj</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        crossorigin="anonymous">

        <link rel="stylesheet" href="CVstyles.css" type="text/css"/>

    </head>
    <nav> 
         <h1 class="Heading" align ="center">Welcome to the CV of Shekhar Maharaj</h1>
         <hr color = "blue"/>
        <div class="menu">
            <div ><a href="#AboutMe">About Me</a></div>
            <div><a href="#Hobbies">Hobbies</a></div>
            <div ><a href="#ExtraCurricular">Extra-Curricular</a></div>
            <div ><a href="#Education">Education</a></div>
            <div ><a href="#Experience">Experience</a></div>
            <div ><a href="#Certifications">Certifications</a></div>
            <div ><a href="#ProgrammingSkills">Programming Skills</a></div>
            <div ><a href="#Projects">Projects</a></div>
            <div ><a href="#Abilities">Abilities</a></div>
            <div ><a href="#ContactInfo">Contact Information</a></div>
        </div>
         <hr color = "red">
    </nav>
    <body>
        <script src="control.js">  </script>
        
        <section id="AboutMe" class="section1">About Me</section>
        <p> My passion for gaming is what lead to me towards studying for a BSc. in Information Technology. I have always looked for ways that I can improve the performance of a system overall.
 The curiosity from the creation of different types of software is what led me to finding my love for the world of Information Technology. My passion in the vast sector of Information Technology is primarily in the software spectrum covering both backend and frontend logic and design.
I am in search of a job in my ¬field of study so that I may pursue my education further. As well as gain experience in the field.
</p>
        <section id="Hobbies" class="section2" >Hobbies</section>
        <ul >
            <li class="blueList">Gaming</li>
            <li class="blueList">Gyming</li>
            <li class="blueList">Tinkering</li>
            <li class="blueList">Learning</li>
            <li class="blueList">Coding</li>
            <li class="blueList">Certificate hunting</li>
        </ul>
        <section id="ExtraCurricular" class="section3">Extra-Curricular</section>
        <ul >
            <li>Karate</li>
            <li>Golf</li>
        </ul>
       <section id="Education" class="section4">Education</section>
     
        <p>Bachelors in Computer Science (2020) - Varsity College Durban North - Durban, KwaZulu-Natal<br/>
First Year<br/> 
Semester 1 -</p>
        <ul >
                 <li class="blueList">Programming Logic and Design</li>
		 <li class="blueList">Programming 1A (Java)</li>
		 <li class="blueList">Network Engineering 1A</li>
                 <li class="blueList"> Mathematical Principles of Computer Science</li></ul>
        <p>Semester 2 -</p>
        <ul class="blueList">
		<li> Principles of Security</li>
		<li> Programming 1B (Java)</li>
		<li> Network Engineering 1A</li>
		<li> I.T Professional Practice</li></ul>
        <!--This is my about me section-->
        <section id="Experience" class="section5">Experience</section>
        <p>Front Desk Assistant (<span>CURRENT</span>) - New Victory Foods - Durban, KwaZulu-Natal
	- Responsibilities include:
		* Cash sales / End of shift cash and balance
		* Stock Take / Virtual Stock and Price Updating
        </p>
        <p>Social Media Editor(April 2020 - July 2020)- Kapenta Bay Resort
	- Responsibilities included:
		* Respond to online queries
		* Upload information with pics and videos
        </p>
        <section id="Projects" class="section10">Projects</section>
        <ul>
            <li class="blueList">TargotPractice</li>
            <li class="blueList">ScrabbleGameBeta</li>
            <li class="blueList">MyFirstCalculater</li>
        </ul>
        <p>You may view more projects that I have worked on by clicking the link to my GitHub profile under the Contact Info. tab</p>
        <section id="Certifications" class="section6">Certifications</section>
        <ul>
            <li>HTML</li>
            <li>SQL</li>
            <li>Java</li>
        </ul>
        
        <section id="ProgrammingSkills" class="section7">Programming Skills</section>
        <ul>
            <li class="blueList">Java<div class="stars">****</div></li>
            <li class="blueList">SQL<div class="stars">**</div></li>
            <li class="blueList">HTML<div class="stars">***</div></li>
            <li class="blueList">JavaScript<div class="stars">***</div></li>
            <li class="blueList">CSS<div class="stars">**</div></li>
        </ul>
        <section id="Abilities" class="section8">Abilities</section>
        <ul >
            <li >Adaptable<div class="stars">****</div></li>
            <li >Multi-tasker <div class="stars">***</div></li>
            <li >Hard-working <div class="stars">**</div></li>
            <li >Smart-working <div class="stars">***</div></li>
            <li >Team-worker <div class="stars">****</div></li>
            <li >Self-motivated <div class="stars">*****</div></li>
            <li >Positively-inclined <div class="stars">***</div></li>
            <li >Creative <div class="stars">****</div></li>
        </ul>
       
    </body>
    <footer>
        <section id="ContactInfo" class="section9">Contact Information</section>
        <p>Cell phone: 084 894 7990<br/>
            Email: shekharmaharaj2905@gmail.com<br/>
            GitHub: <a class ="GitLink" href="https://github.com/ShekoG1">https://github.com/ShekoG1</a>
</p>
<form action="">
<label>Email:</label>
<div><input type="email" name="ViewerEmail" placeholder="example@Ex.co.za"></div>
<label>Message: </label>
<div><input type="text" name="ViewerMessage" placeholder="Enter Message Here"></div>
<div><input type="submit" name="btn" value="Send"></div>
</form>
            <?php
            //sending the email to Me
            // put your code here
        if(isset($_GET['btn'])){
            $message = $_GET['ViewerMessage'];
            $ViewerEmail = $_GET['ViewerEmail'];
            $MyEmail="shekharmaharaj2905@gmail.com";
            $subject="Someone wants to contact you!";
            $ViewerMessage="Hello there,<br/> Shekhar has recieved your email address as well as your message.<br/> He will reply to you as soon as possible.<br/><br/>Kind Regards<br/>On behalf of Shekhar Maharaj";
            $ViewerSubject="ShekharMaharajCV-Contact Request Recieved";
            $header="From: The Sender Name <$ViewerEmail>\r\n";
            $header .= "Content-type: text/html\r\n";
            $ViewerHeader="From: Shekhar Maharaj- <$MyEmail>\r\n";
            $ViewerHeader .= "Content-type: text/html\r\n";
            
            mail($MyEmail,$subject,$message,$header);
            //sending the email to the viewer
            mail($ViewerEmail,$ViewerSubject,$ViewerMessage,$ViewerHeader);
        }
            ?>
    </footer>
</html>