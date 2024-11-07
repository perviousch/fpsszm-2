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
    </style>
</head>
<body class="bg-orange-50 text-green-800">
    <header class="bg-green-600 text-orange-100 p-4 sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <img src="fpss-logo.png?height=50&width=70" alt="Fordina Pandeli Logo" class="w-12 h-12 mr-4">
                <h1 class="text-2xl font-bold">Fordina Pandeli School</h1>
            </div>
            <nav>
                <ul class="flex space-x-6">
                    <li><a href="#about" class="hover:text-orange-300">About</a></li>
                    <li><a href="#academics" class="hover:text-orange-300">Academics</a></li>
                    <li><a href="#admissions" class="hover:text-orange-300">Admissions</a></li>
                    <li><a href="#student-life" class="hover:text-orange-300">Student Life</a></li>
                    <li><a href="#team" class="hover:text-orange-300">Team</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section id="welcome" class="bg-cover bg-center py-32" style="background-image: url('background.png?height=700&width=1200');">
            <div class="container mx-auto text-center text-white">
                <h2 class="text-5xl font-bold mb-4 shadow-text">Welcome to Fordina Pandeli</h2>
                <p class="text-2xl shadow-text">Educating the Hand, Heart, and Mind</p>
            </div>
        </section>

        <section id="about" class="py-16">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-bold mb-8 text-center">About Us</h2>
                <div class="flex flex-wrap items-center">
                    <div class="w-full md:w-1/2 mb-8 md:mb-0">
                        <img src="about-img.jpg?height=400&width=600" alt="About Fordina Pandeli" class="rounded-lg shadow-lg">
                    </div>
                    <div class="w-full md:w-1/2 md:pl-8">
                        <p class="text-lg mb-4">Fordina Pandeli is a Christian secondary school dedicated to nurturing the whole person - hand, heart, and mind. Our mission is to provide a holistic education that prepares students for a life of purpose and service.</p>
                        <p class="text-lg">Founded on Christian principles, we strive to create an environment where faith and learning go hand in hand, fostering academic excellence and spiritual growth.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="academics" class="bg-green-100 py-16">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-bold mb-8 text-center">Academics</h2>
                <div class="grid md:grid-cols-3 gap-8">
                    <?php
                    $academic_areas = [
                        ['title' => 'Hand', 'description' => 'Developing practical skills and craftsmanship', 'icon' => '🖐️'],
                        ['title' => 'Heart', 'description' => 'Nurturing compassion and emotional intelligence', 'icon' => '❤️'],
                        ['title' => 'Mind', 'description' => 'Fostering critical thinking and academic excellence', 'icon' => '💡']
                    ];

                    foreach ($academic_areas as $area) {
                        echo '<div class="bg-white p-6 rounded-lg shadow-md text-center">';
                        echo '<div class="text-5xl mb-4">' . $area['icon'] . '</div>';
                        echo '<h3 class="text-xl font-bold mb-2">' . $area['title'] . '</h3>';
                        echo '<p>' . $area['description'] . '</p>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
        </section>

        <section id="admissions" class="py-16">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-bold mb-8 text-center">Admissions</h2>
                <div class="flex flex-wrap items-center">
                    <div class="w-full md:w-1/2 mb-8 md:mb-0">
                        <img src="about-image.jpg?height=400&width=600" alt="Admissions at Fordina Pandeli" class="rounded-lg shadow-lg">
                    </div>
                    <div class="w-full md:w-1/2 md:pl-8">
                        <h3 class="text-2xl font-bold mb-4">Join Our Community</h3>
                        <p class="text-lg mb-4">We welcome students who are eager to learn, grow, and contribute to our vibrant community. Our admissions process is designed to identify students who will thrive in our unique educational environment.</p>
                        <a href="#" class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded">Learn More About Admissions</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="student-life" class="bg-orange-100 py-16">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-bold mb-8 text-center">Student Life</h2>
                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <img src="student-life.jpg?height=300&width=500" alt="Student Activities" class="rounded-lg shadow-lg mb-4">
                        <h3 class="text-2xl font-bold mb-2">Extracurricular Activities</h3>
                        <p>Our school offers a wide range of clubs, sports teams, and artistic programs to enrich the student experience and foster personal growth.</p>
                    </div>
                    <div>
                        <img src="community-service.jpg?height=300&width=500" alt="Community Service" class="rounded-lg shadow-lg mb-4">
                        <h3 class="text-2xl font-bold mb-2">Community Service</h3>
                        <p>We encourage our students to engage in community service, putting their faith into action and making a positive impact on the world around them.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="team" class="py-16">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-bold mb-8 text-center">Our Team</h2>
                <div class="grid md:grid-cols-3 gap-8">
                    <?php
                    $team_members = [
                        ['name' => 'Pardon Mwansa', 'position' => 'Director', 'image' => 'pardon.jpg?height=200&width=200'],
                        ['name' => 'Lastone Kaunda', 'position' => 'Principal', 'image' => 'kaunda1.jpg?height=200&width=200'],
                        ['name' => 'Kachenjela', 'position' => 'Chaplin', 'image' => 'kelvin.jpg?height=200&width=200']
                    ];

                    foreach ($team_members as $member) {
                        echo '<div class="text-center">';
                        echo '<img src="' . $member['image'] . '" alt="' . $member['name'] . '" class="w-32 h-32 rounded-full mx-auto mb-4">';
                        echo '<h3 class="text-xl font-bold">' . $member['name'] . '</h3>';
                        echo '<p class="text-green-600">' . $member['position'] . '</p>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-green-600 text-orange-100 py-8">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <h4 class="text-xl font-bold mb-2">Fordina Pandeli School</h4>
                    <p>Educating for a brighter future</p>
                </div>
                <div class="flex space-x-4">
                    <a href="#" class="text-orange-100 hover:text-orange-200">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-orange-100 hover:text-orange-200">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                    </a>
                    <a href="#" class="text-orange-100 hover:text-orange-200">
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
    </script>
</body>
</html>