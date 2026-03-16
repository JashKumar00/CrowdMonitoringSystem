<?php
// Include header
include_once 'includes/header.php';
?>

<!-- Hero Section with Glassmorphism -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden py-20">
    <!-- Background Video/Image -->
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-r from-dark-900/80 to-dark-800/80 z-10"></div>
        <img src="./assets/images/cctv.jpg" alt="Background" class="w-full h-full object-cover">
    </div>

    <!-- Animated Particles -->
    <div class="absolute inset-0 z-10">
        <div id="particles-js" class="absolute inset-0"></div>
    </div>

    <!-- Hero Content -->
    <div class="container mx-auto px-4 relative z-20">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 text-white text-glow animate__animated animate__fadeInDown">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-primary-400 to-purple-500">Smart CCTV</span> Monitoring System
            </h1>
            <p class="text-xl md:text-2xl text-gray-200 mb-10 animate__animated animate__fadeInUp animate__delay-1s">
                Enhance public safety and operational efficiency with our advanced real-time monitoring solution
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4 animate__animated animate__fadeInUp animate__delay-2s">
                <?php if (!is_logged_in()): ?>
                    <a href="register.php" class="gradient-bg px-8 py-4 rounded-full text-white font-medium hover:shadow-lg transform hover:-translate-y-1 transition-all duration-300">
                        <i class="fas fa-rocket mr-2"></i>Get Started
                    </a>
                    <a href="login.php" class="glass px-8 py-4 rounded-full text-white font-medium hover:bg-white/10 transition-all duration-300">
                        <i class="fas fa-sign-in-alt mr-2"></i>Login
                    </a>
                <?php else: ?>
                    <?php if (is_admin()): ?>
                        <a href="admin/dashboard.php" class="gradient-bg px-8 py-4 rounded-full text-white font-medium hover:shadow-lg transform hover:-translate-y-1 transition-all duration-300">
                            <i class="fas fa-tachometer-alt mr-2"></i>Go to Admin Dashboard
                        </a>
                    <?php else: ?>
                        <a href="user/dashboard.php" class="gradient-bg px-8 py-4 rounded-full text-white font-medium hover:shadow-lg transform hover:-translate-y-1 transition-all duration-300">
                            <i class="fas fa-tachometer-alt mr-2"></i>Go to Dashboard
                        </a>
                    <?php endif; ?>
                <?php endif; ?>
            </div>

            <!-- Scroll Down Indicator -->
            <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
                <a href="#features" class="text-white opacity-70 hover:opacity-100 transition-opacity duration-300">
                    <i class="fas fa-chevron-down text-2xl"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Features Section with Glassmorphism Cards -->
