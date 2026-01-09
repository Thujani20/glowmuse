<?php 
include 'includes/header.php';

// --- PHP LOGIC: HANDLING CART ADDITIONS ---
$just_added_name = ""; 
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['product_name'])) {
    // Save item to Session
    $_SESSION['cart'][] = [
        'name'     => $_POST['product_name'],
        'price'    => $_POST['product_price'],
        'image'    => $_POST['product_image'],
        'quantity' => 1
    ];
    
    // Force session to save before redirecting
    session_write_close(); 
    
    // Redirect back with the item name in the URL so we can show the "Success" message
    $cat = isset($_GET['category']) ? $_GET['category'] : 'all';
    header("Location: shop.php?category=$cat&added=" . urlencode($_POST['product_name']));
    exit();
}

// Check if we need to show a success toast
if (isset($_GET['added'])) {
    $just_added_name = $_GET['added'];
}

$current_category = isset($_GET['category']) ? $_GET['category'] : 'all';
?>

<div class="bg-purple-100 min-h-screen"> 
    <div class="py-12 border-b border-gray-100 bg-purple-200">
        <div class="max-w-7xl mx-auto px-8 text-center">
            <h1 class="text-4xl font-serif text-[#1a1a2e]">The <span class="text-[#6b21a8]">Collection</span></h1>
            <p class="text-[#1a1a2e]/70 mt-2 italic font-light tracking-wide">Curated essentials for the modern muse</p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-8 py-12 flex flex-col md:flex-row gap-16">
        <aside class="w-full md:w-1/4">
            <div class="sticky top-24">
                <h3 class="font-bold uppercase tracking-widest text-xs text-[#1a1a2e] mb-6">Categories</h3>
                <ul class="space-y-4 text-sm">
                    <?php
                    function categoryLink($name, $slug, $active) {
                        $isActive = ($active == $slug);
                        $class = $isActive 
                            ? 'text-[#6b21a8] font-bold border-b-2 border-[#6b21a8] pb-1' 
                            : 'text-gray-500 hover:text-[#6b21a8] transition-colors';
                        echo "<li><a href='shop.php?category=$slug' class='$class'>$name</a></li>";
                    }
                    categoryLink('All Products', 'all', $current_category);
                    categoryLink('Fine Jewelry', 'jewelry', $current_category);
                    categoryLink('Luminous Makeup', 'makeup', $current_category);
                    categoryLink('Designer Handbags', 'handbags', $current_category);
                    categoryLink('Signature Shoes', 'shoes', $current_category);
                    ?>
                </ul>

                <div class="mt-12">
                    <h3 class="font-bold uppercase tracking-widest text-xs text-[#1a1a2e] mb-6">Price Filter</h3>
                    <input type="range" id="priceRange" min="0" max="100" value="100" 
                           class="w-full h-1 bg-gray-200 rounded-lg accent-[#6b21a8] cursor-pointer"
                           oninput="filterByPrice(this.value)">
                    <div class="flex justify-between text-[10px] text-gray-400 mt-3 tracking-widest uppercase font-bold">
                        <span>$0</span>
                        <span class="text-[#6b21a8]" id="currentPriceDisplay">Max: $100</span>
                    </div>
                </div>
            </div>
        </aside>

        <main class="w-full md:w-3/4">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php 
                $all_products = [
                    ['name' => 'Crystal Necklace', 'price' => '65', 'cat' => 'jewelry', 'img' => 'images/featured collection/CriNecklace.jpg', 'desc' => 'This light pink crystal necklace adds a soft and elegant glow to your look. The delicate crystal design reflects light beautifully, making it perfect for both everyday wear and special occasions.'],
                    ['name' => 'Blush Charm Handbag', 'price' => '40', 'cat' => 'handbags', 'img' => 'images/featured collection/hbag.jpg', 'desc' => 'This pink leather handbag combines style and practicality with a soft finish and elegant design. Spacious and easy to carry, it is perfect for daily use while adding a fashionable touch to your outfit.'],
                    ['name' => 'Glam Kit Essentials', 'price' => '60', 'cat' => 'makeup', 'img' => 'images/featured collection/makeup.jpg', 'desc' => 'A complete makeup set with essentials for a flawless look, perfect for daily use or special occasions.'],
                    ['name' => 'Stylish Heels', 'price' => '55', 'cat' => 'shoes', 'img' => 'images/featured collection/heel.jpg', 'desc' => 'Elegant and comfortable heels that add a chic touch to any outfit, perfect for parties or daily wear.'],
                    ['name' => 'Gold Bracelet', 'price' => '50', 'cat' => 'jewelry', 'img' => 'images/jw/brslt.jpg', 'desc' => 'This golden bracelet features a smooth, polished finish that adds a subtle shine to any outfit. Lightweight and comfortable, it is perfect for everyday wear as well as special occasions.'],
                    ['name' => 'Velvet Lipstick', 'price' => '25', 'cat' => 'makeup', 'img' => 'images/makeup/velvetLipstic.jpg', 'desc' => 'A smooth velvet lipstick that delivers rich color and long-lasting wear for a flawless finish.'],
                    ['name' => 'Silver Earrings', 'price' => '30', 'cat' => 'jewelry', 'img' => 'images/jw/silEraring.jpg', 'desc' => 'Pear-cut silver set earrings.'],
                    ['name' => 'Navy Chic Heels', 'price' => '40', 'cat' => 'shoes', 'img' => 'images/shoes/blheel.jpg', 'desc' => 'Elegant navy blue heels with a sleek design, soft and durable material, lightweight and flexible for comfortable wear.'],
                    ['name' => 'Pearl Chic Handbag', 'price' => '30', 'cat' => 'handbags', 'img' => 'images/handbag/whitebag.jpg', 'desc' => 'A sleek white handbag with a clean design, perfect for everyday use and adding a touch of elegance.'],
                    ['name' => 'Glow serum', 'price' => '38', 'cat' => 'makeup', 'img' => 'images/makeup/glow seum.jpg', 'desc' => 'A set of four illuminating face serums in gold, pink, blue, and clear. Each bottle features a gold-tone dropper and light-reflecting particles for a radiant, hydrated complexion.'],
                    ['name' => 'Elegant Eyes Mascara', 'price' => '15', 'cat' => 'makeup', 'img' => 'images/makeup/mascara.jpg', 'desc' => 'A smooth mascara that adds volume and length to lashes, soft and durable, lightweight and flexible for all-day wear.'],
                    ['name' => 'Cozy Comfort Slippers', 'price' => '25', 'cat' => 'shoes', 'img' => 'images/shoes/psliper.jpg', 'desc' => ' Comfortable slippers made with soft and durable material, lightweight and flexible for all-day wear.']
                ];
            

                foreach($all_products as $p): 
                    if ($current_category == 'all' || $p['cat'] == $current_category):
                ?>
                    <div data-price="<?php echo $p['price']; ?>" 
                         class="product-card bg-white p-5 rounded-3xl shadow-sm hover:shadow-lg transition-all border border-gray-50 flex flex-col items-center text-center">
                        
                        <div class="w-full h-72 overflow-hidden rounded-2xl mb-4 cursor-pointer" 
                             onclick="openProductModal('<?php echo $p['name']; ?>', '<?php echo $p['price']; ?>', '<?php echo $p['img']; ?>', '<?php echo addslashes($p['desc']); ?>')">
                            <img src="<?php echo $p['img']; ?>" class="w-full h-full object-cover hover:scale-110 transition duration-700">
                        </div>
                        
                        <h3 class="text-lg font-serif font-bold text-gray-800"><?php echo $p['name']; ?></h3>
                        <p class="text-[#e295a0] font-bold text-xl my-2">$<?php echo $p['price']; ?></p>
                        
                        <form method="POST" class="w-full">
                            <input type="hidden" name="product_name" value="<?php echo $p['name']; ?>">
                            <input type="hidden" name="product_price" value="<?php echo $p['price']; ?>">
                            <input type="hidden" name="product_image" value="<?php echo $p['img']; ?>">
                            <button type="submit" class="w-full mt-4 bg-[#6b21a8] text-white py-3 rounded-xl hover:bg-[#1a1a2e] transition-colors text-[10px] font-bold uppercase tracking-widest">
                                Add to Cart
                            </button>
                        </form>
                    </div>
                <?php endif; endforeach; ?>
            </div>
        </main>
    </div>
