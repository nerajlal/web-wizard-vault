import { Button } from "@/components/ui/button";
import { Github, Linkedin, Mail, Download, ExternalLink, Instagram, MessageCircle } from "lucide-react";
import heroImage from "@/assets/hero-bg.jpg";

const Hero = () => {
  return (
    <section className="relative min-h-screen flex items-center justify-center overflow-hidden">
      {/* Background with overlay */}
      <div className="absolute inset-0 z-0">
        <img 
          src={heroImage} 
          alt="Developer workspace" 
          className="w-full h-full object-cover"
        />
        <div className="absolute inset-0 bg-gradient-hero opacity-90"></div>
      </div>

      {/* Animated background elements */}
      <div className="absolute inset-0 z-0">
        <div className="absolute top-1/4 left-1/4 w-64 h-64 bg-primary/20 rounded-full blur-3xl animate-float"></div>
        <div className="absolute bottom-1/4 right-1/4 w-96 h-96 bg-primary-glow/10 rounded-full blur-3xl animate-glow-pulse"></div>
        <div className="absolute top-1/2 left-1/2 w-32 h-32 bg-primary-glow/15 rounded-full blur-2xl animate-bounce-subtle"></div>

        {/* Floating particles */}
        <div className="absolute top-20 left-20 w-2 h-2 bg-primary rounded-full animate-float" style={{ animationDelay: '0s' }}></div>
        <div className="absolute top-40 right-32 w-1 h-1 bg-primary-glow rounded-full animate-bounce-subtle" style={{ animationDelay: '1s' }}></div>
        <div className="absolute bottom-32 left-32 w-3 h-3 bg-primary/50 rounded-full animate-pulse-slow" style={{ animationDelay: '2s' }}></div>
        <div className="absolute bottom-20 right-20 w-1.5 h-1.5 bg-primary-glow/80 rounded-full animate-float" style={{ animationDelay: '3s' }}></div>
      </div>

      {/* Content */}
      <div className="relative z-10 text-center px-4 sm:px-6 lg:px-8 max-w-4xl mx-auto">
        <div className="animate-scale-in">
          <h1 className="text-5xl sm:text-6xl lg:text-7xl font-bold mb-6 bg-gradient-primary bg-clip-text text-transparent animate-shimmer bg-[length:200%_100%]">
            Neraj Lal S
          </h1>
          <h2 className="text-xl sm:text-2xl lg:text-3xl text-foreground/90 mb-4 font-light animate-slide-up" style={{ animationDelay: '0.2s' }}>
            Full Stack Developer | PHP | Machine Learning | React & Spring Boot Enthusiast
          </h2>
          <p className="text-lg sm:text-xl text-muted-foreground mb-8 max-w-2xl mx-auto leading-relaxed animate-fade-in" style={{ animationDelay: '0.4s' }}>
            A passionate full stack developer with real-world experience in React, Java, PHP, and ML.
          </p>


        </div>

        <div className="flex flex-col sm:flex-row items-center justify-center gap-4 mb-12">
          {/* Get In Touch */}
          <Button 
            variant="default" 
            size="lg" 
            className="bg-gradient-primary hover:shadow-glow transition-all duration-300 group relative overflow-hidden"
          >
            <div className="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent translate-x-[-100%]" />
            <Mail className="w-5 h-5 mr-2 transition-all duration-300 relative z-10" />
            <span className="relative z-10">Get In Touch</span>
          </Button>

          {/* Resume Download Button */}
          <a href="/path-to-resume.pdf" download>
            <Button 
              variant="outline" 
              size="lg" 
              className="border-primary/30 hover:border-primary hover:bg-primary/10 transition-all duration-300 group relative"
            >
              <Download className="w-5 h-5 mr-2 group-hover:scale-110 group-hover:animate-pulse transition-all duration-300" />
              Download Resume
              <div className="absolute inset-0 bg-gradient-primary opacity-0 group-hover:opacity-10 transition-opacity duration-300" />
            </Button>
          </a>
        </div>

        {/* Social Links */}
        <div className="flex items-center justify-center gap-6 animate-scale-in" style={{ animationDelay: '0.8s' }}>
          <a 
            href="https://github.com/nerajlal" 
            target="_blank"
            className="p-3 rounded-full bg-card/50 backdrop-blur-sm hover:bg-primary/20 hover:shadow-glow transition-all duration-300 group relative overflow-hidden animate-float"
          >
            <div className="absolute inset-0 bg-gradient-primary opacity-0 group-hover:opacity-100 transition-opacity duration-300" />
            <Github className="w-6 h-6 group-hover:scale-125 group-hover:animate-wiggle transition-all duration-300 relative z-10 group-hover:text-primary-foreground" />
          </a>
          <a 
            href="https://www.linkedin.com/in/nerajlal" 
            target="_blank"
            className="p-3 rounded-full bg-card/50 backdrop-blur-sm hover:bg-primary/20 hover:shadow-glow transition-all duration-300 group relative overflow-hidden animate-bounce-subtle"
          >
            <div className="absolute inset-0 bg-gradient-primary opacity-0 group-hover:opacity-100 transition-opacity duration-300" />
            <Linkedin className="w-6 h-6 group-hover:scale-125 group-hover:animate-wiggle transition-all duration-300 relative z-10 group-hover:text-primary-foreground" />
          </a>
          <a 
            href="mailto:nerajnerajlal@gmail.com"
            className="p-3 rounded-full bg-card/50 backdrop-blur-sm hover:bg-primary/20 hover:shadow-glow transition-all duration-300 group relative overflow-hidden animate-float"
          >
            <div className="absolute inset-0 bg-gradient-primary opacity-0 group-hover:opacity-100 transition-opacity duration-300" />
            <Mail className="w-6 h-6 group-hover:scale-125 group-hover:animate-wiggle transition-all duration-300 relative z-10 group-hover:text-primary-foreground" />
          </a>
          <a 
            href="https://www.instagram.com/_t_h_e_dream_maker_/" 
            target="_blank"
            className="p-3 rounded-full bg-card/50 backdrop-blur-sm hover:bg-primary/20 hover:shadow-glow transition-all duration-300 group relative overflow-hidden animate-bounce-subtle"
          >
            <div className="absolute inset-0 bg-gradient-primary opacity-0 group-hover:opacity-100 transition-opacity duration-300" />
            <Instagram className="w-6 h-6 group-hover:scale-125 group-hover:animate-wiggle transition-all duration-300 relative z-10 group-hover:text-primary-foreground" />
          </a>
          <a 
            href="https://wa.me/918547470675" target="_blank"
            className="p-3 rounded-full bg-card/50 backdrop-blur-sm hover:bg-primary/20 hover:shadow-glow transition-all duration-300 group relative overflow-hidden animate-float"
          >
            <div className="absolute inset-0 bg-gradient-primary opacity-0 group-hover:opacity-100 transition-opacity duration-300" />
            <MessageCircle className="w-6 h-6 group-hover:scale-125 group-hover:animate-wiggle transition-all duration-300 relative z-10 group-hover:text-primary-foreground" />
          </a>
        </div>
      </div>

      {/* Scroll indicator */}
      <div className="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <div className="w-6 h-10 border-2 border-primary/50 rounded-full p-1">
          <div className="w-1 h-3 bg-primary rounded-full mx-auto animate-pulse"></div>
        </div>
      </div>
    </section>
  );
};

export default Hero;