<section id="features" class="py-20">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Key Features</h2>
            <div class="w-24 h-1 bg-gradient-to-r from-primary-400 to-purple-500 mx-auto mb-6"></div>
            <p class="text-gray-300 max-w-2xl mx-auto">Our advanced CCTV monitoring system offers cutting-edge features designed to enhance security and operational efficiency.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Crowd Management Card -->
            <div class="glass rounded-xl overflow-hidden transform hover:scale-105 transition-all duration-300 group">
                <div class="relative h-56 overflow-hidden">
                    <img src="./assets/images/crowdmangment.jpg" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Crowd Management">
                    <div class="absolute inset-0 bg-gradient-to-t from-dark-900 to-transparent opacity-70"></div>
                    <div class="absolute bottom-4 left-4 glass px-3 py-1 rounded-full text-sm text-white">
                        <i class="fas fa-users mr-2 text-primary-400"></i>Real-time Analysis
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-3 flex items-center">
                        <span class="glass rounded-full w-10 h-10 flex items-center justify-center mr-3 text-primary-400">
                            <i class="fas fa-users"></i>
                        </span>
                        Crowd Management
                    </h3>
                    <p class="text-gray-300 mb-4">Monitor crowd density and movement patterns in real-time to prevent overcrowding and ensure public safety in various environments.</p>
                    <ul class="space-y-2 mb-4">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-primary-400 mt-1 mr-2"></i>
                            <span class="text-gray-300">Density heat mapping</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-primary-400 mt-1 mr-2"></i>
                            <span class="text-gray-300">Flow pattern analysis</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-primary-400 mt-1 mr-2"></i>
                            <span class="text-gray-300">Capacity threshold alerts</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Crime Prevention Card -->
            <div class="glass rounded-xl overflow-hidden transform hover:scale-105 transition-all duration-300 group">
                <div class="relative h-56 overflow-hidden">
                    <img src="./assets/images/crime.jpg" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Crime Prevention">
                    <div class="absolute inset-0 bg-gradient-to-t from-dark-900 to-transparent opacity-70"></div>
                    <div class="absolute bottom-4 left-4 glass px-3 py-1 rounded-full text-sm text-white">
                        <i class="fas fa-shield-alt mr-2 text-primary-400"></i>AI-Powered
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-3 flex items-center">
                        <span class="glass rounded-full w-10 h-10 flex items-center justify-center mr-3 text-primary-400">
                            <i class="fas fa-shield-alt"></i>
                        </span>
                        Crime Prevention
                    </h3>
                    <p class="text-gray-300 mb-4">Detect suspicious activities and potential security threats to prevent crimes before they occur using advanced AI algorithms.</p>
                    <ul class="space-y-2 mb-4">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-primary-400 mt-1 mr-2"></i>
                            <span class="text-gray-300">Behavior pattern recognition</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-primary-400 mt-1 mr-2"></i>
                            <span class="text-gray-300">Object detection & tracking</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-primary-400 mt-1 mr-2"></i>
                            <span class="text-gray-300">Instant security alerts</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Work Monitoring Card -->
            <div class="glass rounded-xl overflow-hidden transform hover:scale-105 transition-all duration-300 group">
                <div class="relative h-56 overflow-hidden">
                    <img src="./assets/images/Monitoring.jpg" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Work Monitoring">
                    <div class="absolute inset-0 bg-gradient-to-t from-dark-900 to-transparent opacity-70"></div>
                    <div class="absolute bottom-4 left-4 glass px-3 py-1 rounded-full text-sm text-white">
                        <i class="fas fa-hard-hat mr-2 text-primary-400"></i>Safety Focused
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-3 flex items-center">
                        <span class="glass rounded-full w-10 h-10 flex items-center justify-center mr-3 text-primary-400">
                            <i class="fas fa-hard-hat"></i>
                        </span>
                        Work Monitoring
                    </h3>
                    <p class="text-gray-300 mb-4">Ensure workplace safety compliance and monitor operational efficiency in various work environments with intelligent monitoring.</p>
                    <ul class="space-y-2 mb-4">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-primary-400 mt-1 mr-2"></i>
                            <span class="text-gray-300">Safety protocol compliance</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-primary-400 mt-1 mr-2"></i>
                            <span class="text-gray-300">Productivity analytics</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-primary-400 mt-1 mr-2"></i>
                            <span class="text-gray-300">Equipment usage monitoring</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How It Works Section with Glassmorphism -->
