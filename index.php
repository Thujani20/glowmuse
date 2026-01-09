<?php include 'includes/header.php'; ?>

<section class="relative w-full h-[85vh] bg-cover bg-center flex items-center px-12 overflow-hidden" 
         style="background-image: linear-gradient(rgba(26, 26, 46, 0.4), rgba(226, 149, 160, 0.2)), url('images/welcomeneww.jpg');">
    
    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 bg-[#6b21a8] opacity-20 blur-[120px] rounded-full"></div>
    
    <div class="max-w-2xl relative z-10">
        <h1 class="text-7xl font-serif leading-tight mb-6 text-white drop-shadow-2xl">
            Ignite Your <br> <span class="text-[#f3e8ff] italic">Inner Glow</span>
        </h1>
        
        <p class="text-xl mb-8 text-white opacity-90 font-light tracking-wide leading-relaxed">
            Your style is your story—let it glow. Explore our <span class="text-[#f3e8ff] italic">ethereal collection</span> curated for the modern muse.
        </p>
        
        <div class="flex space-x-4">
            <a href="shop.php" class="bg-gradient-to-r from-[#6b21a8] to-[#e295a0] hover:from-[#e295a0] hover:to-[#6b21a8] text-white px-10 py-4 rounded-md font-bold transition-all duration-500 uppercase text-sm tracking-widest shadow-[0_0_20px_rgba(107,33,168,0.5)]">
                Shop the Muse >
            </a>
        </div>
    </div>
</section>

<section class="bg-[#1a1a2e] py-6 text-white">
    <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-8 text-center text-[10px] font-bold tracking-[0.3em] uppercase opacity-80">
        <div>✨ Premium Quality</div>
        <div>🚚 Fast Delivery</div>
        <div>💎 Unique Designs</div>
    </div>
</section>

<section class="py-24 px-8 bg-purple-100">
    <div class="relative flex py-5 items-center max-w-6xl mx-auto mb-16">
        <div class="flex-grow border-t border-gray-600"></div>
        <span class="flex-shrink mx-6 text-3xl font-serif text-gray-800 tracking-tight italic">
            Shop by <span class="text-[#e295a0]">Category</span>
        </span>
        <div class="flex-grow border-t border-gray-600"></div>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-10 max-w-6xl mx-auto">
    <?php 
    $categories = [
        ['name' => 'Fine Jewelry',     'slug' => 'jewelry',  'img' => 'images/shop by category/jewelry.jpg'],
        ['name' => 'Handbags',         'slug' => 'handbags', 'img' => 'images/shop by category/hbg.jpg'],
        ['name' => 'Luminous Makeup',  'slug' => 'makeup',   'img' => 'images/shop by category/mkp.jpg'],
        ['name' => 'Signature Shoes',  'slug' => 'shoes',    'img' => 'images/shop by category/shs.jpg']
    ];
    
    foreach($categories as $cat): ?>
    <a href="shop.php?category=<?php echo $cat['slug']; ?>" class="group cursor-pointer">
        <div class="relative overflow-hidden rounded-3xl aspect-[3/4] shadow-sm bg-white">
            <img src="<?php echo $cat['img']; ?>" 
                 alt="<?php echo $cat['name']; ?>"
                 class="w-full h-full object-cover group-hover:scale-110 transition duration-700 ease-in-out">
            <div class="absolute inset-0 bg-black/5 group-hover:bg-transparent transition-colors"></div>
        </div>
        <div class="mt-6 text-center">
            <p class="font-serif text-xl text-gray-800 tracking-wide"><?php echo $cat['name']; ?></p>
        </div>
    </a>
    <?php endforeach; ?>
</div>
</section>

<section class="py-24 px-8 bg-purple-150">
    <div class="relative flex py-5 items-center max-w-6xl mx-auto mb-16">
        <div class="flex-grow border-t border-gray-600"></div>
        <span class="flex-shrink mx-6 text-3xl font-serif text-gray-800 tracking-tight italic">
            Featured <span class="text-[#6b21a8]">Collection</span>
        </span>
        <div class="flex-grow border-t border-gray-600"></div>
    </div>

<div class="grid grid-cols-1 md:grid-cols-4 gap-8 max-w-6xl mx-auto">
    <?php 
    $products = [
        ['name' => 'Crystal Necklace',    'price' => '65', 'cat' => 'jewelry',  'img' => 'images/featured collection/CriNecklace.jpg'],
        ['name' => 'Blush Charm Handbag', 'price' => '40', 'cat' => 'handbags', 'img' => 'images/featured collection/hbag.jpg'],
        ['name' => 'Glam Kit Essentials', 'price' => '60', 'cat' => 'makeup',   'img' => 'images/featured collection/makeup.jpg'],
        ['name' => 'Stylish Heels',       'price' => '55', 'cat' => 'shoes',    'img' => 'images/featured collection/heel.jpg']
    ];
    
    foreach($products as $p): ?>
    <a href="shop.php?category=<?php echo $p['cat']; ?>" class="bg-white p-6 rounded-3xl shadow-sm hover:shadow-xl transition-all duration-500 flex flex-col items-center text-center group border border-gray-50 cursor-pointer">
        
        <div class="w-full h-64 overflow-hidden rounded-2xl mb-6">
            <img src="<?php echo $p['img']; ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
        </div>
        
        <h3 class="text-lg font-serif font-bold text-gray-800"><?php echo $p['name']; ?></h3>
        <p class="text-[#e295a0] font-bold text-xl my-2">$<?php echo $p['price']; ?></p>
        
        <span class="w-full bg-[#1a1a2e] text-white py-3 rounded-xl group-hover:bg-[#6b21a8] transition-colors uppercase text-[10px] font-bold tracking-widest mt-2 text-center">
            View Details
        </span>
    </a>
    <?php endforeach; ?>
</div>
</section>

<section class="py-24 px-8 bg-purple-100 overflow-hidden">
    <div class="max-w-7xl mx-auto">
        
        <div class="relative flex py-5 items-center max-w-6xl mx-auto mb-20">
            <div class="flex-grow border-t border-gray-600"></div>
            <span class="flex-shrink mx-6 text-3xl font-serif text-gray-800 tracking-tight italic">
                Voices of our <span class="text-[#e295a0]">Muses</span>
            </span>
            <div class="flex-grow border-t border-gray-600"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 max-w-6xl mx-auto">
    <?php
    $reviews = [
        [
            'name' => 'Sarah J.', 
            'img' => 'User1.jpg', 
            'text' => 'The craftsmanship is simply unparalleled. My necklace isn\'t just an accessory; it\'s my daily spark of confidence.',
            'handle' => '@sarah_muse'
        ],
        [
            'name' => 'Aisha K.', 
            'img' => 'User2.jpg', 
            'text' => 'I’ve finally found a brand that understands luxury isn\'t about the price tag, but the feeling it gives you.',
            'handle' => '@aisha_glow'
        ],
        [
            'name' => 'Emily R.', 
            'img' => 'User3.jpg', 
            'text' => 'The Luminous set is my new holy grail. It captures the light perfectly for that effortless, ethereal look.',
            'handle' => '@emily_style'
        ]
    ];
    foreach($reviews as $r): ?>
    <div class="relative group bg-white p-8 rounded-[2rem] border border-purple-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-500 flex flex-col justify-between h-full">
        
        <div class="mb-6">
            <span class="text-5xl text-[#e295a0] opacity-30 font-serif">“</span>
            <p class="text-lg font-serif text-gray-700 leading-relaxed italic mt-2">
                <?php echo $r['text']; ?>
            </p>
        </div>
        
        <div class="flex items-center gap-4 pt-6 border-t border-gray-50">
            <div class="w-12 h-12 rounded-full overflow-hidden border-2 border-[#fdfaff] shadow-sm flex-shrink-0">
                <img src="images/Customers/<?php echo $r['img']; ?>" 
                     class="w-full h-full object-cover aspect-square" 
                     alt="<?php echo $r['name']; ?>">
            </div>
            <div class="overflow-hidden">
                <h4 class="text-sm font-bold text-[#1a1a2e] truncate"><?php echo $r['name']; ?></h4>
                <p class="text-[10px] text-[#e295a0] uppercase tracking-widest font-bold"><?php echo $r['handle']; ?></p>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

        <div class="mt-24 text-center">
            <a href="#" class="text-[10px] font-bold uppercase tracking-[0.4em] text-gray-400 hover:text-[#6b21a8] transition-all border-b border-gray-100 hover:border-[#6b21a8] pb-2">
                Join the community on Instagram
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>