<?php
// Include necessary files
require_once 'includes/config.php';
require_once 'includes/functions.php';
require_once 'includes/auth.php';

// Check if user is already logged in
if (is_logged_in()) {
    // Redirect to appropriate dashboard
    if (is_admin()) {
        redirect('admin/dashboard.php');
    } else {
        redirect('user/dashboard.php');
    }
}

// Initialize variables
$email = "";
$email_err = "";
$success_message = "";
$error_message = "";

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate email
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter your email address.";
    } else {
        $email = trim($_POST["email"]);
        // Check if email is valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_err = "Please enter a valid email address.";
        }
    }
    
    // Check if there are no errors
    if (empty($email_err)) {
        // In a real application, you would:
        // 1. Check if the email exists in the database
        // 2. Generate a password reset token
        // 3. Send an email with a reset link
        
        // For this demo, we'll just show a success message
        $success_message = "If an account with that email exists, we've sent password reset instructions to your email.";
        $email = ""; // Clear the form
    }
}

// Include header
include_once 'includes/header.php';
?>

<div class="container mx-auto px-4 py-16">
    <div class="flex justify-center">
        <div class="w-full max-w-md">
            <!-- Password Reset Form with Glassmorphism -->
            <div class="glass rounded-2xl overflow-hidden shadow-lg mb-8 transform hover:scale-[1.01] transition-all duration-300">
                <!-- Form Header with Gradient -->
                <div class="relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-r from-primary-600/30 to-purple-600/30 z-0"></div>
                    <div class="relative z-10 px-6 py-8 text-center">
                        <div class="w-20 h-20 glass rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-key text-3xl text-primary-400"></i>
                        </div>
                        <h2 class="text-2xl font-bold text-white mb-1">Reset Password</h2>
                        <p class="text-gray-300">We'll send you instructions to reset your password</p>
                    </div>
                </div>
                
                <div class="p-6">
                    <?php if (!empty($success_message)): ?>
                        <div class="bg-green-500/20 border border-green-500/30 text-green-300 px-4 py-3 rounded-lg mb-6">
                            <div class="flex items-center">
                                <i class="fas fa-check-circle mr-2"></i>
                                <span><?php echo $success_message; ?></span>
                            </div>
                        </div>
                    <?php endif; ?>
                    
                    <?php if (!empty($error_message)): ?>
                        <div class="bg-red-500/20 border border-red-500/30 text-red-300 px-4 py-3 rounded-lg mb-6">
                            <div class="flex items-center">
                                <i class="fas fa-exclamation-circle mr-2"></i>
                                <span><?php echo $error_message; ?></span>
                            </div>
                        </div>
                    <?php endif; ?>
                    
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="space-y-6">
                        <div>
                            <label for="email" class="block text-white text-sm font-medium mb-2">Email Address</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-envelope text-gray-400"></i>
                                </div>
                                <input type="email" class="w-full bg-white/10 border <?php echo (!empty($email_err)) ? 'border-red-500' : 'border-white/20'; ?> rounded-lg pl-10 pr-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-primary-500" id="email" name="email" value="<?php echo $email; ?>" placeholder="Enter your registered email">
                            </div>
                            <?php if (!empty($email_err)): ?>
                                <p class="text-red-400 text-sm mt-1"><?php echo $email_err; ?></p>
                            <?php endif; ?>
                        </div>
                        
                        <div>
                            <button type="submit" class="w-full gradient-bg px-6 py-3 rounded-lg text-white font-medium hover:shadow-lg transform hover:-translate-y-1 transition-all duration-300">
                                <i class="fas fa-paper-plane mr-2"></i>Send Reset Instructions
                            </button>
                        </div>
                    </form>
                    
                    <div class="text-center mt-6">
                        <p class="text-gray-300">Remember your password? <a href="login.php" class="text-primary-400 hover:text-primary-300 transition-colors duration-300">Back to Login</a></p>
                    </div>
                </div>
            </div>
            
            <!-- Help Note -->
            <div class="glass rounded-xl p-4">
                <div class="flex items-start">
                    <div class="rounded-full bg-primary-500/20 w-10 h-10 flex items-center justify-center mr-4 flex-shrink-0">
                        <i class="fas fa-question-circle text-primary-400"></i>
                    </div>
                    <div>
                        <h4 class="text-white font-medium mb-2">Need Help?</h4>
                        <p class="text-gray-300 text-sm">If you're having trouble accessing your account, please contact our support team at <a href="mailto:support@cctvmonitoring.com" class="text-primary-400 hover:text-primary-300 transition-colors duration-300">support@cctvmonitoring.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// Include footer
include_once 'includes/footer.php';
?>
