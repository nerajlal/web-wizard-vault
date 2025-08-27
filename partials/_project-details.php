<section id="project-details" class="py-20 px-4 sm:px-6 lg:px-8">
  <div class="max-w-4xl mx-auto">
    <div class="text-center mb-16 animate-fade-in">
      <h2 class="text-4xl sm:text-5xl font-bold mb-6 bg-gradient-primary bg-clip-text text-transparent">
        <?php echo htmlspecialchars($project['title']); ?>
      </h2>
      <p class="text-lg text-muted-foreground max-w-3xl mx-auto leading-relaxed">
        <?php echo htmlspecialchars($project['description']); ?>
      </p>
    </div>

    <div class="rounded-lg border bg-card text-card-foreground shadow-sm overflow-hidden">
      <img src="<?php echo htmlspecialchars($project['image']); ?>" alt="<?php echo htmlspecialchars($project['title']); ?>" class="w-full h-auto object-cover">
      <div class="p-6 space-y-8">
        <div>
          <h3 class="text-2xl font-semibold mb-4">About this project</h3>
          <p class="text-muted-foreground">
            <?php echo htmlspecialchars($project['long_description']); ?>
          </p>
        </div>

        <div>
          <h3 class="text-2xl font-semibold mb-4">Key Features</h3>
          <ul class="grid grid-cols-1 md:grid-cols-2 gap-4 list-none">
            <?php foreach ($project['features'] as $feature): ?>
              <li class="flex items-center gap-2">
                <span class="w-2 h-2 bg-primary rounded-full"></span>
                <span><?php echo htmlspecialchars($feature); ?></span>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>

        <div>
          <h3 class="text-2xl font-semibold mb-4">Technologies Used</h3>
          <div class="flex flex-wrap gap-2">
            <?php foreach ($project['technologies'] as $tech): ?>
              <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground">
                <?php echo htmlspecialchars($tech); ?>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <div class="flex gap-4 pt-4">
          <a href="<?php echo htmlspecialchars($project['github']); ?>" target="_blank" class="flex-1">
            <button class="w-full inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"/><path d="M9 18c-4.51 2-5-2-7-2"/></svg>
              View Code
            </button>
          </a>
          <a href="<?php echo htmlspecialchars($project['demo']); ?>" target="_blank" class="flex-1">
            <button class="w-full inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" x2="21" y1="14" y2="3"/></svg>
              Live Demo
            </button>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
