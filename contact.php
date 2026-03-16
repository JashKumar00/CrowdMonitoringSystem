<?php
// Include header
include_once 'includes/header.php';

// Initialize variables
$name = $email = $subject = $message = "";
$name_err = $email_err = $subject_err = $message_err = "";
$success_message = "";

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate name
    if (empty(trim($_POST["name"]))) {
        $name_err = "Please enter your name.";
    } else {
        $name = sanitize_input($_POST["name"]);
    }

    // Validate email
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter your email.";
    } else {
        $email = sanitize_input($_POST["email"]);
        // Check if email is valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_err = "Please enter a valid email address.";
        }
    }

    // Validate subject
    if (empty(trim($_POST["subject"]))) {
        $subject_err = "Please enter a subject.";
    } else {
        $subject = sanitize_input($_POST["subject"]);
    }

    // Validate message
    if (empty(trim($_POST["message"]))) {
        $message_err = "Please enter your message.";
    } else {
        $message = sanitize_input($_POST["message"]);
    }

    // Check if there are no errors
    if (empty($name_err) && empty($email_err) && empty($subject_err) && empty($message_err)) {
        // In a real application, you would send an email here
        // For this example, we'll just show a success message
        $success_message = "Thank you for your message! We will get back to you soon.";

        // Clear form fields
        $name = $email = $subject = $message = "";
    }
}
?>

<!-- Contact Hero Section with Glassmorphism -->
<section class="relative py-20 overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-r from-dark-900/90 to-dark-800/90 z-10"></div>
        <img src="./assets/images/cctv.jpg" alt="Background" class="w-full h-full object-cover">
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-3xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6 text-white">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-primary-400 to-purple-500">Contact</span> Us
            </h1>
            <div class="w-24 h-1 bg-gradient-to-r from-primary-400 to-purple-500 mx-auto mb-6"></div>
            <p class="text-xl text-gray-200 mb-8">Have questions about our CCTV monitoring system? We're here to help you find the perfect security solution for your needs.</p>

            <!-- Contact Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-12">
                <div class="glass rounded-xl p-6 transform hover:scale-105 transition-all duration-300">
                    <div class="rounded-full bg-primary-500/20 w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-phone-alt text-2xl text-primary-400"></i>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Call Us</h3>
                    <p class="text-gray-300">+91 7452165891</p>
                </div>

                <div class="glass rounded-xl p-6 transform hover:scale-105 transition-all duration-300">
                    <div class="rounded-full bg-primary-500/20 w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-envelope text-2xl text-primary-400"></i>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Email Us</h3>
                    <p class="text-gray-300">bugbuster@gmail.com</p>
                </div>

                <div class="glass rounded-xl p-6 transform hover:scale-105 transition-all duration-300">
                    <div class="rounded-full bg-primary-500/20 w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-map-marker-alt text-2xl text-primary-400"></i>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Visit Us</h3>
                    <p class="text-gray-300">Lovely Professional University, Phagwara, Punjab, India</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form Section with Glassmorphism -->
