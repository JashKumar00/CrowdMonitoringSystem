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
$username = $email = $password = $confirm_password = "";
$username_err = $email_err = $password_err = $confirm_password_err = "";
$registration_success = false;

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate username
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter a username.";
    } elseif (!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))) {
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else {
        $username = trim($_POST["username"]);
    }

    // Validate email
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter an email.";
    } else {
        $email = trim($_POST["email"]);
        // Check if email is valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_err = "Please enter a valid email address.";
        }
    }

    // Validate password
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter a password.";
    } elseif (strlen(trim($_POST["password"])) < 6) {
        $password_err = "Password must have at least 6 characters.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate confirm password
    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Please confirm password.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Password did not match.";
        }
    }

    // Check if there are no errors
    if (empty($username_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err)) {
        // Attempt to register the user
        $result = register_user($username, $email, $password);

        if ($result['success']) {
            $registration_success = true;
        } else {
            if (strpos($result['message'], 'Username already exists') !== false) {
                $username_err = $result['message'];
            } elseif (strpos($result['message'], 'Email already exists') !== false) {
                $email_err = $result['message'];
            } else {
                $username_err = $result['message'];
            }
        }
    }
}

// Include header
include_once 'includes/header.php';
?>

<div class="container mx-auto px-4 py-16">
    <div class="flex justify-center">
        <div class="w-full max-w-lg">
            <!-- Registration Form with Glassmorphism -->
            <div class="glass rounded-2xl overflow-hidden shadow-lg transform hover:scale-[1.01] transition-all duration-300">
                <!-- Form Header with Gradient -->
                <div class="relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-r from-primary-600/30 to-purple-600/30 z-0"></div>
                    <div class="relative z-10 px-6 py-8 text-center">
                        <div class="w-20 h-20 glass rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-user-plus text-3xl text-primary-400"></i>
                        </div>
                        <h2 class="text-2xl font-bold text-white mb-1">Create an Account</h2>
                        <p class="text-gray-300">Join our CCTV monitoring platform</p>
                    </div>
                </div>

                <div class="p-8">
                    <?php if ($registration_success): ?>
                        <div class="bg-green-500/20 border border-green-500/30 text-green-300 px-6 py-4 rounded-lg mb-6">
                            <div class="flex items-center mb-2">
                                <i class="fas fa-check-circle text-2xl mr-3"></i>
                                <h3 class="text-lg font-medium text-green-300">Registration Successful!</h3>
                            </div>
                            <p class="ml-9">Your account has been created successfully.</p>
                            <div class="mt-4 ml-9">
                                <a href="login.php" class="gradient-bg px-6 py-2 rounded-full text-white inline-flex items-center hover:shadow-lg transform hover:-translate-y-1 transition-all duration-300">
                                    <i class="fas fa-sign-in-alt mr-2"></i>Login to Your Account
                                </a>
                            </div>
                        </div>
                    <?php else: ?>
                        <p class="text-gray-300 mb-6 text-center">Please fill out the form below to create your account</p>

                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="space-y-6">
                            <!-- Username Field -->
                            <div>
                                <label for="username" class="block text-white text-sm font-medium mb-2">Username</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-user text-gray-400"></i>
                                    </div>
                                    <input type="text" class="w-full bg-white/10 border <?php echo (!empty($username_err)) ? 'border-red-500' : 'border-white/20'; ?> rounded-lg pl-10 pr-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-primary-500" id="username" name="username" value="<?php echo $username; ?>" placeholder="Choose a username">
                                </div>
                                <?php if (!empty($username_err)): ?>
                                    <p class="text-red-400 text-sm mt-1"><?php echo $username_err; ?></p>
                                <?php else: ?>
                                    <p class="text-gray-400 text-xs mt-1">Username can only contain letters, numbers, and underscores.</p>
                                <?php endif; ?>
                            </div>

                            <!-- Email Field -->
                            <div>
                                <label for="email" class="block text-white text-sm font-medium mb-2">Email Address</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-envelope text-gray-400"></i>
                                    </div>
                                    <input type="email" class="w-full bg-white/10 border <?php echo (!empty($email_err)) ? 'border-red-500' : 'border-white/20'; ?> rounded-lg pl-10 pr-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-primary-500" id="email" name="email" value="<?php echo $email; ?>" placeholder="Enter your email address">
                                </div>
                                <?php if (!empty($email_err)): ?>
                                    <p class="text-red-400 text-sm mt-1"><?php echo $email_err; ?></p>
                                <?php endif; ?>
                            </div>

                            <!-- Password Field -->
                            <div>
                                <label for="password" class="block text-white text-sm font-medium mb-2">Password</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-lock text-gray-400"></i>
                                    </div>
                                    <input type="password" class="w-full bg-white/10 border <?php echo (!empty($password_err)) ? 'border-red-500' : 'border-white/20'; ?> rounded-lg pl-10 pr-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-primary-500" id="password" name="password" placeholder="Create a password">
                                </div>
                                <?php if (!empty($password_err)): ?>
                                    <p class="text-red-400 text-sm mt-1"><?php echo $password_err; ?></p>
                                <?php else: ?>
                                    <p class="text-gray-400 text-xs mt-1">Password must be at least 6 characters long.</p>
                                <?php endif; ?>
                            </div>

                            <!-- Confirm Password Field -->
                            <div>
                                <label for="confirm_password" class="block text-white text-sm font-medium mb-2">Confirm Password</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-lock text-gray-400"></i>
                                    </div>
                                    <input type="password" class="w-full bg-white/10 border <?php echo (!empty($confirm_password_err)) ? 'border-red-500' : 'border-white/20'; ?> rounded-lg pl-10 pr-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-primary-500" id="confirm_password" name="confirm_password" placeholder="Confirm your password">
                                </div>
                                <?php if (!empty($confirm_password_err)): ?>
                                    <p class="text-red-400 text-sm mt-1"><?php echo $confirm_password_err; ?></p>
                                <?php endif; ?>
                            </div>

                            <!-- Terms and Conditions -->
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input type="checkbox" class="w-4 h-4 bg-white/10 border-white/20 rounded text-primary-500 focus:ring-primary-500" id="terms" name="terms" required>
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="terms" class="text-gray-300">I agree to the <a href="#" class="text-primary-400 hover:text-primary-300 transition-colors duration-300">Terms of Service</a> and <a href="#" class="text-primary-400 hover:text-primary-300 transition-colors duration-300">Privacy Policy</a></label>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div>
                                <button type="submit" class="w-full gradient-bg px-6 py-3 rounded-lg text-white font-medium hover:shadow-lg transform hover:-translate-y-1 transition-all duration-300">
                                    <i class="fas fa-user-plus mr-2"></i>Create Account
                                </button>
                            </div>
                        </form>
                    <?php endif; ?>

                    <!-- Login Link -->
                    <div class="text-center mt-6">
                        <p class="text-gray-300">Already have an account? <a href="login.php" class="text-primary-400 hover:text-primary-300 transition-colors duration-300">Login here</a></p>
                    </div>
                </div>
            </div>

            <!-- Security Note -->
            <div class="mt-6 glass rounded-xl p-4 flex items-center">
                <div class="rounded-full bg-primary-500/20 w-10 h-10 flex items-center justify-center mr-4">
                    <i class="fas fa-shield-alt text-primary-400"></i>
                </div>
                <p class="text-gray-300 text-sm">Your information is secure. We use industry-standard encryption to protect your data.</p>
            </div>
        </div>
    </div>
</div>

<?php
// Include footer
include_once 'includes/footer.php';
?>
