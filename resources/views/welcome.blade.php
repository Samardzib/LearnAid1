<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learnaid</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="{{ asset('logo.png') }}" type="image/png">
    <style>
        /* Add your custom styles here */
        html, body {
            height: 50%; /* Set height to 100% */
            margin: 0; /* Remove default margin */
            font-family: Arial, sans-serif;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: #f0f0f0; /* Light background for header */
        }

        .header img {
            max-width: 90px; /* Smaller logo size */
            height: auto;
        }

        .auth-links {
            display: flex;
            align-items: center;
        }

        .auth-links a {
            margin-left: 10px;
            text-decoration: none;
            color: #333;
        }

        .profile-icon {
            width: 20px; /* Profile icon size */
            height: 20px;
            margin-right: 5px;
        }

        .main-section {
            display: flex;
            justify-content: space-between;
            align-items: stretch; /* Ensure children stretch to fill height */
            height: calc(100vh - 60px); /* Full height minus header height */
            padding: 20px;
        }

        .pomodoro {
    background-image: url('{{ asset('timerbg.png') }}'); /* Set the background image */
    background-size: cover; /* Cover the entire area */
    background-position: center; /* Center the image */
    padding: 20px;
    flex: 1; /* Take up available space */
    margin-right: 10px; /* Space between sections */
    display: flex;
    flex-direction: column; /* Stack children vertically */
    justify-content: center; /* Center content vertically */
}

        .icon-button {
    border: none; 
    background: none; 
    cursor: pointer; 
    transition: transform 0.3s, color 0.3s; /* Smooth transition for hover effect */
}

.icon-button:hover .icon {
    transform: scale(1.2); /* Scale up the icon on hover */
    color: #ffcc00; /* Change color on hover (optional) */
}

.icon {
    font-size: 24px; /* Set the icon size */
    color: white; /* Default icon color */
}
        

        .todo-list {
    background-image: url('{{ asset('notebook.jpg') }}'); /* Set the background image */
    background-size: cover; /* Cover the entire area */
    background-position: center; /* Center the image */
    padding: 20px;
    border-radius: 5px;
    flex: 1; /* Take up available space */
    color: white; /* Change text color to white for better contrast */
    position: relative; /* Position relative for overlay */
}

.todo-list::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black overlay */
    border-radius: 5px; /* Match border radius */
    z-index: 1; /* Place overlay below text */
}

.todo-list h2, .todo-list form, .todo-list ul {
    position: relative; /* Position relative to stack above the overlay */
    z-index: 2; /* Ensure text is above the overlay */
}

        .scrollable-content {
            padding: 20px; /* Optional: Add padding to the container */
            overflow-y: auto; /* Allow vertical scrolling */
        }

        .info-section {
    display: flex; /* Use flexbox for layout */
    align-items: center; /* Center items vertically */
    justify-content: space-between; /* Space between left and right sections */
    padding: 20px; /* Add some padding */
    background-color: #f4f4f4; /* Optional: background color for the section */
    border-radius: 8px; /* Optional: rounded corners */
    background: white;
}

.text-section {
    flex: 1; /* Allow this section to take available space */
    padding-right: 20px; /* Space between text and image */
    
}

.fun-fact-title {
    color: #FF6347; /* Set title color to orange */
    margin-bottom: 10px; /* Space below the title */
}

.image-section {
    flex: 0 0 400px; /* Fixed width for the image section */
}

.tomato-image {
    max-width: 100%; /* Make sure the image is responsive */
    height: auto; /* Maintain aspect ratio */
}


.info-title {
    color: #FF6347; /* Set title color to orange */
    margin-bottom: 20px; /* Space below the title */
    text-align: center; /* Center the title */
}

.card-container {
    display: flex; /* Use flexbox for layout */
    flex-wrap: wrap; /* Allow cards to wrap to the next line */
    justify-content: center; /* Center cards horizontally */
}

.card {
    background-color: white; /* Card background color */
    border-radius: 8px; /* Rounded corners for cards */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
    margin: 10px; /* Space between cards */
    padding: 15px; /* Padding inside cards */
    flex: 1 1 calc(30% - 20px); /* Responsive card width */
    max-width: 300px; /* Optional: max width for cards */
    text-align: center; /* Center text inside cards */
    transition: transform 0.3s; /* Smooth transition for hover effect */
}

.card:hover {
    transform: scale(1.05); /* Scale up the card on hover */
}

.card-image {
    max-width: 100%; /* Make sure the image is responsive */
    height: auto; /* Maintain aspect ratio */
    border-radius: 4px; /* Optional: rounded corners for images */
}