<section class="py-20 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-primary-500/10 rounded-full filter blur-3xl -translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-purple-500/10 rounded-full filter blur-3xl translate-x-1/2 translate-y-1/2"></div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div class="glass rounded-2xl p-8 shadow-lg">
                <h2 class="text-2xl font-bold text-white mb-6">Get In Touch</h2>

                <?php if (!empty($success_message)): ?>
                    <div class="bg-green-500/20 border border-green-500/30 text-green-300 px-4 py-3 rounded-lg mb-6">
                        <?php echo $success_message; ?>
                    </div>
                <?php endif; ?>

                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="space-y-6">
                    <div>
                        <label for="name" class="block text-white text-sm font-medium mb-2">Your Name</label>
                        <input type="text" class="w-full bg-white/10 border <?php echo (!empty($name_err)) ? 'border-red-500' : 'border-white/20'; ?> rounded-lg px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-primary-500" id="name" name="name" value="<?php echo $name; ?>" placeholder="John Doe">
                        <?php if (!empty($name_err)): ?>
                            <p class="text-red-400 text-sm mt-1"><?php echo $name_err; ?></p>
                        <?php endif; ?>
                    </div>

                    <div>
                        <label for="email" class="block text-white text-sm font-medium mb-2">Email Address</label>
                        <input type="email" class="w-full bg-white/10 border <?php echo (!empty($email_err)) ? 'border-red-500' : 'border-white/20'; ?> rounded-lg px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-primary-500" id="email" name="email" value="<?php echo $email; ?>" placeholder="john@example.com">
                        <?php if (!empty($email_err)): ?>
                            <p class="text-red-400 text-sm mt-1"><?php echo $email_err; ?></p>
                        <?php endif; ?>
                    </div>

                    <div>
                        <label for="subject" class="block text-white text-sm font-medium mb-2">Subject</label>
                        <input type="text" class="w-full bg-white/10 border <?php echo (!empty($subject_err)) ? 'border-red-500' : 'border-white/20'; ?> rounded-lg px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-primary-500" id="subject" name="subject" value="<?php echo $subject; ?>" placeholder="Inquiry about CCTV system">
                        <?php if (!empty($subject_err)): ?>
                            <p class="text-red-400 text-sm mt-1"><?php echo $subject_err; ?></p>
                        <?php endif; ?>
                    </div>

                    <div>
                        <label for="message" class="block text-white text-sm font-medium mb-2">Message</label>
                        <textarea class="w-full bg-white/10 border <?php echo (!empty($message_err)) ? 'border-red-500' : 'border-white/20'; ?> rounded-lg px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-primary-500" id="message" name="message" rows="5" placeholder="Your message here..."><?php echo $message; ?></textarea>
                        <?php if (!empty($message_err)): ?>
                            <p class="text-red-400 text-sm mt-1"><?php echo $message_err; ?></p>
                        <?php endif; ?>
                    </div>

                    <div>
                        <button type="submit" class="gradient-bg px-6 py-3 rounded-full text-white font-medium hover:shadow-lg transform hover:-translate-y-1 transition-all duration-300">
                            <i class="fas fa-paper-plane mr-2"></i>Send Message
                        </button>
                    </div>
                </form>
            </div>

            <!-- Contact Information -->
            <div>
                <h2 class="text-2xl font-bold text-white mb-8">Contact Information</h2>

                <div class="space-y-6 mb-10">
                    <div class="flex items-start">
                        <div class="glass rounded-full p-4 mr-4">
                            <i class="fas fa-map-marker-alt text-xl text-primary-400"></i>
                        </div>
                        <div>
                            <h5 class="text-lg font-medium text-white mb-2">Our Location</h5>
                            <p class="text-gray-300">Lovely Professional University<br> Phagwara, Punjab, India</p>
                            <a href="https://maps.google.com" target="_blank" class="text-primary-400 hover:text-primary-300 inline-flex items-center mt-2 text-sm">
                                <span>Get Directions</span>
                                <i class="fas fa-arrow-right ml-1 text-xs"></i>
                            </a>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="glass rounded-full p-4 mr-4">
                            <i class="fas fa-phone-alt text-xl text-primary-400"></i>
                        </div>
                        <div>
                            <h5 class="text-lg font-medium text-white mb-2">Phone Number</h5>
                            <p class="text-gray-300">+91 9876543210</p>
                            <p class="text-gray-400 text-sm">Monday - Friday, 9AM - 5PM</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="glass rounded-full p-4 mr-4">
                            <i class="fas fa-envelope text-xl text-primary-400"></i>
                        </div>
                        <div>
                            <h5 class="text-lg font-medium text-white mb-2">Email Address</h5>
                            <p class="text-gray-300">bugbusters@gmail.com</p>
                            <p class="text-gray-400 text-sm">We respond within 24 hours</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="glass rounded-full p-4 mr-4">
                            <i class="fas fa-clock text-xl text-primary-400"></i>
                        </div>
                        <div>
                            <h5 class="text-lg font-medium text-white mb-2">Business Hours</h5>
                            <p class="text-gray-300">Monday - Friday: 9:00 AM - 5:00 PM<br>Saturday & Sunday: Closed</p>
                        </div>
                    </div>
                </div>

                <div class="glass rounded-xl p-6">
                    <h5 class="text-lg font-medium text-white mb-4">Connect With Us</h5>
                    <div class="flex space-x-4">
                        <a href="#" class="glass hover:bg-primary-500/30 w-12 h-12 rounded-full flex items-center justify-center transition-colors duration-300">
                            <i class="fab fa-facebook-f text-white"></i>
                        </a>
                        <a href="#" class="glass hover:bg-primary-500/30 w-12 h-12 rounded-full flex items-center justify-center transition-colors duration-300">
                            <i class="fab fa-twitter text-white"></i>
                        </a>
                        <a href="#" class="glass hover:bg-primary-500/30 w-12 h-12 rounded-full flex items-center justify-center transition-colors duration-300">
                            <i class="fab fa-linkedin-in text-white"></i>
                        </a>
                        <a href="#" class="glass hover:bg-primary-500/30 w-12 h-12 rounded-full flex items-center justify-center transition-colors duration-300">
                            <i class="fab fa-instagram text-white"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section with Glassmorphism -->