</div>

<div id="productModal" class="fixed inset-0 z-[100] hidden items-center justify-center p-4 backdrop-blur-md bg-black/60">
    <div class="bg-white rounded-[2.5rem] max-w-4xl w-full max-h-[90vh] overflow-hidden flex flex-col md:flex-row relative">
        <button onclick="closeModal()" class="absolute top-6 right-6 text-gray-400 hover:text-black z-10"><i class="fas fa-times text-2xl"></i></button>
        <div class="w-full md:w-1/2 h-64 md:h-auto bg-gray-50"><img id="modalImage" class="w-full h-full object-cover"></div>
        <div class="w-full md:w-1/2 p-12 flex flex-col justify-center">
            <h2 id="modalName" class="text-3xl font-serif font-bold mb-2 text-[#1a1a2e]"></h2>
            <p id="modalPrice" class="text-2xl text-[#e295a0] font-bold mb-6"></p>
            <p id="modalDesc" class="text-gray-600 leading-relaxed italic"></p>
        </div>
    </div>
</div>

<div id="cart-toast" class="fixed bottom-10 right-10 z-[200] transform translate-y-20 opacity-0 transition-all duration-500 ease-out">
    <div class="bg-[#1a1a2e] text-white px-8 py-5 rounded-2xl shadow-2xl flex items-center gap-4 border border-[#e295a0]/20">
        <div class="bg-[#6b21a8] w-8 h-8 rounded-full flex items-center justify-center"><i class="fas fa-check text-[10px]"></i></div>
        <div>
            <p class="text-[9px] uppercase tracking-widest font-bold text-[#e295a0]">Added to Collection</p>
            <p id="toast-item-name" class="text-sm font-serif italic"></p>
        </div>
    </div>
