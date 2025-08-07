import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card";
import { Badge } from "@/components/ui/badge";
import { Progress } from "@/components/ui/progress";
import { Code, Palette, Database, Cloud, Wrench, Users } from "lucide-react";

const Skills = () => {
  const skillCategories = [
    {
      icon: Code,
      title: "Frontend Development",
      skills: [
        { name: "React.js", level: 80 },
        { name: "JavaScript", level: 92 },
        { name: "HTML5 & CSS3", level: 97 },
        { name: "Tailwind CSS", level: 85 }
      ]
    },
    {
      icon: Database,
      title: "Backend Development",
      skills: [
        { name: "Java (Spring Boot)", level: 88 },
        { name: "PHP (Laravel)", level: 85 },
        { name: "Node.js / Express", level: 80 },
        { name: "Python (Django)", level: 60 }
      ]
    },
    {
      icon: Cloud,
      title: "Database & Cloud",
      skills: [
        { name: "MySQL", level: 95 },
        { name: "SQL", level: 90 },
        { name: "Oracle", level: 85 },
        { name: "Firebase", level: 68 }
      ]
    },
    {
      icon: Palette,
      title: "Design & UI",
      skills: [
        { name: "Bootstrap", level: 90 },
        { name: "Tailwind CSS", level: 90 },
        { name: "UI/UX Design", level: 75 },
        { name: "Responsive Layouts", level: 92 }
      ]
    },
    {
      icon: Wrench,
      title: "Tools & Technologies",
      skills: [
        { name: "Git & GitHub", level: 95 },
        { name: "VS Code / Eclipse", level: 95 },
        { name: "Postman / REST APIs", level: 75 },
        { name: "Sublime / CLI Tools", level: 90 }
      ]
    },
    {
      icon: Users,
      title: "Soft Skills",
      skills: [
        { name: "Team Leadership", level: 88 },
        { name: "Communication", level: 90 },
        { name: "Problem Solving", level: 95 },
        { name: "Hackathon Participation", level: 85 }
      ]
    }
  ];

  const technologies = [
    "Java", "Spring Boot", "Hibernate", "JDBC", "Spring MVC", "React.js", "Oracle", "SQL", "PHP", "Laravel",
    "MySQL", "Python", "Django", "HTML5", "CSS3", "JavaScript", "Git", "Tailwind CSS", "Machine Learning", 
    "Bootstrap", "REST APIs", "Hostinger", "Digital Ocean"
  ];

  return (
    <section id="skills" className="py-20 px-4 sm:px-6 lg:px-8 bg-gradient-secondary">
      <div className="max-w-6xl mx-auto">
        <div className="text-center mb-16 animate-fade-in">
          <h2 className="text-4xl sm:text-5xl font-bold mb-6 bg-gradient-primary bg-clip-text text-transparent">
            Skills & Expertise
          </h2>
          <p className="text-lg text-muted-foreground max-w-3xl mx-auto leading-relaxed">
            Full stack developer proficient in Java, PHP, and ML, with practical experience gained from academic, self-learning, and real-world projects.
          </p>
        </div>

        {/* Skill Categories */}
        <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-16">
          {skillCategories.map((category, index) => (
            <Card 
              key={index} 
              className="bg-card/50 backdrop-blur-sm border-border/50 hover:border-primary/30 hover:shadow-glow transition-all duration-500 animate-scale-in group relative overflow-hidden"
              style={{ animationDelay: `${index * 150}ms` }}
            >
              <div className="absolute inset-0 bg-gradient-to-r from-transparent via-primary/10 to-transparent translate-x-[-100%] group-hover:animate-shimmer" />
              <CardHeader className="pb-4 relative z-10">
                <CardTitle className="flex items-center gap-3 text-lg">
                  <div className="relative">
                    <category.icon className="w-6 h-6 text-primary group-hover:scale-125 group-hover:animate-bounce-subtle transition-all duration-300" />
                    <div className="absolute inset-0 w-6 h-6 text-primary/30 group-hover:animate-glow-pulse" />
                  </div>
                  <span className="group-hover:text-primary/90 transition-colors">{category.title}</span>
                </CardTitle>
              </CardHeader>
              <CardContent className="space-y-4 relative z-10">
                {category.skills.map((skill, skillIndex) => (
                  <div key={skillIndex} className="space-y-2 group/skill">
                    <div className="flex justify-between items-center">
                      <span className="text-sm font-medium group-hover/skill:text-primary/80 transition-colors">
                        {skill.name}
                      </span>
                      <span className="text-sm text-muted-foreground font-mono bg-primary/10 px-2 py-1 rounded-md group-hover/skill:bg-primary/20 transition-colors">
                        {skill.level}%
                      </span>
                    </div>
                    <div className="relative">
                      <Progress 
                        value={skill.level} 
                        className="h-3 group-hover/skill:h-4 transition-all duration-300"
                      />
                      <div 
                        className="absolute top-0 left-0 h-full bg-gradient-to-r from-primary to-primary-glow rounded-full transition-all duration-1000 opacity-0 group-hover/skill:opacity-100"
                        style={{ width: `${skill.level}%` }}
                      />
                    </div>
                  </div>
                ))}
              </CardContent>
            </Card>
          ))}
        </div>

        {/* Technology Tags */}
        <div className="animate-fade-in" style={{ animationDelay: '800ms' }}>
          <h3 className="text-2xl font-semibold text-center mb-8 bg-gradient-primary bg-clip-text text-transparent">
            Technologies I Work With
          </h3>
          <div className="flex flex-wrap justify-center gap-3">
            {technologies.map((tech, index) => (
              <Badge 
                key={index} 
                variant="secondary" 
                className="px-4 py-2 text-sm hover:bg-primary/20 hover:border-primary/30 hover:scale-110 hover:shadow-glow transition-all duration-300 cursor-default animate-slide-up group relative overflow-hidden"
                style={{ animationDelay: `${900 + index * 50}ms` }}
              >
                <span className="relative z-10 group-hover:text-primary-foreground transition-colors">
                  {tech}
                </span>
                <div className="absolute inset-0 bg-gradient-primary opacity-0 group-hover:opacity-100 transition-opacity duration-300" />
              </Badge>
            ))}
          </div>
        </div>
      </div>
    </section>
  );
};

export default Skills;
