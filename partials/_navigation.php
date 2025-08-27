<!--
  TODO:
  - Implement smooth scrolling in JavaScript.
  - Implement mobile menu toggle in JavaScript.
  - Implement scroll effect (changing background) in JavaScript.
  - Replace icon placeholders with actual SVGs.
-->
<nav id="main-nav" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-transparent">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16">
      <!-- Logo -->
      <div class="flex-shrink-0">
        <a
          href="#home"
          class="text-2xl font-bold bg-gradient-primary bg-clip-text text-transparent hover:scale-105 transition-transform"
        >
          NERAJ LAL
        </a>
      </div>

      <!-- Desktop Navigation -->
      <div class="hidden md:block">
        <div class="ml-10 flex items-baseline space-x-8">
          <a href="#home" class="text-foreground/80 hover:text-primary px-3 py-2 text-sm font-medium transition-colors relative group">
            Home
            <span class="absolute inset-x-0 bottom-0 h-0.5 bg-primary scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
          </a>
          <a href="#about" class="text-foreground/80 hover:text-primary px-3 py-2 text-sm font-medium transition-colors relative group">
            About
            <span class="absolute inset-x-0 bottom-0 h-0.5 bg-primary scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
          </a>
          <a href="#skills" class="text-foreground/80 hover:text-primary px-3 py-2 text-sm font-medium transition-colors relative group">
            Skills
            <span class="absolute inset-x-0 bottom-0 h-0.5 bg-primary scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
          </a>
          <a href="#experience" class="text-foreground/80 hover:text-primary px-3 py-2 text-sm font-medium transition-colors relative group">
            Experience
            <span class="absolute inset-x-0 bottom-0 h-0.5 bg-primary scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
          </a>
          <a href="#projects" class="text-foreground/80 hover:text-primary px-3 py-2 text-sm font-medium transition-colors relative group">
            Projects
            <span class="absolute inset-x-0 bottom-0 h-0.5 bg-primary scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
          </a>
          <a href="#contact" class="text-foreground/80 hover:text-primary px-3 py-2 text-sm font-medium transition-colors relative group">
            Contact
            <span class="absolute inset-x-0 bottom-0 h-0.5 bg-primary scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
          </a>
        </div>
      </div>

      <!-- CTA Button -->
      <div class="hidden md:block">
        <button
          class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background h-9 px-3 border-primary/30 hover:border-primary hover:bg-primary/10 transition-all duration-300 group"
        >
          <!-- Icon: View -->
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2 group-hover:scale-110 transition-transform"><path d="M5 12s2.5-5 7-5 7 5 7 5-2.5 5-7 5-7-5-7-5z"/><circle cx="12" cy="12" r="3"/></svg>
          View Resume
        </button>
      </div>

      <!-- Mobile menu button -->
      <div class="md:hidden">
        <button id="mobile-menu-button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 h-9 px-3 text-foreground hover:text-primary">
          <!-- Icon: Menu -->
          <svg id="mobile-menu-open-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="18" y2="18"/></svg>
          <!-- Icon: X -->
          <svg id="mobile-menu-close-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="hidden w-6 h-6"><line x1="18" x2="6" y1="6" y2="18"/><line x1="6" x2="18" y1="6" y2="18"/></svg>
        </button>
      </div>
    </div>

    <!-- Mobile Navigation -->
    <div id="mobile-menu" class="hidden md:hidden">
      <div class="px-2 pt-2 pb-3 space-y-1 bg-background/95 backdrop-blur-md border border-border/50 rounded-lg mt-2 shadow-elegant">
        <a href="#home" class="text-foreground/80 hover:text-primary hover:bg-primary/10 block px-3 py-2 text-base font-medium rounded-md transition-colors">Home</a>
        <a href="#about" class="text-foreground/80 hover:text-primary hover:bg-primary/10 block px-3 py-2 text-base font-medium rounded-md transition-colors">About</a>
        <a href="#skills" class="text-foreground/80 hover:text-primary hover:bg-primary/10 block px-3 py-2 text-base font-medium rounded-md transition-colors">Skills</a>
        <a href="#experience" class="text-foreground/80 hover:text-primary hover:bg-primary/10 block px-3 py-2 text-base font-medium rounded-md transition-colors">Experience</a>
        <a href="#projects" class="text-foreground/80 hover:text-primary hover:bg-primary/10 block px-3 py-2 text-base font-medium rounded-md transition-colors">Projects</a>
        <a href="#contact" class="text-foreground/80 hover:text-primary hover:bg-primary/10 block px-3 py-2 text-base font-medium rounded-md transition-colors">Contact</a>
        <div class="pt-2 border-t border-border/50">
          <button class="w-full inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background h-9 px-3 border-primary/30 hover:border-primary hover:bg-primary/10 transition-all duration-300">
            <!-- Icon: View -->
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2"><path d="M5 12s2.5-5 7-5 7 5 7 5-2.5 5-7 5-7-5-7-5z"/><circle cx="12" cy="12" r="3"/></svg>
            View Resume
          </button>
        </div>
      </div>
    </div>
  </div>
</nav>
