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
$username = $password = "";
$username_err = $password_err = $login_err = "";

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate username
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter your username.";
    } else {
        $username = trim($_POST["username"]);
    }

    // Validate password
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Check if there are no errors
    if (empty($username_err) && empty($password_err)) {
        // Attempt to login
        $result = login_user($username, $password);

        if ($result['success']) {
            // Redirect to appropriate dashboard
            if ($_SESSION['role'] == 'admin') {
                redirect('admin/dashboard.php');
            } else {
                redirect('user/dashboard.php');
            }
        } else {
            $login_err = $result['message'];
        }
    }
}

// Include header
include_once 'includes/header.php';
?>

<div class="container mx-auto px-4 py-16">
    <div class="flex justify-center">
        <div class="w-full max-w-md">
            <!-- Login Form with Glassmorphism -->
            <div class="glass rounded-2xl overflow-hidden shadow-lg mb-8 transform hover:scale-[1.01] transition-all duration-300">
                <!-- Form Header with Gradient -->
                <div class="relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-r from-primary-600/30 to-purple-600/30 z-0"></div>
                    <div class="relative z-10 px-6 py-8 text-center">
                        <div class="w-20 h-20 glass rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-user-shield text-3xl text-primary-400"></i>
                        </div>
                        <h2 class="text-2xl font-bold text-white mb-1">Welcome Back</h2>
                        <p class="text-gray-300">Sign in to your account</p>
                    </div>
                </div>

                <div class="p-6">
                    <?php if (!empty($login_err)): ?>
                        <div class="bg-red-500/20 border border-red-500/30 text-red-300 px-4 py-3 rounded-lg mb-6">
                            <div class="flex items-center">
                                <i class="fas fa-exclamation-circle mr-2"></i>
                                <span><?php echo $login_err; ?></span>
                            </div>
                        </div>
                    <?php endif; ?>

                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="space-y-6">
                        <div>
                            <label for="username" class="block text-white text-sm font-medium mb-2">Username</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-user text-gray-400"></i>
                                </div>
                                <input type="text" class="w-full bg-white/10 border <?php echo (!empty($username_err)) ? 'border-red-500' : 'border-white/20'; ?> rounded-lg pl-10 pr-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-primary-500" id="username" name="username" value="<?php echo $username; ?>" placeholder="Enter your username">
                            </div>
                            <?php if (!empty($username_err)): ?>
                                <p class="text-red-400 text-sm mt-1"><?php echo $username_err; ?></p>
                            <?php endif; ?>
                        </div>

                        <div>
                            <label for="password" class="block text-white text-sm font-medium mb-2">Password</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-lock text-gray-400"></i>
                                </div>
                                <input type="password" class="w-full bg-white/10 border <?php echo (!empty($password_err)) ? 'border-red-500' : 'border-white/20'; ?> rounded-lg pl-10 pr-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-primary-500" id="password" name="password" placeholder="Enter your password">
                            </div>
                            <?php if (!empty($password_err)): ?>
                                <p class="text-red-400 text-sm mt-1"><?php echo $password_err; ?></p>
                            <?php endif; ?>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <input type="checkbox" class="w-4 h-4 bg-white/10 border-white/20 rounded text-primary-500 focus:ring-primary-500" id="remember" name="remember">
                                <label class="ml-2 block text-sm text-gray-300" for="remember">Remember me</label>
                            </div>
                            <a href="reset_password.php" class="text-sm text-primary-400 hover:text-primary-300 transition-colors duration-300">Forgot password?</a>
                        </div>

                        <div>
                            <button type="submit" class="w-full gradient-bg px-6 py-3 rounded-lg text-white font-medium hover:shadow-lg transform hover:-translate-y-1 transition-all duration-300">
                                <i class="fas fa-sign-in-alt mr-2"></i>Sign In
                            </button>
                        </div>
                    </form>

                    <div class="text-center mt-6">
                        <p class="text-gray-300">Don't have an account? <a href="register.php" class="text-primary-400 hover:text-primary-300 transition-colors duration-300">Register here</a></p>
                    </div>
                </div>
            </div>

            <!-- Demo Accounts with Glassmorphism -->
            <div class="glass rounded-xl overflow-hidden shadow-lg">
                <div class="border-b border-white/10 px-6 py-4">
                    <h3 class="text-lg font-bold text-white flex items-center">
                        <i class="fas fa-info-circle text-primary-400 mr-2"></i>Demo Accounts
                    </h3>
                </div>
                <div class="p-6">
                    <p class="text-gray-300 mb-4">For testing purposes, you can use the following accounts:</p>
                    <div class="space-y-4">
                        

                        
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
