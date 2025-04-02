<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Limuel Lacandola | Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/cebb112a12.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" href="assets/images/profile-icon.png">
</head>

<body class="bg-gray-100 text-gray-900">
    <!-- Sidebar (Hidden on Mobile, Centered on Larger Screens) -->
    <div class="fixed top-0 left-0 w-20 h-screen bg-white text-gray-900 shadow-md hidden md:flex flex-col justify-center items-center">
        <ul class="space-y-6 list-none">
            <li class="group relative">
                <a href="#top" class="flex items-center justify-center w-12 h-12 hover:bg-gray-200 rounded-full">
                    <i class="fa-solid fa-user text-xl"></i>
                </a>
                <span class="absolute left-16 top-1/2 -translate-y-1/2 opacity-0 group-hover:opacity-100 bg-gray-800 text-white text-sm px-3 py-1 rounded-md shadow-md transition-opacity duration-200">
                    About
                </span>
            </li>
            <li class="group relative">
                <a href="#projects" class="flex items-center justify-center w-12 h-12 hover:bg-gray-200 rounded-full">
                    <i class="fa-solid fa-code text-xl"></i>
                </a>
                <span class="absolute left-16 top-1/2 -translate-y-1/2 opacity-0 group-hover:opacity-100 bg-gray-800 text-white text-sm px-3 py-1 rounded-md shadow-md transition-opacity duration-200">
                    Projects
                </span>
            </li>
            <li class="group relative">
                <a href="#education" class="flex items-center justify-center w-12 h-12 hover:bg-gray-200 rounded-full">
                    <i class="fa-solid fa-graduation-cap text-xl"></i>
                </a>
                <span class="absolute left-16 top-1/2 -translate-y-1/2 opacity-0 group-hover:opacity-100 bg-gray-800 text-white text-sm px-3 py-1 rounded-md shadow-md transition-opacity duration-200">
                    Education
                </span>
            </li>
            <li class="group relative">
                <a href="#experience" class="flex items-center justify-center w-12 h-12 hover:bg-gray-200 rounded-full">
                    <i class="fa-solid fa-briefcase text-xl"></i>
                </a>
                <span class="absolute left-16 top-1/2 -translate-y-1/2 opacity-0 group-hover:opacity-100 bg-gray-800 text-white text-sm px-3 py-1 rounded-md shadow-md transition-opacity duration-200">
                    Experience
                </span>
            </li>
            <li class="group relative">
                <a href="#contact" class="flex items-center justify-center w-12 h-12 hover:bg-gray-200 rounded-full">
                    <i class="fa-solid fa-envelope text-xl"></i>
                </a>
                <span class="absolute left-16 top-1/2 -translate-y-1/2 opacity-0 group-hover:opacity-100 bg-gray-800 text-white text-sm px-3 py-1 rounded-md shadow-md transition-opacity duration-200">
                    Contact
                </span>
            </li>
        </ul>
    </div>



    <!-- Hero Section -->
    <header id="top" class="flex flex-col items-center justify-center h-screen bg-white shadow-md px-6 text-center">
        <!-- Profile Image -->
        <img src="assets/images/profile.jpg" alt="Profile Image"
            class="w-40 h-40 rounded-full shadow-md border-4 border-blue-600">

        <h1 class="mt-6 text-4xl font-bold text-blue-600">Hello, I'm Limuel Lacandola!</h1>
        <p class="mt-2 text-lg text-gray-700">A fresh graduate student developer passionate about developing modern web and mobile experiences.</p>

        <div class="mt-6 flex gap-4">
            <a href="#projects" class="inline-flex items-center justify-center px-6 py-3 w-48 bg-blue-600 text-white font-medium rounded-lg shadow-md hover:bg-blue-700 transition">
                <i class="fa-solid fa-code px-2"></i> View Projects
            </a>
            <a href="assets/files/LACANDOLA, LIMUEL_CV.pdf" download class="inline-flex items-center justify-center px-6 py-3 w-48 bg-blue-600 text-white font-medium rounded-lg shadow-md hover:bg-blue-700 transition">

                <i class="fa-solid fa-download px-2"></i>Download CV
            </a>
        </div>

        </div>
    </header>


    <!-- About Section -->
    <section id="about" class="min-h-screen flex items-center justify-center bg-gray-50 px-6 text-center">
        <div class="max-w-3xl">
            <h2 class="text-3xl font-semibold text-gray-800">About Me</h2>
            <p class="mt-4 text-gray-600 leading-relaxed">
                I recently graduated with a degree in Information Technology and have a strong passion for web development and mobile application development.
                I specialize in troubleshooting, basic web and mobile application development, and creating great user experiences.
            </p>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="min-h-screen flex items-center justify-center px-6">
        <div class="max-w-5xl text-center">
            <h2 class="text-3xl font-semibold text-gray-800">Projects</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
                <!-- Project Card -->
                <div class="bg-white p-6 rounded-lg shadow-md cursor-pointer"
                    onclick="window.open('https://github.com/LimuelLacandola/trip-ticket', '_blank');">
                    <h3 class="text-xl font-medium text-blue-600">Philhealth Trip Ticketing System</h3>
                    <p class="text-gray-600 mt-2">An automated ticketing web system for the trip permit for the vehicles.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md cursor-pointer"
                    onclick="window.open('https://github.com/LimuelLacandola/HealthPro', '_blank');">
                    <h3 class="text-xl font-medium text-blue-600">Health Pro</h3>
                    <p class="text-gray-600 mt-2">An Health companion and monitoring app.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md cursor-pointer"
                    onclick="window.open('https://github.com/LimuelLacandola/San-and-Elisse-Bending-Shop-System', '_blank');">
                    <h3 class="text-xl font-medium text-blue-600">San and Elisse Bending Shop System</h3>
                    <p class="text-gray-600 mt-2">An integrated inventory management system for a bending shop.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section id="education" class="min-h-screen flex items-center justify-center px-6 bg-gray-50">
        <div class="max-w-5xl mx-auto text-center">
            <h2 class="text-3xl font-semibold text-gray-800">Education</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-6 mt-8">
                <!-- Education Card -->
                <div class="bg-white p-6 rounded-lg shadow-md ">
                    <h3 class="text-xl font-medium text-blue-600">EARIST Manila</h3>
                    <p class="text-gray-600 mt-2">An automated ticketing web system for the trip permit for the vehicles.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-medium text-blue-600">La Consolacion College Manila</h3>
                    <p class="text-gray-600 mt-2">An Health companion and monitoring app.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="min-h-screen flex items-center justify-center px-6">
        <div class="max-w-5xl mx-auto text-center">
            <h2 class="text-3xl font-semibold text-gray-800">Experience</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-6 mt-8">
                <!-- Experience Card -->
                <div class="bg-white p-6 rounded-lg shadow-md ">
                    <h3 class="text-xl font-medium text-blue-600">Fast Retailing Co., LTD - Uniqlo</h3>
                    <h4 class="font-medium">Seasonal Store Associate</h4>
                    <p class="text-gray-600 mt-2">An automated ticketing web system for the trip permit for the vehicles.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-medium text-blue-600">PhilHealth Regional Office NCR - Central</h3>
                    <h4 class="font-medium">Internship</h4>
                    <p class="text-gray-600 mt-2">An Health companion and monitoring app.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-20 bg-gray-50 min-h-screen flex items-center justify-center px-6" id="contact">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-3xl font-semibold text-gray-800">Let's Connect</h2>
            <p class="mt-4 text-gray-600">Feel free to reach out for collaborations or just to say hi!</p>
            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=lacandola.l.bsinfotech@gmail.com&su=Collaboration Inquiry&body=Hello, I’d love to discuss..."
                target="_blank"
                class="mt-4 inline-block px-6 py-3 bg-blue-600 text-white font-medium rounded-lg shadow-md hover:bg-blue-700 transition">
                Contact Me
            </a>
        </div>
    </section>



    <!-- Footer -->
    <footer class="py-4 bg-white text-center text-gray-600">
        <p>&copy; 2025 Limuel Lacandola.</p>
    </footer>

</body>


</html>