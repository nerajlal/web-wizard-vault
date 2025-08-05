import { Card, CardContent } from "@/components/ui/card";
import { Badge } from "@/components/ui/badge";
import { Code2, Database, Globe, Smartphone, Target, Heart } from "lucide-react";

const About = () => {
  const highlights = [
    { icon: Code2, label: "Clean Code", description: "Writing maintainable, scalable solutions" },
    { icon: Database, label: "Full Stack", description: "From database to deployment" },
    { icon: Globe, label: "Web Technologies", description: "Modern frameworks & tools" },
    { icon: Smartphone, label: "Responsive Design", description: "Mobile-first approach" }
  ];

  return (
    <section id="about" className="py-20 px-4 sm:px-6 lg:px-8">
      <div className="max-w-6xl mx-auto">
        <div className="text-center mb-16 animate-fade-in">
          <h2 className="text-4xl sm:text-5xl font-bold mb-6 bg-gradient-primary bg-clip-text text-transparent">
            About Me
          </h2>
          <p className="text-lg text-muted-foreground max-w-3xl mx-auto leading-relaxed">
            I'm a passionate fullstack developer with 5+ years of experience building 
            innovative web applications that solve real-world problems.
          </p>
        </div>

        <div className="grid lg:grid-cols-2 gap-12 items-center mb-16">
          {/* Personal Story */}
          <div className="space-y-6 animate-slide-up">
            <div className="space-y-4">
              <div className="flex items-center gap-3 mb-4">
                <Target className="w-6 h-6 text-primary" />
                <h3 className="text-2xl font-semibold">My Mission</h3>
              </div>
              <p className="text-muted-foreground leading-relaxed">
                To create digital experiences that not only meet technical requirements but 
                exceed user expectations. I believe in the power of clean, efficient code 
                and thoughtful design to transform ideas into reality.
              </p>
            </div>

            <div className="space-y-4">
              <div className="flex items-center gap-3 mb-4">
                <Heart className="w-6 h-6 text-primary" />
                <h3 className="text-2xl font-semibold">What Drives Me</h3>
              </div>
              <p className="text-muted-foreground leading-relaxed">
                I'm passionate about continuous learning, staying up-to-date with the latest 
                technologies, and contributing to open-source projects. Every project is an 
                opportunity to push boundaries and deliver exceptional results.
              </p>
            </div>

            <div className="flex flex-wrap gap-2 pt-4">
              <Badge variant="secondary">Problem Solver</Badge>
              <Badge variant="secondary">Team Player</Badge>
              <Badge variant="secondary">Tech Enthusiast</Badge>
              <Badge variant="secondary">Agile Advocate</Badge>
            </div>
          </div>

          {/* Highlights Grid */}
          <div className="grid grid-cols-2 gap-4 animate-slide-left">
            {highlights.map((highlight, index) => (
              <Card 
                key={index} 
                className="bg-card/50 backdrop-blur-sm border-border/50 hover:border-primary/30 hover:shadow-glow transition-all duration-500 group relative overflow-hidden animate-scale-in"
                style={{ 
                  animationDelay: `${400 + index * 100}ms`,
                  animationDuration: `${600 + index * 100}ms`
                }}
              >
                {/* Floating background elements */}
                <div className="absolute -top-4 -right-4 w-16 h-16 bg-primary/5 rounded-full group-hover:animate-float" />
                <div className="absolute -bottom-2 -left-2 w-8 h-8 bg-primary-glow/10 rounded-full group-hover:animate-bounce-subtle" />
                
                <CardContent className="p-6 text-center relative z-10">
                  <div className="relative mb-3">
                    <highlight.icon className="w-8 h-8 text-primary mx-auto group-hover:scale-125 group-hover:animate-wiggle transition-all duration-300" />
                    <div className="absolute inset-0 w-8 h-8 mx-auto group-hover:animate-glow-pulse opacity-50" />
                  </div>
                  <h4 className="font-semibold mb-2 group-hover:text-primary/90 transition-colors">
                    {highlight.label}
                  </h4>
                  <p className="text-sm text-muted-foreground group-hover:text-foreground/80 transition-colors">
                    {highlight.description}
                  </p>
                </CardContent>
                
                {/* Hover shimmer */}
                <div className="absolute inset-0 bg-gradient-to-r from-transparent via-primary/5 to-transparent translate-x-[-100%] group-hover:animate-shimmer" />
              </Card>
            ))}
          </div>
        </div>

        {/* Stats */}
        <div className="grid grid-cols-2 md:grid-cols-4 gap-8 animate-fade-in" style={{ animationDelay: '600ms' }}>
          {[
            { number: "50+", label: "Projects Completed" },
            { number: "5+", label: "Years Experience" },
            { number: "20+", label: "Technologies" },
            { number: "100%", label: "Client Satisfaction" }
          ].map((stat, index) => (
            <div 
              key={index} 
              className="text-center group animate-slide-up relative"
              style={{ animationDelay: `${700 + index * 100}ms` }}
            >
              {/* Background glow effect */}
              <div className="absolute inset-0 bg-primary/5 rounded-xl blur-xl group-hover:bg-primary/10 transition-colors opacity-0 group-hover:opacity-100" />
              
              <div className="relative z-10 p-4 rounded-xl group-hover:bg-card/30 transition-all duration-300">
                <div className="text-3xl sm:text-4xl font-bold bg-gradient-primary bg-clip-text text-transparent mb-2 group-hover:scale-125 group-hover:animate-bounce-subtle transition-all duration-500">
                  {stat.number}
                </div>
                <div className="text-muted-foreground group-hover:text-foreground/80 transition-colors text-sm font-medium">
                  {stat.label}
                </div>
              </div>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default About;