<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shubham Dalvi - Cloud Technical Consultant & Solution Architect </title>
    <!-- Load Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        /* Custom styles for the Inter font and smooth scrolling */
        body {
            font-family: 'Inter', sans-serif;
            scroll-behavior: smooth;
            background-color: #f7fafc; /* Light gray background */
        }
        /* Custom button styling for a modern look */
        .btn-primary {
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(79, 70, 229, 0.4);
        }
    </style>

    <!--
        PHP SIMULATION START
        In a real PHP application, the header would be loaded here:
        <?php
            // $pageTitle = "Shubham - Cloud Technical Consultant";
            // include 'partials/meta_tags.php';
        ?>
    -->
</head>
<body class="text-gray-800">

    <!-- Navigation Bar (PHP: include 'partials/navbar.php') -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo/Name -->
                <a href="#" class="flex-shrink-0 text-2xl font-extrabold text-indigo-600 rounded-lg p-1">
                    <span class="text-gray-800">Shubham</span><span class="text-indigo-600">.Cloud</span>
                </a>

                <!-- Navigation Links -->
                <nav class="hidden md:flex space-x-8">
                    <a href="#expertise" class="text-gray-600 hover:text-indigo-600 transition duration-150 ease-in-out font-medium">Expertise</a>
                    <a href="#services" class="text-gray-600 hover:text-indigo-600 transition duration-150 ease-in-out font-medium">Services</a>
                    <a href="#about" class="text-gray-600 hover:text-indigo-600 transition duration-150 ease-in-out font-medium">About Shubham</a>
                    <a href="#contact" class="text-white bg-indigo-600 hover:bg-indigo-700 px-4 py-2 rounded-lg shadow-lg font-semibold transition duration-150 ease-in-out">
                        Contact Me
                    </a>
                </nav>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-gray-500 hover:text-gray-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 rounded-md p-2">
                        <!-- Heroicons menu icon -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile Menu (Hidden by default) -->
        <div id="mobile-menu" class="hidden md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="#expertise" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-indigo-50 hover:text-indigo-600">Expertise</a>
                <a href="#services" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-indigo-50 hover:text-indigo-600">Services</a>
                <a href="#about" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-indigo-50 hover:text-indigo-600">About Shubham</a>
                <a href="#contact" class="block px-3 py-2 rounded-md text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700 text-center mt-2">Contact Me</a>
            </div>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="py-20 lg:py-32 bg-indigo-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-4xl sm:text-6xl lg:text-7xl font-extrabold tracking-tight text-gray-900 mb-6">
                    <span class="block">Shubham: <span class="text-indigo-600">Cloud Technical Consultant</span></span>
                </h1>
                <p class="mt-3 max-w-3xl mx-auto text-xl text-gray-500 sm:mt-5">
                    I design, deploy, and manage highly scalable, secure, and cost-efficient cloud infrastructure. Specializing in modernization and multi-cloud strategies across AWS, Azure, and GCP.
                </p>
                <div class="mt-10 flex justify-center space-x-4">
                    <a href="#contact" class="btn-primary bg-indigo-600 text-white px-8 py-3 rounded-xl text-lg font-semibold shadow-lg hover:bg-indigo-700 transition duration-300">
                        Discuss a Project
                    </a>
                    <a href="#services" class="btn-primary bg-white text-indigo-600 border border-indigo-600 px-8 py-3 rounded-xl text-lg font-semibold shadow-md hover:bg-gray-50 transition duration-300">
                        View My Services
                    </a>
                </div>
                <!-- Image Placeholder for visual appeal -->
                <div class="mt-16">
                    <img src="https://placehold.co/1000x500/e0e7ff/6366f1?text=Cloud+Architecture+Diagram+(AWS%2FGCP%2FAzure)"
                         alt="Cloud Architecture Diagram Mockup"
                         class="mx-auto w-full max-w-4xl rounded-xl shadow-2xl ring-4 ring-indigo-300/50" />
                </div>
            </div>
        </section>

        <!-- Expertise Section (PHP: Dynamic data loop) -->
        <section id="expertise" class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Core Consultant Strengths</h2>
                    <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                        Focused on Efficiency, Security, and Automation
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

                    <!-- PHP SIMULATION: Loop through expertise here -->
                    <?php
                        // $expertise = fetch_data('shubham_skills');
                        // foreach ($expertise as $skill):
                    ?>

                    <!-- Expertise Card 1: Cloud Architecture -->
                    <div class="bg-gray-50 p-8 rounded-2xl shadow-xl hover:shadow-2xl transition duration-300 transform hover:scale-[1.02]">
                        <div class="flex items-center justify-center h-12 w-12 rounded-xl bg-indigo-100 text-indigo-600 mb-4">
                            <!-- Icon: Design/Blueprint -->
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 17h18M5 10h14a2 2 0 012 2v3a2 2 0 01-2 2H5a2 2 0 01-2-2v-3a2 2 0 012-2zM6 10V7a4 4 0 014-4h4a4 4 0 014 4v3" /></svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Solution Architecture</h3>
                        <p class="text-gray-600">Expert in designing resilient, high-availability architectures (compute, storage, networking) tailored to specific business needs.</p>
                    </div>

                    <!-- Expertise Card 2: DevOps & Automation -->
                    <div class="bg-gray-50 p-8 rounded-2xl shadow-xl hover:shadow-2xl transition duration-300 transform hover:scale-[1.02]">
                        <div class="flex items-center justify-center h-12 w-12 rounded-xl bg-indigo-100 text-indigo-600 mb-4">
                            <!-- Icon: Gears/Automation -->
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37a1.724 1.724 0 002.572-1.065z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">DevOps & IaC</h3>
                        <p class="text-gray-600">Implementing Infrastructure as Code (Terraform, CloudFormation) and CI/CD pipelines to ensure rapid, consistent, and error-free deployments.</p>
                    </div>

                    <!-- Expertise Card 3: Optimization -->
                    <div class="bg-gray-50 p-8 rounded-2xl shadow-xl hover:shadow-2xl transition duration-300 transform hover:scale-[1.02]">
                        <div class="flex items-center justify-center h-12 w-12 rounded-xl bg-indigo-100 text-indigo-600 mb-4">
                            <!-- Icon: Piggy Bank/Money -->
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 8h6m-5 0v3m-3.5 0h8A2.5 2.5 0 0118 14.5a2.5 2.5 0 01-2.5 2.5h-9A2.5 2.5 0 014 14.5a2.5 2.5 0 012.5-2.5zm12-7A2.5 2.5 0 0118 6.5a2.5 2.5 0 01-2.5 2.5h-9A2.5 2.5 0 014 6.5a2.5 2.5 0 012.5-2.5zm12 7A2.5 2.5 0 0118 13.5a2.5 2.5 0 01-2.5 2.5h-9A2.5 2.5 0 014 13.5a2.5 2.5 0 012.5-2.5zm-3.5 0v3" /></svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">FinOps & Cost Control</h3>
                        <p class="text-gray-600">Implementing strategies for cloud cost management, resource rightsizing, and reserved instances to maximize ROI on cloud spend.</p>
                    </div>

                    <!-- PHP SIMULATION: endforeach; -->

                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="py-20 bg-indigo-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Consulting Offerings</h2>
                    <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                        How I Help Businesses Succeed in the Cloud
                    </p>
                </div>
                <!-- Service Cards Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                    <!-- Service 1: Migration -->
                    <div class="flex bg-white rounded-xl shadow-2xl p-6 md:p-8 hover:shadow-indigo-300/50 transition duration-300">
                        <div class="flex-shrink-0">
                            <!-- Icon: Cloud Migration -->
                            <svg class="h-10 w-10 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" /></svg>
                        </div>
                        <div class="ml-5">
                            <h4 class="text-xl font-bold text-gray-900 mb-2">Cloud Migration Strategy</h4>
                            <p class="text-gray-600">Developing and executing 'lift-and-shift' or 're-platforming' plans to safely move existing infrastructure into the cloud (AWS/Azure/GCP).</p>
                        </div>
                    </div>
                    <!-- Service 2: IaC -->
                    <div class="flex bg-white rounded-xl shadow-2xl p-6 md:p-8 hover:shadow-indigo-300/50 transition duration-300">
                        <div class="flex-shrink-0">
                            <!-- Icon: Code -->
                            <svg class="h-10 w-10 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" /></svg>
                        </div>
                        <div class="ml-5">
                            <h4 class="text-xl font-bold text-gray-900 mb-2">Infrastructure as Code (IaC)</h4>
                            <p class="text-gray-600">Creating scalable, maintainable infrastructure blueprints using Terraform, Ansible, and Puppet, ensuring state management best practices.</p>
                        </div>
                    </div>
                    <!-- Service 3: Security -->
                    <div class="flex bg-white rounded-xl shadow-2xl p-6 md:p-8 hover:shadow-indigo-300/50 transition duration-300">
                        <div class="flex-shrink-0">
                            <!-- Icon: Shield/Security -->
                            <svg class="h-10 w-10 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.001 12.001 0 002 15c0 4.145 3.198 8.087 7.618 10.944l.44.293a1 1 0 001.084 0l.44-.293C18.802 23.087 22 19.145 22 15a12.001 12.001 0 00-2.382-8.016z" /></svg>
                        </div>
                        <div class="ml-5">
                            <h4 class="text-xl font-bold text-gray-900 mb-2">Security & Compliance Audits</h4>
                            <p class="text-gray-600">Reviewing existing cloud setups against industry standards (e.g., CIS Benchmarks) to enhance perimeter defense, IAM policies, and data security.</p>
                        </div>
                    </div>
                    <!-- Service 4: Monitoring -->
                    <div class="flex bg-white rounded-xl shadow-2xl p-6 md:p-8 hover:shadow-indigo-300/50 transition duration-300">
                        <div class="flex-shrink-0">
                            <!-- Icon: Monitoring/Chart -->
                            <svg class="h-10 w-10 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" /></svg>
                        </div>
                        <div class="ml-5">
                            <h4 class="text-xl font-bold text-gray-900 mb-2">Observability & Monitoring</h4>
                            <p class="text-gray-600">Setting up robust monitoring, logging, and alerting systems using tools like Prometheus, Grafana, and cloud-native services for proactive operations.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Me Section -->
        <section id="about" class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:grid lg:grid-cols-3 lg:gap-12">
                    <div class="lg:col-span-1 mb-8 lg:mb-0">
                        <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl mb-4">
                            About Shubham
                        </h2>
                        <img src="https://placehold.co/400x400/6366f1/ffffff?text=Shubham"
                             alt="Shubham Profile Photo Placeholder"
                             class="rounded-full w-48 h-48 object-cover mx-auto lg:mx-0 shadow-xl ring-4 ring-indigo-500/20" />
                    </div>
                    <div class="lg:col-span-2 text-lg text-gray-600 space-y-6">
                        <p>
                            I am a results-driven Cloud Technical Consultant with **[X years]** of experience guiding businesses through complex digital transformations. My focus is translating business goals into secure, scalable, and operationally efficient cloud environments.
                        </p>
                        <p>
                            My background covers a deep expertise in containerization (Docker, Kubernetes), serverless computing (Lambda, Azure Functions), and the end-to-end implementation of Infrastructure as Code. I thrive on optimizing resources to deliver maximum performance while drastically reducing monthly cloud costs.
                        </p>
                        <p>
                            I am passionate about continuous learning and contributing to the open-source community, always staying ahead of the curve in the rapidly evolving world of cloud technology. Let's connect and discuss how I can bring cloud excellence to your organization.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action / Contact Form (PHP: Form handling) -->
        <section id="contact" class="py-20 bg-indigo-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                    <div class="lg:col-span-6">
                        <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl mb-4">
                            Let's Build the Future Together
                        </h2>
                        <p class="mt-4 text-lg text-gray-500">
                            I'm available for new consulting engagements and full-time opportunities. Send me a message, and I'll respond within 24 hours.
                        </p>
                        <ul class="mt-8 space-y-4 text-gray-600">
                            <li class="flex items-center">
                                <svg class="flex-shrink-0 h-6 w-6 text-indigo-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                                <!-- Placeholder Email -->
                                <span>shubham.cloud.consult@example.com</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="flex-shrink-0 h-6 w-6 text-indigo-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8.28 15.08A6.9 6.9 0 0112 13.9a6.9 6.9 0 013.72 1.18L17 17l.72-2.16A9 9 0 1012 21h.01M21 12a9 9 0 00-9-9" /></svg>
                                <span>Connect on LinkedIn (Link Placeholder)</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Contact Form -->
                    <div class="mt-12 lg:mt-0 lg:col-span-6">
                        <div class="bg-white p-8 rounded-2xl shadow-2xl">
                            <!-- PHP SIMULATION: This form posts to the same PHP file (index.php) -->
                            <form action="index.html" method="POST" class="space-y-6">
                                <!--
                                    PHP SIMULATION
                                    The actual PHP script would handle form submission here:
                                    <?php
                                        // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                        //     $name = htmlspecialchars($_POST['name']);
                                        //     $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
                                        //     // Save to database or send email
                                        //     // echo '<p class="text-green-600 font-bold">Thank you for your inquiry!</p>';
                                        // }
                                    ?>
                                -->
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                                    <input type="text" name="name" id="name" required
                                           class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                                           placeholder="Your Name">
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700">Work Email</label>
                                    <input type="email" name="email" id="email" required
                                           class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                                           placeholder="you@company.com">
                                </div>
                                <div>
                                    <label for="message" class="block text-sm font-medium text-gray-700">Project Inquiry</label>
                                    <textarea id="message" name="message" rows="4" required
                                              class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                                              placeholder="What cloud challenge can I help you solve?"></textarea>
                                </div>
                                <button type="submit"
                                        class="w-full btn-primary flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-xl text-lg font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-300">
                                    Send Message
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer (PHP: include 'partials/footer.php') -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 border-b border-gray-700 pb-8 mb-8">
                <!-- Name/Brand -->
                <div>
                    <h3 class="text-xl font-bold mb-4 text-indigo-400">Shubham.Cloud</h3>
                    <p class="text-sm text-gray-400">Cloud Technical Consulting & Architecture.</p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="font-semibold text-gray-300 mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#about" class="text-gray-400 hover:text-white transition">About Me</a></li>
                        <li><a href="#services" class="text-gray-400 hover:text-white transition">My Services</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Case Studies</a></li>
                    </ul>
                </div>

                <!-- Expertise -->
                <div>
                    <h4 class="font-semibold text-gray-300 mb-4">Key Expertise</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#expertise" class="text-gray-400 hover:text-white transition">Cloud Architecture</a></li>
                        <li><a href="#expertise" class="text-gray-400 hover:text-white transition">DevOps & IaC</a></li>
                        <li><a href="#expertise" class="text-gray-400 hover:text-white transition">FinOps</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="font-semibold text-gray-300 mb-4">Connect</h4>
                    <address class="space-y-2 text-sm not-italic">
                        <p class="text-gray-400">Location: Remote/Global</p>
                        <p class="text-gray-400">Email: shubham.cloud.consult@example.com</p>
                    </address>
                </div>
            </div>

            <!-- Copyright -->
            <div class="text-center text-sm text-gray-500">
                &copy; <span id="current-year"></span> Shubham. All rights reserved.
            </div>
            <!-- PHP SIMULATION: Dynamic year -->
            <?php // echo '<p>&copy; ' . date('Y') . ' Shubham. All rights reserved.</p>'; ?>

        </div>
    </footer>

    <!-- JavaScript for Mobile Menu and Dynamic Year -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Mobile Menu Toggle
            const menuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            menuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });

            // Set current year in footer
            document.getElementById('current-year').textContent = new Date().getFullYear();
        });
    </script>
</body>
</html>
