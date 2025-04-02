<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Limuel Lacandola | Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom styles using Tailwind's built-in configuration */
        @layer utilities {
            .text-balance {
                text-wrap: balance;
            }
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Hero Section -->
    <header class="flex flex-col items-center justify-center h-screen bg-white shadow-md px-6 text-center">
        <!-- Profile Image -->
        <img src="https://via.placeholder.com/150" alt="Profile Image"
            class="w-40 h-40 rounded-full shadow-md border-4 border-blue-600">
        
        <h1 class="mt-6 text-4xl font-bold text-blue-600">Hello, I'm Limuel Lacandola!</h1>
        <p class="mt-2 text-lg text-gray-700">A fresh graduate student developer passionate about developing modern web and mobile experiences.</p>
        
        <a href="#projects" class="mt-6 px-6 py-3 bg-blue-600 text-white font-medium rounded-lg shadow-md hover:bg-blue-700 transition">
            View My Work
        </a>
    </header>

    <!-- About Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-3xl font-semibold text-gray-800">About Me</h2>
            <p class="mt-4 text-gray-600 leading-relaxed">
                I recently graduated with a degree in Information Technology and have a strong passion for web development and mobile application development. 
                I specialize in trouble shooting, basic web and mobile application and great user experience.
            </p>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20">
        <div class="max-w-5xl mx-auto text-center">
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

    <!-- Contact Section -->
    <section class="py-20 bg-gray-50">
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
    <footer class="py-6 bg-white text-center text-gray-600">
        <p>&copy; 2025 Limuel Lacandola. All rights reserved.</p>
    </footer>

</body>
</html>
