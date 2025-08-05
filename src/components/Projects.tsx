import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card";
import { Button } from "@/components/ui/button";
import { Badge } from "@/components/ui/badge";
import { ExternalLink, Github, Code, Smartphone, Globe, Database } from "lucide-react";

const Projects = () => {
  const projects = [
    {
      title: "E-Commerce Platform",
      description: "A full-featured e-commerce platform with real-time inventory management, payment processing, and admin dashboard. Built with modern microservices architecture.",
      image: "https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=800&h=400&fit=crop",
      technologies: ["React", "Node.js", "PostgreSQL", "Stripe", "AWS", "Docker"],
      features: ["Real-time inventory", "Payment processing", "Admin dashboard", "Mobile responsive"],
      category: "Full Stack",
      icon: Globe,
      github: "#",
      demo: "#"
    },
    {
      title: "Task Management App",
      description: "Collaborative task management application with real-time updates, team collaboration features, and advanced project analytics.",
      image: "https://images.unsplash.com/photo-1611224923853-80b023f02d71?w=800&h=400&fit=crop",
      technologies: ["Vue.js", "Express.js", "MongoDB", "Socket.io", "JWT"],
      features: ["Real-time collaboration", "Project analytics", "Team management", "File sharing"],
      category: "Web App",
      icon: Code,
      github: "#",
      demo: "#"
    },
    {
      title: "Mobile Banking App",
      description: "Secure mobile banking application with biometric authentication, transaction history, and budget tracking features.",
      image: "https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=800&h=400&fit=crop",
      technologies: ["React Native", "Python", "Django", "PostgreSQL", "Redis"],
      features: ["Biometric auth", "Transaction tracking", "Budget analysis", "Security alerts"],
      category: "Mobile",
      icon: Smartphone,
      github: "#",
      demo: "#"
    },
    {
      title: "Data Analytics Dashboard",
      description: "Comprehensive analytics dashboard for business intelligence with interactive charts, real-time data processing, and custom reporting.",
      image: "https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800&h=400&fit=crop",
      technologies: ["React", "D3.js", "Python", "FastAPI", "PostgreSQL", "Redis"],
      features: ["Interactive charts", "Real-time data", "Custom reports", "Data export"],
      category: "Analytics",
      icon: Database,
      github: "#",
      demo: "#"
    },
    {
      title: "Social Media Platform",
      description: "Modern social media platform with real-time messaging, content sharing, and advanced privacy controls.",
      image: "https://images.unsplash.com/photo-1611162617474-5b21e879e113?w=800&h=400&fit=crop",
      technologies: ["Next.js", "TypeScript", "Prisma", "PostgreSQL", "WebSocket"],
      features: ["Real-time messaging", "Content sharing", "Privacy controls", "Media upload"],
      category: "Social",
      icon: Globe,
      github: "#",
      demo: "#"
    },
    {
      title: "AI-Powered Chatbot",
      description: "Intelligent chatbot with natural language processing, integration with multiple platforms, and analytics dashboard.",
      image: "https://images.unsplash.com/photo-1531746790731-6c087fecd65a?w=800&h=400&fit=crop",
      technologies: ["Python", "TensorFlow", "FastAPI", "React", "WebSocket", "NLP"],
      features: ["NLP processing", "Multi-platform", "Analytics", "Custom training"],
      category: "AI/ML",
      icon: Code,
      github: "#",
      demo: "#"
    }
  ];

  return (
    <section id="projects" className="py-20 px-4 sm:px-6 lg:px-8 bg-gradient-secondary">
      <div className="max-w-7xl mx-auto">
        <div className="text-center mb-16 animate-fade-in">
          <h2 className="text-4xl sm:text-5xl font-bold mb-6 bg-gradient-primary bg-clip-text text-transparent">
            Featured Projects
          </h2>
          <p className="text-lg text-muted-foreground max-w-3xl mx-auto leading-relaxed">
            A showcase of innovative solutions built with cutting-edge technologies. 
            Each project represents a unique challenge and creative solution.
          </p>
        </div>

        <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          {projects.map((project, index) => (
            <Card 
              key={index}
              className="bg-card/50 backdrop-blur-sm border-border/50 hover:border-primary/30 hover:shadow-glow transition-all duration-300 overflow-hidden group animate-slide-up"
              style={{ animationDelay: `${index * 100}ms` }}
            >
              {/* Project Image */}
              <div className="relative h-48 overflow-hidden">
                <img 
                  src={project.image} 
                  alt={project.title}
                  className="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110"
                />
                <div className="absolute inset-0 bg-gradient-to-t from-background/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div className="absolute top-4 right-4">
                  <Badge variant="secondary" className="bg-background/90 backdrop-blur-sm">
                    {project.category}
                  </Badge>
                </div>
                <div className="absolute top-4 left-4">
                  <project.icon className="w-6 h-6 text-primary bg-background/90 backdrop-blur-sm rounded-full p-1" />
                </div>
              </div>

              <CardHeader>
                <CardTitle className="flex items-center justify-between">
                  <span className="group-hover:text-primary transition-colors">{project.title}</span>
                </CardTitle>
                <p className="text-muted-foreground text-sm leading-relaxed">
                  {project.description}
                </p>
              </CardHeader>

              <CardContent className="space-y-4">
                {/* Features */}
                <div>
                  <h4 className="text-sm font-semibold mb-2">Key Features:</h4>
                  <div className="grid grid-cols-2 gap-1 text-xs text-muted-foreground">
                    {project.features.map((feature, featureIndex) => (
                      <div key={featureIndex} className="flex items-center gap-1">
                        <span className="w-1 h-1 bg-primary rounded-full"></span>
                        {feature}
                      </div>
                    ))}
                  </div>
                </div>

                {/* Technologies */}
                <div>
                  <h4 className="text-sm font-semibold mb-2">Technologies:</h4>
                  <div className="flex flex-wrap gap-1">
                    {project.technologies.map((tech, techIndex) => (
                      <Badge 
                        key={techIndex} 
                        variant="outline" 
                        className="text-xs border-primary/20"
                      >
                        {tech}
                      </Badge>
                    ))}
                  </div>
                </div>

                {/* Action Buttons */}
                <div className="flex gap-2 pt-2">
                  <Button 
                    variant="outline" 
                    size="sm" 
                    className="flex-1 group/btn hover:bg-primary/10 hover:border-primary/30"
                  >
                    <Github className="w-4 h-4 mr-2 group-hover/btn:scale-110 transition-transform" />
                    Code
                  </Button>
                  <Button 
                    variant="default" 
                    size="sm" 
                    className="flex-1 bg-gradient-primary hover:shadow-glow group/btn"
                  >
                    <ExternalLink className="w-4 h-4 mr-2 group-hover/btn:scale-110 transition-transform" />
                    Demo
                  </Button>
                </div>
              </CardContent>
            </Card>
          ))}
        </div>

        <div className="text-center mt-12 animate-fade-in delay-500">
          <Button 
            variant="outline" 
            size="lg" 
            className="border-primary/30 hover:border-primary hover:bg-primary/10 transition-all duration-300"
          >
            <Github className="w-5 h-5 mr-2" />
            View All Projects on GitHub
          </Button>
        </div>
      </div>
    </section>
  );
};

export default Projects;