<section class="py-20 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-primary-500/10 rounded-full filter blur-3xl -translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-purple-500/10 rounded-full filter blur-3xl translate-x-1/2 translate-y-1/2"></div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">How It Works</h2>
            <div class="w-24 h-1 bg-gradient-to-r from-primary-400 to-purple-500 mx-auto mb-6"></div>
            <p class="text-gray-300 max-w-2xl mx-auto">Our intelligent system seamlessly integrates with your existing infrastructure to provide powerful monitoring capabilities.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <!-- Image Side with Glassmorphism -->
            <div class="relative">
                <div class="glass rounded-2xl overflow-hidden">
                    <img src="./assets/images/work.jpg" class="w-full h-full object-cover" alt="How It Works">
                </div>
                <!-- Floating Elements -->
                <div class="absolute -top-5 -right-5 glass rounded-xl p-4 shadow-lg">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 rounded-full bg-green-500 flex items-center justify-center">
                            <i class="fas fa-video text-white"></i>
                        </div>
                        <div>
                            <h4 class="text-white text-sm font-medium">Live Feed</h4>
                            <p class="text-gray-300 text-xs">4K Resolution</p>
                        </div>
                    </div>
                </div>
                <div class="absolute -bottom-5 -left-5 glass rounded-xl p-4 shadow-lg">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 rounded-full bg-primary-500 flex items-center justify-center">
                            <i class="fas fa-chart-line text-white"></i>
                        </div>
                        <div>
                            <h4 class="text-white text-sm font-medium">Analytics</h4>
                            <p class="text-gray-300 text-xs">Real-time Processing</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Side -->
            <div>
                <h3 class="text-2xl font-bold text-white mb-6">Leveraging Existing CCTV Infrastructure</h3>
                <p class="text-gray-300 mb-6">Our system integrates with your existing CCTV network, providing a cost-effective solution without requiring additional hardware investments. The intelligent software layer adds powerful analytics capabilities to your current setup.</p>

                <div class="space-y-4 mb-8">
                    <div class="glass p-4 rounded-xl">
                        <div class="flex items-start">
                            <div class="rounded-full bg-primary-500/20 p-2 mr-4">
                                <i class="fas fa-bell text-primary-400"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-medium mb-1">Real-time Alerts</h4>
                                <p class="text-gray-300 text-sm">Instant notifications for security events and threshold breaches</p>
                            </div>
                        </div>
                    </div>

                    <div class="glass p-4 rounded-xl">
                        <div class="flex items-start">
                            <div class="rounded-full bg-primary-500/20 p-2 mr-4">
                                <i class="fas fa-brain text-primary-400"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-medium mb-1">AI-Powered Analytics</h4>
                                <p class="text-gray-300 text-sm">Advanced algorithms for crowd density and behavior analysis</p>
                            </div>
                        </div>
                    </div>

                    <div class="glass p-4 rounded-xl">
                        <div class="flex items-start">
                            <div class="rounded-full bg-primary-500/20 p-2 mr-4">
                                <i class="fas fa-shield-alt text-primary-400"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-medium mb-1">Threat Detection</h4>
                                <p class="text-gray-300 text-sm">Identify suspicious activities and security threats in real-time</p>
                            </div>
                        </div>
                    </div>

                    <div class="glass p-4 rounded-xl">
                        <div class="flex items-start">
                            <div class="rounded-full bg-primary-500/20 p-2 mr-4">
                                <i class="fas fa-tachometer-alt text-primary-400"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-medium mb-1">Centralized Dashboard</h4>
                                <p class="text-gray-300 text-sm">Monitor all cameras and analytics from a single intuitive interface</p>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="about.php" class="gradient-bg px-6 py-3 rounded-full text-white inline-flex items-center hover:shadow-lg transform hover:-translate-y-1 transition-all duration-300">
                    <span>Learn More</span>
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section with Glassmorphism -->
<section class="py-20 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute top-1/2 left-1/4 w-64 h-64 bg-primary-500/10 rounded-full filter blur-3xl"></div>
    <div class="absolute bottom-1/4 right-1/3 w-64 h-64 bg-purple-500/10 rounded-full filter blur-3xl"></div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">What Our Clients Say</h2>
            <div class="w-24 h-1 bg-gradient-to-r from-primary-400 to-purple-500 mx-auto mb-6"></div>
            <p class="text-gray-300 max-w-2xl mx-auto">Hear from organizations that have transformed their security operations with our CCTV monitoring system.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="glass rounded-xl overflow-hidden transform hover:scale-105 transition-all duration-300">
                <div class="p-6">
                    <div class="flex mb-4">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400 ml-1"></i>
                        <i class="fas fa-star text-yellow-400 ml-1"></i>
                        <i class="fas fa-star text-yellow-400 ml-1"></i>
                        <i class="fas fa-star text-yellow-400 ml-1"></i>
                    </div>
                    <p class="text-gray-300 mb-6 italic">"This system has revolutionized how we manage security at our shopping mall. The real-time alerts have helped us prevent several potential incidents and the AI-powered analytics provide insights we never had before."</p>
                    <div class="flex items-center">
                        <div class="relative">
                            <img src="./assets/images/person1.jpg" class="w-14 h-14 rounded-full object-cover" alt="Client">
                            <div class="absolute bottom-0 right-0 w-4 h-4 bg-green-500 rounded-full border-2 border-dark-900"></div>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-white font-medium">John Smith</h4>
                            <p class="text-gray-400 text-sm">Security Manager, Metro Mall</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="glass rounded-xl overflow-hidden transform hover:scale-105 transition-all duration-300">
                <div class="p-6">
                    <div class="flex mb-4">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400 ml-1"></i>
                        <i class="fas fa-star text-yellow-400 ml-1"></i>
                        <i class="fas fa-star text-yellow-400 ml-1"></i>
                        <i class="fas fa-star text-yellow-400 ml-1"></i>
                    </div>
                    <p class="text-gray-300 mb-6 italic">"As a city administrator, this system has been invaluable for managing crowds during public events. The analytics provide insights we never had before, allowing us to optimize security personnel placement and emergency response."</p>
                    <div class="flex items-center">
                        <div class="relative">
                            <img src="./assets/images/person2.jpg" class="w-14 h-14 rounded-full object-cover" alt="Client">
                            <div class="absolute bottom-0 right-0 w-4 h-4 bg-green-500 rounded-full border-2 border-dark-900"></div>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-white font-medium">Sarah Johnson</h4>
                            <p class="text-gray-400 text-sm">City Administrator</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="glass rounded-xl overflow-hidden transform hover:scale-105 transition-all duration-300">
                <div class="p-6">
                    <div class="flex mb-4">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400 ml-1"></i>
                        <i class="fas fa-star text-yellow-400 ml-1"></i>
                        <i class="fas fa-star text-yellow-400 ml-1"></i>
                        <i class="fas fa-star-half-alt text-yellow-400 ml-1"></i>
                    </div>
                    <p class="text-gray-300 mb-6 italic">"The work monitoring features have helped us ensure safety compliance in our factory. The system is intuitive to use and the support team is excellent. We've seen a 30% reduction in workplace incidents since implementation."</p>
                    <div class="flex items-center">
                        <div class="relative">
                            <img src="./assets/images/person3.jpg" class="w-14 h-14 rounded-full object-cover" alt="Client">
                            <div class="absolute bottom-0 right-0 w-4 h-4 bg-green-500 rounded-full border-2 border-dark-900"></div>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-white font-medium">Michael Chen</h4>
                            <p class="text-gray-400 text-sm">Operations Director, TechManufacturing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonial Navigation Dots -->
        <div class="flex justify-center mt-10 space-x-2">
            <button class="w-3 h-3 rounded-full bg-primary-400"></button>
            <button class="w-3 h-3 rounded-full bg-white/30 hover:bg-primary-400 transition-colors duration-300"></button>
            <button class="w-3 h-3 rounded-full bg-white/30 hover:bg-primary-400 transition-colors duration-300"></button>
        </div>
    </div>
