<?php
if (session_status() === PHP_SESSION_NONE) { session_start(); }

// Check if a remove request was sent
if (isset($_GET['remove'])) {
    $id = $_GET['remove'];
    if (isset($_SESSION['cart'][$id])) {
        // Remove the specific item using its ID (index)
        unset($_SESSION['cart'][$id]);
        // Re-index the array so the numbers don't have gaps
        $_SESSION['cart'] = array_values($_SESSION['cart']);
    }
    // Refresh the page to show the updated cart
    header("Location: cart.php");
    exit();
}
?>

<?php include 'includes/header.php'; ?>

<div class="bg-[#fdfaff] min-h-screen py-20 px-4">
    <div class="max-w-5xl mx-auto">
        
        <div class="mb-12">
            <h1 class="text-4xl font-serif text-[#1a1a2e]">Your <span class="text-[#e295a0]">Selections</span></h1>
            <p class="text-gray-400 text-sm mt-2 italic uppercase tracking-widest">Review your curated collection</p>
        </div>

        <?php if (!empty($_SESSION['cart'])): ?>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                
                <div class="lg:col-span-2 space-y-6">
                    <?php 
                    $total_price = 0;
                    foreach ($_SESSION['cart'] as $index => $item): 
                        $total_price += $item['price'];
                    ?>
                        <div class="bg-white p-6 rounded-[2rem] shadow-sm border border-purple-50 flex items-center gap-6">
                            <div class="w-24 h-24 rounded-2xl overflow-hidden flex-shrink-0 bg-gray-50">
                                <img src="<?php echo $item['image']; ?>" class="w-full h-full object-cover">
                            </div>
                            
                            <div class="flex-grow">
                                <div class="flex justify-between items-start">
                                    <h3 class="font-serif text-lg text-[#1a1a2e]"><?php echo $item['name']; ?></h3>
                                    
                                    <a href="cart.php?remove=<?php echo $index; ?>" 
                                       class="text-gray-300 hover:text-red-400 transition-colors p-1"
                                       onclick="return confirm('Remove this item from your collection?')">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </div>
                                <p class="text-xs text-[#e295a0] font-bold uppercase tracking-widest mb-4 italic">GlowMuse Authentic</p>
                                
                                <div class="flex justify-between items-center">
                                    <span class="text-sm text-gray-400 font-medium">Quantity: 1</span>
                                    <span class="text-lg font-serif text-[#1a1a2e]">$<?php echo $item['price']; ?></span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                    <a href="shop.php" class="inline-block mt-4 text-xs font-bold text-[#6b21a8] uppercase tracking-widest border-b border-[#6b21a8] pb-1 hover:text-[#e295a0] hover:border-[#e295a0] transition-all">
                        ← Continue Shopping
                    </a>
                </div>

                <div class="lg:col-span-1">
                    <div class="bg-[#1a1a2e] text-white p-8 rounded-[2.5rem] shadow-xl sticky top-24">
                        <h3 class="text-xl font-serif mb-8 text-[#e295a0]">Order Summary</h3>
                        
                        <div class="space-y-4 mb-8">
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-400">Subtotal</span>
                                <span>$<?php echo number_format($total_price, 2); ?></span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-400">Shipping</span>
                                <span class="text-[#e295a0] italic text-[10px] uppercase tracking-widest">Complimentary</span>
                            </div>
                            <div class="border-t border-white/10 pt-4 flex justify-between text-xl font-serif">
                                <span>Total</span>
                                <span class="text-[#e295a0]">$<?php echo number_format($total_price, 2); ?></span>
                            </div>
                        </div>

                        <button class="w-full bg-[#6b21a8] hover:bg-white hover:text-[#6b21a8] text-white py-4 rounded-xl font-bold uppercase tracking-widest text-xs transition-all duration-300 shadow-lg">
                            Proceed to Checkout
                        </button>
                    </div>
                </div>
            </div>

        <?php else: ?>
            <div class="text-center py-20 bg-white rounded-[3rem] border border-dashed border-gray-200">
                <i class="fas fa-shopping-bag text-5xl text-gray-100 mb-6"></i>
                <h2 class="text-2xl font-serif text-gray-800">Your collection is empty.</h2>
                <p class="text-gray-400 mb-8 mt-2">Discover something beautiful to fill it with.</p>
                <a href="shop.php" class="bg-[#1a1a2e] text-white px-10 py-4 rounded-xl font-bold uppercase tracking-widest text-xs hover:bg-[#6b21a8] transition-all">
                    Browse the Shop
                </a>
            </div>
        <?php endif; ?>

    </div>
</div>

<?php include 'includes/footer.php'; ?>