import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card";
import { Badge } from "@/components/ui/badge";
import { Calendar, MapPin, Building, Award } from "lucide-react";

const Experience = () => {
  const experiences = [
    {
      title: "PHP Full Stack Developer",
      company: "Task19 Technologies",
      location: "Kollam, Kerala",
      period: "2025 - Present",
      type: "Full-time",
      description: [
        "Developing and maintaining web apps using PHP, Laravel, and Shopify's Liquid engine.",
        "Integrated third-party APIs and payment gateways across client stores.",
        "Managed application deployment and configuration on DigitalOcean.",
        "Collaborated with designers and backend teams to implement scalable and secure modules."
      ],
      technologies: ["PHP", "Laravel", "Shopify", "JavaScript", "DigitalOcean"]
    },
    {
      title: "Java Full Stack Intern",
      company: "QSpiders, Kochi",
      location: "Kochi, Kerala",
      period: "2024 - 2025",
      type: "Internship",
      description: [
        "Developed responsive frontend interfaces using React.js.",
        "Integrated backend APIs using Spring Boot.",
        "Participated in technical discussions, debugging sessions, and peer code reviews.",
        "Built secure and scalable modules aligned with client requirements."
      ],
      technologies: ["React", "Hibernate", "JDBC", "Spring MVC", "Spring Boot", "MySQL", "Postman", "Git"]
    },
    {
      title: "Community Lead (IEDC) & Web Developer",
      company: "Serve Techno Research",
      location: "Kollam, Kerala",
      period: "2022 - 2024",
      type: "Part-time",
      description: [
        "Developed and maintained full-stack applications for real-world clients.",
        "Worked on 30+ academic projects and 5+ live client projects including E-commerce.",
        "Created and managed databases using MySQL and optimized system design.",
        "Led client meetings, participated in IEDC hackathons, and collaborated with industry experts."
      ],
      technologies: ["PHP", "Laravel", "MySQL", "HTML/CSS", "ML", "JavaScript", "Hostinger"]
    }
  ];

  const achievements = [
    {
      title: "Winner - 24-hour Hackathon",
      issuer: "IEDC Kerala",
      date: "2023",
      icon: Award
    },
    {
      title: "Campus Ambassador",
      issuer: "Devtown, GDSC, Microsoft Learn",
      date: "2023",
      icon: Award
    },
    {
      title: "Freecodecamp Certifications",
      issuer: "Freecodecamp.org",
      date: "2023",
      icon: Award
    },
    {
      title: "2nd Place - Coding & Debugging Challenge",
      issuer: "Intercollege Event",
      date: "2022",
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
            Practical experience from internships, real-world projects, and student leadership initiatives — building a strong foundation in full stack development.
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
                  <div className="flex flex-wrap items-center gap-x-6 gap-y-2 text-muted-foreground text-sm mt-2">
                    <div className="flex items-center gap-1">
                      <Building className="w-4 h-4" />
                      <span className="font-medium">{exp.company}</span>
                    </div>
                    <div className="flex items-center gap-1">
                      <Calendar className="w-4 h-4" />
                      <span>{exp.period}</span>
                    </div>
                    <div className="flex items-center gap-1">
                      <MapPin className="w-4 h-4" />
                      <span>{exp.location}</span>
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
              <Card className="bg-card/50 backdrop-blur-sm border-border/50 mb-4">
                <CardContent className="p-4">
                  <h4 className="font-semibold">Master of Computer Applications (MCA)</h4>
                  <p className="text-sm text-muted-foreground">Sree Narayana Institute of Technology, Kollam (University of Kerala)</p>
                  <p className="text-xs text-muted-foreground">2022 - 2024</p>
                </CardContent>
              </Card>
              <Card className="bg-card/50 backdrop-blur-sm border-border/50">
                <CardContent className="p-4">
                  <h4 className="font-semibold">B.Sc. Computer Science</h4>
                  <p className="text-sm text-muted-foreground">IHRD College of Applied Science, Kundara (University of Kerala)</p>
                  <p className="text-xs text-muted-foreground">2019 - 2022</p>
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
