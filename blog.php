<?php
// Placeholder data for blog posts
$posts = [
    1 => [
        'title' => 'My Journey into PHP Development',
        'date' => 'October 26, 2023',
        'excerpt' => 'An introduction to my journey as a PHP developer, the challenges I faced, and the things I\'ve learned along the way.',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ...'
    ],
    2 => [
        'title' => 'Why I Love Laravel',
        'date' => 'November 15, 2023',
        'excerpt' => 'A deep dive into the Laravel framework and why it has become my go-to choice for building robust and scalable web applications.',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ...'
    ],
    3 => [
        'title' => 'The Power of React and Spring Boot',
        'date' => 'December 5, 2023',
        'excerpt' => 'Exploring the powerful combination of React for the frontend and Spring Boot for the backend in modern web development.',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ...'
    ],
    4 => [
        'title' => 'A Guide to Responsive Design',
        'date' => 'January 12, 2024',
        'excerpt' => 'In this post, I share my top tips for creating beautiful and functional responsive layouts that work on all devices.',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ...'
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Neraj Lal S</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body class="bg-background text-foreground">

    <?php include 'partials/_navigation.php'; ?>

    <main>
        <section id="blog-page" class="py-20 px-4 sm:px-6 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16 animate-fade-in">
                    <h2 class="text-4xl sm:text-5xl font-bold mb-6 bg-gradient-primary bg-clip-text text-transparent">
                        Blog
                    </h2>
                    <p class="text-lg text-muted-foreground max-w-3xl mx-auto leading-relaxed">
                        My thoughts and experiences in the world of web development.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php foreach ($posts as $id => $post): ?>
                        <a href="post.php?id=<?php echo $id; ?>" class="block rounded-lg border bg-card text-card-foreground shadow-sm bg-card/50 backdrop-blur-sm border-border/50 hover:border-primary/30 hover:shadow-glow transition-all duration-300 overflow-hidden group">
                            <div class="p-6">
                                <h3 class="text-xl font-semibold mb-2 group-hover:text-primary transition-colors"><?php echo htmlspecialchars($post['title']); ?></h3>
                                <p class="text-muted-foreground text-sm mb-4"><?php echo htmlspecialchars($post['date']); ?></p>
                                <p class="text-muted-foreground"><?php echo htmlspecialchars($post['excerpt']); ?></p>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </main>

    <?php include 'partials/_footer.php'; ?>

    <script src="public/js/app.js"></script>
</body>
</html>
