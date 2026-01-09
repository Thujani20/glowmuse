<footer class="bg-[#1a1a2e] text-white pt-10 pb-6">
    <div class="max-w-7xl mx-auto px-8 grid grid-cols-1 md:grid-cols-4 gap-10">
        
        <div class="space-y-4">
            <h2 class="text-xl font-serif text-[#e295a0]">GlowMuse</h2>
            <p class="text-gray-400 text-xs leading-relaxed max-w-xs">
                Celebrating the luminous spirit of the modern woman.
            </p>
            <div class="flex gap-4 text-base">
                <a href="https://instagram.com" target="_blank" class="text-gray-400 hover:text-[#e295a0] transition"><i class="fab fa-instagram"></i></a>
                <a href="https://facebook.com" target="_blank" class="text-gray-400 hover:text-[#e295a0] transition"><i class="fab fa-facebook"></i></a>
                <a href="https://pinterest.com" target="_blank" class="text-gray-400 hover:text-[#e295a0] transition"><i class="fab fa-pinterest"></i></a>
            </div>
        </div>

        <div>
            <h4 class="font-bold uppercase tracking-widest text-[10px] mb-4 text-gray-200">Shop</h4>
            <ul class="space-y-2 text-xs text-gray-400">
                <li><a href="shop.php?category=all" class="hover:text-white transition">New Arrivals</a></li>
                <li><a href="shop.php" class="hover:text-white transition">Collections</a></li>
                <li><a href="shop.php?category=all" class="hover:text-white transition">Sale</a></li>
            </ul>
        </div>

        <div>
            <h4 class="font-bold uppercase tracking-widest text-[10px] mb-4 text-gray-200">Support</h4>
            <ul class="space-y-2 text-xs text-gray-400">
                <li><a href="#" class="hover:text-white transition">Shipping</a></li>
                <li><a href="#" class="hover:text-white transition">Returns</a></li>
                <li><a href="contact.php" class="hover:text-white transition">Contact</a></li>
            </ul>
        </div>

        <div>
            <h4 class="font-bold uppercase tracking-widest text-[10px] mb-4 text-gray-200">Newsletter</h4>
           
            
            <form id="newsletterForm" onsubmit="handleNewsletter(event)" class="relative border-b border-gray-700 pb-1">
                <input type="email" id="newsletterEmail" required placeholder="Email..." 
                       class="bg-transparent border-none outline-none text-xs w-full pr-10 placeholder:text-gray-700 text-white">
                <button type="submit" class="absolute right-0 top-0 text-[#6b21a8] font-bold text-[9px] uppercase tracking-widest hover:text-[#e295a0] transition">
                    Join
                </button>
            </form>
            <p id="newsletterSuccess" class="hidden text-[10px] text-[#e295a0] mt-2 italic animate-pulse">
                Welcome to the Muse family! Check your inbox.
            </p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-8 mt-10 pt-6 border-t border-gray-800 text-center">
        <p class="text-[9px] uppercase tracking-[0.3em] text-gray-600">
            &copy; <?php echo date("Y"); ?> GlowMuse Boutique.
        </p>
    </div>
</footer>

<script>
// Newsletter Functionality
function handleNewsletter(event) {
    event.preventDefault(); // Stop page from refreshing
    
    const email = document.getElementById('newsletterEmail').value;
    const form = document.getElementById('newsletterForm');
    const successMsg = document.getElementById('newsletterSuccess');
    const desc = document.getElementById('newsletterDesc');

    if (email) {
        // Hide form and description
        form.classList.add('hidden');
        desc.classList.add('hidden');
        
        // Show success message
        successMsg.classList.remove('hidden');
        
        // Optional: Log it for yourself
        console.log("New Subscriber: " + email);
    }
}
</script>