</section>

<!-- Call to Action with Glassmorphism -->
<section class="py-20 relative overflow-hidden">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-r from-primary-600/90 to-purple-700/90 z-10"></div>
        <img src="./assets/images/cctv.jpg" alt="Background" class="w-full h-full object-cover">
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Ready to enhance your surveillance capabilities?</h2>
            <p class="text-xl text-white/90 mb-10">Join hundreds of organizations already using our CCTV monitoring system to improve security and operational efficiency.</p>

            <!-- Stats Counter -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-10">
                <div class="glass rounded-xl p-4">
                    <div class="text-3xl md:text-4xl font-bold text-white mb-2">500+</div>
                    <p class="text-white/80">Clients</p>
                </div>
                <div class="glass rounded-xl p-4">
                    <div class="text-3xl md:text-4xl font-bold text-white mb-2">10k+</div>
                    <p class="text-white/80">Cameras</p>
                </div>
                <div class="glass rounded-xl p-4">
                    <div class="text-3xl md:text-4xl font-bold text-white mb-2">98%</div>
                    <p class="text-white/80">Satisfaction</p>
                </div>
                <div class="glass rounded-xl p-4">
                    <div class="text-3xl md:text-4xl font-bold text-white mb-2">24/7</div>
                    <p class="text-white/80">Support</p>
                </div>
            </div>

            <a href="register.php" class="glass px-10 py-4 rounded-full text-white font-medium inline-flex items-center hover:bg-white/10 transition-all duration-300 group">
                <span>Get Started Today</span>
                <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform duration-300"></i>
            </a>
        </div>
    </div>
</section>

<!-- Add Particles.js for animated background particles -->
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize particles.js
        if (typeof particlesJS !== 'undefined') {
            particlesJS("particles-js", {
                particles: {
                    number: { value: 80, density: { enable: true, value_area: 800 } },
                    color: { value: "#ffffff" },
                    shape: { type: "circle" },
                    opacity: { value: 0.5, random: true },
                    size: { value: 3, random: true },
                    line_linked: {
                        enable: true,
                        distance: 150,
                        color: "#ffffff",
                        opacity: 0.4,
                        width: 1
                    },
                    move: {
                        enable: true,
                        speed: 2,
                        direction: "none",
                        random: true,
                        straight: false,
                        out_mode: "out",
                        bounce: false
                    }
                },
                interactivity: {
                    detect_on: "canvas",
                    events: {
                        onhover: { enable: true, mode: "grab" },
                        onclick: { enable: true, mode: "push" },
                        resize: true
                    },
                    modes: {
                        grab: { distance: 140, line_linked: { opacity: 1 } },
                        push: { particles_nb: 4 }
                    }
                },
                retina_detect: true
            });
        }
    });
</script>

<!-- Add Animate.css for animations -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

<?php
// Include footer
include_once 'includes/footer.php';
?>