.card h3 {
    color: #333; /* Title color for card */
    margin: 10px 0; /* Space above and below the title */
}

.card p {
    color: #666; /* Text color for card description */
}

.testimonial-title {
    color: #FF6347; /* Set title color to orange */
    text-align: center; /* Center the title */
    margin-bottom: 20px; /* Space below the title */
}

.testimonial-container {
    position: relative; /* Position relative for absolute positioning of testimonials */
    overflow: hidden; /* Hide overflow for carousel effect */
    height: 150px; /* Set a fixed height for the testimonial container */
}

.testimonial {
    display: none; /* Hide all testimonials initially */
    flex: 1; /* Allow testimonials to take full width */
    align-items: flex-start; /* Align items to the start */
}

.testimonial.active {
    display: flex; /* Show the active testimonial */
}

.profile-pic {
    margin-right: 15px;
}

.profile-pic img {
    width: 50px; /* Set the size of the profile picture */
    height: 50px; /* Set the size of the profile picture */
    border-radius: 50%; /* Make it circular */
}

.testimonial-bubble {
    background-color: #fff;
    border-radius: 10px;
    padding: 10px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
    max-width: 80%; /* Limit the width of the testimonial bubble */
}

.navigation {
    margin-top: 20px; /* Space above navigation */
}

.navigation button {
    background: none; /* No background */
    border: none; /* No border */
    cursor: pointer; /* Pointer cursor */
    font-size: 24px; /* Icon size */
    color: #FF6347; /* Tomato color */
    margin: 0 10px; /* Space between buttons */
}

.navigation button:hover {
    color: #e55347; /* Darker tomato color on hover */
}
.profile-container {
    display: flex; /* Use flexbox for layout */
    flex-direction: column; /* Stack image and name vertically */
    align-items: center; /* Center items horizontally */
    margin: 10px; /* Space between profiles */
}

.footer {
    position: relative;
    bottom: 0;
    width: 100%;
    text-align: center;
    padding: 20px;
    background-color: #black;
}
.footer img {
    border-radius: 50%; /* Make images circular */
}

    </style>
</head>
<body>
<div class="header">
    <img src="{{ asset('logo learnaid.png') }}" alt="Learnaid Logo">
    <div class="auth-links">
        @if (Auth::check())
            <span style="margin-right: 10px;">Welcome {{ Auth::user()->name }}, let's study!</span> <!-- Display the user's name -->
            <img src="{{ asset('acc-logo.jpg') }}" alt="Profile Icon" class="profile-icon"> <!-- Profile icon -->
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf <!-- Ensure this is correct -->
            </form>
        @else
            <a href="{{ route('login') }}">Login</a>
        @endif
    </div>
</div>

<div class="main-section">
    <div class="pomodoro">
        <h2 style="color: white; text-align: center; font-size: 30px;">Pomodoro Timer</h2>
        <div id="timer" style="color: white; font-size: 70px; font-weight: bold; text-align: center; margin: 20px 0;">25:00</div>
        <div style="display: flex; justify-content: center; gap: 10px;">
            <button id="start" class="icon-button">
                <i class="fas fa-play icon"></i>
            </button>
            <button id="pause" class="icon-button">
                <i class="fas fa-pause icon"></i>
            </button>
        </div>
    </div>

    <div class="todo-list">
        <h2 style="color: white;">To-Do List</h2>
        <form action="{{ route('tasks.store') }}" method="POST" style="display: flex; align-items: center;">
            @csrf
            <input type="text" name="title" required placeholder="Add a new task" style="flex: 1; margin-right: 10px;">
            <button type="submit" class="icon-button">
                <i class="fas fa-plus icon"></i>
            </button>
        </form>
        <ul>
            @foreach ($tasks as $task)
                <li>
                    <form action="{{ route('tasks.update', $task) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('PUT')
                        <input type="text" name="title" value="{{ $task->title }}" required style="margin-right: 10px;">
                        <button type="submit" class="icon-button">
                            <i class="fas fa-edit icon"></i>
                        </button>
                    </form>
                    <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="icon-button">
                            <i class="fas fa-trash icon"></i>
                        </button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
</div>

<div class="scrollable-content">
    <div class="info-section">
        <div class="image-section">
            <img class="tomato-image" src="{{ asset('aboutgif.gif') }}" alt="LearnAid GIF" />
        </div>
        <div class="text-section">
            <h2 class="info-title">What is LearnAid?</h2>
            <p style="text-align:center;" >LearnAid is a web-based productivity tool designed to help students enhance their focus, manage tasks efficiently, and study effectively using the Pomodoro Technique. It combines essential features like a Pomodoro timer, a to-do list for task management, and calming music for a more focused learning environment.</p>
        </div>
    </div>
