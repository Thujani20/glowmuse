<?php 
// 1. Initialize the session at the very top so the cart works on every page
if (session_status() === PHP_SESSION_NONE) {
    session_start(); 
}

// 2. If the cart doesn't exist yet, create it as an empty list
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>GlowMuse | Luxury Accessories</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .font-serif { font-family: 'Playfair Display', serif; }
    </style>
</head>
<body class="bg-[#fcfafc]">
    <nav class="bg-purple-50 shadow-sm sticky top-0 z-50 px-8 py-4 flex items-center justify-between">
        <a href="index.php" class="text-2xl font-bold tracking-tighter font-serif">
            <span class="text-[#6b21a8]">Glow</span><span class="text-[#e295a0]">Muse</span>
        </a>
        
        <div class="flex items-center space-x-10">
            <?php $current_page = basename($_SERVER['PHP_SELF']); ?>
            <ul class="hidden md:flex space-x-8 text-sm font-medium uppercase tracking-widest">
                <?php
                $nav_items = [
                    'Home' => 'index.php', 
                    'Shop' => 'shop.php', 
                    'Blog' => 'blog.php', 
                    'About' => 'about.php', 
                    'Contact' => 'contact.php'
                ];
                foreach ($nav_items as $label => $file):
                    $isActive = ($current_page == $file);
                    $linkClass = $isActive 
                        ? 'text-[#6b21a8] border-b-2 border-[#6b21a8] pb-1' 
                        : 'text-gray-600 hover:text-[#6b21a8] transition duration-300';
                ?>
                <li><a href="<?php echo $file; ?>" class="<?php echo $linkClass; ?>"><?php echo $label; ?></a></li>
                <?php endforeach; ?>
            </ul>

            <div class="flex items-center space-x-8">
                <a href="login.php" class="text-sm font-bold uppercase tracking-widest text-gray-600 hover:text-[#6b21a8] transition-colors">Login</a>
                
                <a href="cart.php" class="relative group p-2 flex items-center">
                    <i class="fas fa-shopping-bag text-lg text-gray-700 group-hover:text-[#6b21a8] transition-colors"></i>
                    <span class="absolute -top-1 -right-1 bg-[#e295a0] text-white text-[9px] font-bold px-1.5 py-0.5 rounded-full shadow-sm">
                        <?php echo count($_SESSION['cart']); ?>
                    </span>
                </a>
            </div>
        </div>
    </nav>