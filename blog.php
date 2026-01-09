<?php include 'includes/header.php'; ?>

<div class="bg-purple-100 min-h-screen pb-20">
    <div class="py-16 border-b border-gray-100 bg-purple-200">
        <div class="max-w-7xl mx-auto px-8 text-center">
            <h1 class="text-4xl font-serif text-[#1a1a2e]">The <span class="text-[#6b21a8]">Muse Edit</span></h1>
            <p class="text-gray-500 mt-2 italic">Stories of style, light, and inspiration</p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
            
            <?php
            $blogs = [
                [
                    'title' => 'The Art of Layering Jewelry',
                    'date' => 'Jan 10, 2026',
                    'image' => 'images/featured collection/CriNecklace.jpg',
                    'excerpt' => 'Discover how to combine crystals and gold for a look that captures the light...'
                ],
                [
                    'title' => 'Spring Pastel Trends',
                    'date' => 'Jan 05, 2026',
                    'image' => 'images/handbag/whitebag.jpg',
                    'excerpt' => 'Why blush pink and pearl white are the essential colors for your wardrobe this season...'
                ],
                [
                    'title' => 'Morning Glow Routine',
                    'date' => 'Dec 28, 2025',
                    'image' => 'images/makeup/glow seum.jpg',
                    'excerpt' => 'A step-by-step guide to using our Glow Serum for a radiant, hydrated complexion...'
                ]
            ];

            foreach($blogs as $post): ?>
            <article class="group cursor-pointer">
                <div class="overflow-hidden rounded-2xl mb-6 aspect-video">
                    <img src="<?php echo $post['image']; ?>" 
                         class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                
                <span class="text-[10px] uppercase tracking-widest text-[#e295a0] font-bold">
                    <?php echo $post['date']; ?>
                </span>
                <h2 class="text-2xl font-serif text-[#1a1a2e] mt-2 mb-3 group-hover:text-[#6b21a8] transition">
                    <?php echo $post['title']; ?>
                </h2>
                <p class="text-sm text-gray-500 leading-relaxed line-clamp-3 mb-4">
                    <?php echo $post['excerpt']; ?>
                </p>
                
                <a href="#" class="text-xs font-bold uppercase tracking-widest text-[#1a1a2e] border-b border-[#1a1a2e] pb-1 hover:text-[#6b21a8] hover:border-[#6b21a8] transition">
                    Read Article
                </a>
            </article>
            <?php endforeach; ?>

        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>