</div>

<div class="scrollable-content">
<div class="info-section">
    <div class="text-section">
        <h2 class="fun-fact-title">Fun Fact about Pomodoro</h2>
        <p>Did you know that the Pomodoro Technique was developed by Francesco Cirillo in the late 1980s? The name "Pomodoro" comes from the Italian word for tomato, inspired by the tomato-shaped kitchen timer that Cirillo used during his studies.</p>
    </div>
    <div class="image-section">
        <img src="tomato.png" alt="Tomato" class="tomato-image">
    </div>
</div>


<div class="info-section">
    <h2 class="info-title">Why Pomodoro Method is Effective?</h2>
    <div class="card-container">
        <div class="card">
            <img src="1.png" alt="Increase Focus" class="card-image">
            <h3>1. Increase Focus</h3>
            <p>The Pomodoro Technique encourages you to work in short bursts, which helps maintain focus.</p>
        </div>
        <div class="card">
            <img src="2.png" alt="Reduce Procrastination" class="card-image">
            <h3>2. Reduce Procrastination</h3>
            <p>By breaking tasks into smaller intervals, it becomes easier to start and complete them.</p>
        </div>
        <div class="card">
            <img src="3.png" alt="Increase Productivity" class="card-image">
            <h3>3. Increase Productivity</h3>
            <p>Short breaks between work sessions help refresh your mind, leading to higher productivity.</p>
        </div>
        <div class="card">
            <img src="4.png" alt="Efficient Time Management" class="card-image">
            <h3>4. Efficient Time Management</h3>
            <p>The technique helps you allocate time effectively, ensuring you stay on track.</p>
        </div>
        <div class="card">
            <img src="5.png" alt="Increase Mental Health" class="card-image">
            <h3>5. Increase Mental Health</h3>
            <p>Regular breaks can reduce stress and improve overall mental well-being.</p>
        </div>
    </div>
</div>

<div class="info-section">
    <h2 class="testimonial-title">Testimonials</h2>
    <div class="testimonial-container">
        <div class="testimonial active">
            <div class="profile-pic">
                <img src="user1.png" alt="User  1">
            </div>
            <div class="testimonial-bubble">
                <strong>Kimmy</strong>
                <p>"Learnaid has transformed my study habits! The Pomodoro technique keeps me focused and productive."</p>
            </div>
        </div>
        <div class="testimonial">
            <div class="profile-pic">
                <img src="user2.png" alt="User  2">
            </div>
            <div class="testimonial-bubble">
                <strong>Kenneth</strong>
                <p>"I love the Pomodoro timer! It helps me manage my time effectively while studying."</p>
            </div>
        </div>
        <div class="testimonial">
            <div class="profile-pic">
                <img src="user3.png" alt="User  3">
            </div>
            <div class="testimonial-bubble">
                <strong>Ammar</strong>
                <p>"The to-do list feature is so helpful! I can easily track my tasks and stay organized."</p>
            </div>
        </div>
        <div class="testimonial">
            <div class="profile-pic">
                <img src="user4.png" alt="User  4">
            </div>
            <div class="testimonial-bubble">
                <strong>Angel</strong>
                <p>"I feel more productive with Learnaid! The Pomodoro technique really works for me."</p>
            </div>
        </div>
        <div class="testimonial">
            <div class="profile-pic">
                <img src="user5.png" alt="User  5">
            </div>
            <div class="testimonial-bubble">
                <strong>Sofia</strong>
                <p>"Great app for managing my time! The Pomodoro method has made a significant difference."</p>
            </div>
        </div>
    </div>
    <div class="navigation">
        <button id="prev" onclick="changeTestimonial(-1)" aria-label="Previous">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button id="next" onclick="changeTestimonial(1)" aria-label="Next">
            <i class="fas fa-chevron-right"></i>
        </button>
    </div>
</div>

