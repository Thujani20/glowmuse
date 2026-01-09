<?php include 'includes/header.php'; ?>

<div class="bg-purple-100 min-h-screen">
    
    <div class="py-16 border-b border-gray-100 bg-purple-200">
        <div class="max-w-7xl mx-auto px-8 text-center">
            <h1 class="text-4xl font-serif text-[#1a1a2e]">Contact the <span class="text-[#6b21a8]">Muse</span></h1>
            <p class="text-gray-500 mt-2 italic">We are here to assist your journey into light and style.</p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-8 py-20">
        <div class="bg-white rounded-[3rem] shadow-xl overflow-hidden flex flex-col lg:flex-row border border-gray-50">
            
            <div class="w-full lg:w-2/5 bg-[#1a1a2e] p-12 text-white relative">
                <div class="relative z-10">
                    <h2 class="text-3xl font-serif mb-8">Get in Touch</h2>
                    
                    <div class="space-y-8">
                        <div class="flex items-start gap-5">
                            <div class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center shrink-0">
                                <i class="fas fa-envelope text-[#e295a0]"></i>
                            </div>
                            <div>
                                <h4 class="text-xs uppercase tracking-widest text-gray-400 font-bold mb-1">Email Us</h4>
                                <p class="text-sm">hello@glowmuse.com</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-5">
                            <div class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center shrink-0">
                                <i class="fas fa-phone text-[#e295a0]"></i>
                            </div>
                            <div>
                                <h4 class="text-xs uppercase tracking-widest text-gray-400 font-bold mb-1">Call Us</h4>
                                <p class="text-sm">+1 (234) 567-890</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-5">
                            <div class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center shrink-0">
                                <i class="fas fa-map-marker-alt text-[#e295a0]"></i>
                            </div>
                            <div>
                                <h4 class="text-xs uppercase tracking-widest text-gray-400 font-bold mb-1">Boutique</h4>
                                <p class="text-sm">123 Luminous Ave, Suite 400<br>Fashion District, NY 10001</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-20">
                        <h4 class="text-[10px] uppercase tracking-[0.3em] text-gray-500 font-bold mb-6">Follow the Glow</h4>
                        <div class="flex gap-6">
                            <a href="#" class="hover:text-[#e295a0] transition text-xl"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="hover:text-[#e295a0] transition text-xl"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="hover:text-[#e295a0] transition text-xl"><i class="fab fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>

                <div class="absolute bottom-0 left-0 w-64 h-64 bg-[#6b21a8] rounded-full blur-[100px] opacity-20 -translate-x-1/2 translate-y-1/2"></div>
            </div>

            <div class="w-full lg:w-3/5 p-12 md:p-16 bg-white">
                <form action="#" method="POST" class="space-y-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="space-y-2">
                            <label class="text-[10px] uppercase tracking-widest font-bold text-gray-800">Your Name</label>
                            <input type="text" placeholder="Muse Name" class="w-full border-b border-gray-200 py-3 focus:border-[#6b21a8] outline-none transition-colors placeholder:text-gray-300">
                        </div>
                        <div class="space-y-2">
                            <label class="text-[10px] uppercase tracking-widest font-bold text-gray-800">Email Address</label>
                            <input type="email" placeholder="example@glow.com" class="w-full border-b border-gray-200 py-3 focus:border-[#6b21a8] outline-none transition-colors placeholder:text-gray-300">
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="text-[10px] uppercase tracking-widest font-bold text-gray-800">Subject</label>
                        <select class="w-full border-b border-gray-200 py-3 focus:border-[#6b21a8] outline-none transition-colors bg-white text-gray-600">
                            <option>General Inquiry</option>
                            <option>Order Support</option>
                            <option>Personal Styling</option>
                            <option>Partnerships</option>
                        </select>
                    </div>

                    <div class="space-y-2">
                        <label class="text-[10px] uppercase tracking-widest font-bold text-gray-800">How can we help?</label>
                        <textarea rows="4" placeholder="Write your message here..." class="w-full border-b border-gray-200 py-3 focus:border-[#6b21a8] outline-none transition-colors resize-none placeholder:text-gray-300"></textarea>
                    </div>

                    <button type="submit" class="group relative flex items-center justify-center gap-3 bg-[#1a1a2e] text-white px-10 py-4 rounded-full font-bold uppercase tracking-widest hover:bg-[#6b21a8] transition-all duration-300 shadow-lg">
                        Send Message
                        <i class="fas fa-paper-plane text-xs group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>