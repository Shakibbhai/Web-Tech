<!DOCTYPE html>
<html>
<head>
    <title>Contact Me</title>
    <link rel="stylesheet" type="text/css" href="1452.css">
    <script src="1452.js" defer></script>
    <script>
        
        function validateForm(event) {
          
            event.preventDefault();

            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var subject = document.getElementById('subject').value;
            var message = document.getElementById('message').value;

            if (!name || !email || !subject || !message) {
                alert('Please fill in all the fields.');
                return false;
            }

            var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            if (!emailRegex.test(email)) {
                alert('Please enter a valid email address.');
                return false;
            }

            document.getElementById('contactForm').submit();
        }
    </script>
</head>
<body>
    <div class="container">
        <header>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li class="dropdown">
                        <a href="about.php">About Me</a>
                        <div class="dropdown-content">
                            <a href="personal_info.php">Personal Info</a>
                            <a href="educational_info.php">Educational Info</a>
                            <a href="work_info.php">Work Info</a>
                        </div>
                    </li>
                    <li><a href="contact.php">Contact Me</a></li>
                    <li><a href="admin.html">Admin</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <section>
                <h2>Contact Me</h2>
                <!-- Added onsubmit event to trigger JavaScript validation -->
                <form id="contactForm" action="process_contact.php" method="POST" onsubmit="validateForm(event)">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name"><br>
                    
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email"><br>
                    
                    <label for="subject">Subject:</label>
                    <input type="text" id="subject" name="subject"><br>
                    
                    <label for="message">Message:</label>
                    <textarea id="message" name="message"></textarea><br>
                    
                    <button type="submit">Submit</button>
                </form>
            </section>
        </main>
        <footer>
            <p>&copy; 2025, Nazmus Shakib</p>
        </footer>
    </div>
</body>
</html>
