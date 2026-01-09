<?php include 'includes/header.php'; ?>

<div class="min-h-screen flex items-center justify-center bg-[#fdfaff] py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl w-full bg-white rounded-[3rem] shadow-xl overflow-hidden flex flex-col md:flex-row border border-purple-50">
        
        <div class="md:w-1/2 bg-[#1a1a2e] p-12 text-white flex flex-col justify-center relative overflow-hidden">
            <div class="absolute top-0 right-0 -mr-16 -mt-16 w-64 h-64 bg-[#6b21a8] opacity-20 blur-[80px] rounded-full"></div>
            
            <div class="relative z-10">
                <h2 class="text-4xl font-serif mb-6 leading-tight">Welcome back, <br><span class="text-[#e295a0] italic">Muse.</span></h2>
                <p class="text-gray-400 text-sm leading-relaxed mb-8">
                    Log in to access your curated wishlist, track your luminous orders, and explore exclusive member-only collections.
                </p>
                <div class="space-y-4">
                    <div class="flex items-center gap-3 text-xs tracking-widest uppercase text-gray-300">
                        <span class="w-8 h-[1px] bg-[#e295a0]"></span>
                        Premium Support
                    </div>
                    <div class="flex items-center gap-3 text-xs tracking-widest uppercase text-gray-300">
                        <span class="w-8 h-[1px] bg-[#e295a0]"></span>
                        Early Access
                    </div>
                </div>
            </div>
        </div>

        <div class="md:w-1/2 p-12 lg:p-16 bg-white">
            <div class="text-center mb-10">
                <h3 class="text-2xl font-serif text-[#1a1a2e]">Member Login</h3>
                <p class="text-xs text-gray-400 mt-2 uppercase tracking-widest">Enter your details below</p>
            </div>

            <form action="#" class="space-y-6">
                <div>
                    <label class="block text-[10px] font-bold uppercase tracking-widest text-gray-500 mb-2">Email Address</label>
                    <input type="email" required class="w-full px-5 py-4 bg-gray-50 border border-gray-100 rounded-xl focus:outline-none focus:border-[#6b21a8] focus:bg-white transition-all text-sm" placeholder="muse@example.com">
                </div>

                <div>
                    <div class="flex justify-between items-center mb-2">
                        <label class="block text-[10px] font-bold uppercase tracking-widest text-gray-500">Password</label>
                        <a href="#" class="text-[10px] text-[#e295a0] hover:text-[#6b21a8] font-bold uppercase tracking-widest transition">Forgot?</a>
                    </div>
                    <input type="password" required class="w-full px-5 py-4 bg-gray-50 border border-gray-100 rounded-xl focus:outline-none focus:border-[#6b21a8] focus:bg-white transition-all text-sm" placeholder="••••••••">
                </div>

                <button type="submit" class="w-full bg-[#1a1a2e] text-white py-4 rounded-xl font-bold uppercase tracking-[0.2em] text-xs hover:bg-[#6b21a8] shadow-lg hover:shadow-purple-200 transition-all duration-300 transform hover:-translate-y-1">
                    Sign In
                </button>
            </form>

            <div class="mt-10 text-center">
                <p class="text-xs text-gray-500">Don't have an account? 
                    <a href="#" class="text-[#e295a0] font-bold hover:text-[#6b21a8] transition ml-1 uppercase tracking-widest">Register Now</a>
                </p>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>