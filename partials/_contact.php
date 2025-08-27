<section id="contact" class="py-20 px-4 sm:px-6 lg:px-8">
  <div class="max-w-6xl mx-auto">
    <div class="text-center mb-16 animate-fade-in">
      <h2 class="text-4xl sm:text-5xl font-bold mb-6 bg-gradient-primary bg-clip-text text-transparent">
        Let's Work Together
      </h2>
      <p class="text-lg text-muted-foreground max-w-3xl mx-auto leading-relaxed">
        Ready to bring your ideas to life? I'm always excited to discuss new projects
        and opportunities. Let's create something amazing together.
      </p>
    </div>

    <div class="grid lg:grid-cols-2 gap-12">
      <!-- LEFT COLUMN -->
      <div class="space-y-8 animate-slide-up">
        <!-- Contact Form -->
        <div class="rounded-lg border bg-card text-card-foreground shadow-sm bg-card/50 backdrop-blur-sm border-border/50 hover:border-primary/30 hover:shadow-glow transition-all duration-300">
          <div class="flex flex-col space-y-1.5 p-6">
            <h3 class="flex items-center gap-3 text-2xl font-semibold leading-none tracking-tight">
              <!-- Icon: Send -->
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-primary"><path d="m22 2-7 20-4-9-9-4Z"/><path d="M22 2 11 13"/></svg>
              Send me a message
            </h3>
          </div>
          <div class="p-6 pt-0">
            <form id="contact-form" action="#" method="POST" class="space-y-4">
              <div class="grid grid-cols-2 gap-4">
                <div>
                  <label for="name" class="text-sm font-medium mb-2 block">Name</label>
                  <input id="name" name="name" placeholder="Your name" required class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm bg-background/50 border-border/50 focus:border-primary">
                </div>
                <div>
                  <label for="email" class="text-sm font-medium mb-2 block">Email</label>
                  <input id="email" name="email" type="email" placeholder="your.email@example.com" required class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm bg-background/50 border-border/50 focus:border-primary">
                </div>
              </div>

              <div>
                <label for="subject" class="text-sm font-medium mb-2 block">Subject</label>
                <input id="subject" name="subject" placeholder="Project inquiry, collaboration, etc." required class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm bg-background/50 border-border/50 focus:border-primary">
              </div>

              <div>
                <label for="message" class="text-sm font-medium mb-2 block">Message</label>
                <textarea id="message" name="message" placeholder="Tell me about your project, goals, and how I can help..." rows="6" required class="flex min-h-[80px] w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 bg-background/50 border-border/50 focus:border-primary resize-none"></textarea>
              </div>

              <button type="submit" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 h-11 px-8 w-full bg-gradient-primary hover:shadow-glow transition-all duration-300 group">
                <!-- Icon: Send -->
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mr-2 group-hover:scale-110 transition-transform"><path d="m22 2-7 20-4-9-9-4Z"/><path d="M22 2 11 13"/></svg>
                Send Message
              </button>
            </form>
          </div>
        </div>

        <!-- Availability (moved here) -->
        <div class="rounded-lg border bg-card text-card-foreground shadow-sm bg-card/50 backdrop-blur-sm border-border/50">
          <div class="p-6 text-center">
            <div class="flex items-center justify-center gap-3 mb-3">
              <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
              <span class="font-semibold">Available for new projects</span>
            </div>
            <p class="text-sm text-muted-foreground">
              Currently accepting new freelance projects and consulting opportunities.
              Let's discuss your next big idea!
            </p>
          </div>
        </div>
      </div>

      <!-- RIGHT COLUMN -->
      <div class="space-y-8 animate-slide-up delay-200">
        <!-- Contact Info -->
        <div class="rounded-lg border bg-card text-card-foreground shadow-sm bg-card/50 backdrop-blur-sm border-border/50">
          <div class="flex flex-col space-y-1.5 p-6">
            <h3 class="text-2xl font-semibold leading-none tracking-tight">Contact Information</h3>
          </div>
          <div class="p-6 pt-0 space-y-4">
            <a href="mailto:nerajnerajlal@gmail.com" target="_blank" rel="noopener noreferrer" class="flex items-center gap-4 p-3 rounded-lg hover:bg-primary/10 transition-colors group">
              <!-- Icon: Mail -->
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-primary group-hover:scale-110 transition-transform"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
              <div>
                <div class="text-sm text-muted-foreground">Email</div>
                <div class="font-medium">nerajnerajlal@gmail.com</div>
              </div>
            </a>
            <a href="tel:+918547470675" target="_blank" rel="noopener noreferrer" class="flex items-center gap-4 p-3 rounded-lg hover:bg-primary/10 transition-colors group">
              <!-- Icon: Phone -->
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-primary group-hover:scale-110 transition-transform"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              <div>
                <div class="text-sm text-muted-foreground">Phone</div>
                <div class="font-medium">+91 8547470675</div>
              </div>
            </a>
            <a href="https://wa.me/918547470675" target="_blank" rel="noopener noreferrer" class="flex items-center gap-4 p-3 rounded-lg hover:bg-primary/10 transition-colors group">
              <!-- Icon: MessageCircle -->
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-primary group-hover:scale-110 transition-transform"><path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"/></svg>
              <div>
                <div class="text-sm text-muted-foreground">WhatsApp</div>
                <div class="font-medium">+91 8547470675</div>
              </div>
            </a>
            <a href="#" target="_blank" rel="noopener noreferrer" class="flex items-center gap-4 p-3 rounded-lg hover:bg-primary/10 transition-colors group">
              <!-- Icon: MapPin -->
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-primary group-hover:scale-110 transition-transform"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
              <div>
                <div class="text-sm text-muted-foreground">Location</div>
                <div class="font-medium">Kollam, Kerala, India</div>
              </div>
            </a>
          </div>
        </div>

        <!-- Social Links -->
        <div class="rounded-lg border bg-card text-card-foreground shadow-sm bg-card/50 backdrop-blur-sm border-border/50">
          <div class="flex flex-col space-y-1.5 p-6">
            <h3 class="text-2xl font-semibold leading-none tracking-tight">Connect With Me</h3>
          </div>
          <div class="p-6 pt-0 space-y-3">
            <a href="https://github.com/nerajlal" target="_blank" rel="noopener noreferrer" class="flex items-center justify-between p-3 rounded-lg hover:bg-primary/10 transition-colors group">
              <div class="flex items-center gap-4">
                <!-- Icon: Github -->
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-primary group-hover:scale-110 transition-transform"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"/><path d="M9 18c-4.51 2-5-2-7-2"/></svg>
                <div>
                  <div class="font-medium">GitHub</div>
                  <div class="text-sm text-muted-foreground">@nerajlal</div>
                </div>
              </div>
              <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground opacity-0 group-hover:opacity-100 transition-opacity">Follow</div>
            </a>
            <a href="https://www.linkedin.com/in/nerajlal" target="_blank" rel="noopener noreferrer" class="flex items-center justify-between p-3 rounded-lg hover:bg-primary/10 transition-colors group">
              <div class="flex items-center gap-4">
                <!-- Icon: Linkedin -->
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-primary group-hover:scale-110 transition-transform"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect width="4" height="12" x="2" y="9"/><circle cx="4" cy="4" r="2"/></svg>
                <div>
                  <div class="font-medium">LinkedIn</div>
                  <div class="text-sm text-muted-foreground">Neraj Lal</div>
                </div>
              </div>
              <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground opacity-0 group-hover:opacity-100 transition-opacity">Follow</div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