<footer class="footer text-center" style="background-color: #f8f9fa; padding: 20px;">
    <h3>Meet the Team</h3>
    <div class="row justify-content-center">
        <div class="col-md-3 text-center">
            <img src="{{ asset('ferry.png') }}" alt="Ferry Jaya Dinata" class="img-fluid rounded-circle" style="width: 100px; height: 100px;">
            <p><strong>Ferry Jaya Dinata</strong>
            <a href="https://www.linkedin.com/in/ferry-jaya-dinata-99611a32a/" target="_blank">LinkedIn</a> | 
            <a href="https://www.instagram.com/ferrrrrrry16/profilecard/?igsh=MWM4NzlzODhocTJuMw==" target="_blank">Instagram</a>
        </div>
        <div class="col-md-3 text-center">
            <img src="{{ asset('reinaldy.png') }}" alt="Reinaldy Zulfananda Arkaan" class="img-fluid rounded-circle" style="width: 100px; height: 100px;">
            <p><strong>Reinaldy Zulfananda Arkaan</strong>
            <a href="https://www.linkedin.com/in/reinaldy-zulfananda-arkaan-30567a179/" target="_blank">LinkedIn</a> | 
            <a href="https://www.instagram.com/reinaldizulfanandaa/profilecard/?igsh=Y2x2dDNrYTA1bjNn" target="_blank">Instagram</a>
        </div>
        <div class="col-md-3 text-center">
            <img src="{{ asset('sean.png') }}" alt="Sean Kenneth Tommy Keleyan" class="img-fluid rounded-circle" style="width: 100px; height: 100px;">
            <p><strong>Sean Kenneth Tommy Keleyan</strong>
            <a href="https://www.linkedin.com/in/sean-kenneth-tommy-keleyan-65864032a/" target="_blank">LinkedIn</a> | 
            <a href="https://www.instagram.com/kenneth.sean__/profilecard/?igsh=b3VpeXk3ejZvOXA1" target="_blank">Instagram</a>
        </div>
        <div class="col-md-3 text-center">
            <img src="{{ asset('syafiq.png') }}" alt="Syafiq Ammaar Muhadzdzib" class="img-fluid rounded-circle" style="width: 100px; height: 100px;">
            <p><strong>Syafiq Ammaar Muhadzdzib</strong>
            <a href="https://www.linkedin.com/in/syafiqammarm/" target="_blank">LinkedIn</a> | 
            <a href="https://www.instagram.com/samardzib/profilecard/?igsh=b3dzdnVpMGo1Mzhq" target="_blank">Instagram</a>
        </div>
    </div>
    <div class="footer-copyright" style="margin-top: 20px;">
        <p>© 2024 LearnAid. All rights reserved.</p>
    </div>
</footer>


<script>
// JavaScript for Pomodoro Timer
let timer;
let timeLeft = 1500; // 1500 = 25 minutes in seconds
const breakTime = 300; // 300 = 5 minutes in seconds
let isBreak = false; // Flag to check if it's break time

function updateTimerDisplay() {
    const minutes = Math.floor(timeLeft / 60);
    const seconds = timeLeft % 60;
    document.getElementById('timer').textContent = `${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
}

document.getElementById('start').addEventListener('click', () => {
    clearInterval(timer); // Clear any existing timer
    timer = setInterval(() => {
        if (timeLeft > 0) {
            timeLeft--;
            updateTimerDisplay();
        } else {
            clearInterval(timer);
            if (!isBreak) {
                alert('Time is up! Take a break.');
                isBreak = true; // Set the flag for break time
                timeLeft = breakTime; // Set time for break
                updateTimerDisplay();
                startBreak();
            } else {
                alert('Break time is over, let\'s study!');
                isBreak = false; // Reset the flag for study time
                timeLeft = 1500; // Reset time for study
                updateTimerDisplay();
            }
        }
    }, 1000);
});

document.getElementById('pause').addEventListener('click', () => {
    clearInterval(timer); // Pause the timer
});

function startBreak() {
    timer = setInterval(() => {
        if (timeLeft > 0) {
            timeLeft--;
            updateTimerDisplay();
        } else {
            clearInterval(timer);
            alert('Break time is over, let\'s study!');
            isBreak = false; // Reset the flag for study time
            timeLeft = 1500; // Reset time for study
            updateTimerDisplay();
        }
    }, 1000);
}

updateTimerDisplay(); // Initial display


// testimonial
let currentTestimonial = 0;
        const testimonials = document.querySelectorAll('.testimonial');

        function showTestimonial(index) {
            testimonials.forEach((testimonial, i) => {
                testimonial.classList.toggle('active', i === index);
            });
        }

        function changeTestimonial(direction) {
            currentTestimonial += direction;
            if (currentTestimonial < 0) {
                currentTestimonial = testimonials.length - 1; // Loop to last testimonial
            } else if (currentTestimonial >= testimonials.length) {
                currentTestimonial = 0; // Loop to first testimonial
            }
            showTestimonial(currentTestimonial);
        }

        // Initialize the first testimonial
        showTestimonial(currentTestimonial);
</script>
</body>
</html>