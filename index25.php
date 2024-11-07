<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fordina Pandeli School</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        html {
            scroll-behavior: smooth;
        }
        .bg-orange-green-gradient {
            background: linear-gradient(135deg, #FFA500, #4CAF50);
        }
        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideInFromLeft {
            from { transform: translateX(-50px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        @keyframes slideInFromRight {
            from { transform: translateX(50px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        @keyframes floatAnimation {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        .animate-fadeIn {
            animation: fadeIn 1s ease-out;
        }
        .animate-slideInLeft {
            animation: slideInFromLeft 1s ease-out;
        }
        .animate-slideInRight {
            animation: slideInFromRight 1s ease-out;
        }
        .animate-float {
            animation: floatAnimation 3s ease-in-out infinite;
        }
        /* Hover effects */
        .hover-grow {
            transition: transform 0.3s ease;
        }
        .hover-grow:hover {
            transform: scale(1.05);
        }
        /* Image fitting */
        .img-fit {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
        /* Dropdown styles */
        .dropdown {
            position: relative;
            display: inline-block;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
        .dropdown-item {
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            color: #333;
            position: relative;
        }
        .dropdown-item:hover {
            background-color: #f1f1f1;
        }
        /* Large hover display styles */
        .large-hover-display {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
            z-index: 1000;
            width: 80%;
            max-width: 800px;
            max-height: 80vh;
            overflow-y: auto;
        }
        .dropdown-item:hover .large-hover-display {
            display: block;
        }
        /* Timeline styles */
        .timeline {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
        }
        .timeline::after {
            content: '';
            position: absolute;
            width: 6px;
            background-color: #4CAF50;
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -3px;
        }
        .timeline-item {
            padding: 10px 40px;
            position: relative;
            background-color: inherit;
            width: 50%;
        }
        .timeline-item::after {
            content: '';
            position: absolute;
            width: 25px;
            height: 25px;
            right: -17px;
            background-color: white;
            border: 4px solid #FF9F55;
            top: 15px;
            border-radius: 50%;
            z-index: 1;
        }
        .timeline-left {
            left: 0;
        }
        .timeline-right {
            left: 50%;
        }
        .timeline-content {
            padding: 20px 30px;
            background-color: white;
            position: relative;
            border-radius: 6px;
        }
        .timeline-year:hover .timeline-images {
            display: flex;
        }
        .timeline-images {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            justify-content: space-around;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 10px;
            border-radius: 5px;
        }
        .timeline-images img {
            width: 80px;
            height: 60px;
            object-fit: cover;
            opacity: 0.7;
        }
        /* Prevent hover displays from overlapping */
        .dropdown-item:nth-child(1) .large-hover-display { top: 60%; }
        .dropdown-item:nth-child(2) .large-hover-display { top: 70%; }
        .dropdown-item:nth-child(3) .large-hover-display { top: 80%; }
    </style>
</head>
<body class="bg-orange-50 text-green-800">
    <header class="bg-green-600 text-orange-100 p-4 sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center animate-slideInLeft">
                <img src="fpss-logo.png" alt="Fordina Pandeli Logo" class="w-12 h-12 mr-4">
                <h1 class="text-2xl font-bold">Fordina Pandeli School</h1>
            </div>
            <nav class="animate-slideInRight">
                <ul class="flex space-x-6">
                    <li class="dropdown">
                        <a href="#about" class="hover:text-orange-300 transition-colors duration-300">About</a>
                        <div class="dropdown-content">
                            <a href="#" class="dropdown-item" data-hover="history">
                                History
                                <div class="large-hover-display" id="history-display">
                                    <h3 class="text-2xl font-bold mb-4">Our History</h3>
                                    <div class="timeline">
                                        <div class="timeline-item timeline-left">
                                            <div class="timeline-content timeline-year">
                                                <h4>2014</h4>
                                                <p>School founded</p>
                                                <div class="timeline-images">
                                                    <img src="https://fpss.public.blob.vercel-storage.com/history1-Ht7Ld1Yl1Iq0Ue1Ew2Ht7Ld1Yl1Iq0.jpg" alt="2014 Image 1">
                                                    <img src="https://fpss.public.blob.vercel-storage.com/history2-Ht7Ld1Yl1Iq0Ue1Ew2Ht7Ld1Yl1Iq0.jpg" alt="2014 Image 2">
                                                    <img src="https://fpss.public.blob.vercel-storage.com/history3-Ht7Ld1Yl1Iq0Ue1Ew2Ht7Ld1Yl1Iq0.jpg" alt="2014 Image 3">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-item timeline-right">
                                            <div class="timeline-content timeline-year">
                                                <h4>2019</h4>
                                                <p>New campus opened</p>
                                                <div class="timeline-images">
                                                    <img src="https://fpss.public.blob.vercel-storage.com/history1-Ht7Ld1Yl1Iq0Ue1Ew2Ht7Ld1Yl1Iq0.jpg" alt="2019 Image 1">
                                                    <img src="https://fpss.public.blob.vercel-storage.com/history2-Ht7Ld1Yl1Iq0Ue1Ew2Ht7Ld1Yl1Iq0.jpg" alt="2019 Image 2">
                                                    <img src="https://fpss.public.blob.vercel-storage.com/history3-Ht7Ld1Yl1Iq0Ue1Ew2Ht7Ld1Yl1Iq0.jpg" alt="2019 Image 3">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-item timeline-left">
                                            <div class="timeline-content timeline-year">
                                                <h4>2024</h4>
                                                <p>10th anniversary celebration</p>
                                                <div class="timeline-images">
                                                    <img src="https://fpss.public.blob.vercel-storage.com/history1-Ht7Ld1Yl1Iq0Ue1Ew2Ht7Ld1Yl1Iq0.jpg" alt="2024 Image 1">
                                                    <img src="https://fpss.public.blob.vercel-storage.com/history2-Ht7Ld1Yl1Iq0Ue1Ew2Ht7Ld1Yl1Iq0.jpg" alt="2024 Image 2">
                                                    <img src="https://fpss.public.blob.vercel-storage.com/history3-Ht7Ld1Yl1Iq0Ue1Ew2Ht7Ld1Yl1Iq0.jpg" alt="2024 Image 3">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item" data-hover="location">
                                Location
                                <div class="large-hover-display" id="location-display">
                                    <h3 class="text-2xl font-bold mb-4">Our Location</h3>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3846.3030017254384!2d28.320833715441818!3d-15.387499989283064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1940f343efb6cae7%3A0xf284c66166ddc74b!2sUniversity%20of%20Zambia!5e0!3m2!1sen!2sus!4v1636564293923!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item" data-hover="philosophy">
                                Philosophy
                                <div class="large-hover-display" id="philosophy-display">
                                    <h3 class="text-2xl font-bold mb-4">Our Philosophy</h3>
                                    <div class="flex flex-col md:flex-row items-center">
                                        <img src="https://fpss.public.blob.vercel-storage.com/philosophy-Ht7Ld1Yl1Iq0Ue1Ew2Ht7Ld1Yl1Iq0.jpg" alt="Our Philosophy" class="w-full md:w-1/2 mb-4 md:mb-0 md:mr-4">
                                        <p class="text-lg">At Fordina Pandeli School, we believe in nurturing the whole person - hand, heart, and mind. Our educational philosophy is rooted in Christian values and focuses on developing well-rounded individuals who are prepared for the challenges of the modern world while maintaining a strong moral compass.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li><a href="#academics" class="hover:text-orange-300 transition-colors duration-300">Academics</a></li>
                    <li><a href="#admissions" class="hover:text-orange-300 transition-colors duration-300">Admissions</a></li>
                    <li><a href="#student-life" class="hover:text-orange-300 transition-colors duration-300">Student Life</a></li>
                    <li><a href="#team" class="hover:text-orange-300 transition-colors duration-300">Team</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section id="welcome" class="bg-cover bg-center py-32 animate-fadeIn" style="background-image: url('background.png');">
            <div class="container mx-auto text-center text-white">
                <h2 class="text-5xl font-bold mb-4 shadow-text animate-float">Welcome to Fordina Pandeli</h2>
                <p class="text-2xl shadow-text animate-float" style="animation-delay: 0.5s;">Educating the Hand, Heart, and Mind</p>
            </div>
        </section>

        <section id="about" class="py-16 animate-fadeIn">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-bold mb-8 text-center">About Us</h2>
                <div class="flex flex-wrap items-center">
                    <div class="w-full md:w-1/2 mb-8 md:mb-0 animate-slideInLeft">
                        <img src="about-img.jpg" alt="About Fordina Pandeli" class="rounded-lg shadow-lg img-fit">
                    </div>
                    <div class="w-full md:w-1/2 md:pl-8 animate-slideInRight">
                        <p class="text-lg mb-4">Fordina Pandeli is a Christian secondary school dedicated to nurturing the whole person - hand, heart, and mind. Our mission is to provide a holistic education that prepares students for a life of purpose and service.</p>
                        <p class="text-lg">Founded on Christian principles, we strive to create an environment where faith and learning go hand in hand, fostering academic excellence and spiritual growth.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="academics" class="bg-green-100 py-16 animate-fadeIn">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-bold mb-8 text-center">Academics</h2>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-white p-6 rounded-lg shadow-md text-center hover-grow animate-fadeIn animate-float" style="animation-delay: 0s;">
                        <div class="text-5xl mb-4">🖐️</div>
                        <h3 class="text-xl font-bold mb-2">Hand</h3>
                        <p>Developing practical skills and craftsmanship</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md text-center hover-grow animate-fadeIn animate-float" style="animation-delay: 0.2s;">
                        <div class="text-5xl mb-4">❤️</div>
                        <h3 class="text-xl font-bold mb-2">Heart</h3>
                        <p>Nurturing compassion and emotional intelligence</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md text-center hover-grow animate-fadeIn animate-float" style="animation-delay: 0.4s;">
                        <div class="text-5xl mb-4">💡</div>
                        <h3 class="text-xl font-bold mb-2">Mind</h3>
                        <p>Fostering critical thinking and academic excellence</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="admissions" class="py-16 animate-fadeIn">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-bold mb-8 text-center">Admissions</h2>
                <div class="flex flex-wrap items-center">
                    <div class="w-full md:w-1/2 mb-8 md:mb-0 animate-slideInLeft">
                        <img src="about-image.jpg" alt="Admissions at Fordina Pandeli" class="rounded-lg shadow-lg img-fit">
                    </div>
                    <div class="w-full md:w-1/2 md:pl-8 animate-slideInRight">
                        <h3 class="text-2xl font-bold mb-4">Join Our Community</h3>
                        <p class="text-lg mb-4">We welcome students who are eager to learn, grow, and contribute to our vibrant community. Our admissions process is designed to identify students who will thrive in our unique educational environment.</p>
                        <a href="#" class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded transition-colors duration-300 animate-float">Learn More About Admissions</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="student-life" class="bg-orange-100 py-16 animate-fadeIn">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-bold mb-8 text-center">Student Life</h2>
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="animate-slideInLeft">
                        <img src="student-life.jpg" alt="Student Activities" class="rounded-lg shadow-lg mb-4 img-fit">
                        <h3 class="text-2xl font-bold mb-2">Extracurricular Activities</h3>
                        <p>Our school offers a wide range of clubs, sports teams, and artistic programs to enrich the student experience and foster personal growth.</p>
                    </div>
                    <div class="animate-slideInRight">
                        <img src="community-service.jpg" alt="Community Service" class="rounded-lg shadow-lg mb-4 img-fit">
                        <h3 class="text-2xl font-bold mb-2">Community Service</h3>
                        <p>We encourage our students to engage in community service, putting their faith into action and making a positive impact on the world around them.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="team" class="py-16 animate-fadeIn">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-bold mb-8 text-center">Our Team</h2>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="text-center animate-fadeIn hover-grow animate-float" style="animation-delay: 0s;">
                        <img src="pardon.jpg" alt="Pardon Mwansa" class="w-32 h-32 rounded-full mx-auto mb-4 img-fit">
                        <h3 class="text-xl font-bold">Pardon Mwansa</h3>
                        <p class="text-green-600">Director</p>
                    </div>
                    <div class="text-center animate-fadeIn hover-grow animate-float" style="animation-delay: 0.2s;">
                        <img src="lastone.jpg" alt="Lastone Kaunda" class="w-32 h-32 rounded-full mx-auto mb-4 img-fit">
                        <h3 class="text-xl font-bold">Lastone Kaunda</h3>
                        <p class="text-green-600">Principal</p>
                    </div>
                    <div class="text-center animate-fadeIn hover-grow animate-float" style="animation-delay: 0.4s;">
                        <img src="kelvin.jpg" alt="Kachenjela" class="w-32 h-32 rounded-full mx-auto mb-4 img-fit">
                        <h3 class="text-xl font-bold">Kachenjela</h3>
                        <p class="text-green-600">Chaplin</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-green-600 text-orange-100 py-8 animate-fadeIn">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <h4 class="text-xl font-bold mb-2">Fordina Pandeli School</h4>
                    <p>Educating for a brighter future</p>
                </div>
                <div class="flex space-x-4">
                    <a href="#" class="text-orange-100 hover:text-orange-200 transition-colors duration-300">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-orange-100 hover:text-orange-200 transition-colors duration-300">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                    </a>
                    <a href="#" class="text-orange-100 hover:text-orange-200 transition-colors duration-300">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Improved hover functionality for dropdown items
        const dropdownItems = document.querySelectorAll('.dropdown-item');
        let activeDisplay = null;
        let hoverTimeout = null;

        dropdownItems.forEach(item => {
            const display = item.querySelector('.large-hover-display');
            
            item.addEventListener('mouseenter', () => {
                if (hoverTimeout) {
                    clearTimeout(hoverTimeout);
                }
                if (activeDisplay && activeDisplay !== display) {
                    activeDisplay.style.display = 'none';
                }
                display.style.display = 'block';
                activeDisplay = display;
            });

            item.addEventListener('mouseleave', () => {
                hoverTimeout = setTimeout(() => {
                    display.style.display = 'none';
                    activeDisplay = null;
                }, 300); // 300ms delay before hiding
            });

            display.addEventListener('mouseenter', () => {
                if (hoverTimeout) {
                    clearTimeout(hoverTimeout);
                }
            });

            display.addEventListener('mouseleave', () => {
                hoverTimeout = setTimeout(() => {
                    display.style.display = 'none';
                    activeDisplay = null;
                }, 300); // 300ms delay before hiding
            });
        });
    </script>
</body>
</html>