</div>

<script>
function openProductModal(name, price, img, desc) {
    document.getElementById('modalName').innerText = name;
    document.getElementById('modalPrice').innerText = '$' + price;
    document.getElementById('modalImage').src = img;
    document.getElementById('modalDesc').innerText = desc;
    document.getElementById('productModal').classList.replace('hidden', 'flex');
}
function closeModal() { document.getElementById('productModal').classList.replace('flex', 'hidden'); }

function filterByPrice(maxPrice) {
    document.getElementById('currentPriceDisplay').innerText = "Max: $" + maxPrice;
    document.querySelectorAll('.product-card').forEach(card => {
        const itemPrice = parseFloat(card.getAttribute('data-price'));
        card.style.display = (itemPrice <= maxPrice) ? "flex" : "none";
    });
}

function showToast(itemName) {
    const toast = document.getElementById('cart-toast');
    document.getElementById('toast-item-name').innerText = itemName;
    toast.classList.remove('translate-y-20', 'opacity-0');
    toast.classList.add('translate-y-0', 'opacity-100');
    setTimeout(() => { toast.classList.add('translate-y-20', 'opacity-0'); }, 3500);
}

window.onload = function() {
    <?php if ($just_added_name != ""): ?>
        showToast("<?php echo addslashes($just_added_name); ?>");
    <?php endif; ?>
}
</script>
<?php include 'includes/footer.php'; ?>