<section class="py-20 relative overflow-hidden">
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Find Us</h2>
            <div class="w-24 h-1 bg-gradient-to-r from-primary-400 to-purple-500 mx-auto mb-6"></div>
            <p class="text-gray-300 max-w-2xl mx-auto">Our headquarters is conveniently located in the heart of Jalandhar City.</p>
        </div>

        <div class="glass rounded-2xl overflow-hidden shadow-lg max-w-4xl mx-auto">
            <!-- Google Maps Embed -->
            <div class="relative aspect-video bg-dark-800">
                <div class="absolute inset-0 flex items-center justify-center">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.1234567890123!2d75.7048678!3d31.2553921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a5f5e9c489cf3%3A0x4049a5409d53c300!2sLovely%20Professional%20University!5e0!3m2!1sen!2sin!4v1713168812000!5m2!1sen!2sin" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade"
                        class="absolute inset-0">
                    </iframe>
                </div>

                <!-- Map Overlay Elements -->
                <div class="absolute top-4 left-4 glass px-4 py-2 rounded-lg">
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-map-pin text-primary-400"></i>
                        <span class="text-white text-sm">Lovely Professional University</span>
                    </div>
                </div>

                <div class="absolute bottom-4 right-4 glass px-4 py-2 rounded-lg">
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-directions text-primary-400"></i>
                        <a href="https://www.google.com/maps/dir//Lovely+Professional+University,+Jalandhar+-+Delhi,+Grand+Trunk+Rd,+Phagwara,+Punjab+144001,+India/@31.2553921,75.7048678,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x391a5f5e9c489cf3:0x4049a5409d53c300!2m2!1d75.7048678!2d31.2553921" 
                           target="_blank" 
                           class="text-white text-sm hover:text-primary-300 transition-colors duration-300">
                            Get Directions
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Location Details -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
            <div class="glass rounded-xl p-6 transform hover:scale-105 transition-all duration-300">
                <div class="rounded-full bg-primary-500/20 w-16 h-16 flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-car text-2xl text-primary-400"></i>
                </div>
                <h3 class="text-lg font-bold text-white mb-2 text-center">By Car</h3>
                <p class="text-gray-300 text-center">Parking available on premises. Enter from Security Avenue.</p>
            </div>

            <div class="glass rounded-xl p-6 transform hover:scale-105 transition-all duration-300">
                <div class="rounded-full bg-primary-500/20 w-16 h-16 flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-subway text-2xl text-primary-400"></i>
                </div>
                <h3 class="text-lg font-bold text-white mb-2 text-center">Public Transport</h3>
                <p class="text-gray-300 text-center">Tech City Station is a 5-minute walk from our office.</p>
            </div>

            <div class="glass rounded-xl p-6 transform hover:scale-105 transition-all duration-300">
                <div class="rounded-full bg-primary-500/20 w-16 h-16 flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-plane text-2xl text-primary-400"></i>
                </div>
                <h3 class="text-lg font-bold text-white mb-2 text-center">From Airport</h3>
                <p class="text-gray-300 text-center">International Airport is 30 minutes away by car or express train.</p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section with Glassmorphism -->
