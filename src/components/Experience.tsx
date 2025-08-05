import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card";
import { Badge } from "@/components/ui/badge";
import { Calendar, MapPin, Building, Award } from "lucide-react";

const Experience = () => {
  const experiences = [
    {
      title: "Senior Full Stack Developer",
      company: "TechVenture Solutions",
      location: "San Francisco, CA",
      period: "2022 - Present",
      type: "Full-time",
      description: [
        "Led a team of 6 developers in building scalable microservices architecture",
        "Reduced application load time by 40% through performance optimization",
        "Implemented CI/CD pipelines that decreased deployment time by 60%",
        "Mentored junior developers and established coding best practices"
      ],
      technologies: ["React", "Node.js", "AWS", "PostgreSQL", "Docker", "Kubernetes"]
    },
    {
      title: "Full Stack Developer",
      company: "InnovateCorp",
      location: "Austin, TX",
      period: "2020 - 2022",
      type: "Full-time",
      description: [
        "Developed and maintained 15+ client-facing web applications",
        "Collaborated with UX/UI team to implement responsive designs",
        "Integrated third-party APIs and payment processing systems",
        "Achieved 99.9% uptime through robust error handling and monitoring"
      ],
      technologies: ["Vue.js", "Python", "Django", "MongoDB", "Redis", "Azure"]
    },
    {
      title: "Frontend Developer",
      company: "StartupLab",
      location: "Remote",
      period: "2019 - 2020",
      type: "Contract",
      description: [
        "Built responsive web applications for 10+ startup clients",
        "Implemented modern frontend architectures using React and TypeScript",
        "Optimized web applications for mobile devices and accessibility",
        "Collaborated remotely with international development teams"
      ],
      technologies: ["React", "TypeScript", "SCSS", "Jest", "Webpack", "Figma"]
    },
    {
      title: "Junior Web Developer",
      company: "Digital Agency Pro",
      location: "Los Angeles, CA",
      period: "2018 - 2019",
      type: "Full-time",
      description: [
        "Developed custom WordPress themes and plugins for client websites",
        "Implemented responsive designs and cross-browser compatibility",
        "Optimized website performance and SEO rankings",
        "Provided technical support and maintenance for 50+ client websites"
      ],
      technologies: ["JavaScript", "PHP", "WordPress", "MySQL", "CSS3", "jQuery"]
    }
  ];

  const achievements = [
    {
      title: "AWS Certified Solutions Architect",
      issuer: "Amazon Web Services",
      date: "2023",
      icon: Award
    },
    {
      title: "Top Performer Award",
      issuer: "TechVenture Solutions",
      date: "2023",
      icon: Award
    },
    {
      title: "Open Source Contributor",
      issuer: "React Community",
      date: "2022-Present",
      icon: Award
    }
  ];

  return (
    <section id="experience" className="py-20 px-4 sm:px-6 lg:px-8">
      <div className="max-w-6xl mx-auto">
        <div className="text-center mb-16 animate-fade-in">
          <h2 className="text-4xl sm:text-5xl font-bold mb-6 bg-gradient-primary bg-clip-text text-transparent">
            Experience & Achievements
          </h2>
          <p className="text-lg text-muted-foreground max-w-3xl mx-auto leading-relaxed">
            A track record of delivering exceptional results and driving innovation 
            across diverse projects and technologies.
          </p>
        </div>

        <div className="grid lg:grid-cols-3 gap-8">
          {/* Experience Timeline */}
          <div className="lg:col-span-2 space-y-6">
            <h3 className="text-2xl font-semibold mb-6 flex items-center gap-3">
              <Building className="w-6 h-6 text-primary" />
              Professional Experience
            </h3>
            
            {experiences.map((exp, index) => (
              <Card 
                key={index} 
                className="bg-card/50 backdrop-blur-sm border-border/50 hover:border-primary/30 hover:shadow-glow transition-all duration-300 animate-slide-up group"
                style={{ animationDelay: `${index * 150}ms` }}
              >
                <CardHeader>
                  <div className="flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                    <CardTitle className="text-xl group-hover:text-primary transition-colors">
                      {exp.title}
                    </CardTitle>
                    <Badge variant="outline" className="self-start sm:self-center">
                      {exp.type}
                    </Badge>
                  </div>
                  <div className="space-y-2 text-muted-foreground">
                    <div className="flex items-center gap-2">
                      <Building className="w-4 h-4" />
                      <span className="font-medium">{exp.company}</span>
                    </div>
                    <div className="flex items-center gap-4 text-sm">
                      <div className="flex items-center gap-1">
                        <Calendar className="w-4 h-4" />
                        <span>{exp.period}</span>
                      </div>
                      <div className="flex items-center gap-1">
                        <MapPin className="w-4 h-4" />
                        <span>{exp.location}</span>
                      </div>
                    </div>
                  </div>
                </CardHeader>
                <CardContent>
                  <ul className="space-y-2 mb-4">
                    {exp.description.map((item, itemIndex) => (
                      <li key={itemIndex} className="text-muted-foreground flex items-start gap-2">
                        <span className="w-1.5 h-1.5 bg-primary rounded-full mt-2 flex-shrink-0"></span>
                        {item}
                      </li>
                    ))}
                  </ul>
                  <div className="flex flex-wrap gap-2">
                    {exp.technologies.map((tech, techIndex) => (
                      <Badge 
                        key={techIndex} 
                        variant="secondary" 
                        className="text-xs"
                      >
                        {tech}
                      </Badge>
                    ))}
                  </div>
                </CardContent>
              </Card>
            ))}
          </div>

          {/* Achievements Sidebar */}
          <div className="space-y-6">
            <h3 className="text-2xl font-semibold mb-6 flex items-center gap-3">
              <Award className="w-6 h-6 text-primary" />
              Key Achievements
            </h3>
            
            <div className="space-y-4">
              {achievements.map((achievement, index) => (
                <Card 
                  key={index} 
                  className="bg-card/50 backdrop-blur-sm border-border/50 hover:border-primary/30 hover:shadow-glow transition-all duration-300 animate-slide-up group"
                  style={{ animationDelay: `${(index + 4) * 150}ms` }}
                >
                  <CardContent className="p-4">
                    <div className="flex items-start gap-3">
                      <achievement.icon className="w-5 h-5 text-primary mt-1 group-hover:scale-110 transition-transform" />
                      <div className="flex-1">
                        <h4 className="font-semibold mb-1">{achievement.title}</h4>
                        <p className="text-sm text-muted-foreground mb-1">{achievement.issuer}</p>
                        <p className="text-xs text-muted-foreground">{achievement.date}</p>
                      </div>
                    </div>
                  </CardContent>
                </Card>
              ))}
            </div>

            {/* Education */}
            <div className="mt-12">
              <h3 className="text-xl font-semibold mb-4">Education</h3>
              <Card className="bg-card/50 backdrop-blur-sm border-border/50">
                <CardContent className="p-4">
                  <h4 className="font-semibold">Bachelor of Computer Science</h4>
                  <p className="text-sm text-muted-foreground">University of California, Berkeley</p>
                  <p className="text-xs text-muted-foreground">2014 - 2018</p>
                </CardContent>
              </Card>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Experience;