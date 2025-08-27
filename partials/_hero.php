<section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden">
  <!-- Background with overlay -->
  <div class="absolute inset-0 z-0">
    <img
      src="public/assets/hero-bg.jpg"
      alt="Developer workspace"
      class="w-full h-full object-cover"
    />
    <div class="absolute inset-0 bg-gradient-hero opacity-90"></div>
  </div>

  <!-- Animated background elements -->
  <div class="absolute inset-0 z-0">
    <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-primary/20 rounded-full blur-3xl animate-float"></div>
    <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-primary-glow/10 rounded-full blur-3xl animate-glow-pulse"></div>
    <div class="absolute top-1/2 left-1/2 w-32 h-32 bg-primary-glow/15 rounded-full blur-2xl animate-bounce-subtle"></div>

    <!-- Floating particles -->
    <div class="absolute top-20 left-20 w-2 h-2 bg-primary rounded-full animate-float" style="animation-delay: 0s"></div>
    <div class="absolute top-40 right-32 w-1 h-1 bg-primary-glow rounded-full animate-bounce-subtle" style="animation-delay: 1s"></div>
    <div class="absolute bottom-32 left-32 w-3 h-3 bg-primary/50 rounded-full animate-pulse-slow" style="animation-delay: 2s"></div>
    <div class="absolute bottom-20 right-20 w-1.5 h-1.5 bg-primary-glow/80 rounded-full animate-float" style="animation-delay: 3s"></div>
  </div>

  <!-- Content -->
  <div class="relative z-10 text-center px-4 sm:px-6 lg:px-8 max-w-4xl mx-auto">
    <div class="animate-scale-in">
      <h1 class="text-5xl sm:text-6xl lg:text-7xl font-bold mb-6 bg-gradient-primary bg-clip-text text-transparent animate-shimmer bg-[length:200%_100%]">
        Neraj Lal S
      </h1>
      <h2 class="text-xl sm:text-2xl lg:text-3xl text-foreground/90 mb-4 font-light animate-slide-up" style="animation-delay: 0.2s">
        Full Stack Developer | Laravel & Shopify Specialist | PHP | React | Java | SpringBoot
      </h2>
      <p class="text-lg sm:text-xl text-muted-foreground mb-8 max-w-2xl mx-auto leading-relaxed animate-fade-in" style="animation-delay: 0.4s">
        A passionate full stack developer with real-world experience in React, Java, PHP, and ML.
      </p>
    </div>

    <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-12">
      <!-- Get In Touch -->
      <a href="#contact">
        <button
          class="bg-gradient-primary hover:shadow-glow transition-all duration-300 group relative overflow-hidden btn btn-lg"
        >
          <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent translate-x-[-100%]"></div>
          <!-- Icon: Mail -->
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mr-2 transition-all duration-300 relative z-10"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
          <span class="relative z-10">Get In Touch</span>
        </button>
      </a>

      <!-- Resume Download Button -->
      <a href="/path-to-resume.pdf" download>
        <button
          class="border-primary/30 hover:border-primary hover:bg-primary/10 transition-all duration-300 group relative btn btn-outline btn-lg"
        >
          <!-- Icon: View -->
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mr-2 group-hover:scale-110 group-hover:animate-pulse transition-all duration-300"><path d="M5 12s2.5-5 7-5 7 5 7 5-2.5 5-7 5-7-5-7-5z"/><circle cx="12" cy="12" r="3"/></svg>
          View Resume
          <div class="absolute inset-0 bg-gradient-primary opacity-0 group-hover:opacity-10 transition-opacity duration-300"></div>
        </button>
      </a>
    </div>

    <!-- Social Links -->
    <div class="flex items-center justify-center gap-6 animate-scale-in" style="animation-delay: 0.8s">
      <a href="https://github.com/nerajlal" target="_blank" class="p-3 rounded-full bg-card/50 backdrop-blur-sm hover:bg-primary/20 hover:shadow-glow transition-all duration-300 group relative overflow-hidden animate-float">
        <div class="absolute inset-0 bg-gradient-primary opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        <!-- Icon: Github -->
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 group-hover:scale-125 group-hover:animate-wiggle transition-all duration-300 relative z-10 group-hover:text-primary-foreground"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"/><path d="M9 18c-4.51 2-5-2-7-2"/></svg>
      </a>
      <a href="https://www.linkedin.com/in/nerajlal" target="_blank" class="p-3 rounded-full bg-card/50 backdrop-blur-sm hover:bg-primary/20 hover:shadow-glow transition-all duration-300 group relative overflow-hidden animate-bounce-subtle">
        <div class="absolute inset-0 bg-gradient-primary opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        <!-- Icon: Linkedin -->
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 group-hover:scale-125 group-hover:animate-wiggle transition-all duration-300 relative z-10 group-hover:text-primary-foreground"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect width="4" height="12" x="2" y="9"/><circle cx="4" cy="4" r="2"/></svg>
      </a>
      <a href="mailto:nerajnerajlal@gmail.com" class="p-3 rounded-full bg-card/50 backdrop-blur-sm hover:bg-primary/20 hover:shadow-glow transition-all duration-300 group relative overflow-hidden animate-float">
        <div class="absolute inset-0 bg-gradient-primary opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        <!-- Icon: Mail -->
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 group-hover:scale-125 group-hover:animate-wiggle transition-all duration-300 relative z-10 group-hover:text-primary-foreground"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
      </a>
      <a href="https://www.instagram.com/_t_h_e_dream_maker_/" target="_blank" class="p-3 rounded-full bg-card/50 backdrop-blur-sm hover:bg-primary/20 hover:shadow-glow transition-all duration-300 group relative overflow-hidden animate-bounce-subtle">
        <div class="absolute inset-0 bg-gradient-primary opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        <!-- Icon: Instagram -->
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 group-hover:scale-125 group-hover:animate-wiggle transition-all duration-300 relative z-10 group-hover:text-primary-foreground"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/></svg>
      </a>
      <a href="https://wa.me/918547470675" target="_blank" class="p-3 rounded-full bg-card/50 backdrop-blur-sm hover:bg-primary/20 hover:shadow-glow transition-all duration-300 group relative overflow-hidden animate-float">
        <div class="absolute inset-0 bg-gradient-primary opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        <!-- Icon: MessageCircle -->
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 group-hover:scale-125 group-hover:animate-wiggle transition-all duration-300 relative z-10 group-hover:text-primary-foreground"><path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"/></svg>
      </a>
    </div>
  </div>

  <!-- Scroll indicator -->
  <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
    <div class="w-6 h-10 border-2 border-primary/50 rounded-full p-1">
      <div class="w-1 h-3 bg-primary rounded-full mx-auto animate-pulse"></div>
    </div>
  </div>
</section>
