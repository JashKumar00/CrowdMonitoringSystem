<?php
// Include header
include_once 'includes/header.php';
?>

<!-- About Hero Section with Glassmorphism -->
<section class="relative py-20 overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-r from-dark-900/90 to-dark-800/90 z-10"></div>
        <img src="./assets/images/cctv.jpg" alt="Background" class="w-full h-full object-cover">
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="order-2 md:order-1">
                <h1 class="text-4xl md:text-5xl font-bold mb-6 text-white">
                    About Our <span class="bg-clip-text text-transparent bg-gradient-to-r from-primary-400 to-purple-500">CCTV Monitoring</span> System
                </h1>
                <div class="w-20 h-1 bg-gradient-to-r from-primary-400 to-purple-500 mb-6"></div>
                <p class="text-xl text-gray-200 mb-6">We're revolutionizing how organizations utilize their existing CCTV infrastructure for enhanced safety and efficiency.</p>
                <p class="text-gray-300 mb-8">Our web-based system provides real-time monitoring capabilities for crowd management, crime prevention, and workplace oversight, all through a centralized dashboard that's accessible from anywhere.</p>

                <div class="flex space-x-4">
                    <div class="glass px-4 py-2 rounded-full text-white inline-flex items-center">
                        <i class="fas fa-shield-alt text-primary-400 mr-2"></i>
                        <span>Enhanced Security</span>
                    </div>
                    <div class="glass px-4 py-2 rounded-full text-white inline-flex items-center">
                        <i class="fas fa-tachometer-alt text-primary-400 mr-2"></i>
                        <span>Real-time Monitoring</span>
                    </div>
                </div>
            </div>

            <div class="order-1 md:order-2 relative">
                <div class="glass rounded-2xl overflow-hidden transform hover:scale-105 transition-all duration-500">
                    <img src="./assets/images/technology.jpg" class="w-full h-full object-cover" alt="CCTV Monitoring">
                </div>

                <!-- Floating Elements -->
                <div class="absolute -top-5 -right-5 glass rounded-xl p-4 shadow-lg hidden md:block">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 rounded-full bg-green-500 flex items-center justify-center">
                            <i class="fas fa-check text-white"></i>
                        </div>
                        <div>
                            <h4 class="text-white text-sm font-medium">Trusted Solution</h4>
                            <p class="text-gray-300 text-xs">500+ Organizations</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Mission with Glassmorphism -->
<section class="py-20 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-primary-500/10 rounded-full filter blur-3xl -translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-purple-500/10 rounded-full filter blur-3xl translate-x-1/2 translate-y-1/2"></div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Our Mission</h2>
            <div class="w-24 h-1 bg-gradient-to-r from-primary-400 to-purple-500 mx-auto mb-6"></div>
            <p class="text-xl text-gray-200 mb-12">To enhance public safety and operational efficiency through innovative surveillance technology that's accessible to all organizations.</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="glass rounded-xl p-8 transform hover:scale-105 transition-all duration-300">
                    <div class="rounded-full bg-primary-500/20 w-20 h-20 flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-shield-alt text-4xl text-primary-400"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">Safety</h3>
                    <p class="text-gray-300">Ensuring the safety of people and property through advanced monitoring and alert systems.</p>
                </div>

                <div class="glass rounded-xl p-8 transform hover:scale-105 transition-all duration-300">
                    <div class="rounded-full bg-primary-500/20 w-20 h-20 flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-chart-line text-4xl text-primary-400"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">Efficiency</h3>
                    <p class="text-gray-300">Optimizing operations and resource allocation through data-driven insights and automation.</p>
                </div>

                <div class="glass rounded-xl p-8 transform hover:scale-105 transition-all duration-300">
                    <div class="rounded-full bg-primary-500/20 w-20 h-20 flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-users text-4xl text-primary-400"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">Accessibility</h3>
                    <p class="text-gray-300">Making advanced surveillance technology accessible to organizations of all sizes and budgets.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Key Benefits with Glassmorphism -->