<section class="py-20 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-primary-500/10 rounded-full filter blur-3xl -translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-purple-500/10 rounded-full filter blur-3xl translate-x-1/2 translate-y-1/2"></div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Frequently Asked Questions</h2>
            <div class="w-24 h-1 bg-gradient-to-r from-primary-400 to-purple-500 mx-auto mb-6"></div>
            <p class="text-gray-300 max-w-2xl mx-auto">Find answers to common questions about our CCTV monitoring system.</p>
        </div>

        <div class="max-w-3xl mx-auto">
            <!-- FAQ Item 1 -->
            <div class="glass rounded-xl overflow-hidden mb-6">
                <button class="w-full text-left px-6 py-4 flex items-center justify-between focus:outline-none" id="faq-button-1" aria-expanded="true" aria-controls="faq-answer-1">
                    <h3 class="text-lg font-medium text-white">How does the system work with existing CCTV cameras?</h3>
                    <i class="fas fa-chevron-down text-primary-400 transition-transform duration-300 transform rotate-180" id="faq-icon-1"></i>
                </button>
                <div class="px-6 pb-4" id="faq-answer-1">
                    <p class="text-gray-300">Our system integrates with your existing CCTV infrastructure through network connections. We provide software that connects to your cameras and processes the video feeds in real-time, applying our analytics algorithms to detect crowds, suspicious activities, and workplace safety issues.</p>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="glass rounded-xl overflow-hidden mb-6">
                <button class="w-full text-left px-6 py-4 flex items-center justify-between focus:outline-none" id="faq-button-2" aria-expanded="false" aria-controls="faq-answer-2">
                    <h3 class="text-lg font-medium text-white">Do I need to replace my current cameras?</h3>
                    <i class="fas fa-chevron-down text-primary-400 transition-transform duration-300" id="faq-icon-2"></i>
                </button>
                <div class="px-6 pb-4 hidden" id="faq-answer-2">
                    <p class="text-gray-300">In most cases, no. Our system is designed to work with a wide range of CCTV cameras. As long as your cameras can be accessed over a network and provide reasonable quality video, they should be compatible with our system.</p>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="glass rounded-xl overflow-hidden mb-6">
                <button class="w-full text-left px-6 py-4 flex items-center justify-between focus:outline-none" id="faq-button-3" aria-expanded="false" aria-controls="faq-answer-3">
                    <h3 class="text-lg font-medium text-white">How are alerts delivered?</h3>
                    <i class="fas fa-chevron-down text-primary-400 transition-transform duration-300" id="faq-icon-3"></i>
                </button>
                <div class="px-6 pb-4 hidden" id="faq-answer-3">
                    <p class="text-gray-300">Alerts can be delivered through multiple channels based on your preference: directly on the dashboard, via email notifications, SMS alerts, or through our mobile app. You can customize which types of alerts you want to receive and how you want to receive them.</p>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="glass rounded-xl overflow-hidden mb-6">
                <button class="w-full text-left px-6 py-4 flex items-center justify-between focus:outline-none" id="faq-button-4" aria-expanded="false" aria-controls="faq-answer-4">
                    <h3 class="text-lg font-medium text-white">Is the system secure?</h3>
                    <i class="fas fa-chevron-down text-primary-400 transition-transform duration-300" id="faq-icon-4"></i>
                </button>
                <div class="px-6 pb-4 hidden" id="faq-answer-4">
                    <p class="text-gray-300">Yes, security is our top priority. All video feeds and data are encrypted during transmission and storage. We implement strict access controls, regular security audits, and follow industry best practices to ensure your surveillance system remains secure.</p>
                </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="glass rounded-xl overflow-hidden mb-6">
                <button class="w-full text-left px-6 py-4 flex items-center justify-between focus:outline-none" id="faq-button-5" aria-expanded="false" aria-controls="faq-answer-5">
                    <h3 class="text-lg font-medium text-white">Can I access the system remotely?</h3>
                    <i class="fas fa-chevron-down text-primary-400 transition-transform duration-300" id="faq-icon-5"></i>
                </button>
                <div class="px-6 pb-4 hidden" id="faq-answer-5">
                    <p class="text-gray-300">Absolutely. Our web-based system is designed for remote access from anywhere with an internet connection. You can monitor your cameras, receive alerts, and manage your system from a computer, tablet, or smartphone.</p>
                </div>
            </div>
        </div>

        <!-- Still Have Questions -->
        <div class="glass rounded-xl p-8 max-w-3xl mx-auto mt-12 text-center">
            <h3 class="text-xl font-bold text-white mb-4">Still Have Questions?</h3>
            <p class="text-gray-300 mb-6">Our team is ready to answer any questions you may have about our CCTV monitoring system.</p>
            <a href="#" class="gradient-bg px-6 py-3 rounded-full text-white inline-flex items-center hover:shadow-lg transform hover:-translate-y-1 transition-all duration-300">
                <i class="fas fa-headset mr-2"></i>
                <span>Contact Support</span>
            </a>
        </div>
    </div>
</section>

<!-- FAQ Toggle Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get all FAQ buttons
        const faqButtons = document.querySelectorAll('[id^="faq-button-"]');

        // Add click event to each button
        faqButtons.forEach(button => {
            button.addEventListener('click', function() {
                const id = this.id.split('-')[2];
                const answer = document.getElementById(`faq-answer-${id}`);
                const icon = document.getElementById(`faq-icon-${id}`);

                // Toggle answer visibility
                answer.classList.toggle('hidden');

                // Toggle icon rotation
                icon.classList.toggle('rotate-180');

                // Update aria-expanded
                const expanded = this.getAttribute('aria-expanded') === 'true' || false;
                this.setAttribute('aria-expanded', !expanded);
            });
        });
    });
</script>

<?php
// Include footer
include_once 'includes/footer.php';
?>