<section class="py-20 relative overflow-hidden">
    <!-- Background Image with Overlay -->
    

    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Key Benefits</h2>
            <div class="w-24 h-1 bg-gradient-to-r from-primary-400 to-purple-500 mx-auto mb-6"></div>
            <p class="text-gray-300 max-w-2xl mx-auto">Our system offers numerous advantages that make it the preferred choice for organizations worldwide.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Cost-Effective Card -->
            <div class="glass rounded-xl p-8 transform hover:scale-105 transition-all duration-300 relative overflow-hidden group">
                <!-- Decorative Element -->
                <div class="absolute -right-10 -top-10 w-40 h-40 bg-primary-500/10 rounded-full group-hover:scale-150 transition-all duration-500"></div>

                <div class="relative z-10">
                    <div class="rounded-full bg-gradient-to-r from-green-400 to-green-600 w-16 h-16 flex items-center justify-center mb-6">
                        <i class="fas fa-dollar-sign text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">Cost-Effective</h3>
                    <p class="text-gray-300 mb-6">Leverages your existing CCTV infrastructure without requiring expensive hardware upgrades.</p>

                    <ul class="space-y-2">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-2"></i>
                            <span class="text-gray-300">No new cameras needed</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-2"></i>
                            <span class="text-gray-300">Software-based solution</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-2"></i>
                            <span class="text-gray-300">Flexible pricing plans</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Real-Time Alerts Card -->
            <div class="glass rounded-xl p-8 transform hover:scale-105 transition-all duration-300 relative overflow-hidden group">
                <!-- Decorative Element -->
                <div class="absolute -right-10 -top-10 w-40 h-40 bg-primary-500/10 rounded-full group-hover:scale-150 transition-all duration-500"></div>

                <div class="relative z-10">
                    <div class="rounded-full bg-gradient-to-r from-yellow-400 to-orange-500 w-16 h-16 flex items-center justify-center mb-6">
                        <i class="fas fa-bolt text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">Real-Time Alerts</h3>
                    <p class="text-gray-300 mb-6">Receive instant notifications about potential security threats or safety concerns.</p>

                    <ul class="space-y-2">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-yellow-400 mt-1 mr-2"></i>
                            <span class="text-gray-300">Instant mobile notifications</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-yellow-400 mt-1 mr-2"></i>
                            <span class="text-gray-300">Email alerts</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-yellow-400 mt-1 mr-2"></i>
                            <span class="text-gray-300">Customizable alert thresholds</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Advanced Analytics Card -->
            <div class="glass rounded-xl p-8 transform hover:scale-105 transition-all duration-300 relative overflow-hidden group">
                <!-- Decorative Element -->
                <div class="absolute -right-10 -top-10 w-40 h-40 bg-primary-500/10 rounded-full group-hover:scale-150 transition-all duration-500"></div>

                <div class="relative z-10">
                    <div class="rounded-full bg-gradient-to-r from-blue-400 to-primary-500 w-16 h-16 flex items-center justify-center mb-6">
                        <i class="fas fa-chart-pie text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">Advanced Analytics</h3>
                    <p class="text-gray-300 mb-6">Gain valuable insights from data analytics to improve security and operational efficiency.</p>

                    <ul class="space-y-2">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-400 mt-1 mr-2"></i>
                            <span class="text-gray-300">Trend identification</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-400 mt-1 mr-2"></i>
                            <span class="text-gray-300">Customizable reports</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-400 mt-1 mr-2"></i>
                            <span class="text-gray-300">Data-driven decision making</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Technology with Glassmorphism -->
<section class="py-20 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute top-1/2 left-1/4 w-64 h-64 bg-primary-500/10 rounded-full filter blur-3xl"></div>
    <div class="absolute bottom-1/4 right-1/3 w-64 h-64 bg-purple-500/10 rounded-full filter blur-3xl"></div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Our Technology</h2>
            <div class="w-24 h-1 bg-gradient-to-r from-primary-400 to-purple-500 mx-auto mb-6"></div>
            <p class="text-gray-300 max-w-2xl mx-auto">Powered by cutting-edge AI and machine learning algorithms to deliver exceptional monitoring capabilities.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="relative">
                <div class="glass rounded-2xl overflow-hidden transform hover:scale-105 transition-all duration-500">
                    <img src="./assets/images/AI.jpg" class="w-full h-full object-cover" alt="Our Technology">
                </div>

                <!-- Tech Specs Overlay -->
                <div class="absolute bottom-4 left-4 glass px-4 py-2 rounded-lg text-sm text-white">
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-microchip text-primary-400"></i>
                        <span>AI-Powered Analytics</span>
                    </div>
                </div>

                <!-- Floating Elements -->
                <div class="absolute -top-5 -right-5 glass rounded-xl p-4 shadow-lg hidden md:block">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 rounded-full bg-primary-500 flex items-center justify-center">
                            <i class="fas fa-code-branch text-white"></i>
                        </div>
                        <div>
                            <h4 class="text-white text-sm font-medium">Latest Version</h4>
                            <p class="text-gray-300 text-xs">v4.2.1 Released</p>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <h3 class="text-2xl font-bold text-white mb-6">Cutting-Edge Surveillance Solutions</h3>
                <p class="text-gray-300 mb-6">Our system combines advanced video analytics with user-friendly interfaces to provide a comprehensive monitoring solution that adapts to your specific security needs.</p>

                <div class="space-y-4">
                    <div class="glass p-4 rounded-xl">
                        <div class="flex items-start">
                            <div class="rounded-full bg-primary-500/20 p-2 mr-4">
                                <i class="fas fa-users text-primary-400"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-medium mb-1">Crowd Density Analysis</h4>
                                <p class="text-gray-300 text-sm">Automatically detect and alert when crowd density exceeds safe thresholds</p>
                            </div>
                        </div>
                    </div>

                    <div class="glass p-4 rounded-xl">
                        <div class="flex items-start">
                            <div class="rounded-full bg-primary-500/20 p-2 mr-4">
                                <i class="fas fa-user-secret text-primary-400"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-medium mb-1">Behavior Recognition</h4>
                                <p class="text-gray-300 text-sm">Identify suspicious activities and potential security threats in real-time</p>
                            </div>
                        </div>
                    </div>

                    <div class="glass p-4 rounded-xl">
                        <div class="flex items-start">
                            <div class="rounded-full bg-primary-500/20 p-2 mr-4">
                                <i class="fas fa-hard-hat text-primary-400"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-medium mb-1">Safety Compliance Monitoring</h4>
                                <p class="text-gray-300 text-sm">Ensure adherence to workplace safety protocols and regulations</p>
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
                                <p class="text-gray-300 text-sm">Monitor all cameras from a single, intuitive interface with customizable views</p>
                            </div>
                        </div>
                    </div>

                    <div class="glass p-4 rounded-xl">
                        <div class="flex items-start">
                            <div class="rounded-full bg-primary-500/20 p-2 mr-4">
                                <i class="fas fa-bell text-primary-400"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-medium mb-1">Customizable Alerts</h4>
                                <p class="text-gray-300 text-sm">Set up notifications based on specific criteria relevant to your needs</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section with Glassmorphism -->


<?php
// Include footer
include_once 'includes/footer.php';
?>
